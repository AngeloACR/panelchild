<?php 
/* Template Name:showProducts */

global $product;
$title = $product->get_title();
$description = $product->get_short_description();

?>
<div class="bigBox">
        <p><?php echo $description; ?></p>
    </div>
    
<style>

.bigBox{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

</style>


<?php 
