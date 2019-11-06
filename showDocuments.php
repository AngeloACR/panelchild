<?php 
/* Template Name:showDocuments */

/***********************EXPLODE WITH .PDF **************************/


global $product;
$att = $product->get_attribute('documentation');
//$docs = explode (",", $att);
$docs = explode (".pdf", $att);

?>

<!-- <ul id="list" class="docs">
<?php /*foreach ($docs as $doc) { ?>
	<li class="doc">
		<a href=<?php echo $doc; ?> class="docName">
			<?php echo $doc; ?>			
		</a>	
	</li>
<?php } */?>
</ul> -->

<ul id="list" class="docs">
<?php foreach ($docs as $doc) { ?>
	<?php $pdfDoc = $doc.".pdf" ?>
	<li class="doc">
		<a href=<?php echo $pdfDoc; ?> class="docName">
			<?php echo $doc; ?>			
		</a>	
	</li>
<?php } ?>
</ul>

<style>	 

.doc{
	margin-left: 0 !important;
	margin-bottom: 4px;
	margin-top: 4px;
	padding: 0;	
}

.docs{
	overflow: hidden;
	list-style-type: none;
	-webkit-transition: max-height 0.2s ease-in-out;
	-moz-transition: max-height 0.2s ease-in-out;
	-ms-transition: max-height 0.2s ease-in-out;
	-o-transition: max-height 0.2s ease-in-out;
	transition: max-height 0.2s ease-in-out;
}
</style>