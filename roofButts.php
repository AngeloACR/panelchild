<?php 
/* Template Name:roofButts */

global $product;
$category = get_term_by( 'slug', 'dak', 'product_cat' );
$parentId = $category->term_id;

$args = array(
    'parent' => $parentId,
    'taxonomy' => 'product_cat'
);
$roofCats = get_categories( $args );
?>
<h4 style="color:#ff6600;">Daktype: <span style="font-size: 16px; color:black;" id="roofPrice"></span></h4>
<?php/*     
foreach($roofCats as $roofCat) { 
    ?>
    <div class="roofsBox">
        <div class="iconBox">
        <?php 
        $src = $roofCat->thumbnail;
        ?>
        <img src="<?php echo $src; ?>" alt="">
        <label for="roof"><input type="radio" name="roof" value="<?php echo $roofCat->name; ?>"> <?php echo $roofCat->name; ?><a href="#<?php echo $roofCat->name; ?>Modal" uk-toggle><i class="fas fa-question-circle"></i></a></label>
        </div>
    </div>
    
    <?php
    $args = array(
        'parent' => $roofCat->term_id,
        'taxonomy' => 'product_cat'
    );
    $roofChilds = get_categories( $args ); 
    if($roofChilds){
        ?>
        <div>
        <?php
        foreach($roofChilds as $roofChild){
            ?>
            <div class="iconBox">
            <label for="roofDir"><input type="radio" name="roofDir" value="<?php echo $roofChild->name; ?>"><?php echo $roofChild->name; ?></label>
            </div>
        <?php
    }
        ?>
        </div>
        <?php

    }
    ?>
    <div id="<?php echo $roofCat->name; ?>Modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"><strong><?php echo $roofCat->name; ?>:</strong></h2>
        <p>
        <?php echo $roofCat->description;?>
        </p>
        <button class="button primary is-outline uk-modal-close" type="button">Close</button>
    </div>
    </div>
    <?php
}
*/
?>

<div class="roofsBox">
    <div class="iconBox">
        <?php 
        $home = get_home_url(); 
        $src = $home."/wp-content/uploads/icons/07_platfond_zwart.svg";
        ?>
        <img src="<?php echo $src; ?>" alt="">
        <label for="roof"><input type="radio" name="roof" value="flat">Platdak <a href="#flatModal" uk-toggle><i class="fas fa-question-circle"></i></a></label>
    </div>
    <div class="iconBox">
        <?php 
        $home = get_home_url(); 
        $src = $home."/wp-content/uploads/icons/06_schuin_dak_zwart.svg";
        ?>
        <img src="<?php echo $src; ?>" alt="">
        <label for="roof"><input type="radio" name="roof" value="incl">Pannendak <a href="#incModal" uk-toggle><i class="fas fa-question-circle"></i></a></label>
    </div>
</div>
<div class="flatBox">
    <div class="dirBox">
        <div class="iconBox">
            <label for="roofDir"><input type="radio" name="roofDir" value="sout">Zuid</label>
        </div>
        <div class="iconBox">
            <label for="roofDir"><input type="radio" name="roofDir" value="eswe">Oost-West</label>
        </div>
    </div>
    <div class="colorBox">
        <div class="iconBox">
            <label for="roofColor"><input type="radio" name="roofColor" value="silver">Zilver</label>
        </div>
        <div class="iconBox">
            <label for="roofColor"><input type="radio" name="roofColor" value="black">Zwart</label>
        </div>
    </div>
</div>

<div id="flatModal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"><strong>Plat dak:</strong></h2>
        <p>
            Bij platte daken heeft u de keuze uit een Zuid opstelling waarbij u één enkel paneel plaats of een Oost West opstelling waarbij u twee panelen plaatst. Wij leveren de installatiematerialen voor platte daken in zwart en in het zilver.
        </p>
        <button class="button primary is-outline uk-modal-close" type="button">Close</button>
    </div>
</div>

<div id="incModal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"><strong>Pannendak:</strong></h2>
        <p>
            Voor een pannendak hoeft u alleen aan te geven of in portret of landscape wilt plaatsen. Voor schuine daken worden installatiematerialen alleen in het zilver geleverd. (deze komen niet in het zicht). 
        </p>
        <button class="button primary is-outline uk-modal-close" type="button">Close</button>
    </div>
</div>

<style>	
.iconBox{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    padding-top: 8px;
}
.iconBox img{
 width: 2.375em;
 margin-bottom:0.313em;
}

