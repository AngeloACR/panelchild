<?php 
/* Template Name:installButts */

global $product;

?>

<h4 style="color:#ff6600;">Installateur: <span style="font-size: 16px; color:black;" id="installPrice"></span></h4>

<div class="buttsBox">
<div class="iconBox">
<?php 
$home = get_home_url(); 
$src = $home."/wp-content/uploads/icons/12_diy_zwart.svg";
?>
<img src="<?php echo $src; ?>" alt="">
<label for="install"><input type="radio" name="install" value="own">Doe het zelf <a href="#ownModal" uk-toggle><i class="fas fa-question-circle"></i></a></label>
</div>
<div class="iconBox">
<?php 
$home = get_home_url(); 
$src = $home."/wp-content/uploads/icons/13_elektricien_zwart.svg";
?>
<img src="<?php echo $src; ?>" alt="">
<label for="install"><input type="radio" name="install" value="elec">Elektromonteur <a href="#elecModal" uk-toggle><i class="fas fa-question-circle"></i></a></label>
</div>
<div class="iconBox">
<?php 
$home = get_home_url(); 
$src = $home."/wp-content/uploads/icons/14_geinstalleerd_zwart.svg";
?>
<img src="<?php echo $src; ?>" alt="">
<label for="install"><input type="radio" name="install" value="full">Volledig geïnstallerd <a href="#fullModal" uk-toggle><i class="fas fa-question-circle"></i></a></label>
</div>
</div>

<div id="ownModal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"><strong>Doe het zelf:</strong></h2>
        <p>
            Bent u handig of heeft u mensen in uw omgeving die verstand hebben van het installeren van zonnepanelen? Dan is zelf installeren verreweg de goedkoopste optie. Let op dat u veiligheidsmaatregelen neemt. Denk aan valbescherming, het plaatsen van stellingen en zekeringen en dergelijke. Mocht u er niet zeker van zijn of het aansluiten of het installeren van zonnepanelen binnen uw macht ligt, kies dan voor een elektromonteur of een volledige installatie.
        </p>
        <button class="button primary is-outline uk-modal-close" type="button">Close</button>
    </div>
</div>

<div id="elecModal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"><strong>Elektromonteur:</strong></h2>
        <p>
            De elektromonteur zorgt ervoor dat uw panelen goed worden aangesloten op de omvormer en de omvormer goed wordt aangesloten op de meterkast. <br>
            Wat doet de elektromonteur: <br>
            <ul>
                <li>Doormeten van alle zonnepanelen of ze goed zijn aangesloten.</li>
                <li>Aansluiten van de zonnepanelen op de omvormer.</li>
                <li>Aansluiten van omvormer op de meterkast.</li>
            </ul><br>
            Wat moet u voorbereiden: <br>
            <ul>
                <li>Zorg ervoor dat de elektromonteur overal goed bij kan.</li>
                <li>Zorg ervoor dat wanneer u meerdere strings hebt, duidelijk is welke draden bij elkaar horen.</li>
                <li>Zorg ervoor dat eventuele gaten naar de omvormer en naar de meterkast geboord zijn.</li>
            </ul> <br>
            Wat doet de elektromonteur niet:
            <ul>
                <li>Alle overige activiteiten en installaties doet de elektromonteur niet.</li>
            </ul>

</p>
        <button class="button primary is-outline uk-modal-close" type="button">Close</button>
    </div>
</div>

<div id="fullModal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"><strong>Volledig geïnstalleerd:</strong></h2>
        <p>
        U hoeft niks zelf te doen als u kiest voor een volledige installatie. De installateur zal de panelen, bekabeling en alles wat u verder nodig heeft meenemen en aansluiten. Hij zal zorgdragen dat de panelen netjes op uw dak worden gemonteerd. Ook zorgt de de installateur voor de aansluiting van de zonnepanelen op de omvormer en de omvormer op de meterkast. <br>
        Let op: <br>
        <ul>
            <li>1. De installateur boord geen gaten in betonnen vloeren, maar zal in overleg met u een geschikte route voor de bekabeling vinden.</li>
            <li>2. De installateur moet de mogelijkheid hebben om een stelling te plaatsen waar dat nodig is voor de veiligheid.</li>
            <li>3. Mochten er bijzonderheden zijn, kan het zijn dat de installatie niet op dezelfde dag kan worden afgerond.     </li>
        </ul> 
   
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
}
.iconBox img{
 width: 2.375em;
 margin-bottom:0.313em;
}

.buttsBox{
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
}
</style>

<script>
    var installPrice = document.getElementById("installPrice");
    var installButts = document.getElementsByName("install");
    var priceEv = new CustomEvent("price");
    installButts[0].addEventListener("change", function() {
        localStorage.setItem('install', 'Own');
        document.dispatchEvent(priceEv);
                var price = localStorage.getItem('installPrice');         
                var tax = price*1.21;         
                tax = tax.toFixed(2);
	        installPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
    });
    installButts[1].addEventListener("change", function() {
        localStorage.setItem('install', 'Electrician');
        document.dispatchEvent(priceEv);
        var price = localStorage.getItem('installPrice')
        var price2 = localStorage.getItem('installPrice2')
	    var total = parseInt(price)+parseInt(price2);
        var tax = total*1.21;         
        tax = tax.toFixed(2);
        installPrice.textContent = "€ " + total + " exc. BTW  / € " + tax + " inc. BTW";
    });
    installButts[2].addEventListener("change", function() {
        localStorage.setItem('install', 'Full Installed');
        document.dispatchEvent(priceEv);
                var price = localStorage.getItem('installPrice');         
                var tax = price*1.21;         
                tax = tax.toFixed(2);
	        installPrice.textContent = "€ " + price + " exc. BTW / € " + tax + " inc. BTW";
    });
    document.addEventListener("qty", function() {
            var price2 = parseFloat(localStorage.getItem('installPrice2'));         
            var price = parseFloat(localStorage.getItem('installPrice'));
            var energy = localStorage.getItem('energy');
            if(price2){
                price += price2;
                price = price.toFixed(2);
            }
            var tax = price*1.21;         
            tax = tax.toFixed(2);
            if(price && energy){
	        installPrice.textContent = "€ " + price + " exc. BTW  / € " + tax + " inc. BTW";
        }
    }); 
    document.addEventListener("clear", function(){
            installButts[0].checked = false;
            installButts[1].checked = false;
            installButts[2].checked = false;
    });

</script>