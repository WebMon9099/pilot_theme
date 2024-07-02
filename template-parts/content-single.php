<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<div class="backdrop"></div>

<div class="box">
  <div class="close">x</div>
  Text goes here.
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<a href="/category/airlines"><img class="kb_back_arrow" src="/parts/return_arrow.svg"><div class="back_to_link">Back to Airlines</div></a>
	<header class="entry-header" style="background-image: url(/parts/article_page_bg_airlines.svg);">
		<div class="post_thumbnail_holder"><div class="post_thumbnail" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div></div>
		<div class="header_text_container">
			
		<div class="_alt">How to prepare for the </br><span style="color: <?php the_field('article-color'); ?>"><?php the_title(); ?></span> pilot assessment</div>
		<div class="modification_date"><?php the_modified_date(); ?></div></br>
		</div>
	
	</header><!-- .entry-header -->

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

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
			?>
<div id="module-purchase" style="border-left: 3px solid <?php the_field('article-color'); ?>">
<div class="purchase-information">
<div class="purchase-header">Preparation Software for <span style="color: <?php the_field('article-color'); ?>"><?php the_title(); ?></span></div>
<div class="purchase-description">
Use our software in your web browser on PC, Mac, iPhone and Android to prepare for the pilot aptitude test
you’ll complete in the <?php the_title(); ?> selection process.</div>
<div class="purchase-benefits">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
</div>
<div class="pat_helper_purchase_module">
<b>Do you have more questions?</b>
<p>If you have more questions, or need to prepare for a different airline, we can answer your questions.</br> 
Speak with us on <a href="#">Whatsapp Messenger</a>, <a href="#">Facebook Chat</a> or via <a href="#">Email</a>.</p>
</div>
</div>
<div class="purchase-options" style="background-color: #f3f3f3">
<div class="devices"><img src="/parts/dummy_devices.png" <="" div="">
<span class="su-lightbox" data-mfp-src="#new-payment" data-mfp-type="inline" data-mobile="yes"><div class="main-purchase-devices" style="background-color: <?php the_field('article-color'); ?>">Buy Now</div></span>


<a class="other-purchase-options" href="#">Instant activation, 365 days-a-year</a>
</div>
</div>
</div>

</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

<div class="mobile-footer">
	<span class="su-lightbox" data-mfp-src="#new-payment" data-mfp-type="inline" data-mobile="yes"><a href="#" class="mobile-footer-inner" style="background-color: <?php the_field('article-color'); ?>">Buy Now</a></span>
	<div class="mobile-footer-description">Text description goes here</div>
</div>