.dirBox{
    display: flex;
    width:100%;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    overflow: hidden;
    max-height: 0;
	-webkit-transition: max-height 0.2s ease-in-out;
	-moz-transition: max-height 0.2s ease-in-out;
	-ms-transition: max-height 0.2s ease-in-out;
	-o-transition: max-height 0.2s ease-in-out;
	transition: max-height 0.2s ease-in-out;
}
.colorBox{
    display: flex;
    width:100%;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    overflow: hidden;
    max-height: 0;
	-webkit-transition: max-height 0.2s ease-in-out;
	-moz-transition: max-height 0.2s ease-in-out;
	-ms-transition: max-height 0.2s ease-in-out;
	-o-transition: max-height 0.2s ease-in-out;
	transition: max-height 0.2s ease-in-out;
}

.flatBox{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width:80%;
    background-color: white;
    margin: 0 auto;
}

.roofsBox{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
}

</style>

<script>
    var roofPrice = document.getElementById("roofPrice");
    var roofButts = document.getElementsByName("roof");
    var dirButts = document.getElementsByName("roofDir");
    var colorButts = document.getElementsByName("roofColor");
    var dirBox = document.getElementsByClassName("dirBox");
    var colorBox = document.getElementsByClassName("colorBox");
    var priceEv = new CustomEvent("price");
    roofButts[0].addEventListener("click", function() {
        dirBox[0].style.maxHeight = 2*dirBox[0].scrollHeight + "px";       
        localStorage.setItem('roof', 'Flat');		
        document.dispatchEvent(priceEv);
                var price = localStorage.getItem('roofPrice');         
                var tax = price*1.21;         
                tax = tax.toFixed(2);
	    if(price){
        roofPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
        }
    });
    roofButts[1].addEventListener("click", function() {
        dirButts[0].checked = false;
        dirButts[1].checked = false;
        colorButts[0].checked = false;
        colorButts[1].checked = false;
        dirBox[0].style.maxHeight = null;
        colorBox[0].style.maxHeight = null;
        localStorage.setItem('roof', 'Inclined');       
        localStorage.removeItem('roofDir');       
        localStorage.removeItem('roofColor');       
        document.dispatchEvent(priceEv);
                var price = localStorage.getItem('roofPrice');         
                var tax = price*1.21;         
                tax = tax.toFixed(2);
	    roofPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
    });
    dirButts[0].addEventListener("click", function() {
        if (this !== prev) {
            prev = this;
        }
        colorBox[0].style.maxHeight = 2*colorBox[0].scrollHeight + "px";
        localStorage.setItem('roofDir', 'South');        
        document.dispatchEvent(priceEv);
                var price = localStorage.getItem('roofPrice');         
                var tax = price*1.21;         
                tax = tax.toFixed(2);
        if(price){
	    roofPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
        }
    });
    dirButts[1].addEventListener("click", function() {
        var pQty = localStorage.getItem('panelQty')
        if(pQty%2 == 0){
        if (this !== prev) {
            prev = this;
        }
            colorBox[0].style.maxHeight = 2*colorBox[0].scrollHeight + "px";
            localStorage.setItem('roofDir', 'East-West');        
            document.dispatchEvent(priceEv);
                    var price = localStorage.getItem('roofPrice');         
                    var tax = price*1.21;         
                    tax = tax.toFixed(2);
            if(price){
	    roofPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
        }
        } else {
            alert("Must be an even number of panels to select this roof type");
            if(prev){
                prev.checked = true;
            }
        }
    });
    colorButts[0].addEventListener("click", function() {
        localStorage.setItem('roofColor', 'Silver');
 
        document.dispatchEvent(priceEv);
                var price = localStorage.getItem('roofPrice');         
                var tax = price*1.21;         
                tax = tax.toFixed(2);
	    roofPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
    });
    colorButts[1].addEventListener("click", function() {
        localStorage.setItem('roofColor', 'Black'); 
        document.dispatchEvent(priceEv);
                var price = localStorage.getItem('roofPrice');         
                var tax = price*1.21;         
                tax = tax.toFixed(2);
	    roofPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
    });        
    document.addEventListener("qty", function(){
        var pQty = localStorage.getItem('panelQty')
        var roof = localStorage.getItem('roof')
        var roofDir = localStorage.getItem('roofDir')
        if(pQty%2 != 0 && roof == 'Flat' && roofDir == 'East-West'){
            prev = dirButts[0];
            dirButts[0].checked = true;
            dirButts[1].checked = false;
            localStorage.setItem('roofDir', 'South');        
            document.dispatchEvent(priceEv);
        }   
        var price = localStorage.getItem('roofPrice');         
        var tax = price*1.21;         
        tax = tax.toFixed(2);
        if(price){
	        roofPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
        }
    });
    document.addEventListener("clear", function(){
            roofButts[0].checked = false;
            roofButts[1].checked = false;
            colorButts[0].checked = false;
            colorButts[1].checked = false;
            dirButts[0].checked = false;
            dirButts[1].checked = false;
    });

</script>