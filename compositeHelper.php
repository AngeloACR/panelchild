<?php 
/* Template Name:addToCart */

global $product;
$id = $product->get_id();
preg_match_all('~>\K[^<>]*(?=<)~', $product->get_categories(), $pCats);

$i=0;

if($pCats[0][0] == "Good Packages"){
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
} else if($pCats[0][0] == "Better Packages"){
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

    $fullTriSKU = array (
       "NLZ-inst-19-3",
        "NLZ-inst-20-3",
        "NLZ-inst-21-3",
        "NLZ-inst-22-3",
        "NLZ-inst-23-3",
        "NLZ-inst-24-3",
        "NLZ-inst-25-3"
    );

} else{ if($pCats[0][0] == "Best Packages")
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

    $fullTriSKU = array (
        "NLZ-inst-12-3",
        "NLZ-inst-13-3",
        "NLZ-inst-14-3",
        "NLZ-inst-15-3",
        "NLZ-inst-16-3",
        "NLZ-inst-17-3",
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

$i=0;
foreach ($solarMonoSKU as $sku ) { 
    $solarMonoIds[] = wc_get_product_id_by_sku($sku);
    $prod = wc_get_product( $solarMonoIds[i] );
//        $solarMonoPrices[] = $prod->get_price();
    $i += 1;
} 

$i=0;
foreach ($solarTriSKU as $sku ) { 
    $solarTriIds[] = wc_get_product_id_by_sku($sku);
    $prod = wc_get_product( $solarTriIds[i] );
//        $solarTriPrices[] = $prod->get_price();
    $i += 1;
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

function getData($energy, $roof, $roofDir, $roofColor, $installation, $qty)  {

    if($energy == "Mono"){
        $sku = $solarMonoSKU[$qty-6];
    } else if($energy == "Tri"){
        $sku = $solarMonoSKU[$qty-$panelMin];
    } else {
        $sku = $solarMonoSKU[$qty-$panelMin];
    }
    $solarId = wc_get_product_id_by_sku($sku);
    $prod = wc_get_product( $solarId );
    $solarPrice = $prod->get_price();

    if($roof == "Flat"){
        if($roofDir == "South"){
            if($roofColor == "Silver"){
                $sku = $flatSSSKU[$qty-6];
            } else if ($roofColor == "Black"){
                $sku = $flatSBSKU[($qty-6)/2];
            }
        } else if ($roofDir == "East-West"){
            if($roofColor == "Silver"){
                $sku = $flatEWSSKU[$qty-6];
            } else if ($roofColor == "Black"){
                $sku = $flatEWBSKU[($qty-6)/2];
            }
        }
    } else if ($roof == "Inclined"){
        $sku = $inclinedSKU
    }

        $roofId = wc_get_product_id_by_sku($sku);
        $prod = wc_get_product( $roofId );
        $roofPrice = $prod->get_price();

    if($install == "Own"){
        $installId1 = wc_get_product_id_by_sku($ownSKU[$qty-6]);
        $prod = wc_get_product( $installId1 );
        $installPrice1 = $prod->get_price();
    } else if ($install == "Full Install"){
        if($energy == "Mono"){
            $installId1 = wc_get_product_id_by_sku($fullMonoSKU[$qty-6]);
            $prod = wc_get_product( $installId1 );
            $installPrice1 = $prod->get_price();    
        }else if ($energy == "Tri"){
            $installId1 = wc_get_product_id_by_sku($fullTriSKU[$qty-$panelMin]);
            $prod = wc_get_product( $installId1 );
            $installPrice1 = $prod->get_price();
        
        }
    }
    if ($install == "Electrician"){
        $installId2 = wc_get_product_id_by_sku($ownSKU[$qty-6]);
        $prod2 = wc_get_product( $installId2 );
        $installPrice2 = $prod2->get_price();
    }

    

    $data = array(
        'solarPrice'                => $solarPrice,
        'roofPrice'       => $roofPrice,
        'installId1'           =>$installId1,
        'installId2'   => $installId2,
        'installPrice1'           => $installPrice1,
        'installPrice2'           => $installPrice1,
        'roofId'        => $roofId,
        'solarId'             => $solarId
    )

}