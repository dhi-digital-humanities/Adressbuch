<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Street $street
 */
	use Cake\Collection\Collection;
	
	$varieties = [];
	foreach($sameStreets as $sameStr){
		array_push($varieties, h($sameStr->name_old_verbatim));
	}
	
	$arrsOld = [];
	$arrsNew = [];
	foreach($street->arrondissements as $arr){
		if($arr->type === 'pre1860'){
			array_push($arrsOld, $this->Html->link($arr->no, ['controller' => 'Arrondissements', 'action' => 'view', $arr->id]));
		} else {
			array_push($arrsNew, $this->Html->link($arr->no, ['controller' => 'Arrondissements', 'action' => 'view', $arr->id]));
		}
	}

	
?>
<div class="row">
    <?= $this->element('sideNav', ['mapBox' => false, 'export' => 'all'])?>
    <div class="column-responsive column-80">
        <div class="streets view content">
            <h3><?= h($street->name_old_clean) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name alt') ?></th>
                    <td><?= h($street->name_old_clean) ?></td>
                </tr>
                <tr>
                    <th><?= __('Schreibweisen im Buch') ?></th>
                    <td><?= implode(', ', $varieties) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name heute') ?></th>
                    <td><?= h($street->name_new) ?></td>
                </tr>
				<tr>
                    <th><?= __('Arrondissements') ?></th>
                    <td>
						<table>
							<tr>
								<th><?= __('Vor 1860')?></th>
								<th><?= __('Nach 1860')?></th>
							</tr>
							<tr>
								<th><?= implode(', ', $arrsOld) ?></th>
								<th><?= implode(', ', $arrsNew) ?></th>
							</tr>
						</table>
					</td>
                </tr>
            </table>
			<?php if(!$persons->isEmpty()): ?>
            <div class="related">
                <details>
					<?= '<summary title="'.__('Klicken für Details').'"><h4>'.__('Personen in dieser Straße').'</h4></summary>' ?>
					<?= $this->element('personsMultiTable', ['persons' => $persons])?>
				</details>
            </div>
			<?php endif; ?>
			<?php if(!$companies->isEmpty()): ?>
            <div class="related">
                <details>
					<?= '<summary title="'.__('Klicken für Details').'"><h4>'.__('Unternehmen in dieser Straße').'</h4></summary>' ?>
					<?= $this->element('companiesMultiTable', ['companies' => $companies])?>
				</details>
           <div>
<?php endif; ?>

		<?php 		
				   $street_name=$street->name_old_clean;
			       $street=htmlentities($street);
			      

 			function citationzotero($street_name, $street){

		    	$code_span= '<span class="Z3988" title="url_ver=Z39.88-2004&amp;ctx_ver=Z39.88-2004&amp;rfr_id=info%3Asid%2Fzotero.org%3A2&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=';
		        $code_span.=$street_name;
		        $code_span.='&amp;rft.description=';
		        $code_span.=$street;
		        $code_span.='&amp;rft.btitle=Adressbuch%20der%20Deutschen%20in%20Paris%20f%C3%BCr%20das%20Jahr%201854&amp;rft.place=Paris&amp;rft.edition=Elektronische%20Edition&amp;rft.aufirst=F.&amp;rft.aulast=Kronauge&amp;rft.au=F.%20Kronauge&amp;rft.date=1854&amp;rft.language=Allemand">'; 
		        

        	return ($code_span);
                                      } ?>

</div>

 <br><div class="csl-bib-body" style="line-height: 1.35; margin-left: 2em; text-indent:-2em;">
  <div class="csl-entry">Kronauge, F. «&nbsp;<?php echo $street_name ?>&nbsp;». In <i>Adressbuch der Deutschen in Paris für das Jahr 1854</i>, Elektronische Edition, 1854. <a target="_blank" href='<?php  $this->request->getUri() ?>'><?php echo $this->request->getUri() ?></a>.</div>

<?php print citationzotero($street_name, $street);?>
          

</div>

</div>
