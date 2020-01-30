<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="chrome=1">

    <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'themename' ), max( $paged, $page ) );

        ?></title>

        <meta name="author" content="">
        <!--  Mobile Viewport Fix -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Place favicon.ico and apple-touch-icons in the images folder -->

        <link rel='stylesheet' id='Materialize-css'  href="<?php echo get_template_directory_uri(); ?>/css/materialize.min.css" type='text/css' media='all' />
        <link rel='stylesheet' id='main-styles'  href="<?php echo get_template_directory_uri(); ?>/style.css" type='text/css' media='all' />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="container ">
            <div class="row">
                <div class="col s12 m12 l12 site-nav">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="material-icons">menu</i></button>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </nav> 
                </div>
            </div>
        </div> 
    </header>