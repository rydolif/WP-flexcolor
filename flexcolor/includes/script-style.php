<?php
//------------------додавання css + js ----------------------
  function ewa_scripts() {
    //---------------css---------------------
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.min.css' );
    //---------------js---------------------
    wp_enqueue_script( 'main-sctipt', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '', true );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'ewa_scripts' );



//------------------підключення додаткових функцій для постов ----------------------
  function myfirsttheme_setup() {
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  }
  add_action( 'after_setup_theme', 'myfirsttheme_setup' );
  
  
//------------------подключение шрифтов------------------
  function wph_add_google_fonts() {
      if ( !is_admin() ) {
          wp_register_style('Arsenal', 'https://fonts.googleapis.com/css?family=Arsenal:400,700,800', array(), null, 'all');
          wp_register_style('Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900', array(), null, 'all');
          wp_register_style('Oswald', 'https://fonts.googleapis.com/css?family=Oswald:400', array(), null, 'all');
          wp_enqueue_style('Arsenal');
          wp_enqueue_style('Montserrat');
          wp_enqueue_style('Oswald');
      }
  }
  add_action('wp_enqueue_scripts', 'wph_add_google_fonts');