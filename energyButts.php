<?php 
/* Template Name:energyButts */

global $product;
preg_match_all('~>\K[^<>]*(?=<)~', $product->get_categories(), $pCats);

?>

<h4 style="color:#ff6600;">Elektra Aansluiting: <span style="font-size: 16px; color:black;" id="energyPrice"></span></h4>

<div class="buttsBox">
<div class="iconBox">
<?php 
$home = get_home_url(); 
$src = $home."/wp-content/uploads/icons/05_single_fase_zwart.svg";
?>
<img src="<?php echo $src; ?>" alt="">
    <label for="energy"><input type="radio" name="energy" value="mono">1-fase <a href="#monoModal" uk-toggle><i class="fas fa-question-circle"></i></a></label> 
</div>
<div class="iconBox">
<?php 
$home = get_home_url(); 
$src = $home."/wp-content/uploads/icons/04_drie_fase_zwart.svg";
?>
<img src="<?php echo $src; ?>" alt="">
    <label for="energy"><input type="radio" name="energy" value="tri">3-fase <a href="#triModal" uk-toggle><i class="fas fa-question-circle"></i></a></label>
</div>
<div class="iconBox">
<?php 
$home = get_home_url(); 
$src = $home."/wp-content/uploads/icons/99_onbekend_zwart.svg";
?>
<img src="<?php echo $src; ?>" alt="">
    <label for="energy"><input type="radio" name="energy" value="other">Onbekend <a href="#otherModal" uk-toggle><i class="fas fa-question-circle"></i></a></label>
</div>
</div>

<div id="monoModal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"><strong>1 fase:</strong></h2>
        <p>
            Veel huizen zijn via een 1-fase-aansluiting aangesloten op het elektriciteitsnet. Bij een 1-fase-aansluiting komt een elektriciteitskabel uw huis binnen. In die kabel zitten twee draden: de fasedraad en de nuldraad. De spanning op uw stopcontacten is het verschil tussen die ene fasedraad en de nuldraad. Als u een 1-fase groepenkast in uw meterkast heeft staat er 220/230V op uw elektriciteitsmeter. De 1-fase-aansluiting is op de factuur van de energieleverancier te herkennen als 1x25/1x30A.
        </p>
        <button class="button primary is-outline uk-modal-close" type="button">Close</button>
    </div>
</div>

<div id="triModal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"><strong>3 fase:</strong></h2>
        <p>
            Bij een 3-fase aansluiting komen drie fasedraden van ieder 230 V uw meterkast binnen. En de nuldraad. De 3-fase aansluitingen zijn grotere aansluitingen dan de 1-fase-aansluitingen. Ze leveren een groter vermogen. Als u een 3-fasen groepenkast in uw meterkast heeft, staat er 3x220/230V of 380/400V op uw elektriciteitsmeter. Er komen in totaal ook vier draden  - de drie fasedraden en de nuldraad - uit de onderkant van uw groepenkast. De standaard huisaansluiting is de 3x25A-aansluiting.
        </p>
        <button class="button primary is-outline uk-modal-close" type="button">Close</button>
    </div>
</div>

<div id="otherModal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"><strong>Onbekend.</strong></h2>
        <p>U kunt op uw energierekening vinden of u een 1-fase of een 3-fase aansluiting heeft. Wanneer u zekerheid wilt, neem dan contact op met uw netwerkbeheerder</p>
        <button class="button primary is-outline uk-modal-close" type="button">Close</button>
    </div>
</div>

<style>	 
.buttsBox{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
}

.iconBox{
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-end;
}
.iconBox img{
 width: 2.375em;
 margin-bottom:0.313em;
}


</style>

<script>
    var energyPrice = document.getElementById("energyPrice");
    var energyButts = document.getElementsByName("energy");
    var pTag = <?php echo "\"".$pCats[0][0]."\""; ?>;
    var panelMin;
    var priceEv = new CustomEvent("price");
    var qty = new CustomEvent("qty");
    var prev = null;
    if(pTag == "Goed Pakket"){
	    panelMin = 18;
    } else if (pTag == "Beter Pakket") {
	    panelMin = 19;
    } else if (pTag == "Beste Pakket"){
        panelMin = 12;
    } 

    energyButts[0].addEventListener("change", function() {
        localStorage.setItem('energy', 'Mono');
        if (this !== prev) {
            prev = this;
        }
        document.dispatchEvent(priceEv);        
        document.dispatchEvent(qty);        
                var price = localStorage.getItem('solarPrice');         
                var tax = price*1.21;         
                tax = tax.toFixed(2);
	        energyPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
    });
    energyButts[1].addEventListener("change", function() {
        var panelQty = localStorage.getItem('panelQty');
        if (panelQty >= panelMin ) {
            localStorage.setItem('energy', 'Tri');
            if (this !== prev) {
                prev = this;
            }
            document.dispatchEvent(priceEv);
            document.dispatchEvent(qty);        
                    var price = localStorage.getItem('solarPrice');         
                    var tax = price*1.21;        
                     tax = tax.toFixed(2);
	        energyPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
        } else{
            alert('Option available for ' + panelMin + ' or more panels');
            this.checked = false;
            if(prev){
                prev.checked = true;
                energyButts[0].checked = true;
                energyButts[1].checked = false;
                energyButts[2].checked = false;
                localStorage.setItem('energy', 'Mono');
                document.dispatchEvent(priceEv);
                document.dispatchEvent(qty);
                var price = localStorage.getItem('solarPrice');         
                var tax = price*1.21;         
                tax = tax.toFixed(2);
    	        energyPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
            }
        }
    });
    energyButts[2].addEventListener("change", function() {
        localStorage.setItem('energy', 'Dontknow');
        if (this !== prev) {
            prev = this;
        }
        document.dispatchEvent(priceEv);        
        document.dispatchEvent(qty);
                var price = localStorage.getItem('solarPrice');         
                var tax = price*1.21;         
                tax = tax.toFixed(2);
	        energyPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
    });
    document.addEventListener("qty", function() {
        var panelQty = localStorage.getItem('panelQty');
        var energy = localStorage.getItem('energy');
        if (panelMin > panelQty && energy == "Tri") {
            energyButts[0].checked = true;
            energyButts[1].checked = false;
            energyButts[2].checked = false;
            prev = energyButts[0];
            localStorage.setItem('energy', 'Mono');
            document.dispatchEvent(priceEv);
        }
        var price = localStorage.getItem('solarPrice');         
        var tax = price*1.21;         
        tax = tax.toFixed(2);
        if(price != null){
	        energyPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
        }
    });    

    document.addEventListener("clear", function(){
            energyButts[0].checked = false;
            energyButts[1].checked = false;
            energyButts[2].checked = false;

    });  
</script>