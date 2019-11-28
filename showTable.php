<?php 
/* Template Name:showTable */

global $product;

?>


<?php

$id = $product->get_id();
preg_match_all('~>\K[^<>]*(?=<)~', $product->get_categories(), $pCats);

if($pCats[0][0] == "Goed Pakket"){
    $panelMin = 18;
    $solarMonoSKU = array(
        "NLZ-Gsf-6",
        "NLZ-Gsf-7",
        "NLZ-Gsf-8",
        "NLZ-Gsf-9",
        "NLZ-Gsf-10",
        "NLZ-Gsf-11",
        "NLZ-Gsf-12",
        "NLZ-Gsf-13",
        "NLZ-Gsf-14",
        "NLZ-Gsf-15",
        "NLZ-Gsf-16",
        "NLZ-Gsf-17",
        "NLZ-Gsf-18",
        "NLZ-Gsf-19",
        "NLZ-Gsf-20",
        "NLZ-Gsf-21"
    );
    $solarTriSKU = array(
        "NLZ-Gdf-18",
        "NLZ-Gdf-19",
        "NLZ-Gdf-20",
        "NLZ-Gdf-21",
        "NLZ-Gdf-22",
        "NLZ-Gdf-23",
        "NLZ-Gdf-24",
        "NLZ-Gdf-25",
    );

} else if($pCats[0][0] == "Beter Pakket"){
    $panelMin = 19;
    $solarMonoSKU = array(
        "NLZ-Bsf-6",
        "NLZ-Bsf-7",
        "NLZ-Bsf-8",
        "NLZ-Bsf-9",
        "NLZ-Bsf-10",
        "NLZ-Bsf-11",
        "NLZ-Bsf-12",
        "NLZ-Bsf-13",
        "NLZ-Bsf-14",
        "NLZ-Bsf-15",
        "NLZ-Bsf-16",
        "NLZ-Bsf-17",
        "NLZ-Bsf-18",
        "NLZ-Bsf-19",
        "NLZ-Bsf-20",
        "NLZ-Bsf-21",
        "NLZ-Bsf-22",
        "NLZ-Bsf-23",
        "NLZ-Bsf-24",
        "NLZ-Bsf-25"
    );
    $solarTriSKU = array(
        "NLZ-Bsf-19",
        "NLZ-Bsf-20",
        "NLZ-Bsf-21",
        "NLZ-Bsf-22",
        "NLZ-Bsf-23",
        "NLZ-Bsf-24",
        "NLZ-Bsf-25",
    );


} else{ if($pCats[0][0] == "Beste Pakket")
    $panelMin = 12;
    $solarMonoSKU = array(
        "NLZ-BTsf-6",
        "NLZ-BTsf-7",
        "NLZ-BTsf-8",
        "NLZ-BTsf-9",
        "NLZ-BTsf-10",
        "NLZ-BTsf-11",
        "NLZ-BTsf-12",
        "NLZ-BTsf-13",
        "NLZ-BTsf-14",
        "NLZ-BTsf-15",
        "NLZ-BTsf-16",
        "NLZ-BTsf-17",
        "NLZ-BTsf-18",
        "NLZ-BTsf-19",
        "NLZ-BTsf-20",
        "NLZ-BTsf-21",
        "NLZ-BTsf-22",
        "NLZ-BTsf-23",
        "NLZ-BTsf-24",
        "NLZ-BTsf-25"
    );
    $solarTriSKU = array(
        "NLZ-BTsf-12",
        "NLZ-BTsf-13",
        "NLZ-BTsf-14",
        "NLZ-BTsf-15",
        "NLZ-BTsf-16",
        "NLZ-BTsf-17",
        "NLZ-BTsf-18",
        "NLZ-BTsf-19",
        "NLZ-BTsf-20",
        "NLZ-BTsf-21",
        "NLZ-BTsf-22",
        "NLZ-BTsf-23",
        "NLZ-BTsf-24",
        "NLZ-BTsf-25"
    );

}

