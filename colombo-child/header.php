<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>
	<?php get_template_part( 'menu', get_post_format() ); ?>







        
        

        
     	
       
