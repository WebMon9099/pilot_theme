<?php
/**
 * The template part for displaying single posts within the 'Alternate Template'.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<style>

.floating-menu ul {max-height: 26vh; overflow-y: auto;}

/* width */
.floating-menu ul::-webkit-scrollbar {
    width: 5px;
}

/* Track */
.floating-menu ul::-webkit-scrollbar-track {
    width: 5px;
    opacity: 0.5;
}

/* Handle */
.floating-menu ul::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 0px;
    width: 5px;
}

/* Handle on hover */
.floating-menu ul::-webkit-scrollbar-thumb:hover {
    background: #aaa;
    cursor: pointer !important;
}

</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="post-header-container" style="border-top: 1px solid <?php the_field('article-color-2'); ?>; background: linear-gradient(to right, <?php the_field('article-color-2'); ?>, <?php the_field('article-color-2'); ?>, <?php the_field('article-color-2'); ?>95);"><div class="post-header" style="background-image: url('/parts/other-preparation/white_aircraft.png'); background-repeat: no-repeat; background-position-y: 40%;"><?php the_title(); ?> <span class="hidden">Information</span> <span>2024</span></div></div>
	
	<div class="floating-menu">
	<div class="floating-menu-title" style="background-color: <?php the_field('article-color-3'); ?>">Contents</div>
	<ul>
	<li><a href="#about">About <?php the_title(); ?></a></li>
	<li><a href="#breakdown-of-assessment">How is it assessed?</a></li>
	<li><a href="#breakdown-of-assessment">Why is it assessed?</a></li>
	<li><a href="#breakdown-of-assessment">Improving this Skill</a></li>
	<li><a href="#using-our-software">Using our Software</a></li>
	<li><a href="#faq">Frequently Asked Questions</a></li>
	</ul>
	<?php if(!is_user_logged_in()): ?>
	<div class="product"><p>Preparation Software for the</br><span><?php the_field('associated-product'); ?></span></p>
	<img src="<?php the_field('screenshot'); ?>">
	<a href="/purchase-start"><div class="button">Buy now <span>from £29</span></div></a></div>
	<?php else: // Else show this. ?>
	<a href="<?php the_field('activity-link'); ?>"><div class="button-blue"><span>Jump to</span> Activities</div></a>
	<?php endif; ?>
	</div>
	
	<header class="entry-header">
	
		<div class="header_text_container">
			
			<div class="_alt" style="border-bottom: 2px solid <?php the_field('article-color'); ?>"><span><?php the_title(); ?></span> in Pilot Assessments</div></br>
		<div class="update-data"><?php printf( __( '<b>Updated:</b> %s', 'textdomain' ), get_the_modified_date('j\<\s\u\p\>S\<\/\s\u\p\> M Y') ); ?></div>
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
		

<?php if(!is_user_logged_in()): ?>
<div id="module-purchase" style="border-left: 3px solid <?php the_field('article-color'); ?>">
<div class="purchase-information">
<div class="purchase-header">Preparation Software for the <span style="color: #34424C"><?php the_field('associated-product'); ?></span></div>
<div class="purchase-description">
Use our software in your web browser on PC, Mac, iPhone and Android to prepare for the <?php the_title(); ?> test.</div>
<div class="purchase-benefits">
<p>Feature-packed and one-of-a kind preparation software for your assessment.</p>
<p>Regularly updated, realistic and infinite simulations of aptitude tests.</p>
<p>Instant activation, fast support and uniquely in-depth guidance.</p>

</div>
</div>
<div class="purchase-options" style="background-color: #f3f3f3">
<div class="devices"><img src="<?php the_field('screenshot'); ?>"></div>
<?php echo do_shortcode('[average_rating_slim button="no" link="/about"]'); ?>
<a href="#"><div class="main-purchase-devices" style="background-color: #7ce027">Buy now from £29</div></a>


<a class="other-purchase-options" href="/features">or, learn about our features</a>
</div>
</div>
<?php else: // Else show this. ?>
<?php endif; ?>
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

