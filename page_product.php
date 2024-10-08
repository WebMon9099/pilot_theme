<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 * 
 * Template Name: Products
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

			require_once get_stylesheet_directory() . '/css/activity-shortcodes.php';
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
  "image": "<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>",
  "offers": {
    "@type": "Offer",
    "price": "29.99",
    "priceCurrency": "GBP"
  }
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetElement = document.querySelector('.feedback');
            if (targetElement) {
                const offset = 160; // Scroll to 160px above the element
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>
<style>
#pat-sales-notifications {bottom: 83px !important}
@media screen and (max-width: 490px) {#pat-sales-notifications {bottom: 100px !important}}
</style>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
<div id="public-sidebar" class="public-sidebar">
      <div class="public-sidebar-title">Information about Activities</div>
      <p id="sidebar-content"></p>
</div>
<div id="overlay" class="overlay"></div>
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