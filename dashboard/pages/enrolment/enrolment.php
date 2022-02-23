<div class="content-tab">

	<div class="content-head">
		<div class="content-path-navigation">You're in : <a href="../enrolment" class="link-navigation">Enrollment ></a></div>
		<a href="../form-enrolment">
			<button class="btn-add" title="Add enrolment" type="button"><i class="DGfi-plus"></i></button>
		</a>
	</div>

	<div class="searching-line">
		<label for="searching-input"><i class="DGfi-search"></i> </label><input class="searching-input" id="searching-input" placeholder="Enter a searching word" title="Entrez un mot pour trier" type="search" name="searching">
	</div>

	<div class="waiting-zone">
		
	</div>

	<div class="content-result-line">
		<?php 

		$enrolment=new Enrolment($current_enrolment); 
		$enrolments=$enrolment->getEnrolments();

		if(!count($enrolments)>0){
			?>
			<div class="line-not-found">Aucun enrolement trouvé !</div>
			<?php
			
		}else{

			?>

			<table border="0" cellspacing="0" class="responsive-table content-enrolment content-line-infos">
				<thead>
					<th>Beneficiary type</th>
					<th>First name</th>
					<th>Health district residence</th>
					<th>Health area</th>
					<th>Case worker</th>
					<th>Date</th>
				</thead>
				<tbody>
					<?php  foreach($enrolments as $enrolment){ ?>
						<tr class="row-item enrolment" data-id="<?php echo $enrolment->getId(); ?>">
							<td data-label="Beneficiary type"><?php echo $enrolment->getBeneficiary_type(); ?></td>
							<td data-label="First name"><?php echo $enrolment->getFirst_name(); ?></td>
							<td data-label="Health district residence"><?php echo $enrolment->getHealth_district_residence(); ?></td>
							<td data-label="Health area"><?php echo if_empty($enrolment->getHealth_area()); ?></td>
							<td data-label="Case worker"><?php echo $enrolment->getCase_worker(); ?></td>
							<td data-label="Date"><?php echo get_date($enrolment->getDate_enrolment()); ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>

		<?php } ?>

	</div>