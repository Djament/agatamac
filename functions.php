<?php



function agatamac_enqueue_styles() {



    $parent_style = 'twentyseventeen-style';



    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'agatamac-style',

        get_stylesheet_directory_uri() . '/style.css',

        array( $parent_style ),

        wp_get_theme()->get('Version')

    );

}

add_action( 'wp_enqueue_scripts', 'agatamac_enqueue_styles' );



/* Página de opções */

if( function_exists('acf_add_options_page') ) {

	

	acf_add_options_page(array(

		'page_title' 	=> 'Extra',

		'menu_title'	=> 'Extra',

		'menu_slug' 	=> 'extra-settings',

		// 'capability'	=> 'edit_posts',

		'redirect'		=> false,

		'menu_icon' => 'dashicons-megaphone'

	));

	

}



/* Retorna o URI do tema filho*/

function get_template_directory_child() {

    $directory_template = get_template_directory_uri(); 

    $directory_child = str_replace('twentyseventeen', '', $directory_template) . 'agatamac';

    return $directory_child;

}



/* Tira o termo prefixo - como 'Categoria: ' - antes do título da vitrine */

function agatamac_archive_title( $title ) {

    if ( is_category() ) {

        $title = single_cat_title( '', false );

    } elseif ( is_tag() ) {

        $title = single_tag_title( '', false );

    } elseif ( is_author() ) {

        $title = '<span class="vcard">' . get_the_author() . '</span>';

    } elseif ( is_post_type_archive() ) {

        $title = post_type_archive_title( '', false );

    } elseif ( is_tax() ) {

        $title = single_term_title( '', false );

    }

  

    return $title;

}

 

add_filter( 'get_the_archive_title', 'agatamac_archive_title' );





/* Customizando a página de login */



	/* Logo */

	function agatamac_login_logo() { ?>

	    <style type="text/css">

	        #login h1 a, .login h1 a {

	            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);

				height:109px;

				width:123px;

				background-size: 109px 123px;

				background-repeat: no-repeat;

	        	padding-bottom: 30px;

	        }

	    </style>

	<?php }

	add_action( 'login_enqueue_scripts', 'agatamac_login_logo' );



	/* Link */

	function agatamac_login_logo_url() {

	    return home_url();

	}

	add_filter( 'login_headerurl', 'agatamac_login_logo_url' );



	/* Link Title */

	function agatamac_login_logo_url_title() {

	    return 'Agata Mac | Consultoria e Soluções em Seguro Empresarial';

	}

	add_filter( 'login_headertitle', 'agatamac_login_logo_url_title' );



	/* Mensagem */

	function agatamac_login_message(){

		return '<h1 style="text-align:center;">Agata Mac</h1><br/><h3 style="text-align:center;">Soluções em Seguro Empresarial</h3>';

	}

	add_filter( 'login_message', 'agatamac_login_message' );



	/* Botão */

	function agatamac_login_stylesheet() {

	    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );

	    // wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );

	}

	add_action( 'login_enqueue_scripts', 'agatamac_login_stylesheet' );





/* Admin Panel Style */



function my_admin_theme_style() {

    wp_enqueue_style('my-admin-style', get_stylesheet_directory_uri() . '/style-login.css');

}

add_action('admin_enqueue_scripts', 'my_admin_theme_style');





/* Adicionando página ao Dashboard */

	function add_custom_dashboard_widgets() { 

	    wp_add_dashboard_widget(

	                 'agatamac_dashboard_widget', // Widget slug.

	                 'Agata Mac | Soluções em Seguro Empresarial', // Title.

	                 'custom_dashboard_widget_content' // Display function.

	        );

	}

	add_action( 'wp_dashboard_setup', 'add_custom_dashboard_widgets' );

 

	/* Create the function to output the contents of your Dashboard Widget. */



	function custom_dashboard_widget_content() {

	    echo '

	    	<img src="' . get_stylesheet_directory_uri() . '/images/logo.png)" title="Agata Mac | Soluções em Seguros para Empresas" alt""Agata Mac | Soluções em Seguros para Empresas" height="50" width="auto" style="height:auto;width:80%;padding:10%"/>

	    	<p>Através desse painel é possível incluir páginas, posts e realizar uma série de outras edições de conteúdo.</p>

	    	<p>Em caso de dúvidas, entre em contato com a Djament Comunicação através do email <a href="mailto:contato@djament.com.br" title="Enviar email para Djament">contato@djament.com.br</a>. Obrigado!</p>

	    ';

	}

?>