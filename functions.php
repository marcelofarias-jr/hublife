<?php 
	// função para carregar estilos
	function carrega_styles(){
			wp_enqueue_style( 'template', get_template_directory_uri() . 'assets/css/style.css', array (), '1.0', 'all' );
			wp_enqueue_style( 'template', get_template_directory_uri() . 'CSS/bootstrap.min.css', array (), '1.0', 'all' );

	}
	add_action( 'wp_enqueue_style', 'carrega_styles');

	function carrega_script(){
		 wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
		 wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ) );
	}
	add_action('wp_enqueue_script', 'carrega_script');
	//chamando o title
	add_theme_support('title-tag');
 ?>