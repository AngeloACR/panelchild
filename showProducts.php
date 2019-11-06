<?php 
/* Template Name:showProducts */
/***********************REMOVE COMPONENTS **************************/
global $product;
preg_match_all('~>\K[^<>]*(?=<)~', $product->get_categories(), $pCats);
$components = $product->get_components();
$panelTag = 'Panels';

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
<div>
<h1><?php echo $product->get_title(); ?></h1>
</div>
<?php 
$i=0;
foreach ($components as $component_id => $component ) { 
    $description = $component->get_description();
    $title = $component->get_title();
    $data = $component->get_data();	
    $prod = wc_get_product( $data['default_id'] );
    preg_match_all('~>\K[^<>]*(?=<)~', $prod->get_categories(), $cats);
    $price = $prod->get_price();
    ?>
    <div class="bigBox">
        <h3><?php echo $title; ?></h3>
        <p><?php echo $description; ?></p>
        <div class="smallBox">        
            <?php
            if ( has_post_thumbnail( $data['default_id'] ) ) {
                $attachment_ids[0] = get_post_thumbnail_id( $data['default_id'] );
                $image = wp_get_attachment_image_src($attachment_ids[0], 'full' ); 
                ?>    
                <img src="<?php echo $image[0] ; ?>" class="card-image myImg" width="210" height="180" />
            <?php } ?>
            <div class="priceBox">
                <p style="margin-bottom: 10px;"><span style="font-weight: bolder;">€<?php echo $price; ?></span>/pc.</p>
                <?php if($cats[0][0] == $panelTag){ 
                    $qMin = $component->get_quantity('min');
                    $qMax = $component->get_quantity('max');
                    $val = $qMin;
                ?>
                    <div class="inputBox">
                        <input type="button" value="-" class="myButt minus button is-form">
                        <input type="number" id=<?php echo 'val'.$i; ?> class="myInput input-text qty text" step="1" min=<?php echo $qMin; ?> max=<?php echo $qMax; ?> name=<?php echo 'val'.$i; ?> value=<?php echo $qMin; ?> title="Qty" size="4" inputmode="numeric" disabled>
                        <input type="button" value="+" class="myButt plus button is-form">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php 
    $i = $i + 1;
}
?>
    
<style>
.priceBox{
    margin-left:10px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.bigBox{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.smallBox{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
}

.myImg{
    width: 25% !important;
}

.myInput{
    max-width: 2.5em !important;
    width: 2.5em !important;
    margin: 0 !important;
    padding: 0 !important;
    text-align: center !important;
}

.myButt{
    width: 2em;
    margin: 0 !important;
    padding-left: .5em !important;
    padding-right: .5em !important;
    text-align: center !important;
}

.inputBox{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: flex-start;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}

input[type=number] {
    -moz-appearance:textfield; /* Firefox */
}
</style>

<script>
    var butts = document.getElementsByClassName("myButt");
    var input = document.getElementById("val0");
    var wattsEv = new CustomEvent("watts");
    var priceEv = new CustomEvent("price");
    var qty = new CustomEvent("qty");
    var value = parseInt(input.value);
    var qMin = <?php echo $qMin; ?>;
    var qMax = <?php echo $qMax; ?>;

    butts[0].addEventListener("click", function() {
        if(value > qMin){
            value = value-1; 
        }
        localStorage.setItem('panelQty', value);
        input.value = value;
        document.dispatchEvent(wattsEv);
        document.dispatchEvent(priceEv);
        document.dispatchEvent(qty);
    });
    butts[1].addEventListener("click", function() {
        if(value < qMax){
            value = value+1; 
        }
        localStorage.setItem('panelQty', value);
        input.value = value;
        document.dispatchEvent(wattsEv);
        document.dispatchEvent(priceEv);
        document.dispatchEvent(qty);
    });

</script>
<?php 

?>
