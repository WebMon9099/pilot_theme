<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 * 
 * Template Name: User Guide for Activities
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<style>
.site-header {display: none !important;} .flex-container {margin-top: 57px; overflow-x: hidden; overflow-y: scroll; height: calc(100vh - 57px);}

@media only screen and (max-width: 768px) {.su-tabs-mobile-stack .su-tabs-nav span {display: inline-block !important;}}
.su-tabs {padding: 10px 0px 0px 0px !important;}
.su-tabs-nav span {margin: 0px 10px !important; transition: none !important;}	
.su-tabs-nav {overflow-x: scroll; white-space: nowrap;}
.su-tabs-nav::-webkit-scrollbar {display: none;}

.su-tabs-nav span.su-tabs-current:nth-child(1) {border-top: 3px solid #666;}
.su-tabs-nav span.su-tabs-current:nth-child(2) {border-top: 3px solid #d079f1; border-top-left-radius: 3px;border-top-right-radius: 3px;}
.su-tabs-nav span.su-tabs-current:nth-child(3) {border-top: 3px solid #ff822c;}
.su-tabs-nav span.su-tabs-current:nth-child(4) {border-top: 3px solid #73B3C6;}
.su-tabs-nav span.su-tabs-current:nth-child(5) {border-top: 3px solid #8cde5d;}

.su-tabs-nav span {color: #aaa !important;}
.su-tabs-nav span.su-tabs-current {color: #646464 !important;}
</style>

<div id="userguide_internal_header">
<div class="_wrapper"><div class="_title"><?php single_post_title(); ?></div>
<a href="javascript:window.open('','_self').close();"><div class="_exit"><img src="/parts/exit_button.svg"></div></a></div>
</div>

<div class="flex-container">
	
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
<!-- .content-area -->

</div>