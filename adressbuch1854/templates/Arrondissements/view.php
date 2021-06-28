<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Arrondissement $arrondissement
 */

	use Cake\Collection\Collection;

	$noStr;
	$type = $arrondissement->type;
	$no = $arrondissement->no;
	if($no == 1){
		$noStr = $no.'ier Arrondissement ('.$type.')';
	} else {
		$noStr = $no.'ième Arrondissement ('.$type.')';
	}
?>
<div class="row">
    <?= $this->element('sideNav', ['mapBox' => false, 'export' => 'all'])?>
    <div class="column-responsive column-80">
        <div class="arrondissements view content">
            <h3><?= h($noStr) ?></h3>
            <table>
				<tr>
                    <th><?= __('Nummer') ?></th>
                    <td><?= $this->Number->format($arrondissement->no) ?></td>
                </tr>
				<tr>
                    <th><?= __('Typ') ?></th>
                    <td><?= $type == 'pre1860' ? 'Aus Einteilung vor 1860' : 'Aus Einteilung nach 1860' ?></td>
                </tr>
				<?php if($type == 'post1860') : ?>
                <tr>
                    <th><?= __('Postleitzahl') ?></th>
                    <td><?= $arrondissement->postcode ?></td>
                </tr>
                <tr>
                    <th><?= __('INSEE Citycode') ?></th>
                    <td><?= $arrondissement->insee_citycode ?></td>
                </tr>
				<?php endif; ?>
            </table>
			<?php if(!$persons->isEmpty()): ?>
            <div class="related">
                <details>
					<?= '<summary title="'.__('Klicken für Details').'"><h4>'.__('Personen in diesem Arrondissement').'</h4></summary>' ?>
					<?= $this->element('personsMultiTable', ['persons' => $persons])?>
				</details>
            </div>
			<?php endif; ?>
			<?php if(!$companies->isEmpty()): ?>
            <div class="related">
                <details>
					<?= '<summary title="'.__('Klicken für Details').'"><h4>'.__('Unternehmen in diesem Arrondissement').'</h4></summary>' ?>
					<?= $this->element('companiesMultiTable', ['companies' => $companies])?>
				</details>
			</div><br>
				<div>
            <?php endif; ?>

		<?php 		
				  
			       $arrondissement=htmlentities($arrondissement);
			      

 			function citationzotero($noStr, $arrondissement){

		    	$code_span= '<span class="Z3988" title="url_ver=Z39.88-2004&amp;ctx_ver=Z39.88-2004&amp;rfr_id=info%3Asid%2Fzotero.org%3A2&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=';
		        $code_span.=$noStr;
		        $code_span.='&amp;rft.description=';
		        $code_span.=$arrondissement;
		        $code_span.='&amp;rft.btitle=Adressbuch%20der%20Deutschen%20in%20Paris%20f%C3%BCr%20das%20Jahr%201854&amp;rft.place=Paris&amp;rft.edition=Elektronische%20Edition&amp;rft.aufirst=F.&amp;rft.aulast=Kronauge&amp;rft.au=F.%20Kronauge&amp;rft.date=1854&amp;rft.language=Allemand">'; 
		        

        	return ($code_span);
                                      } ?>

</div>

 <br><div class="csl-bib-body" style="line-height: 1.35; margin-left: 2em; text-indent:-2em;">
  <div class="csl-entry">Kronauge, F. «&nbsp;<?php echo $noStr ?>&nbsp;». In <i>Adressbuch der Deutschen in Paris für das Jahr 1854</i>, Elektronische Edition, 1854. <a target="_blank" href='<?php  $this->request->getUri() ?>'><?php echo $this->request->getUri() ?></a>.</div>

<?php print citationzotero($noStr, $arrondissement);?>
          

</div>

</div>
