<?php

$cKey = "ck_6bbd0a7ae0de1b488b5b1422a3ae3349d6aaed7c";
$cSecret = "cs_3539c3306569f59e082233a012152c56276f1004";

add_action( 'wp_ajax_nopriv_myCustomCart', 'myCart' );
add_action( 'wp_ajax_myCustomCart', 'myCart' );

function myCart(){
/*
    $nonce = $_REQUEST['nonce'];
    if ( !wp_verify_nonce( $nonce, "myCustomCartNonce")) {
        die("Get out, mf!");
    } */ 
    if (isset($_REQUEST["pQty"])){
        if( isset($_REQUEST["ids"])){
            $pQty = $_REQUEST["pQty"];
            $idsString = $_REQUEST["ids"];
            $ids = explode (", ", $idsString);
            WC()->cart->empty_cart();
            /*foreach ($ids as $index => $id) {
                if($index == 0){
                    $prod = wc_get_product( $id );
                    $components = $prod->get_components();
                    foreach ($components as $component_id => $component ) {
                        $data = $component->get_data();	
                        $product = wc_get_product( $data['default_id'] );
                        $cat = strip_tags($product->get_categories());
                        if($cat == "Panels"){
                            WC()->cart->add_to_cart( $data['default_id'], $pQty );                
                        } else{
                            WC()->cart->add_to_cart( $data['default_id'], 1 );                
                        }
                    }
                } else{
                    WC()->cart->add_to_cart( $id, 1 );
                }
            }*/
             foreach ($ids as $index => $id) {
                if($index == 0){
                    $composite = wc_get_product( $id );
                    $components = $composite->get_components();
                    foreach ($components as $component_id => $component ) {
                        $data = $component->get_data();	
                        $product = wc_get_product( $data['default_id'] );
                        $cats = strip_tags($product->get_categories());
                        $cats = explode (", ", $cats);
                        foreach ($cats as $cat ){
                            if($cat == "Panelen"){
                                $isPanel = true;
                                break;
                            } else {
                                $isPanel = false;
                            }    
                        }
                        if($isPanel){
                            $configuration[$component_id] = array(
                                'product_id'        => $data['default_id'],
                                'quantity'          => $pQty
                            );
                        } else {
                            $configuration[$component_id] = array(
                                'product_id'        => $data['default_id'],
                                'quantity'          => 1
                            );
                        }
                    }

                    $added_to_cart = WC_CP()->cart->add_composite_to_cart( $id, 1, $configuration, $cart_item_data = array() );
                } else{
                    $added_to_cart = WC()->cart->add_to_cart( $id, 1 );
                }
            } 
            /* foreach ($ids as $index => $id) {
                if($index == 0){
                    $composite = wc_get_product( $id );
                    $components = $composite->get_components();
                    foreach ($components as $component_id => $component ) {
                        $data = $component->get_data();	
                        $product = wc_get_product( $data['default_id'] );
                        $cat = strip_tags($product->get_categories());
                        if($cat == "Panels"){
                            $configuration[$component_id] = array(
                                'product_id'        => $data['default_id'],
                                'quantity'          => $pQty
                            );
                        } else {
                            $configuration[$component_id] = array(
                                'product_id'        => $data['default_id'],
                                'quantity'          => 1
                            );
                        }
                    }

                } else{
                    $configuration[$id] = array(
                        'product_id'        => $id,
                        'quantity'          => 1
                    );
                }
                $added_to_cart = WC_CP()->cart->add_composite_to_cart( $id, 1, $configuration, $cart_item_data = array() );
            } */
        }
    }
    wp_redirect( wc_get_cart_url() );
    wp_die();
}
