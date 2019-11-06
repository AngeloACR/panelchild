<?php 
/* Template Name:showDocuments */

global $product;
preg_match_all('~>\K[^<>]*(?=<)~', $product->get_categories(), $pCats);

if($pCats[0][0] == "Good Packages"){
	$wattsBase = 1650;
	$wattsGap = 275;
} elseif ($pCats[0][0] == "Better Packages") {
	$wattsBase = 1830;
	$wattsGap = 305;
} elseif ($pCats[0][0] == "Best Packages"){
	$wattsBase = 1980;
	$wattsGap = 330;
}


?>

<p style="font-size: 18px" id="watts"></p>


<script>
	var wattsInfo = document.getElementById('watts');
	var totalWatts;
	var val = 6;
    var watts = calcWatts(val);
    wattsInfo.textContent = "Watt Peak: " + watts;
	document.addEventListener("watts", function () {
		val = localStorage.getItem('panelQty');
        watts = calcWatts(val);
		wattsInfo.textContent = "Watt Peak: " + watts;
	});

function calcWatts(val){
    var wattsBase = <?php echo $wattsBase; ?>;
	var wattsGap = <?php echo $wattsGap; ?>;
    var gap = val - 6;
    totalWatts = wattsBase + wattsGap*gap;
    //localStorage.setItem('watts', totalWatts);
    return totalWatts
}

</script>