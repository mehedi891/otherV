<?php

// css and js file enqueue

function cssJsFIleCall (){
    wp_enqueue_style( 'efl_styleCss', get_stylesheet_uri());
   
   wp_register_style( 'bootstrapMinCSS', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'bootstrapMinCSS');

    wp_register_style( 'font-awesomeMinCSS', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'font-awesomeMinCSS');

    wp_register_style( 'uicons-regular-rounded', get_template_directory_uri().'/assets/css/uicons-regular-rounded.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'uicons-regular-rounded');

    wp_register_style( 'flaticon', get_template_directory_uri().'/assets/fonts/flaticon.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'flaticon');


    wp_register_style( 'animateCSS', get_template_directory_uri().'/assets/css/animate.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'animateCSS');

    wp_register_style( 'owl.carouselCSS', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'owl.carouselCSS');

    wp_register_style( 'off-canvaslCSS', get_template_directory_uri().'/assets/css/off-canvas.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'off-canvaslCSS');

    wp_register_style( 'magnific-popupCSS', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'magnific-popupCSS');

    wp_register_style( 'rsmenu-mainCSS', get_template_directory_uri().'/assets/css/rsmenu-main.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'rsmenu-mainCSS');

    wp_register_style( 'rs-spacingCSS', get_template_directory_uri().'/assets/css/rs-spacing.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'rs-spacingCSS');

    wp_register_style( 'rs-spacingCSS', get_template_directory_uri().'/assets/css/rs-spacing.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'rs-spacingCSS');

    wp_register_style( 'responsiveCSS', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.1.0', 'all' );
    wp_enqueue_style( 'responsiveCSS');



    
  
   
    wp_enqueue_script( 'modernizr-2.8.3.min.js', get_template_directory_uri().'/assets/js/modernizr-2.8.3.min.js', array(), '1.1.0', true );

    wp_enqueue_script( 'jquery.min.js', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '1.1.0', true );

    wp_enqueue_script( 'bootstrap.min.js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '1.1.0', true );

    wp_enqueue_script( 'jquery.nav.js', get_template_directory_uri().'/assets/js/jquery.nav.js', array(), '1.1.0', true );

    wp_enqueue_script( 'owl.carousel.min.js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), '1.1.0', true );

    wp_enqueue_script( 'wow.min.js', get_template_directory_uri().'/assets/js/wow.min.js', array(), '1.1.0', true );

    wp_enqueue_script( 'skill.bars.jquery.js', get_template_directory_uri().'/assets/js/skill.bars.jquery.js', array(), '1.1.0', true );

    wp_enqueue_script( 'imagesloaded.pkgd.min.js', get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js', array(), '1.1.0', true );

    wp_enqueue_script( 'waypoints.min.js', get_template_directory_uri().'/assets/js/waypoints.min.js', array(), '1.1.0', true );

    wp_enqueue_script( 'jquery.counterup.min.js', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array(), '1.1.0', true );

    wp_enqueue_script( 'jquery.magnific-popup.min.js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array(), '1.1.0', true );

    wp_enqueue_script( 'contact.form.js', get_template_directory_uri().'/assets/js/contact.form.js', array(), '1.1.0', true );

    wp_enqueue_script( 'main.js', get_template_directory_uri().'/assets/js/main.js', array(), '1.1.0', true );

      
   
    //call google fonts
   //  wp_register_style( 'robotoMerryFont','https://fonts.googleapis.com/css2?family=Merriweather&family=Roboto&family=The+Nautigal:wght@700&display=swap',false);
   
  }
   
   add_action('wp_enqueue_scripts' , 'cssJsFIleCall');