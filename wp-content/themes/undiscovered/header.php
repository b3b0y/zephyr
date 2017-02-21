<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

<?php if ( is_front_page() ) {?>
	<header id="masthead" class="zephyr-header" role="banner">
		<div class="col-md-6 logo">
			<?php if ( undiscovered_options( 'logotype' ) ) : ?>
				<a class="logotype-img" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo undiscovered_options( 'logotype' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
			<?php else : ?>
				<a class="logotype-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
		</div>
		<div class="col-md-6">

					<div class="button_container">
						<div class="search-icon">
							<i class="fa fa-search" aria-hidden="true"></i>
						</div>
						<div class="button-menu" id="toggle">
							<span class="top"></span>
							<span class="middle">
							</span><span class="bottom">
							</span>
						</div>
					</div>
					<div class="overlay" id="overlay">
						<nav class="overlay-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Work</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
					</div>
			</div>


		</div>
	</header>
	<div id="banner" style="background: url('<?php echo (has_post_thumbnail()) ? get_the_post_thumbnail_url() : get_the_post_thumbnail_url('2'); ?> ') no-repeat ;background-size: cover;">
		<div class="banner-content">
			 <div class="col-md-12">
				 <div class="banner-title" >
						<?php the_field('title'); ?>
					</div>
					<div class="banner-description" >
						 <?php the_field('description'); ?>
					 </div>
					 <a href="<?php the_field('button_url'); ?>">
						<button class="banner-btn"><?php the_field('button_text'); ?></button>
					 </a>
			 </div>
		</div>
	</div>
<?php } else {
	}?>
	<div id="content" class="site-content">
