<?php
/**
 * The template for displaying skills and helpful reading posts
 * 
 * Template Name: Military Institutions
 *
 * Template Post Type: post
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div id="test_header">
	<div class="_title">
<a href="/knowledgebase">Knowledgebase</a> <span>
		<img src="/parts/display_arrow_kb.svg">
		<?php
$get_cat        = get_the_category();
$first_cat      = $get_cat[0];
$category_name  = $first_cat->cat_name;
$category_link  = get_category_link( $first_cat->cat_ID ); ?>
		<a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo esc_attr( $category_name ); ?>"><?php echo esc_html( $category_name ); ?></a></span></div>
	<a href="/tools/focus-articles"><div class="focus_articles_badge"><?php echo user_focused_articles_count(); ?></div></a>
	<div class="kb_search_box"><?php echo do_shortcode('[ivory-search id="951" title="Default Search Form"]'); ?>
	</div>
	<button class="search-icon" onclick="SearchBoxToggle()"></button>
</div>

<?php get_sidebar(); ?>
<div id="search-box-popover"><div><span id="close" onclick="document.getElementById('search-box-popover').style.display='none';"></span></div>
			<div><?php echo do_shortcode('[ivory-search id="983" title="Knowledgebase Mobile Search"]'); ?></div></div>
<div id="test_div">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'militaryinstitutions' );

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation(
					array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
					)
				);
			}

			// End of the loop.
		endwhile;
		?>
<?php get_footer(); ?>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
</div>
