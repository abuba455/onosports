
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head() ?>

</head>

<body <?php body_class(); ?>>
<div class="container">
 <header class="site-header">
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h4><?php bloginfo( 'description' ); ?></h4>
    <nav class="navigation-menu">
        <?php $args = [ 'theme_location' => 'primary' ]; ?>
			<?php wp_nav_menu() ?>
        </nav>
</header> 



<hr>