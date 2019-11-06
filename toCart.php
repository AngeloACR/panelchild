<?php

$cKey = "ck_6bbd0a7ae0de1b488b5b1422a3ae3349d6aaed7c";
$cSecret = "cs_3539c3306569f59e082233a012152c56276f1004";

add_action( 'wp_ajax_nopriv_myCustomCart', 'myCart' );
add_action( 'wp_ajax_myCustomCart', 'myCart' );

function myCart(){

    $nonce = $_REQUEST['nonce'];
    if ( !wp_verify_nonce( $nonce, "myCustomCartNonce")) {
        die("Get out, mf!");
    }  
    if (isset($_REQUEST["pQty"])){
        if( isset($_REQUEST["ids"])){
            $pQty = $_REQUEST["pQty"];
            $idsString = $_REQUEST["ids"];
            $ids = explode (",", $idsString);
            WC()->cart->empty_cart();
            foreach ($ids as $index => $id) {
                if($index == 0 || $index == 1){
                    WC()->cart->add_to_cart( $id, $pQty );
                } else{
                    WC()->cart->add_to_cart( $id, 1 );
                }
                
            }
        }
    }
    wp_redirect( wc_get_cart_url() );
    wp_die();
}
