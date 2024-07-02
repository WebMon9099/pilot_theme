<?php

/**
 * The template for displaying archive pages
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
				<?php
				if (is_category()) {
					$this_category = get_category($cat);
				}

				$sub_categories = get_categories(
					["child_of" => $this_category->cat_ID]
				);

				if ($sub_categories) { ?>

					<ul>
						<?php foreach ($sub_categories as $category) {
							$posts = get_posts(
								["category" => $category->cat_ID]
							);
						?>
							<li>
								<div class="category_container"> 
									<div class="category_header">
										<img src="<?php echo z_taxonomy_image_url($category->cat_ID) ?>" style="object-fit: contain;">
											<?php echo $category->name ?>
									</div>
									<ul>
										<?php foreach ($posts as $post) { ?>
										<li><a style="border-right: 3px solid <?php the_field('article-color'); ?>" href="<?php echo get_permalink($post->ID) ?>">
											<div class="white_gradient"></div><?php echo get_the_post_thumbnail(); ?> <div class="article_title"><?php echo $post->post_title ?></div>
											</a></li>
										<?php } ?>
									</ul>
								</div>
							</li>
						<?php } ?>
					</ul>

				<?php } ?>
			<?php } ?>

		</main><!-- .site-main -->
		<?php get_footer(); ?>
	</div><!-- .content-area -->

</div>