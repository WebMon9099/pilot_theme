<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 * 
 * Template Name: User Guide
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="normal_header">
<div class="_wrapper"><a href="/user-guide"><img class="return-arrow" src="/parts/return_arrow.svg"></a><div class="_title"><a href="/user-guide">User Guide</a><img src="/parts/display_arrow.svg"><span><?php single_post_title(); ?></span></div></div>
	<div class="userguide_search_box"><?php echo do_shortcode('[ivory-search id="1119" title="Default Search Form"]'); ?>
	</div>
	<button class="search-icon-userguide" onclick="SearchBoxToggle()"></button>
</div>

<div class="flex-container">
	
	<div id="activity_menu_left">
		<?php dynamic_sidebar( 'userguide-page-sidebar' ); ?>
	</div>
<div id="userguide_wrapper">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="search-box-popover"><div><span id="close" onclick="document.getElementById('search-box-popover').style.display='none';"></span></div>
			<div><?php echo do_shortcode('[ivory-search id="2291" title="User Guide Mobile Search"]'); ?></div></div>
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>
<?php get_footer(); ?>
</div><!-- .content-area -->

</div>