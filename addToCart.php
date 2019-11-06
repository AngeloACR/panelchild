<?php 
/* Template Name:addToCart */

global $product;
$id = $product->get_id();
preg_match_all('~>\K[^<>]*(?=<)~', $product->get_categories(), $pCats);

$i=0;

if($pCats[0][0] == "Good Packages"){
    $solarSKU = "JAP60S-01-275-SC";
    $flatSSKU = array (
        "NLZ-fff-ez-6",
        "NLZ-fff-ez-7",
        "NLZ-fff-ez-8",
        "NLZ-fff-ez-9",
        "NLZ-fff-ez-10",
        "NLZ-fff-ez-11",
        "NLZ-fff-ez-12",
        "NLZ-fff-ez-13",
        "NLZ-fff-ez-14",
        "NLZ-fff-ez-15",
        "NLZ-fff-ez-16",
        "NLZ-fff-ez-17",
        "NLZ-fff-ez-18",
        "NLZ-fff-ez-19",
        "NLZ-fff-ez-20",
        "NLZ-fff-ez-21",
        "NLZ-fff-ez-22",
        "NLZ-fff-ez-23",
        "NLZ-fff-ez-24",
        "NLZ-fff-ez-25"
  
    );
    $flatBSKU = array (
        "NLZ-fff-owzw-6",
        "NLZ-fff-owzw-8",
        "NLZ-fff-owzw-10",
        "NLZ-fff-owzw-12",
        "NLZ-fff-owzw-14",
        "NLZ-fff-owzw-16",
        "NLZ-fff-owzw-18",
        "NLZ-fff-owzw-20",
        "NLZ-fff-owzw-22",
        "NLZ-fff-owzw-24"
       
    );
    } else {
        if($pCats[0][0] == "Better Packages"){
            $solarSKU = "JAM60S-07-SE-305-PR-AB"; 
        } else{
            $solarSKU = "LG330N1K-V5"; 
        }
        $flatSSKU = array (
            "NLZ-fff-ezw-6",
            "NLZ-fff-ezw-7",
            "NLZ-fff-ezw-8",
            "NLZ-fff-ezw-9",
            "NLZ-fff-ezw-10",
            "NLZ-fff-ezw-11",
            "NLZ-fff-ezw-12",
            "NLZ-fff-ezw-13",
            "NLZ-fff-ezw-14",
            "NLZ-fff-ezw-15",
            "NLZ-fff-ezw-16",
            "NLZ-fff-ezw-17",
            "NLZ-fff-ezw-18",
            "NLZ-fff-ezw-19",
            "NLZ-fff-ezw-20",
            "NLZ-fff-ezw-21",
            "NLZ-fff-ezw-22",
            "NLZ-fff-ezw-23",
            "NLZ-fff-ezw-24",
            "NLZ-fff-ezw-25"

        );
        $flatBSKU = array (
            "NLZ-fff-owz-6",
            "NLZ-fff-owz-8",
            "NLZ-fff-owz-10",
            "NLZ-fff-owz-12",
            "NLZ-fff-owz-14",
            "NLZ-fff-owz-16",
            "NLZ-fff-owz-18",
            "NLZ-fff-owz-20",
            "NLZ-fff-owz-22",
            "NLZ-fff-owz-24"

        );
    }

    $clampSKU = "EN-CT-100-SPLIT"; 

    $inclinedSKU = array (
        "NLZ-evo-6",
        "NLZ-evo-7",
        "NLZ-evo-8",
        "NLZ-evo-9",
        "NLZ-evo-10",
        "NLZ-evo-11",
        "NLZ-evo-12",
        "NLZ-evo-13",
        "NLZ-evo-14",
        "NLZ-evo-15",
        "NLZ-evo-16",
        "NLZ-evo-17",
        "NLZ-evo-18",
        "NLZ-evo-19",
        "NLZ-evo-20",
        "NLZ-evo-21",
        "NLZ-evo-22",
        "NLZ-evo-23",
        "NLZ-evo-24",
        "NLZ-evo-25",

    );

    $ownSKU = array (
        "NLZ-ktmc1",
        "NLZ-ktmc2",
        "NLZ-ktmc3",
        "NLZ-ktmc4",
        "NLZ-ktmc5",
        "NLZ-ktmc6",
        "NLZ-ktmc7",
        "NLZ-ktmc8",
        "NLZ-ktmc9",
        "NLZ-ktmc10",
        "NLZ-ktmc11",
        "NLZ-ktmc12",
        "NLZ-ktmc13",
        "NLZ-ktmc14",
        "NLZ-ktmc15",
        "NLZ-ktmc16",
        "NLZ-ktmc17",
        "NLZ-ktmc18",
        "NLZ-ktmc19",
        "NLZ-ktmc20",
        "NLZ-ktmc21",
        "NLZ-ktmc22",
        "NLZ-ktmc23",
        "NLZ-ktmc24",
        "NLZ-ktmc25"
    );

    $electricianSKU= "NLZ-elkt-10";

    $optimizerSKU = "P300-MC4";

    $converterMonoSKU = array(
        "SOL-1.5-MINI-4G-DC",
        "SOL-2.0-MINI-4G-DC",
        "SOL-2.5-MINI-4G-DC",
        "SOL-3.0-MINI-4G-DC",
        "SOL-3.6-MINI-4G-DC",
        "SOL-4.0-4G-DT-DC",
        "SOL-4.6-4G-DT-DC",
        "SOL-5.0-4G-DT-DC"       
    );

    $converterTriSKU = array(
        "SOL-5.0-3PH-4G-DC",
        "SOL-6.0-3PH-4G-DC"
    );

    $fullMonoSKU = array (
        "NLZ-inst-6",
        "NLZ-inst-7",
        "NLZ-inst-8",
        "NLZ-inst-9",
        "NLZ-inst-10",
        "NLZ-inst-11",
        "NLZ-inst-12",
        "NLZ-inst-13",
        "NLZ-inst-14",
        "NLZ-inst-15",
        "NLZ-inst-16",
        "NLZ-inst-17",
        "NLZ-inst-18",
        "NLZ-inst-19",
        "NLZ-inst-20",
        "NLZ-inst-21",
        "NLZ-inst-22",
        "NLZ-inst-23",
        "NLZ-inst-24",
        "NLZ-inst-25"
    );

    $fullTriSKU = array (
        "NLZ-inst-18-3",
        "NLZ-inst-19-3",
        "NLZ-inst-20-3",
        "NLZ-inst-21-3",
        "NLZ-inst-22-3",
        "NLZ-inst-23-3",
        "NLZ-inst-24-3",
        "NLZ-inst-25-3"
    );

