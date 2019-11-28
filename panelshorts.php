<?php

function showDocs() {
    ob_start();
    get_template_part('showDocuments');
    return ob_get_clean();   
} 
add_shortcode( 'product-documentation', 'showDocs' );

function showTab() {
    ob_start();
    get_template_part('showTable');
    return ob_get_clean();   
} 
add_shortcode( 'product-table', 'showTab' );

function energyButts() {
    ob_start();
    get_template_part('energyButts');
    return ob_get_clean();   
} 
add_shortcode( 'product-energy', 'energyButts' );

function installButts() {
    ob_start();
    get_template_part('installButts');
    return ob_get_clean();   
} 
add_shortcode( 'product-installation', 'installButts' );

function roofButts() {
    ob_start();
    get_template_part('roofButts');
    return ob_get_clean();   
} 
add_shortcode( 'product-roof', 'roofButts' );

function showProducts() {
    ob_start();
    get_template_part('showProducts');
    return ob_get_clean();   
} 
add_shortcode( 'product-list', 'showProducts' );

function addToCart() {
    ob_start();
    get_template_part('addToCart');
    return ob_get_clean();   
} 
add_shortcode( 'product-cart', 'addToCart' );

function qtyButt() {
    ob_start();
    get_template_part('qtyButt');
    return ob_get_clean();   
} 
add_shortcode( 'product-qty', 'qtyButt' );

function panelHeader() {
    ob_start();
    get_template_part('panelHeader');
    return ob_get_clean();   
} 
add_shortcode( 'product-header', 'panelHeader' );

function panelPeople() {
    ob_start();
    get_template_part('panelPeople');
    return ob_get_clean();   
} 
add_shortcode( 'product-people', 'panelPeople' );