<?php
// Add custom Theme Functions here

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );
function my_theme_enqueue_styles() {
 
	$parent_style = 'parent-style';
	
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_head', 'fontAwesome');
function fontAwesome(){
	?>
	<script src="https://kit.fontawesome.com/2652a50924.js" crossorigin="anonymous"></script>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/css/uikit.min.css" />

	<!-- UIkit JS -->
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit-icons.min.js"></script>
	<?php
}

add_action( 'wp_footer', 'setDefaults');
function setDefaults() {
?>
	<script>
		var clear = new CustomEvent("clear");    
		window.onload = function() {
            localStorage.setItem('panelQty', '6');
            localStorage.removeItem('install');
            localStorage.removeItem('roof');
            localStorage.removeItem('roofDir');
            localStorage.removeItem('roofColor');
			localStorage.removeItem('energy');
			localStorage.removeItem('solarPrice');
			localStorage.removeItem('roofPrice');
			localStorage.removeItem('installPrice');
			localStorage.removeItem('installPrice2');
			localStorage.removeItem('table');
            document.dispatchEvent(clear);
		};
		document.addEventListener("DOMContentLoaded", function(){

            document.dispatchEvent(clear);   
    });

	</script>
<?php
}

include_once('panelshorts.php');
include_once('toCart.php');
