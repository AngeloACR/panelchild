<?php 
/* Template Name:panelPeople */

global $product;
preg_match_all('~>\K[^<>]*(?=<)~', $product->get_categories(), $pCats);

?>

<div class="iBox">
<?php 
$home = get_home_url(); 
$src = $home."/wp-content/uploads/icons/15_personen_zwart.svg";
?>
<img src="<?php echo $src; ?>" alt="">
<p style="font-size: 18px" id="people"></p>
</div>

<div class="iBox">
<p style="font-size: 14px" id="sku"></p>
</div>

<style>
.iBox{
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
    align-items: center;
}
.iBox img{
 width: 2.375em;
 margin-right: 0.5em;
}
</style>

<script>
	var people = document.getElementById('people');
	var sku = document.getElementById('sku');
    skuInit = "<?php echo $product->get_sku();?>"
	var val1 = 6;
    var val2 = "Mono";
    var skuText = getSku(skuInit, val1, val2);
    var nPeople = calcPeople(val1, val2);
    people.textContent = nPeople;
    sku.textContent = skuText;
	document.addEventListener("qty", function () {
		val1 = localStorage.getItem('panelQty');
		val2 = localStorage.getItem('energy');
        nPeople = calcPeople(val1, val2);
        skuText = getSku(skuInit, val1, val2);
        people.textContent = nPeople;
        sku.textContent = skuText;
	});

function getSku(init, val1, val2){
    var sku = init;
    if( val2 == "Mono"){
        sku += "sf-";       
    } else{
        sku += "df-";
    }

    sku += val1;

    return sku;

}

function calcPeople(val1, val2){
var nPeople;

<?php
    if($pCats[0][0] == "Goed Pakket"){
        ?>
        if( val2=="Mono"){
            if(val1 >=6 && val1 <=9){
                nPeople = 1+" persoon";
            } else if(val1 >=10 && val1 <=13){
                nPeople = 2+" personen";
            } else if(val1 >=14 && val1 <=16){
                nPeople = 3+" personen";
            } else if(val1 >=17 && val1 <=19){
                nPeople = 4+" personen";
            } else if(val1 >=20 && val1 <=25){
                nPeople = 5+" personen";
            }
        } else{
            if(val1 >=18 && val1 <=20){
                nPeople = 5+" personen";
            } else if(val1 >=21 && val1 <=25){
                nPeople = 5+" pers + EV";
            }
        }
        <?php    
    } elseif ($pCats[0][0] == "Beter Pakket") {
        ?>
        if( val2=="Mono"){
            if(val1 >=6 && val1 <=9){
                nPeople = 1+" persoon";
            } else if(val1 >=10 && val1 <=12){
                nPeople = 2+" personen";
            } else if(val1 >=13 && val1 <=15){
                nPeople = 3+" personen";
            } else if(val1 >=16 && val1 <=17){
                nPeople = 4+" personen";
            } else if(val1 >=18 && val1 <=19){
                nPeople = 5+" personen";
            } else if(val1 >=20 && val1 <=25){
                nPeople = 5+" pers + EV";
            }
        } else{
            nPeople = 5+" pers + EV";
        }
        <?php
    } elseif ($pCats[0][0] == "Beste Pakket"){
        ?>
        if( val2=="Mono"){
            if(val1 >=6 && val1 <=8){
                nPeople = 1+" persoon";
            } else if(val1 >=9 && val1 <=11){
                nPeople = 2+" personen";
            } else if(val1 >=12 && val1 <=13){
                nPeople = 3+" personen";
            } else if(val1 >=14 && val1 <=15){
                nPeople = 4+" personen";
            } else if(val1 >=16 && val1 <=17){
                nPeople = 5+" personen";
            } else if(val1 >=18 && val1 <=25){
                nPeople = 5+" pers + EV";
            }

        } else{
            if(val1 >=12 && val1 <=13){
                nPeople = 3+" personen";
            } else if(val1 >=14 && val1 <=15){
                nPeople = 4+" personen";
            } else if(val1 >=16 && val1 <=17){
                nPeople = 5+" personen";
            } else if(val1 >=18 && val1 <=25){
                nPeople = 5+" pers + EV";
            }
        }
        <?php
    }    
    ?>
    return nPeople;
}

</script>