<?php 
//get theme options
$options = get_option( 'toilamit_options' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
    <?php 
    if(isset($options['google_analytic'])) {
      echo $options['google_analytic'];
    }
    ?>
	</head>
<body <?php body_class(); ?>>
	<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">ToiLam☼IT</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <?php 
        wp_nav_menu( array( 
          'theme_location' => 'main-menu',
          'menu_id'        => 'top-menu',
          'menu_class' => 'navbar-nav ml-auto',

          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'navbarResponsive',
        ) ); 
        ?>
    </nav>

    <!-- Page Header -->
    <?php if(is_singular()) { ?>
    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post-heading">
              <h1><?php the_title(); ?></h1>
              <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
              <span class="meta">
                <i class="fa fa-user-o"></i> <?php the_author_posts_link(); ?>&nbsp;
                <i class="fa fa-calendar"></i> <?php the_time( get_option( 'date_format' ) ); ?>
              </span>
            </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </header>

    <?php } else { ?>
      
    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Toilam IT</h1>
              <span class="subheading">A hard IT, A hard Job</span>
            </div>
          </div>
        </div>
      </div>
    </header>
    <?php } ?>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
        

    
<?php if(0) { ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<section id="branding">
<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
</section>
<nav id="menu" role="navigation">
<div id="search">
<?php get_search_form(); ?>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">
<?php } ?>