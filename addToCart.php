<?php 
/* Template Name:addToCart */

global $product;
$id = $product->get_id();
preg_match_all('~>\K[^<>]*(?=<)~', $product->get_categories(), $pCats);

$i=0;

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
        "NLZ-Bdf-19",
        "NLZ-Bdf-20",
        "NLZ-Bdf-21",
        "NLZ-Bdf-22",
        "NLZ-Bdf-23",
        "NLZ-Bdf-24",
        "NLZ-Bdf-25"
    );

    $fullTriSKU = array (
       "NLZ-inst-19-3",
        "NLZ-inst-20-3",
        "NLZ-inst-21-3",
        "NLZ-inst-22-3",
        "NLZ-inst-23-3",
        "NLZ-inst-24-3",
        "NLZ-inst-25-3"
    );

} else if($pCats[0][0] == "Beste Pakket"){
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
        "NLZ-BTdf-12",
        "NLZ-BTdf-13",
        "NLZ-BTdf-14",
        "NLZ-BTdf-15",
        "NLZ-BTdf-16",
        "NLZ-BTdf-17",
        "NLZ-BTdf-18",
        "NLZ-BTdf-19",
        "NLZ-BTdf-20",
        "NLZ-BTdf-21",
        "NLZ-BTdf-22",
        "NLZ-BTdf-23",
        "NLZ-BTdf-24",
        "NLZ-BTdf-25"
    );

    $fullTriSKU = array (
        "NLZ-inst-12",
        "NLZ-inst-13",
        "NLZ-inst-14",
        "NLZ-inst-15",
        "NLZ-inst-16",
        "NLZ-inst-17",
        "NLZ-inst-18-3",
        "NLZ-inst-19-3",
        "NLZ-inst-20-3",
        "NLZ-inst-21-3",
        "NLZ-inst-22-3",
        "NLZ-inst-23-3",
        "NLZ-inst-24-3",
        "NLZ-inst-25-3"
    );

}
$flatSSSKU = array (
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
$flatEWBKU = array (
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
$flatSBSKU = array (
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
    $flatEWSSKU = array (
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

?>

<div class="cartBox">
<p id="priceBox"></p>

<a id="addButt" class="button primary is-outline" style=border-radius:99px;>Ik ga bestellen</a>
</div>

<style>
.cartBox{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
}
</style>
<script>
    <?php
        $nonce = wp_create_nonce("myCustomCartNonce");
    ?>
    var nonce = "<?php echo $nonce; ?>"
    var addButt = document.getElementById("addButt");
    addButt.setAttribute( 'data-nonce', nonce );
    document.addEventListener("price", function () {
        data = calcPrice();
        if(data){
            <?php 
            $home = get_home_url(); 
            $src = $home."/wp-admin/admin-ajax.php?action=myCustomCart";
            ?>
                        
            //var link = '/dev/wp-admin/admin-ajax.php?action=myCustomCart&pQty='+data['pQty']+'&ids='+data['ids']+'&nonce='+nonce;
            var link = '<?php echo $src ?>&pQty='+data['pQty']+'&ids='+data['ids']+'&nonce='+nonce;            
            addButt.href = link;
        }
    });
    addButt.addEventListener("click", function () {
        localStorage.setItem('panelQty', '6');
            localStorage.removeItem('install');
            localStorage.removeItem('roof');
            localStorage.removeItem('roofDir');
            localStorage.removeItem('roofColor');
			localStorage.removeItem('energy');	
    });


function calcPrice(){
    var pTag = <?php echo "\"".$pCats[0][0]."\""; ?>;
    var priceBox = document.getElementById('priceBox');
    var pQty = localStorage.getItem('panelQty');
    var roof = localStorage.getItem('roof');
    var roofDir = localStorage.getItem('roofDir');
    var roofColor = localStorage.getItem('roofColor');
    var energy = localStorage.getItem('energy');
    var install = localStorage.getItem('install');
    var panelMin = <?php echo $panelMin;?>;


    var solarMonoIds = [];
    var solarTriIds = [];
    var flatSSIds = [];
    var flatEWSIds = [];
    var flatSBIds = [];
    var flatEWBIds = [];
    var fullMonoIds = [];
    var fullTriIds = [];
    var inclinedIds = [];
    var ownIds = [];
    var electricianIds = [];

    var solarMonoPrices = [];
    var solarTriPrices = [];
    var flatSSPrices = [];
    var flatSBPrices = [];
    var flatEWSPrices = [];
    var flatEWBPrices = [];
    var fullMonoPrices = [];
    var fullTriPrices = [];
    var inclinedPrices = [];
    var ownPrices = [];
    var electricianPrices = [];

<?php    
 
    foreach ($solarMonoSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
    ?> 
    solarMonoIds.push(<?php echo $id;?>) 
    solarMonoPrices.push(parseFloat(<?php echo $prod->get_price();?>));
    <?php
    } 

    foreach ($solarTriSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
    ?> 
    solarTriIds.push(<?php echo $id;?>) 
    solarTriPrices.push(parseFloat(<?php echo $prod->get_price();?>));
    <?php
    } 

    foreach ($flatSSSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
    ?> 
    flatSSIds.push(<?php echo $id;?>) 
    flatSSPrices.push(parseFloat(<?php echo $prod->get_price();?>));
    <?php
    }
    foreach ($flatEWSSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
        ?>
        flatEWSIds.push(<?php echo $id;?>);
        flatEWSPrices.push(parseFloat(<?php echo $prod->get_price();?>)); 
        <?php
    }

    foreach ($flatSBSKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
    ?> 
    flatSBIds.push(<?php echo $id;?>) 
    flatSBPrices.push(parseFloat(<?php echo $prod->get_price();?>));
    <?php
    }
    foreach ($flatEWBKU as $sku ) { 
        $id = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $id );
        ?>
        flatEWBIds.push(<?php echo $id;?>);
        flatEWBPrices.push(parseFloat(<?php echo $prod->get_price();?>)); 
        <?php
    }

    
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

    if(energy == "Mono"){
       solarPrice = parseFloat(solarMonoPrices[pQty-6]);
       solarId = solarMonoIds[pQty-6];
       localStorage.setItem('solarPrice', solarPrice);
       localStorage.setItem('table', energy);
    } else if (energy == "Tri"){
        solarPrice = parseFloat(solarTriPrices[pQty-panelMin]);
        solarId = solarTriIds[pQty-panelMin];
        localStorage.setItem('solarPrice', solarPrice);
        localStorage.setItem('table', energy);
    } else if(energy == "Dontknow"){
        if(pQty < panelMin){
            solarPrice = parseFloat(solarMonoPrices[pQty-6]);
            solarId = solarMonoIds[pQty-6];
            localStorage.setItem('table', "Mono");
            localStorage.setItem('solarPrice', solarPrice);
        } else{
            solarPrice1 = parseFloat(solarMonoPrices[pQty-6]);
            solarPrice2 = parseFloat(solarTriPrices[pQty-panelMin]);
            if(solarPrice2 < solarPrice1){
                solarPrice = solarPrice1;
                solarId = solarMonoIds[pQty-6];
                localStorage.setItem('table', "Mono");
                localStorage.setItem('solarPrice', solarPrice);
            } else{
                solarPrice = solarPrice2;
                solarId = solarTriIds[pQty-panelMin];
                localStorage.setItem('table', "Tri");
                localStorage.setItem('solarPrice', solarPrice);
            }
        }
    }


    var roofPrice;
    var roofId;
    if( roof == "Flat"){
        if(roofDir == "South"){
            if(roofColor == "Silver"){
                roofPrice = parseFloat(flatSSPrices[pQty-6]);
                roofId = flatSSIds[pQty-6];
                localStorage.setItem('roofPrice', roofPrice);
            } else if (roofColor == "Black"){
                roofPrice = parseFloat(flatSBPrices[pQty-6]);
                roofId = flatSBIds[pQty-6];
                localStorage.setItem('roofPrice', roofPrice);
            }
        } else if(roofDir == "East-West"){
            if(roofColor == "Silver"){
                roofPrice = parseFloat(flatEWSPrices[(pQty-6)/2]);
                roofId = flatEWSIds[(pQty-6)/2];
                localStorage.setItem('roofPrice', roofPrice);
            } else if (roofColor == "Black"){
                roofPrice = parseFloat(flatEWBPrices[(pQty-6)/2]);
                roofId = flatEWBIds[(pQty-6)/2];
                localStorage.setItem('roofPrice', roofPrice);
            }
        }
    } else if (roof == "Inclined"){
        roofPrice = parseFloat(inclinedPrices[pQty-6]);        
        roofId = inclinedIds[pQty-6];
        localStorage.setItem('roofPrice', roofPrice);
    }


/*****************************FULL INSTALLATION FALTAN PRECIOS PARA BETTER Y BEST PACKAGES **************************************/

    var installPrice;
    var installPrice2;
    var installId;
    var table = localStorage.getItem('table');        
    if(install == "Own"){
        installPrice = parseFloat(ownPrices[pQty - 6]);
        installId = ownIds[pQty - 6];
        localStorage.setItem('installPrice', installPrice);        
    }else if(install == "Electrician"){
        installPrice = parseFloat(ownPrices[pQty - 6]);
        installId = ownIds[pQty - 6];
        installPrice2 = parseFloat(electricianPrice);
        installId2 = electricianId;
        localStorage.setItem('installPrice', installPrice);
        localStorage.setItem('installPrice2', installPrice2);  
    }else if(install == "Full Installed" && table == "Mono"){
        installPrice = parseFloat(fullMonoPrices[pQty - 6]);
        installId = fullMonoIds[pQty - 6];
        localStorage.setItem('installPrice', installPrice);
    }else if(install == "Full Installed" && table == "Tri"){
        installPrice = parseFloat(fullTriPrices[pQty - panelMin]);    
        installId = fullTriIds[pQty - panelMin];    
        localStorage.setItem('installPrice', installPrice);
    }


    if(installPrice2){
        var price = solarPrice+roofPrice+installPrice+installPrice2;
        var ids = solarId+', '+roofId+', '+installId+', '+installId2;
  
    } else {
        var price = solarPrice+roofPrice+installPrice;
        var ids = solarId+', '+roofId+', '+installId;
    }
 
    if(roof && energy && install && pQty){

        var branch = document.createElement('BR');
        var priceText = document.createElement('P');
        var taxText = document.createElement('P');
        var totalText = document.createElement('P');
        price = price.toFixed(2);
        var tax = price*0.21;
        tax = tax.toFixed(2);
        var total = parseFloat(price) + parseFloat(tax);
        total = total.toFixed(2);
        while (priceBox.childNodes.length > 0) {
			priceBox.removeChild(priceBox.lastChild);
		}
        priceText.textContent = "Subtotal: €" + price + " exc. BTW";
        taxText.textContent += "BTW: €" + tax;
        totalText.textContent += "Total: €" + total + " inc. BTW";
        priceBox.appendChild(priceText);
        priceBox.appendChild(taxText);
        priceBox.appendChild(totalText);
    }

    var data = {
        pQty:  pQty,
        ids: ids,
    };
    return data;
}
</script>
<?php 
