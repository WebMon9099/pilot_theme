<?php

/**
 * The template for displaying archive pages
 *
 * Template Name: Archives for Helpful Reading
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="test_header">
	<div class="_title">
		<a href="/knowledgebase">Knowledgebase</a>
	</div><a href="/tools/focus-articles">
		<div class="focus_articles_badge"><?php echo user_focused_articles_count(); ?></div>
	</a>
	<div class="kb_search_box"><?php echo do_shortcode('[ivory-search id="951" title="Default Search Form"]'); ?>
	</div>
	<button class="search-icon" onclick="SearchBoxToggle()"></button>
</div>
<div id="search-box-popover"><div><span id="close" onclick="document.getElementById('search-box-popover').style.display='none';"></span></div>
			<div><?php echo do_shortcode('[ivory-search id="983"]'); ?></div></div>
<?php get_sidebar(); ?>
<div id="test_div">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if (have_posts()) { ?>

				<header class="page-header">
					<a href="/knowledgebase"><img class="kb_back_arrow" src="/parts/return_arrow.svg"></a>
					<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
				</header><!-- .page-header -->
				<?php the_archive_description('<div id="taxonomy-description">', '</div>'); ?>

					
								<div class="category_container_helpful_reading"> 
									<ul>
										<?php foreach ($posts as $post) { ?>
										<li><a style="border-top: 3px solid <?php the_field('article-color'); ?>" href="<?php echo get_permalink($post->ID) ?>">
											<div class="article_title"><?php echo $post->post_title ?></div>
												<div class="contributor">Contributed by:
												<img src="<?php the_field('contributor-image'); ?>">
												</div><div class="article_img"><?php echo get_the_post_thumbnail(); ?></div></a></li>
										<?php } ?>
									</ul>
								</div>
							
					

				
			<?php } ?>

		</main><!-- .site-main -->
		<?php get_footer(); ?>
	</div><!-- .content-area -->

</div>