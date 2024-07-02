<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
					<div class="error">
						<img src="/parts/broken_link_img.svg">
						<h1>We can't find that :(</h1>
						<h3>
							We are unable to locate the resource you are looking for, it may have moved or been deleted.
						</h3>
					</div>
				
				<!-- .page-header -->

				<div class="page-content"><div class="error_menu">
		
<?php if ( is_user_logged_in() ) { ?>

Here are some helpful links instead:</br></br>
					<a href="/dashboard">Dashboard</a></br>
					<a href="/activities">Activities</a></br>
					<a href="/performance">Performance</a></br>
					<a href=/targets>Targets</a></br>
					<a href="/planner">Planner</a>		
					
<?php } else { ?>
    
Here are some helpful links instead:</br></br>
					<a href="/about">About</a></br>
					<a href="/features">Features</a></br>
					<a href="/frequently-asked-questions">FAQ</a></br>
					<a href="/contact">Contact Us</a>


<?php } ?>		

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
