<?php 
/* Template Name:qtyButt */

global $product;
$components = $product->get_components();
preg_match_all('~>\K[^<>]*(?=<)~', $product->get_categories(), $pCats);
$panelTag = 'Panelen';

if($pCats[0][0] == "Goed Pakket"){
	$wattsBase = 1650;
	$wattsGap = 275;
} elseif ($pCats[0][0] == "Beter Pakket") {
	$wattsBase = 1830;
	$wattsGap = 305;
} elseif ($pCats[0][0] == "Beste Pakket"){
	$wattsBase = 1980;
	$wattsGap = 330;
}

foreach ($components as $component_id => $component ) { 
    $data = $component->get_data();	
    $prod = wc_get_product( $data['default_id'] );
    preg_match_all('~>\K[^<>]*(?=<)~', $prod->get_categories(), $cats);

    foreach ($cats[0] as $cat ){
        if($cat == $panelTag){ 
        $qMin = $component->get_quantity('min');
        $qMax = $component->get_quantity('max');
        $val = $qMin;
    ?>
    <div class="smallBox">
        <div class="inputBox">
            <select id="qtyPanel" class="myInput" name="qtyPanel">
                <?php
                    for ($i=$qMin; $i <=$qMax ; $i++) { 
                        ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php
                    }
                ?>
            </select>
        </div>
        <p id="watts"></p>
    </div>
    <?php
    break;
        }
    }
}
?>
    
<style>

#watts{
    margin: 0 !important;
    font-size: 18px;
}

.smallBox{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
}

.myInput{
    max-width: 3.5em !important;
    width: 3.5em !important;
    margin: 0 !important;
    text-align: center !important;
}

.inputBox{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: flex-start;
    margin-right: 10px;
}

</style>

<script>
    var input = document.getElementById("qtyPanel");
    var wattsEv = new CustomEvent("watts");
    var priceEv = new CustomEvent("price");
    var qty = new CustomEvent("qty");

    input.addEventListener("change", function() {
        var value = parseInt(input.value);
        localStorage.setItem('panelQty', value);
        input.value = value;
        document.dispatchEvent(wattsEv);
        document.dispatchEvent(priceEv);
        document.dispatchEvent(qty);
    });

	var wattsInfo = document.getElementById('watts');
	var totalWatts;
	var val = 6;
    var watts = calcWatts(val);
    wattsInfo.textContent = watts + " Watts";
	document.addEventListener("watts", function () {
		val = localStorage.getItem('panelQty');
        watts = calcWatts(val);
		wattsInfo.textContent = watts + " Watts";
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
<?php 

?>
