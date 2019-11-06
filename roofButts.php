<?php 
/* Template Name:energyButts */

global $product;


?>

<div class="buttsBox">
	<a class="roofButt button primary" style=border-radius:99px;>Inclined</a>
    <a class="roofButt button primary is-outline" style=border-radius:99px;>Flat</a>
</div>
<div class="flatBox">
    <a class="roofButt button primary" style=border-radius:99px;>Silver</a>
	<a class="roofButt button primary is-outline" style=border-radius:99px;>Black</a>
</div>
<style>	
.flatBox{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
    overflow: hidden;
    max-height: 0;
	-webkit-transition: max-height 0.2s ease-in-out;
	-moz-transition: max-height 0.2s ease-in-out;
	-ms-transition: max-height 0.2s ease-in-out;
	-o-transition: max-height 0.2s ease-in-out;
	transition: max-height 0.2s ease-in-out;
}

.buttsBox{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
}

</style>

<script>
    var roofButts = document.getElementsByClassName("roofButt");
    var flatBox = document.getElementsByClassName("flatBox");
    var priceEv = new CustomEvent("price");    
    roofButts[1].addEventListener("click", function() {
        roofButts[1].classList.remove("is-outline");
        roofButts[0].classList.add("is-outline");
        roofButts[2].classList.remove("is-outline");
        roofButts[3].classList.add("is-outline");
		flatBox[0].style.maxHeight = 2*flatBox[0].scrollHeight + "px";
        localStorage.setItem('roof', 'Silver');
        document.dispatchEvent(priceEv);
    });
    roofButts[0].addEventListener("click", function() {
        roofButts[0].classList.remove("is-outline");
        roofButts[1].classList.add("is-outline");
        roofButts[3].classList.add("is-outline");
        roofButts[2].classList.add("is-outline");
		flatBox[0].style.maxHeight = null;
        localStorage.setItem('roof', 'Inclined');        
        document.dispatchEvent(priceEv);
    });
    roofButts[2].addEventListener("click", function() {
        roofButts[2].classList.remove("is-outline");
        roofButts[0].classList.add("is-outline");
        roofButts[3].classList.add("is-outline");
        localStorage.setItem('roof', 'Silver');        
        document.dispatchEvent(priceEv);
    });
    roofButts[3].addEventListener("click", function() {
        var pQty = localStorage.getItem('panelQty')
        if(pQty%2 == 0){
            roofButts[3].classList.remove("is-outline");
            roofButts[0].classList.add("is-outline");
            roofButts[2].classList.add("is-outline");
            localStorage.setItem('roof', 'Black');        
            document.dispatchEvent(priceEv);
        } else {
            alert("Must be an even number of panels to select this roof type");
        }
    });
    document.addEventListener("qty", function(){
        var pQty = localStorage.getItem('panelQty')
        if(pQty%2 != 0){
           roofButts[2].classList.remove("is-outline");
            roofButts[0].classList.add("is-outline");
            roofButts[3].classList.add("is-outline");
            localStorage.setItem('roof', 'Silver');        
            document.dispatchEvent(priceEv);
        }   
    });



</script>