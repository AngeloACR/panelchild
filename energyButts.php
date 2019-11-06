<?php 
/* Template Name:energyButts */

global $product;
preg_match_all('~>\K[^<>]*(?=<)~', $product->get_categories(), $pCats);

?>

<div class="buttsBox">
    <a class="energyButt button primary" style="border-radius:99px;">Mono</a>
	<a class="energyButt button primary is-outline" style="border-radius:99px;">Tri</a>
</div>

<style>	 
.buttsBox{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
}
</style>

<script>
    var energyButts = document.getElementsByClassName("energyButt");
    var pTag = <?php echo "\"".$pCats[0][0]."\""; ?>;
    var panelMin;
    var priceEv = new CustomEvent("price");
    if(pTag == "Good Packages"){
	    panelMin = 18;
    } else if (pTag == "Better Packages") {
	    panelMin = 19;
    } else if (pTag == "Best Packages"){
        panelMin = 12;
    } 
    energyButts[0].addEventListener("click", function() {
        energyButts[0].classList.remove("is-outline");
        energyButts[1].classList.add("is-outline");
        localStorage.setItem('energy', 'Mono');
        document.dispatchEvent(priceEv);        
    });
    energyButts[1].addEventListener("click", function() {
        var panelQty = localStorage.getItem('panelQty');
        console.log(panelQty);
        if (panelQty >= panelMin ) {
            energyButts[1].classList.remove("is-outline");
            energyButts[0].classList.add("is-outline");
            localStorage.setItem('energy', 'Tri');
            document.dispatchEvent(priceEv);
        } else{
            alert('Option available for ' + panelMin + ' or more panels');
        }
    });
</script>