
<?php


//$precision, $precision2, $military_status, $social_status, $occupation_status, $gender, $ldh are 7 variables to save profession's catgeory, profession's name, military's status, social's status, occupation's status, gender and rank of legion d'honneur of a person on zotero with zoteroperson's function. 
//$person is a variable to save all informations of one person on zotero in JSON format. 

					//$person=htmlentities($person);

					$precision=isset($person->specification_verbatim) ? ($person->specification_verbatim) : 'inconnu';
					$precision2=isset($person->profession_verbatim) ? ($person->profession_verbatim) : 'inconnu';
					$military_status=$person->military_status->status;
					$social_status=$person->social_status->status;
					$occupation_status=$person->occupation_status->status;
					$gender=$person->gender;
					if($gender === 'M'){

							$gender='Männlich';

						} elseif ($gender === 'F'){
							
							$gender='Weiblich';
						} else {
							
							$gender='Nicht bekannt';
						};
					$ldh=isset($person->ldh_rank['rank']) ? ($person->ldh_rank['rank']) : 'aucun rang';	

					


					

				