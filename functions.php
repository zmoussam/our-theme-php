<?php
if ( ! function_exists( 'our_theme_setup' ) ) :

function our_theme_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'our_theme', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'our_theme' ),
        'social'  => __( 'Social Links Menu', 'our_theme' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // our_theme_setup

add_action( 'after_setup_theme', 'our_theme_setup' );


if ( ! function_exists( 'our_theme_init' ) ) :

function our_theme_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // our_theme_setup

add_action( 'init', 'our_theme_init' );


if ( ! function_exists( 'our_theme_custom_image_sizes_names' ) ) :

function our_theme_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'our_theme_custom_image_sizes_names' );
endif;// our_theme_custom_image_sizes_names



if ( ! function_exists( 'our_theme_widgets_init' ) ) :

function our_theme_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'our_theme_widgets_init' );
endif;// our_theme_widgets_init



if ( ! function_exists( 'our_theme_customize_register' ) ) :

function our_theme_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'our_theme_customize_register' );
endif;// our_theme_customize_register


if ( ! function_exists( 'our_theme_enqueue_scripts' ) ) :
    function our_theme_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'our_theme-bqkiqy' );
    wp_enqueue_script( 'our_theme-bqkiqy', 'https://use.typekit.net/bqk7iqy.js', false, null, false);

    wp_register_script( 'inline-script-1', '', [], '', false );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', 'try { Typekit.load(); } catch (e) { }');

    wp_register_script( 'inline-script-2', '', [], '', false );
    wp_enqueue_script( 'inline-script-2' );
    wp_add_inline_script( 'inline-script-2', '!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);');

    wp_deregister_script( 'our_theme-script' );
    wp_enqueue_script( 'our_theme-script', 'https://www.googletagmanager.com/gtag/js?id=UA-170946935-1', false, null, false);

    wp_register_script( 'inline-script-3', '', [], '', false );
    wp_enqueue_script( 'inline-script-3' );
    wp_add_inline_script( 'inline-script-3', 'window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag(\'js\', new Date()); gtag(\'config\', \'UA-170946935-1\', { \'anonymize_ip\': false });');

    wp_register_script( 'inline-script-4', '', [], '', false );
    wp_enqueue_script( 'inline-script-4' );
    wp_add_inline_script( 'inline-script-4', '/* Pinegrow Interactions, do not remove */ (function(){try{if(!document.documentElement.hasAttribute(\'data-pg-ia-disabled\')) { window.pgia_small_mq=typeof pgia_small_mq==\'string\'?pgia_small_mq:\'(max-width:767px)\';window.pgia_large_mq=typeof pgia_large_mq==\'string\'?pgia_large_mq:\'(min-width:768px)\';var style = document.createElement(\'style\');var pgcss=\'html:not(.pg-ia-no-preview) [data-pg-ia-hide=""] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show=""] {opacity:1;visibility:visible;display:block;}\';if(document.documentElement.hasAttribute(\'data-pg-id\') && document.documentElement.hasAttribute(\'data-pg-mobile\')) {pgia_small_mq=\'(min-width:0)\';pgia_large_mq=\'(min-width:99999px)\'} pgcss+=\'@media \' + pgia_small_mq + \'{ html:not(.pg-ia-no-preview) [data-pg-ia-hide="mobile"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="mobile"] {opacity:1;visibility:visible;display:block;}}\';pgcss+=\'@media \' + pgia_large_mq + \'{html:not(.pg-ia-no-preview) [data-pg-ia-hide="desktop"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="desktop"] {opacity:1;visibility:visible;display:block;}}\';style.innerHTML=pgcss;document.querySelector(\'head\').appendChild(style);}}catch(e){console&&console.log(e);}})()');

    wp_deregister_script( 'our_theme-jquerydcefc' );
    wp_enqueue_script( 'our_theme-jquerydcefc', 'https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5e25b46a2e290c729bdd91ed', false, null, true);

    wp_deregister_script( 'our_theme-metricallccf' );
    wp_enqueue_script( 'our_theme-metricallccf', 'https://assets.website-files.com/5e25b46a2e290c729bdd91ed/js/metricallc.86cf45226.js', false, null, true);

    wp_register_script( 'inline-script-5', '', [], '', true );
    wp_enqueue_script( 'inline-script-5' );
    wp_add_inline_script( 'inline-script-5', '$(\'a.brand,.home-brand,.tab-link-content,.nav-link,.rel-im-wrap,.footer-logo-link,.H-58 Link\').click(function (e) {
            e.preventDefault();
            var goTo = this.getAttribute("href");

            setTimeout(function () {
                window.location = goTo;
            }, 700);
        });

        Webflow.push(function () {
            $(\'form\').attr(\'autocomplete\', \'off\');
        });');

    wp_deregister_script( 'our_theme-pgia' );
    wp_enqueue_script( 'our_theme-pgia', get_template_directory_uri() . '/pgia/lib/pgia.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'our_theme-metricallcaff' );
    wp_enqueue_style( 'our_theme-metricallcaff', 'https://assets.website-files.com/5e25b46a2e290c729bdd91ed/css/metricallc.213a85f2f.css', false, null, 'all');

    wp_deregister_style( 'our_theme-bqkiqy' );
    wp_enqueue_style( 'our_theme-bqkiqy', 'https://use.typekit.net/bqk7iqy.css', false, null, 'all');

    wp_deregister_style( 'our_theme-style' );
    wp_enqueue_style( 'our_theme-style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'our_theme_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";

    /* Pinegrow generated Include Resources End */
?>