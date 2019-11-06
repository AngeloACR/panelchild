<?php 
/* Template Name:energyButts */

global $product;

?>

<div class="buttsBox">
    <a class="installButt button primary" style=border-radius:99px;>Own</a>
	<a class="installButt button primary is-outline" style=border-radius:99px;>Electrician</a>
	<a class="installButt button primary is-outline" style=border-radius:99px;>Full Installed</a>
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
    var installButts = document.getElementsByClassName("installButt ");
    var priceEv = new CustomEvent("price");
    installButts[0].addEventListener("click", function() {
        installButts[0].classList.remove("is-outline");
        installButts[1].classList.add("is-outline");
        installButts[2].classList.add("is-outline");
        localStorage.setItem('install', 'Own');
        document.dispatchEvent(priceEv);
    });
    installButts[1].addEventListener("click", function() {
        installButts[1].classList.remove("is-outline");
        installButts[0].classList.add("is-outline");
        installButts[2].classList.add("is-outline");
        localStorage.setItem('install', 'Electrician');
        document.dispatchEvent(priceEv);
    });
    installButts[2].addEventListener("click", function() {
        installButts[2].classList.remove("is-outline");
        installButts[1].classList.add("is-outline");
        installButts[0].classList.add("is-outline");
        localStorage.setItem('install', 'Full Installed');
        document.dispatchEvent(priceEv);
    });
</script>