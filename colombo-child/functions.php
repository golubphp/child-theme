
<?php
# ---------------------------------------------------
# THEME FEATURES
# ---------------------------------------------------

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

/* Add Post Thumbnail */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array('post', 'page', 'news') );

?>

<?php
# ---------------------------------------------------
# ENQUEUE SCRIPTS
# ---------------------------------------------------

function theme_register_scripts() {

	wp_register_style('add_bootstrap',get_stylesheet_directory_uri().'/assets/bootstrap-4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('add_bootstrap');
	
	wp_register_script('add_jQuery',get_stylesheet_directory_uri().'/assets/jQuery/jquery-3.3.1.min.js');
	wp_enqueue_script('add_jQuery');
	
	wp_register_script('add_bootstrap_js',get_stylesheet_directory_uri().'/assets/bootstrap-4.3.1/js/bootstrap.min.js');
	wp_enqueue_script('add_bootstrap_js');
	
	wp_register_script('cst_js',get_stylesheet_directory_uri().'/assets/jQuery/custom_js.js');
	wp_enqueue_script('cst_js');
	
	wp_register_style('main_style',get_stylesheet_directory_uri().'/style.css');
	wp_enqueue_style('main_style');
	

 
}

add_action( 'wp_enqueue_scripts', 'theme_register_scripts', 1 );

?>

<?php
# ---------------------------------------------------
# ADDING CUSTOM POST TYPE NEWS
# ---------------------------------------------------

function news_posttypes() {
    
    $labels = array(
        'name'               => 'News List',
        'singular_name'      => 'News',
        'menu_name'          => 'News',
        'name_admin_bar'     => 'News',
        'add_new'            => 'Add News',
        'add_new_item'       => 'Add New News',
        'new_item'           => 'New News',
        'edit_item'          => 'Edit News',
        'view_item'          => 'View News',
        'all_items'          => 'All News',
        'search_items'       => 'Search News',
        'parent_item_colon'  => 'Parent News:',
        'not_found'          => 'No News found.',
        'not_found_in_trash' => 'No News found in Trash.',
    );
    
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'novosti' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-star-half',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'featured image' ),
		'taxonomies'         => array( 'category', 'post_tag' ),
    );
    register_post_type( 'news', $args );
}
add_action( 'init', 'news_posttypes' );

// Flush rewrite rules to add "review" as a permalink slug
function news_rewrite_flush() {
    news_posttypes();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'news_rewrite_flush' );

?>

<?php 


?>

<?php 
# ---------------------------------------------------
# REMOVE SCREEN READER TEXT FROM POST PAGINATION
# ---------------------------------------------------

function sanitize_pagination($content) {
    // Remove h2 tag
    $content = preg_replace('#<h2.*?>(.*?)<\/h2>#si', '', $content);
    return $content;
}
 
add_action('navigation_markup_template', 'sanitize_pagination');

?>

<?php
# ---------------------------------------------------
# ADD BOOTSTRAP NAV WALKER CLASS FOR MENU
# ---------------------------------------------------

get_template_part('wp-bootstrap-navwalker');

?>

<?php
# ---------------------------------------------------
# REGISTER COLOMBO NAV MENU
# ---------------------------------------------------

register_nav_menus( array(
    'colombo_menu' => __( 'Colombo_Menu', 'Marjan_Blog' ),
));

?>

<?php
# ---------------------------------------------------
# EXCERPT FOR LOOPS
# ---------------------------------------------------

/* Usage: <?php echo excerpt(100); ?> */

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'';
    } else {
    $excerpt = implode(" ",$excerpt);
    } 
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( '<i><b> Read More </b><i class="far fa-paper-plane"></i> </i>', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>



