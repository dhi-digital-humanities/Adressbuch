<?php


//This function describes tag zotero for street view. This function generates HTML code for tag zotero of street view with $street_name, $street_new.

 			function zoterostreets($street_name, $street_new){

		    	  	$code_span= '<span class="Z3988" title="url_ver=Z39.88-2004&amp;ctx_ver=Z39.88-2004&amp;rfr_id=info%3Asid%2Fzotero.org%3A2&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=';
			        $code_span.=$street_name;
			        $code_span.='&amp;rft.description=';
			        $code_span.=$street_new;
			     	  $code_span.='&amp;rft.btitle=Adressbuch%20der%20Deutschen%20in%20Paris%20f%C3%BCr%20das%20Jahr%201854&amp;rft.place=Paris&amp;rft.edition=Elektronische%20Edition&amp;rft.aufirst=F.&amp;rft.aulast=Kronauge&amp;rft.au=F.%20Kronauge&amp;rft.date=1854&amp;rft.language=Allemand">'; 
		        

        	return ($code_span);
                                      }

//This function describes tag zotero for person view. This function generates HTML code for tag zotero of person view with $name, $precision, $precision2, $military_status, $social_status, $occupation_status, $gender, $ldh, $begP.

            function zoteroperson($name, $precision, $precision2, $military_status, $social_status, $occupation_status, $gender, $ldh, $begP){

		    	$code_span= '<span class="Z3988" title="url_ver=Z39.88-2004&amp;ctx_ver=Z39.88-2004&amp;rfr_id=info%3Asid%2Fzotero.org%3A2&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=';
		        $code_span.=$name;
		        $code_span.='&amp;rft.description=son métier: ';
		        $code_span.=$precision;
		        $code_span.=',';
		        $code_span.=$precision2;
		        $code_span.=', son statut militaire: ';
		        $code_span.=$military_status;
		        $code_span.=', son statut social: ';
		        $code_span.=$social_status;
		        $code_span.=', son activité: ';
		        $code_span.=$occupation_status;
		        $code_span.=', son genre: ';
		        $code_span.=$gender;
		        $code_span.=', son rang: ';
		        $code_span.=$ldh;
		        $code_span.='&amp;rft.btitle=Adressbuch%20der%20Deutschen%20in%20Paris%20f%C3%BCr%20das%20Jahr%201854&amp;rft.place=Paris&amp;rft.edition=Elektronische%20Edition&amp;rft.aufirst=F.&amp;rft.aulast=Kronauge&amp;rft.au=F.%20Kronauge&amp;rft.date=1854&amp;rft.pages=';
		        $code_span.=$begP;
		        $code_span.= '&amp;rft.language=Allemand">'; 
		        

        	return ($code_span);
                                      }

//This function describes tag zotero for arrondissement view. This function generates HTML code for tag zotero of arrondissement view with $noStr, $aar1.

            function zoteroarr($noStr, $arr1){

		    	$code_span= '<span class="Z3988" title="url_ver=Z39.88-2004&amp;ctx_ver=Z39.88-2004&amp;rfr_id=info%3Asid%2Fzotero.org%3A2&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=';
		        $code_span.=$noStr;
		        $code_span.='&amp;rft.description=';
		        $code_span.=$arr1;
		        $code_span.='&amp;rft.btitle=Adressbuch%20der%20Deutschen%20in%20Paris%20f%C3%BCr%20das%20Jahr%201854&amp;rft.place=Paris&amp;rft.edition=Elektronische%20Edition&amp;rft.aufirst=F.&amp;rft.aulast=Kronauge&amp;rft.au=F.%20Kronauge&amp;rft.date=1854&amp;rft.language=Allemand">'; 
		        

        	return ($code_span);
        }

//This function describes tag zotero for company view. This function generates HTML code for tag zotero of company view with $nachname, $prof_category, $begP:

        function zoterocomp($nachname, $prof_category, $specification, $profession, $begP){

    	$code_span= '<span class="Z3988" title="url_ver=Z39.88-2004&amp;ctx_ver=Z39.88-2004&amp;rfr_id=info%3Asid%2Fzotero.org%3A2&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=';
    	$code_span.=$nachname;
    	$code_span.='&amp;rft.description= Sa catégorie professionnelle est :';
    	$code_span.=$prof_category;
    	$code_span.=', remarques : ';
    	$code_span.=$specification;
    	$code_span.=', sa profession est :';
    	$code_span.=$profession;
    	$code_span.='&amp;rft.btitle=Adressbuch%20der%20Deutschen%20in%20Paris%20f%C3%BCr%20das%20Jahr%201854&amp;rft.place=Paris&amp;rft.edition=Elektronische%20Edition&amp;rft.aufirst=F.&amp;rft.aulast=Kronauge&amp;rft.au=F.%20Kronauge&amp;rft.date=1854&amp;rft.pages=';
      $code_span.=$begP;
      $code_span.= '&amp;rft.language=Allemand">';
        

        return ($code_span);
                                      }

//This function describes tag image for person view and company view. This function generates tag image to see Adressbuch's pages in HD with $path, $size, $id, $begP.

					function image($path, $size, $id, $begP)
						{
							$code_html_image = "<a target='_blank' href=/../img/HD/BHVP_703983_$begP.jpg>";
							$code_html_image.=" <img src='";
							$code_html_image.= $path;
							$code_html_image.= $size;
							$code_html_image.= $id;
							$code_html_image.= $begP;
							$code_html_image.= ".jpg'";
							$code_html_image.= " width = '100'";
							$code_html_image.= "title= 'IHA zur Nutzung der Seite $begP'";


						return ($code_html_image); 
						}