?>

<div class="cartBox">
<p id="priceBox"></p>

<a id="addButt" class="button primary is-outline" style=border-radius:99px;>Add to Cart</a>
</div>

<style>
.cartBox{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
}
</style>
<script>
    <?php
        $nonce = wp_create_nonce("myCustomCartNonce");
    ?>
    var addButt = document.getElementById("addButt");
    var data = calcPrice();
    var link = '/dev/wp-admin/admin-ajax.php?action=myCustomCart&pQty='+data['pQty']+'&ids='+data['ids']+'&nonce='+'<?php echo $nonce; ?>';
    addButt.setAttribute( 'data-nonce', "<?php echo $nonce; ?>" );
       addButt.href = link;
	document.addEventListener("price", function () {
        data = calcPrice();
        link = '/dev/wp-admin/admin-ajax.php?action=myCustomCart&pQty='+data['pQty']+'&ids='+data['ids']+'&nonce='+'<?php echo $nonce; ?>';
        addButt.setAttribute( 'data-nonce', "<?php echo $nonce; ?>" );
        addButt.href = link;
    });
    /*addButt.addEventListener("click", function() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "/dev/wp-content/themes/flatsome-child/toCart.php?"+ data, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                console.log(this.responseText);
            } else {
                console.log('waiting');
            };
        }      
    });*/

