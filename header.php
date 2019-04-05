<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html prefix="og: http://ogp.me/ns#">
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122228703-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-122228703-1');
  </script>
  <meta name="google-site-verification" content="t61CI7nodhTTvutGegYzTMIQwAENoPQZa4fcS4um_18" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5">
	<meta name="revisit-after" content="7 days">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- MANIFESTO -->
	<!-- <link rel="manifest" href="../../../../manifest.json"> -->
	<!-- DADOS ESTRUTURADOS - SCHEMA.ORG -->
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "https://agatamacsaude.com.br",
        "logo": "https://agatamacsaude.com.br/favicon/android-icon-512x512.png",
        "description": "Soluções em Seguros e Benefícios para Empresas",
        "additionalType": "http://www.productontology.org/doc/Business_consultant",
        "telephone" : "+55-11-94288-0299",
        "email" : "contato@agatamacsaude.com.br",
        "name" : "Agata Mac",
        "address" : {
          "@type" : "PostalAddress",
          "addressCountry" : "BR",
          "addressLocality" : "São Paulo",
          "addressRegion" : "Barueri",
          "postalCode" : "06454-050",
          "streetAddress" : "Alameda Grajaú, 129 - Alphaville"
        },
        "sameAs" : [ "https://www.facebook.com/agatamacsaude", "https://www.linkedin.com/company/agatamac/", "https://www.instagram.com/agatamacseguros/" ],
        "contactPoint": [{
          "@type": "ContactPoint",
          "telephone": "+55-11-94288-0299",
          "email": "contato@agatamacsaude.com.br",
          "contactType": "sales",
          "areaServed": "BR",
          "availableLanguage": ["Portuguese"]
        }]
      }
    </script>
	<!-- META DATA -->
  	<?php //$categoriaDoPost = get_the_category(); ?>
  	<?php //if (get_post()->post_title) { $metaTitulo = get_post()->post_title . ' | ' . $categoriaDoPost[0]->name; } elseif (the_title()) { $metaTitulo =  the_title(); } else { $metaTitulo =  'na Vila Leopoldina'; }; ?>
  	<!-- <meta name="title" content="<?php echo $metaTitulo; ?>"> -->
    <!-- Indexação Yandex -->
    <meta name="yandex-verification" content="283ab20adb485523" />
    <!-- Indexação Bing -->
    <meta name="msvalidate.01" content="664FE5587421AFE4E8F8B58DDFE7C737" />
    <meta name="identifier-URL" content="https://agatamacsaude.com.br">
    <meta name="url" content="https://agatamacsaude.com.br">
    <meta name="abstract" content="Soluções em Seguros para Empresas | Seguro Saúde, Vida, Viagem, Auto, Odontológico e Gestão de Benefícios">
    <meta name="author" content="Marcelo Diament, Djament Comunicação">
    <meta name="robots" content="index,follow">
    <meta name="contact" content="webmaster@agatamacsaude.com.br">
    <meta name="reply-to" content="webmaster@agatamacsaude.com.br">
    <meta name="copyright" content="Agata Mac">
    <meta name="rating" content="general">
    <meta name="web_author" content="Djament Comunicação">
	<!-- MOBILE SPECS -->
    <meta name="application-name" content="Agata Mac">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Agata Mac"> 
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="theme-color" content="#227aaa">
    <link async defer rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link async defer rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>
  <script src='https://www.google.com/recaptcha/api.js?render=6Lfm4oAUAAAAAH7BNk-0GPWKUMumcYgM9Pi7kfC_'></script>
	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		// echo '<div class="single-featured-image-header">';
		// echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		// echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<main>
