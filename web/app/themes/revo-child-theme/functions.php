<?php 

add_action( 'wp_enqueue_scripts', 'ya_enqueue_styles' );
function ya_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


add_filter( 'woocommerce_eu_vat_number_country_codes', 'woo_custom_eu_vat_number_country_codes' );
function woo_custom_eu_vat_number_country_codes( $vat_countries ) {
// only show field for users in BE
return array( 'EC' );
}