function calcPrice(){
    var pTag = <?php echo "\"".$pCats[0][0]."\""; ?>;
    var priceBox = document.getElementById('priceBox');
    var pQty = localStorage.getItem('panelQty');
    var roof = localStorage.getItem('roof');
    var energy = localStorage.getItem('energy');
    var install = localStorage.getItem('install');
    var solarIds = [];
    var flatSIds = [];
    var flatBIds = [];
    var fullMonoIds = [];
    var fullTriIds = [];
    var inclinedIds = [];
    var optimizerIds = [];
    var ownIds = [];
    var clampIds = [];
    var electricianIds = [];
    var converterMonoIds = [];
    var converterTriIds = [];
    var solarPrices = [];
    var flatSPrices = [];
    var flatBPrices = [];
    var fullMonoPrices = [];
    var fullTriPrices = [];
    var inclinedPrices = [];
    var optimizerPrices = [];
    var ownPrices = [];
    var clampPrices = [];
    var electricianPrices = [];
    var converterMonoPrices = [];
    var converterTriPrices = [];
    <?php    
 
    $id = wc_get_product_id_by_sku($solarSKU);
    $prod = wc_get_product( $id );
    ?> 
    var solarId = <?php echo $id;?>;
    var solarPrice =parseFloat(<?php echo $prod->get_price();?>); 
    <?php
    
    foreach ($flatSSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
    ?> 
    flatSIds.push(<?php echo $id;?>) 
    flatSPrices.push(parseFloat(<?php echo $prod->get_price();?>));
    <?php
    }
    foreach ($flatBSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
        ?>
        flatBIds.push(<?php echo $id;?>);
        flatBPrices.push(parseFloat(<?php echo $prod->get_price();?>)); 
        <?php
    }

        $id = wc_get_product_id_by_sku($optimizerSKU);
        $prod = wc_get_product( $id );
        ?> 
        var optimizerId = <?php echo $id;?>; 
        var optimizerPrice = parseFloat(<?php echo $prod->get_price();?>); 
        <?php
    
        $id = wc_get_product_id_by_sku($clampSKU);
        $prod = wc_get_product( $id );
        ?> 
        var clampId = <?php echo $id;?>; 
        var clampPrice = parseFloat(<?php echo $prod->get_price();?>); 
        <?php
    
   foreach ($inclinedSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
        ?> 
        inclinedIds.push(<?php echo $id;?>); 
        inclinedPrices.push(parseFloat(<?php echo $prod->get_price();?>)); 
        <?php
    }
    foreach ($ownSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
        ?> 
        ownIds.push(<?php echo $id;?>); 
        ownPrices.push(parseFloat(<?php echo $prod->get_price();?>)); 
        <?php
    }

        $id = wc_get_product_id_by_sku($electricianSKU);
        $prod = wc_get_product( $id );
        ?> 
        var electricianId = <?php echo $id;?>; 
        var electricianPrice = parseFloat(<?php echo $prod->get_price();?>); 
        <?php

foreach ($converterMonoSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
        ?> 
        converterMonoIds.push(<?php echo $id;?>); 
        converterMonoPrices.push(parseFloat(<?php echo $prod->get_price();?>)); 
        <?php
    }
    foreach ($converterTriSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
        ?> 
        converterTriIds.push(<?php echo $id;?>); 
        converterTriPrices.push(parseFloat(<?php echo $prod->get_price();?>)); 
        <?php
    }
    foreach ($fullMonoSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
        ?> 
        fullMonoIds.push(<?php echo $id;?>); 
        fullMonoPrices.push(parseFloat(<?php echo $prod->get_price();?>)); 
        <?php
    }
    foreach ($fullTriSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
        ?> 
        fullTriIds.push(<?php echo $id;?>); 
        fullTriPrices.push(parseFloat(<?php echo $prod->get_price();?>)); 
        <?php
    }
    ?>

    if(!pQty){
        pQty = 6;
    }

    if(!roof){
        roof = "Flat";
    }

    if(!energy){
        energy = "Mono";
    }

    if(!install){
        install = "Full Installed";
    }


    var optQty = pQty;

    solarPrice = pQty*parseFloat(solarPrice);
    optimizerPrice = pQty*parseFloat(optimizerPrice);

    var clampPrice = parseFloat(clampPrice);
    var converterPrice;
    var converterId;
    if(energy == "Mono"){
        if(pQty == 6){
            converterPrice = parseFloat(converterMonoPrices[0]);
            converterId = converterMonoIds[0];
        } else if (pQty == 7 || pQty == 8){
            converterPrice = parseFloat(converterMonoPrices[1]);
            converterId = converterMonoIds[1];
        } else if (pQty == 9 || pQty == 10){
            converterPrice = parseFloat(converterMonoPrices[2]);
            converterId = converterMonoIds[2];
        } else if (pQty == 11 || pQty == 12){
            converterPrice = parseFloat(converterMonoPrices[3]);
            converterId = converterMonoIds[3];
        } else if (pQty == 13 || pQty == 14){
            converterPrice = parseFloat(converterMonoPrices[4]);
            converterId = converterMonoIds[4];
        } else if (pQty == 15 || pQty == 16){
            converterPrice = parseFloat(converterMonoPrices[5]);
            converterId = converterMonoIds[5];
        } else if (pQty == 17 || pQty == 18 || pQty == 19){
            converterPrice = parseFloat(converterMonoPrices[6]);
            converterId = converterMonoIds[6];
        } else{
            converterPrice = parseFloat(converterMonoPrices[7]);
            converterId = converterMonoIds[7];
        }
    } else{
        if (pQty == 18 || pQty == 19 || pQty == 20 || pQty == 21){
            converterPrice = parseFloat(converterTriPrices[0]);
            converterId = converterTriIds[0];
        } else{
            converterPrice = parseFloat(converterTriPrices[1]);
            converterId = converterTriIds[1];
        }
    }

    var roofPrice;
    var roofId;
    if(roof == "Silver"){
        roofPrice = parseFloat(flatSPrices[pQty-6]);
        roofId = flatSIds[pQty-6];
    } else if(roof == "Black"){
        roofPrice = parseFloat(flatBPrices[(pQty-6)/2]);
        roofId = flatSIds[pQty-6];
    } else{
        roofPrice = parseFloat(inclinedPrices[pQty-6]);        
        roofId = inclinedIds[pQty-6];        
    }

    var installPrice;
    var installId;
    if(install == "Own"){
        installPrice = parseFloat(ownPrices[pQty - 6]);
        installId = ownIds[pQty - 6];
    }else if(install == "Electrician"){
        installPrice = parseFloat(electricianPrice);
        installId = electricianId;
    }else if(install == "Full Installed" && energy == "Mono"){
        installPrice = parseFloat(fullMonoPrices[pQty - 6]);
        installId = fullMonoIds[pQty - 18];
    }else if(install == "Full Installed" && energy == "Tri"){
        installPrice = parseFloat(fullTriPrices[pQty - 18]);    
        installId = fullTriIds[pQty - 18];    
    }


    var price = solarPrice+clampPrice+converterPrice+optimizerPrice+roofPrice+installPrice;
    var ids = solarId+', '+optimizerId+', '+clampId+', '+converterId+', '+roofId+', '+installId;
    price = price.toFixed(2);
    priceBox.textContent = "Subtotal: €" + price;
    var data = {
    pQty:  pQty,
    ids: ids,
  };
    return data;
}
</script>
<?php 
