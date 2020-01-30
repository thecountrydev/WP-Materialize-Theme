<?php
/**
 * @package WordPress
 * @subpackage themename
 */

/**
 * Make theme available for translation
 * Translations can be filed in the /languages/ directory
 */
load_theme_textdomain( 'themename', get_template_directory() . '/languages' );

$locale = get_locale();
$locale_file = get_template_directory() . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
    require_once( $locale_file );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
    $content_width = 640;

/**
 * Add jQuery
 */
function add_jquery_script() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}
add_action('wp_enqueue_scripts', 'add_jquery_script');




/**
 * Remove code from the <head>
 */
//remove_action('wp_head', 'rsd_link'); // Might be necessary if you or other people on this site use remote editors.
//remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
//remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
//remove_action('wp_head', 'index_rel_link'); // Displays relations link for site index
//remove_action('wp_head', 'wlwmanifest_link'); // Might be necessary if you or other people on this site use Windows Live Writer.
//remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
//remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
//remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_filter( 'the_content', 'capital_P_dangit' ); // Get outta my Wordpress codez dangit!
remove_filter( 'the_title', 'capital_P_dangit' );
remove_filter( 'comment_text', 'capital_P_dangit' );
// Hide the version of WordPress you're running from source and RSS feed // Want to JUST remove it from the source? Try: remove_action('wp_head', 'wp_generator');
/*function hcwp_remove_version() {return '';}
add_filter('the_generator', 'hcwp_remove_version');*/
// This function removes the comment inline css
/*function twentyten_remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );*/




    // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'piranha' ),
        ) );



function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/[.+]/','', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}


/**
 * Remove meta boxes from Post and Page Screens
 */
function customize_meta_boxes() {
    /* These remove meta boxes from POSTS */
    //remove_post_type_support("post","excerpt"); //Remove Excerpt Support
    //remove_post_type_support("post","author"); //Remove Author Support
    //remove_post_type_support("post","revisions"); //Remove Revision Support
    //remove_post_type_support("post","comments"); //Remove Comments Support
    //remove_post_type_support("post","trackbacks"); //Remove trackbacks Support
    //remove_post_type_support("post","editor"); //Remove Editor Support
    //remove_post_type_support("post","custom-fields"); //Remove custom-fields Support
    //remove_post_type_support("post","title"); //Remove Title Support


    /* These remove meta boxes from PAGES */
    //remove_post_type_support("page","revisions"); //Remove Revision Support
    //remove_post_type_support("page","comments"); //Remove Comments Support
    //remove_post_type_support("page","author"); //Remove Author Support
    //remove_post_type_support("page","trackbacks"); //Remove trackbacks Support
    //remove_post_type_support("page","custom-fields"); //Remove custom-fields Support

}
add_action('admin_init','customize_meta_boxes');

/**
 * This theme uses wp_nav_menus() for the header menu, utility menu and footer menu.
 */
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'themename' ),
    'footer' => __( 'Footer Menu', 'themename' ),
    'utility' => __( 'Utility Menu', 'themename' )
) );

/**
 * Add default posts and comments RSS feed links to head
 */
add_theme_support( 'automatic-feed-links' );

/**
 * This theme uses post thumbnails
 */
add_theme_support( 'post-thumbnails' );

/**
 *  This theme supports editor styles
 */

add_editor_style("/css/layout-style.css");

/**
 * Remove superfluous elements from the admin bar (uncomment as necessary)
 */
function remove_admin_bar_links() {
    global $wp_admin_bar;

    //$wp_admin_bar->remove_menu('wp-logo');
    //$wp_admin_bar->remove_menu('updates');
    //$wp_admin_bar->remove_menu('my-account');
    //$wp_admin_bar->remove_menu('site-name');
    //$wp_admin_bar->remove_menu('my-sites');
    //$wp_admin_bar->remove_menu('get-shortlink');
    //$wp_admin_bar->remove_menu('edit');
    //$wp_admin_bar->remove_menu('new-content');
    //$wp_admin_bar->remove_menu('comments');
    //$wp_admin_bar->remove_menu('search');
}
//add_action('wp_before_admin_bar_render', 'remove_admin_bar_links');

/**
 *  Replace the default welcome 'Howdy' in the admin bar with something more professional.
 */
function admin_bar_replace_howdy($wp_admin_bar) {
    $account = $wp_admin_bar->get_node('my-account');
    $replace = str_replace('Howdy,', 'Welcome,', $account->title);
    $wp_admin_bar->add_node(array('id' => 'my-account', 'title' => $replace));
}
add_filter('admin_bar_menu', 'admin_bar_replace_howdy', 25);