$i=0;
foreach ($solarMonoSKU as $sku ) { 
    $solarMonoIds[] = wc_get_product_id_by_sku($sku);
    $prod = wc_get_product( $solarMonoIds[$i] );
	$components = $prod->get_components();
	$j = 0;
 	foreach ($components as $component ) { 
		$data = $component->get_data();
		$prod = wc_get_product( $data['default_id'] );
		$att = $prod->get_attribute('documentatie');
	//$docs = explode (",", $att);
	$docs = explode (".pdf", $att);
	?>
	<div id=<?php echo "docMonoModal".$i.$j; ?> uk-modal>
		<div class="uk-modal-dialog uk-modal-body">
			<h2 class="uk-modal-title"><strong>Documentatie:</strong></h2>
				<ul class="docs">
				<?php foreach ($docs as $doc) { ?>
					<?php $pdfDoc = $doc.".pdf" ?>
					<li class="doc">
						<a href=<?php echo $pdfDoc; ?> class="docName">
							<?php 
							$url = basename($doc);
							echo  str_replace('%20', ' ', $url);
							?>
						</a>	
					</li>
				<?php } ?>
				</ul>
			<button class="button primary is-outline uk-modal-close" type="button">Close</button>
		</div>
	</div>
	<?php
		$j += 1;
	} 
	$i += 1;
}

$i=0;
foreach ($solarTriSKU as $sku ) { 
    $solarTriIds[] = wc_get_product_id_by_sku($sku);
    $prod = wc_get_product( $solarTriIds[$i] );
	$components = $prod->get_components();
	$j = 0;
 	foreach ($components as $component ) { 
		$data = $component->get_data();
		$prod = wc_get_product( $data['default_id'] );
		$att = $prod->get_attribute('documentatie');
	//$docs = explode (",", $att);
	$docs = explode (".pdf", $att);
	?>
	<div id=<?php echo "docTriModal".$i.$j; ?> uk-modal>
		<div class="uk-modal-dialog uk-modal-body">
			<h2 class="uk-modal-title"><strong>Documentatie:</strong></h2>
				<ul class="docs">
				<?php foreach ($docs as $doc) { ?>
					<?php $pdfDoc = $doc.".pdf" ?>
					<li class="doc">
						<a href=<?php echo $pdfDoc; ?> class="docName">
							<?php 
							$url = basename($doc);
							echo  str_replace('%20', ' ', $url);
							?>
						</a>	
					</li>
				<?php } ?>
				</ul>
			<button class="button primary is-outline uk-modal-close" type="button">Close</button>
		</div>
	</div>
		<?php
		$j += 1;
	} 
	$i += 1;
}
?>

<div class="tableBox">
	<table>
	<tbody id="list" class="docs">
		<tr class = "doc">
			<th style="width:5%;" class="docTitle">Aantal</th>	
			<th style="width:10%;" class="docTitle">Type</th>	
			<th style="width:40%;" class="docTitle">Naam</th>	
			<th style="width:10%;" class="docTitle">Merk</th>	
			<th style="width:12%;" class="docTitle">Product garantie</th>	
			<th style="width:13%;" class="docTitle">Opbrengst garantie</th>	
			<th style="width:5%;" class="docTitle">Docs</th>	
		</tr>
	</tbody>
	</table>
</div>


<style>	 

.tableBox{
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: flex-start;
}

.docTitle{
	font-weight: bold;
	font-size: 16px;
	text-align: center;
}

.docName{
	word-wrap: break-word;
	text-align: center;
}

.doc{
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center;
	text-align: center;
	margin-left: 0 !important;
	margin-bottom: 4px;
	margin-right: 4px;
	margin-left: 4px;
	margin-top: 4px;
	padding: 0;	
}

.docs{
	width: 100%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	overflow: hidden;
	list-style-type: none;
	-webkit-transition: max-height 0.2s ease-in-out;
	-moz-transition: max-height 0.2s ease-in-out;
	-ms-transition: max-height 0.2s ease-in-out;
	-o-transition: max-height 0.2s ease-in-out;
	transition: max-height 0.2s ease-in-out;
}

@media screen and (max-width: 800px) {

.docs{
	flex-direction: row;
}

th.docTitle{
	width: 100% !important
}

.tableBox{
	overflow-x: scroll;
}

.doc:first-child{
	width: 20%;
	font-size: 6px;
} 

.doc{
	flex-direction: column;
	width: 300px;
}

.docName{
	width: 100% !important;
}
}

</style>

