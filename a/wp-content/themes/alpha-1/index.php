<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?> <?php wp_title('|'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container">
	<div id="header">
		<h1>
			<a href="<?php echo home_url(); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</h1>
		<p><?php bloginfo('description'); ?></p>
	</div><!--//header-->
	<div id="main">
		<div id="sidebar">
			<h2>Menu</h2>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'main_menu',
					/*'fallback_cb' => false,
					'menu_class' => 'jb-menu',*/
				));
			?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Right Sidebar") ) : ?>
<?php endif; ?>
		</div><!--//sidebar-->
		<div id="content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="jb-post-list">
					<h2>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<p>
						<?php echo get_the_date(); ?> <?php echo get_the_time(); ?> | <?php the_author(); ?> | <?php the_tags( $before, $sep, $after ); ?> | Category : <?php the_category(', '); ?>
					</p>
					<?php
						if ( has_post_thumbnail() ) {
							the_post_thumbnail( array(100,100), array( 'class' => 'jb-thumbnail', ) );
						}
					?>
					<?php if ( is_home() || is_category() || is_tag() ) {
						the_excerpt();
					} else {
						the_content();
					} ?>
				</div>
			<?php endwhile; else: ?>
				<h2>Sorry!</h2>
			<?php endif; ?>
		</div><!--//content-->
	</div><!--//main-->
	<div id="footer">
		<h3>&copy; <?php bloginfo('name'); ?></h3>
	</div><!--//footer-->
</div><!--//container-->
<?php wp_footer(); ?>
</body>
</html>