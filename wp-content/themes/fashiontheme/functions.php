<?php
/**
 * functions.php is the file where you can control all the logics behind your website
 * You can even change how WordPress works because this file is called very early in the process of building the pages
 *
 * @since 1.0.0
 * @version 1.0.0
 * 
 * @see  https://developer.wordpress.org/reference/functions/add_action/
 * @see  https://developer.wordpress.org/reference/functions/add_theme_support/
 * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
 * @see  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @see  https://developer.wordpress.org/reference/functions/remove_action/
 */

/**
 * whenever you see an add_action( 'moment', 'nameofthefunction' ) call it means we want to add a function with the name 'nameofthefunction' to the list of things to do in that 'moment'
 * 
 * @see  https://developer.wordpress.org/reference/functions/add_action/
 */

// Non facciamo altro che cambiare la versione del nostro tema (così da aggiornarlo) usando time() che restituirà sempre un numero diverso
define('WPE_VERSION', WPE_IS_STAGING ? time() : '1.0.1');
// Se l'utente è l'amministratore può scrivere testi
define('WPE_IS_ADMIN', current_user_can( 'edit_others_posts' ) );

function wpe_setup() {
    /**
     * add_theme_support will be used to add some functionalities
     * 
     * @see https://developer.wordpress.org/reference/functions/add_theme_support
     * @see  https://developer.wordpress.org/block-editor/developers/themes/theme-support/
     */
    
        add_theme_support("post-thumbnails");
        // adds support for the HTML title tag, autocompiled by WP
        add_theme_support("title-tag");
        // adds WP support for all gutemberg default blocks
        add_theme_support("wp-block-styles");
        add_theme_support("align-wide");
        add_theme_support( 'responsive-embeds' );
        register_nav_menus( ['main_menu' => 'Menu Principale' ] );    
    }
    
    /**
     * in questa funzione quando definiamo la prima variabile quello sarà il MOMENTO in cui parte ed esegue il contenuto della funzione. In questo caso dopo 'after_setup_theme'
     * si esegue wpe_setup
     */
    add_action ('after_setup_theme', 'wpe_setup');

    function wpe_widgets_registration(){
    
        register_sidebar([
            'name' => 'Footer',
            'id' => 'footer',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ]);
        
    }
    add_action( 'widgets_init', 'wpe_widgets_registration' );
    
    /**
     * enqueue SCRIPTS and STYLES the way WordPress wants them to be
     * 
     * @see  https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     */
    function wpe_styles_scripts(){
        
        // enqueue our style.css file
        wp_enqueue_style( 'wpe-reset', get_stylesheet_directory_uri().'/style.css', array(), WPE_VERSION, 'all' );
        wp_enqueue_style( 'wpe-style', WPE_INCLUDES.'css/main.css', array( 'wpe-reset' ), WPE_VERSION, 'all' );
        
        // // remove jquery and add scripts
        // wp_deregister_script('jquery');
        // wp_enqueue_script( 'wpe_animation', 'https://unpkg.com/aos@next/dist/aos.js' , array() , null , 'all');
        // wp_enqueue_script( 'wpe_script', WPE_INCLUDES.'js/index.js' , array('wpe_animation') , null , 'all');
        // wp_enqueue_script( 'wpe_single-proj', WPE_INCLUDES.'js/single-proj.js' , array('wpe_script') , null , 'all');

    }
    add_action( 'wp_enqueue_scripts', 'wpe_styles_scripts' );
    
    // enqueue_block_editor_assets – For enqueueing JavaScript and CSS in the admin editor.
    add_action( 'enqueue_block_editor_assets', 'wpe_styles_scripts' );
    
    /**
     * Remove the default emoji styles slowing down the website
     *
     * @see  https://developer.wordpress.org/reference/functions/remove_action/
     */
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    add_action('acf/init', 'wpe_acf_blocks_init');

function wpe_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'square',
            'title'             => 'Quadrato',
            'description'       => 'Un quadratino colorato',
            'render_template'   => 'template-parts/blocks/square/square.php',
            'category'          => 'formatting',
        ));


        // Register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'project',
            'title'             => 'Progetto',
            'description'       => 'Progetto da mostrare nella homepage',
            'render_template'   => 'template-parts/blocks/project.php',
            'category'          => 'formatting',
        ));
    }
}

    
    