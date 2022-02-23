<?php


class Admin
{

    /*PROPRIETES*/
    private $_id;
    private $_email;
    private $_password;
    private $_role;
    private $_position;
    private $_name;
    private $_last_seen;
    private $_added_at;

    /*CONSTRUCTEUR*/
    public function __construct(array $data){

        foreach ($data as $key => $value) {
            $method='set'.ucfirst($key);

            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }


    /*SETTERS & GETTERS*/

    public function setId($id){
        $this->_id=intval($id);
    }

    public function getId(){
        return $this->_id;
    }


    public function setEmail($email){
        $this->_email=htmlentities(strval($email));
    }

    public function getEmail(){
        return $this->_email;
    }


    public function setPassword($password){
        $this->_password=strval($password);

    }

    public function getPassword(){
        return $this->_password;
    }


    public function setRole($role){
        $this->_role=htmlentities(strval($role));
    }

    public function getRole(){
        return $this->_role;
    }


    public function setPosition($position){
        $this->_position=htmlentities(strval($position));
    }

    public function getPosition(){
        return $this->_position;
    }


    public function setName($name){
        $this->_name=strval($name);
    }

    public function getName(){
        return $this->_name;
    }


    public function setLast_seen($last_seen){
        $this->_last_seen=$last_seen;
    }

    public function getLast_seen(){
        return $this->_last_seen;
    }


    public function setAdded_at($added_at){
        $this->_added_at=htmlentities(strval($added_at));
    }

    public function getAdded_at(){
        return $this->_added_at;
    }













    /*METHODES FONCTIONNELLES*/

    public function addAdmin(Admin $admin){
        include(_APP_PATH."bd/server-connect.php");
        $query=$db->prepare("INSERT INTO admins VALUES (?,?,?,?,?,?,?,?)");

        $id=0;
        $email=$admin->getEmail();
        $password=password_hash($admin->getPassword(), PASSWORD_DEFAULT);
        $role=$admin->getRole();
        $position=$admin->getPosition();
        $name=$admin->getName();
        $last_seen=$admin->getLast_seen();
        $added_at=$admin->getAdded_at();

        $query->bindParam(1,$id);
        $query->bindParam(2,$email);
        $query->bindParam(3,$password);
        $query->bindParam(4,$role);
        $query->bindParam(5,$position);
        $query->bindParam(6,$name);
        $query->bindParam(7,$last_seen);
        $query->bindParam(8,$added_at);


        if($query->execute()){
          return true;
      }else{
          return $admin->getPosition();
      }
  }







  public function removeAdmin($id_admin){
    include(_APP_PATH."bd/server-connect.php");

    $id_admin=intval($id_admin);

    $req=$db->prepare("DELETE FROM admins WHERE id=?");

    $req->bindParam(1,$id_admin);

    if($req->execute()){
        return true;
    }else{
        return false;
    }

}


public function getLastAdmin(){
    include(_APP_PATH."bd/server-connect.php");

    $query=$db->prepare("SELECT * FROM admins WHERE id=(SELECT MAX(id) FROM admins)");
    if($query->execute() && $query->rowCount()==1){
        $data=$query->fetch();
        return (new Admin($data));
    }else{
        return false;
    }
}




public function getAdmin($id){
    include(_APP_PATH."bd/server-connect.php");


    $id=intval($id);
    $query=$db->prepare("SELECT * FROM admins WHERE id=?");
    $query->bindParam(1,$id);
    if($query->execute() && $query->rowCount()==1){
        $data=$query->fetch();
        return (new Admin($data));
    }else{
        return false;
    }

}




public function getAdmins() {
    include(_APP_PATH."bd/server-connect.php");
    $query=$db->prepare("SELECT * FROM admins ORDER BY name ASC");

    $admins=[];

    if($query->execute()){
        while($data=$query->fetch()){
            $admins[]=new Admin($data);
        }
        return $admins;
    }else{
        return false;
    }
}







public function editAdmin(Admin $admin) {
    include(_APP_PATH."bd/server-connect.php");

    $query=$db->prepare("UPDATE admins
        SET email=?,
        role=?,
        position=?,
        name=?,
        last_seen=?
        WHERE id=?

        ");

    $id=$admin->getId();
    $email=$admin->getEmail();
    $role=$admin->getRole();
    $position=$admin->getPosition();
    $name=$admin->getName();
    $last_seen=$admin->getLast_seen();

    $query->bindParam(1,$email);
    $query->bindParam(2,$role);
    $query->bindParam(3,$position);
    $query->bindParam(4,$name);
    $query->bindParam(5,$last_seen);
    $query->bindParam(6,$id);

    if($query->execute()){

        return true;

    }else{
        return false;
    }
}



public function updateLastSeen($id) {
    include(_APP_PATH."bd/server-connect.php");

    $last_seen=date("Y-m-d H:i:s");

    $query=$db->prepare("UPDATE admins SET last_seen=? WHERE id=?");

    $query->bindParam(1,$last_seen);
    $query->bindParam(2,$id);

    if($query->execute()){

        return true;

    }else{
        return false;
    }
}





public function editPassword(Admin $admin) {
    include(_APP_PATH."bd/server-connect.php");

    $query=$db->prepare("UPDATE admins
        SET password=?
        WHERE id=?

        ");

    $id=$admin->getId();
    $password=password_hash($admin->getPassword(), PASSWORD_DEFAULT);

    $query->bindParam(1,$password);
    $query->bindParam(2,$id);

    if($query->execute()){

        return true;

    }else{
        return false;
    }
}





public function logIn(Admin $admin) {
    include(_APP_PATH."bd/server-connect.php");

    /* Recherche de l'administrateur */
    $query=$db->prepare("SELECT * FROM admins WHERE email=?");

    $email=$admin->getEmail();
    $password=$admin->getPassword();

    $query->bindParam(1,$email);

    if($query->execute()){
        /* Si son email a été trouvé */
        if($query->rowCount()==1){

            $data=$query->fetch();
            $admin_found=new Admin($data);

            if(password_verify($password, $admin_found->getPassword())){
                $_SESSION['type']="admin";
                $_SESSION['id']=$admin_found->getId();
                $_SESSION['email']=$admin_found->getEmail();
                $_SESSION['role']=$admin_found->getRole();
                $_SESSION['name']=$admin_found->getName();
                $_SESSION['added_at']=$admin_found->getAdded_at();

                return true;

            }else{
                return false;
            }

        }else{
            /* Si son compte n'a pas été trouvé */
            return false;
        }

    }else{
        return false;
    }
}






public function logOut() {
    $_SESSION=array();
    //header("location:../home/index.php");
}



}

?>
