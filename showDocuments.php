<?php 
/* Template Name:showDocuments */

global $product;
$att = $product->get_attribute('documentatie');
$docs = explode (".pdf", $att);

?>

<ul id="docsList" class="myDocs">
<?php foreach ($docs as $doc) { ?>
	<?php $pdfDoc = $doc.".pdf" ?>
	<li class="myDoc">
		<a href=<?php echo $pdfDoc; ?> class="myDocName">
			<?php 
			$url = basename($doc);
			echo  str_replace('%20', ' ', $url);
			?>
		</a>	
	</li>
<?php } ?>
</ul>

<style>	 

.myDoc{
	margin-left: 0 !important;
	margin-bottom: 4px;
	margin-top: 4px;
	padding: 0;	
}

.myDocs{
	overflow: hidden;
	list-style-type: none;
	-webkit-transition: max-height 0.2s ease-in-out;
	-moz-transition: max-height 0.2s ease-in-out;
	-ms-transition: max-height 0.2s ease-in-out;
	-o-transition: max-height 0.2s ease-in-out;
	transition: max-height 0.2s ease-in-out;
}
</style>