/**
 * This enables post formats. If you use this, make sure to delete any that you aren't going to use.
 */
//add_theme_support( 'post-formats', array( 'aside', 'audio', 'image', 'video', 'gallery', 'chat', 'link', 'quote', 'status' ) );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function handcraftedwp_widgets_init() {
    register_sidebar( array (
        'name' => __( 'Sidebar', 'themename' ),
        'id' => 'sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s" role="complementary">',
        'after_widget' => "</aside>",
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ) );
}
add_action( 'init', 'handcraftedwp_widgets_init' );

/*
 * Remove senseless dashboard widgets for non-admins. (Un)Comment or delete as you wish.
 */
function remove_dashboard_widgets() {
    global $wp_meta_boxes;

    //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']); // Plugins widget
    //unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']); // WordPress Blog widget
    //unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); // Other WordPress News widget
    //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']); // Right Now widget
    //unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']); // Quick Press widget
    //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']); // Incoming Links widget
    //unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']); // Recent Drafts widget
    //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // Recent Comments widget
}

/**
 *  Hide Menu Items in Admin
 */
function themename_configure_dashboard_menu() {
    global $menu,$submenu;

    global $current_user;
    get_currentuserinfo();

    // $menu and $submenu will return all menu and submenu list in admin panel

    // $menu[2] = ""; // Dashboard
    // $menu[5] = ""; // Posts
    // $menu[15] = ""; // Links
    // $menu[25] = ""; // Comments
    // $menu[65] = ""; // Plugins

    // unset($submenu['themes.php'][5]); // Themes
    // unset($submenu['themes.php'][12]); // Editor
}


// For non-admins, add action to Hide Dashboard Widgets and Admin Menu Items you just set above
// Don't forget to comment out the admin check to see that changes :)
if (!current_user_can('manage_options')) {
    add_action('wp_dashboard_setup', 'remove_dashboard_widgets'); // Add action to hide dashboard widgets
    add_action('admin_head', 'themename_configure_dashboard_menu'); // Add action to hide admin menu items
}


add_filter ( 'post_class' , 'my_post_class' );
global $current_class;
$current_class = 'odd';

function my_post_class ( $classes ) {
    global $current_class;
    $classes[] = $current_class;

    $current_class = ($current_class == 'odd') ? 'even' : 'odd';

    return $classes;
}


?>
<?php // asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet
//   change the UA-XXXXX-X to be your site's ID
/*add_action('wp_footer', 'async_google_analytics');
function async_google_analytics() { ?>
    <script>
    var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
        (function(d, t) {
            var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
            g.async = true;
            g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s);
        })(document, 'script');
    </script>
<?php }*/ ?>
<?php /*
 * A default custom post type. DELETE from here to the end if you don't want any custom post types
 */
/*add_action('init', 'create_boilertemplate_cpt');
function create_boilertemplate_cpt()
{
  $labels = array(
    'name' => _x('HandcraftedWPTemplate CPT', 'post type general name'),
    'singular_name' => _x('HandcraftedWPTemplate CPT Item', 'post type singular name'),
    'add_new' => _x('Add New', 'handcraftedwptemplate_robot'),
    'add_new_item' => __('Add New Item'),
    'edit_item' => __('Edit Item'),
    'new_item' => __('New Item'),
    'view_item' => __('View Item'),
    'search_items' => __('Search Items'),
    'not_found' =>  __('No items found'),
    'not_found_in_trash' => __('No items found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'page',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor')
  );
  register_post_type('handcraftedwptemplate_robot',$args);
}*/
/*
 * This is for a custom icon with a colored hover state for your custom post types. You can download the custom icons here
 http://randyjensenonline.com/thoughts/wordpress-custom-post-type-fugue-icons/
 */
/*add_action( 'admin_head', 'cpt_icons' );
function cpt_icons() {
    ?>
    <style type="text/css" media="screen">
        #menu-posts-handcraftedwptemplaterobot .wp-menu-image {
            background: url(<?php bloginfo('template_url') ?>/images/robot.png) no-repeat 6px -17px !important;
        }
        #menu-posts-handcraftedwptemplaterobot:hover .wp-menu-image, #menu-posts-handcraftedwptemplaterobot.wp-has-current-submenu .wp-menu-image {
            background-position:6px 7px!important;
        }
    </style>
<?php }*/ ?>
