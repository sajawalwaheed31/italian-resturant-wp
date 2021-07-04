


<?php
	add_theme_support('menus');

    add_theme_support('widgets');

	function register_widgets_area() {
		register_sidebar(
			array(
				'name'=>'Footer 1',
				'id'=>'footer_1'
			)
		);
		register_sidebar(
			array(
				'name'=>'Footer 2',
				'id'=>'footer_2'
			)
		);
		register_sidebar(
			array(
				'name'=>'Footer 3',
				'id'=>'footer_3'
			)
		);
		register_sidebar(
			array(
				'name'=>'Footer 4',
				'id'=>'footer_4'
			)
		);
        register_sidebar(
			array(
				'name'=>'Footer 5',
				'id'=>'footer_5'
			)
		);
		
	}

	add_action('widgets_init', 'register_widgets_area');



    if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page();
		
	}


	
?>







