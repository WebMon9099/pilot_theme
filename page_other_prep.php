<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 * 
 * Template Name: Other Prep
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

			require_once get_stylesheet_directory() . '/css/activity-shortcodes-expanded.php';
get_header(); 
?>
<?php
echo do_shortcode('[pat_sales_notifications]');
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "<?php the_title(); ?>",
  "image": "https://pilotaptitudetest.com/parts/other-preparation/featured-images/<?php the_field('product_image'); ?>.png",
  "offers": {
    "@type": "Offer",
    "price": "29.99",
    "priceCurrency": "GBP"
  }
}
</script>
<style>
#pat-sales-notifications {bottom: 83px !important}
@media screen and (max-width: 490px) {#pat-sales-notifications {bottom: 100px !important}}
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
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

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>