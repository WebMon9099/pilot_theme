<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="help-menu">
				<div class="help-menu-inner">
					<div class="help-nav-bar">
						<div class="close-help"></div><div class="help-tab-title">Help for <span><?php the_title(); ?></span></div>	
					</div>
					<div class="help-scrollable-container">
					<?php the_field('help_text'); ?>
					<div class="help-menu-inner-bottom">
						<a href="/user-guide">Go to User Guide</a>
					</div>	
					</div>
					
				</div>
			</div>	

<div class="payment-info-menu">
				<div class="payment-info-inner">
					<div class="info-nav-bar">
						<div class="close-info"></div><div class="info-tab-title"><span>Using our Preparation Software</span></div>	
					</div>
					<div class="info-scrollable-container">
					<?php the_field('help_text'); ?>
					</div>
					
				</div>
			</div>	

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php
		edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
		?>

</article><!-- #post-<?php the_ID(); ?> -->
