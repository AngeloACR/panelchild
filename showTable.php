<?php 
/* Template Name:showTable */
/***********************REMOVE COMPONENTS **************************/

global $product;
$components = $product->get_components();

?>

<div class="tableBox">
	<ul id="list" class="docs">
		<li class="doc">
			<p style="width:10%;" class="docTitle">Quantity</p>	
			<p style="width:10%;" class="docTitle">Type</p>	
			<p style="width:60%;" class="docTitle">Name</p>	
			<p style="width:10%;" class="docTitle">Warranty</p>	
		</li>
		<?php 
		foreach ($components as $component_id => $component ) { 
			$data = $component->get_data();	
			$product = wc_get_product( $data['default_id'] );
		?>
			<li class="doc">
				<p style="width:10%;" class="docName">
				</p>	
				<p style="width:10%;" class="docName">
					<?php echo $product->get_categories(); ?>			
				</p>	
				<p style="width:60%;" class="docName">
					<?php echo $component->get_title(); ?>			
				</p>	
				<p style="width:10%;" class="docName">
					<?php 
						$warr = $product->get_attribute('warranty');
						if ($warr){
							echo  $warr; 
						} else {
							echo 'No';
						}
					?>			
				</p>	
			</li>
		<?php } ?>
	</ul>	
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
	font-size: 20px;
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
</style>

<script>
	var docs = document.getElementsByClassName("doc");
	docs[1].firstChild.innerText = localStorage.getItem('panelQty');
	document.addEventListener("qty", function() {
        docs[1].firstChild.innerText = localStorage.getItem('panelQty');
    });

</script>