<script>
	var list = document.getElementById('list');
	var pQty = localStorage.getItem('panelQty');
	var energy = localStorage.getItem('energy');
	var packagesM = [];
	var packagesT = [];
	var panelMin = <?php echo $panelMin;?>;
	
	<?php
	foreach ($solarMonoIds as $id ) { 
		$prod = wc_get_product( $id );
		$components = $prod->get_components();
		?>
		var package = [];
		<?php
		foreach ($components as $component_id => $component ) {
			$data = $component->get_data();	
			$product = wc_get_product( $data['default_id'] );
			
			?>
			var catM = "<?php echo strip_tags($product->get_categories());?>";
			var titleM = "<?php echo $component->get_title();?>";
			var brandM = "<?php echo $product->get_attribute('Merk');?>";			
			var pWarrantM = <?php
			 $warr = $product->get_attribute('Product garantie');
			 if ($warr){
				 echo  "\"".$warr."\""; 
			 } else {
				 echo "\""."No"."\"";
			 }
			 ?>;
			var oWarrantM = <?php 
			$warr = $product->get_attribute('Opbrengst garantie');
			if ($warr){
				echo  "\"".$warr."\""; 
			} else {
				echo "\""."No"."\"";
			}
			?>;
			var component = {
				cat: catM,
				title: titleM,
				pWarrant: pWarrantM,
				oWarrant: oWarrantM,
				brand: brandM
			};
			package.push(component);
			<?php
		}
		?>
		packagesM.push(package);
		<?php
	}	 
	?>
	<?php
	foreach ($solarTriIds as $id ) { 
		$prod = wc_get_product( $id );
		$components = $prod->get_components();
		?>
		var package = []
		<?php
		foreach ($components as $component_id => $component ) {
			$data = $component->get_data();	
			$product = wc_get_product( $data['default_id'] );
			?>
			var catT = "<?php echo strip_tags($product->get_categories());?>";
			var titleT = "<?php echo $component->get_title();?>";
			var brandT = "<?php echo $product->get_attribute('Merk');?>";			
			var pWarrantT = <?php
			 $warr = $product->get_attribute('Product garantie');
			 if ($warr){
				 echo  "\"".$warr."\""; 
			 } else {
				 echo "\""."No"."\"";
			 }
			 ?>;
			var oWarrantT = <?php 
			$warr = $product->get_attribute('Opbrengst garantie');
			if ($warr){
				echo  "\"".$warr."\""; 
			} else {
				echo "\""."No"."\"";
			}
			?>;
			var component = {
				cat: catT,
				title: titleT,
				pWarrant: pWarrantT,
				oWarrant: oWarrantT,
				brand: brandT
			};
			package.push(component);
			<?php
		}
		?>
		packagesT.push(package);
		<?php
	}
	?>	
	document.addEventListener("qty", function() {
		pQty = localStorage.getItem('panelQty');
		energy = localStorage.getItem('table');
		if(energy == "Mono"){
		while (list.childNodes.length > 1) {
			list.removeChild(list.lastChild);
		}
		var i = 0;
		packagesM[pQty-6].forEach(function(component){
			var node = document.createElement('TR');
			var qty = document.createElement('TD');
			var cat = document.createElement('TD');
			var title = document.createElement('TD');
			var brand = document.createElement('TD');
			var pWarrant = document.createElement('TD');
			var oWarrant = document.createElement('TD');
			var documentation = document.createElement('TD');
			var docLink = document.createElement('a');
			var icon = document.createElement('i');
			icon.className = "fas fa-folder";
			docLink.appendChild(icon);
			docLink.className = "uk-toggle";
			var index = pQty - 6
			docLink.href = "#docMonoModal" + index + i;
			docLink.setAttribute("uk-toggle", "");
			documentation.appendChild(docLink);
			documentation.className = "docName";
			documentation.setAttribute("style","width:5%");
			i = i+1;
//			if(component.cat == "Panelen"){
			if(component.cat.indexOf("Panelen") !== -1){
				qty.innerText = pQty;
			} else{
				qty.innerText = 1;
			}

			qty.className = "docName";
			qty.setAttribute("style","width:5%");

			cat.innerText = component.cat;
			cat.className = "docName";
			cat.setAttribute("style","width:10%");
			brand.innerText = component.brand;
			brand.className = "docName";
			brand.setAttribute("style","width:10%");
			title.innerText = component.title;
			title.className = "docName";
			title.setAttribute("style","width:40%");
			pWarrant.innerText =component.pWarrant;
			pWarrant.className = "docName";
			pWarrant.setAttribute("style","width:12%");
			oWarrant.innerText = component.oWarrant;
			oWarrant.className = "docName";
			oWarrant.setAttribute("style","width:13%");
			node.appendChild(qty);
			node.appendChild(cat);
			node.appendChild(title);
			node.appendChild(brand);
			node.appendChild(pWarrant);
			node.appendChild(oWarrant);
			node.appendChild(documentation);
			node.className = "doc";
			list.appendChild(node);
		});
	} else if(energy == "Tri"){
		while (list.childNodes.length > 1) {
			list.removeChild(list.lastChild);
		}
		var i = 0;
		packagesT[pQty-panelMin].forEach(function(component){
			var node = document.createElement('TR');
			var qty = document.createElement('TD');
			var cat = document.createElement('TD');
			var title = document.createElement('TD');
			var brand = document.createElement('TD');
			var pWarrant = document.createElement('TD');
			var oWarrant = document.createElement('TD');
			var documentation = document.createElement('TD');
			var docLink = document.createElement('a');
			var icon = document.createElement('i');
			icon.className = "fas fa-folder";
			docLink.appendChild(icon);
			var index = pQty - panelMin;
			docLink.href = "#docTriModal" + index + i;
			docLink.setAttribute("uk-toggle", "");
			documentation.appendChild(docLink);
			documentation.className = "docName";
			documentation.setAttribute("style","width:5%");
			i = i+1;
			if(component.cat == "Panelen"){
				qty.innerText = pQty;
			} else{
				qty.innerText = 1;
			}

			qty.className = "docName";
			qty.setAttribute("style","width:5%");


			cat.innerText = component.cat;
			cat.className = "docName";
			cat.setAttribute("style","width:10%");
			brand.innerText = component.brand;
			brand.className = "docName";
			brand.setAttribute("style","width:10%");
			title.innerText = component.title;
			title.className = "docName";
			title.setAttribute("style","width:40%");
			pWarrant.innerText =component.pWarrant;
			pWarrant.className = "docName";
			pWarrant.setAttribute("style","width:12%");
			oWarrant.innerText = component.oWarrant;
			oWarrant.className = "docName";
			oWarrant.setAttribute("style","width:13%");
			node.appendChild(qty);
			node.appendChild(cat);
			node.appendChild(title);
			node.appendChild(brand);
			node.appendChild(pWarrant);
			node.appendChild(oWarrant);
			node.appendChild(documentation);
			node.className = "doc";
			list.appendChild(node);
		});
	} /* else {
		while (list.childNodes.length > 1) {
			list.removeChild(list.lastChild);
		}
		var i = 0;
		packagesM[pQty-6].forEach(function(component){
			var node = document.createElement('TR');
			var qty = document.createElement('TD');
			var cat = document.createElement('TD');
			var brand = document.createElement('TD');
			var title = document.createElement('TD');
			var pWarrant = document.createElement('TD');
			var oWarrant = document.createElement('TD');
			var documentation = document.createElement('TD');
			var docLink = document.createElement('a');
			var icon = document.createElement('i');
			icon.className = "fas fa-folder";
			docLink.appendChild(icon);
			docLink.className = "uk-toggle";
			var index = pQty - 6
			docLink.href = "#docMonoModal" + index + i;
			docLink.setAttribute("uk-toggle", "");
			documentation.appendChild(docLink);
			documentation.className = "docName";
			documentation.setAttribute("style","width:5%");
			i = i+1;
			if(component.cat == "Panelen"){
				qty.innerText = pQty;
			} else{
				qty.innerText = 1;
			}

			qty.className = "docName";
			qty.setAttribute("style","width:5%");


			cat.innerText = component.cat;
			cat.className = "docName";
			cat.setAttribute("style","width:10%");
			brand.innerText = component.brand;
			brand.className = "docName";
			brand.setAttribute("style","width:10%");
			title.innerText = component.title;
			title.className = "docName";
			title.setAttribute("style","width:40%");
			pWarrant.innerText =component.pWarrant;
			pWarrant.className = "docName";
			pWarrant.setAttribute("style","width:12%");
			oWarrant.innerText = component.oWarrant;
			oWarrant.className = "docName";
			oWarrant.setAttribute("style","width:13%");
			node.appendChild(qty);
			node.appendChild(cat);
			node.appendChild(title);
			node.appendChild(brand);
			node.appendChild(pWarrant);
			node.appendChild(oWarrant);
			node.appendChild(documentation);
			node.className = "doc";
			list.appendChild(node);
		});
	}       */
    });
</script>