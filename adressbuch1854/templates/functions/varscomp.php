  <?php 
 
//$nachname, $prof_category, $specification and $profession are 4 variables to save company's name, name of category's profession, specification verbatim and profession verbatim on zotero with zoterocomp's function.

			       	$nachname=$company->name;
			       	$prof_category=isset($company->prof_category->name) ? ($company->prof_catgeory->name) : 'inconnu';
			       	$specification=isset($company->specification_verbatim) ? ($company->specification_verbatim) : 'aucune spécification';
			       	$profession=isset($company->profession_verbatim) ? ($company->profession_verbatim) : 'inconnu';
			       	


			       	

  