<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 * 
 * Template Name: Activity Page
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div id="normal_header">
	<div class="_wrapper">
		<a href="/activities">
			<img class="return-arrow" src="/parts/return_arrow.svg">
		</a>
		<div class="_title">
			<a href="/activities">Activities</a>
			<img src="/parts/display_arrow.svg">
			<span><?php single_post_title(); ?></span>
		</div>
	</div>
</div>

<div class="flex-container">
	
	<div id="activity_menu_left">
		<?php dynamic_sidebar( 'activity-page-sidebar' ); ?>
	</div>

	<div id="activity_page_wrapper">
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
			<?php get_footer(); ?>
		</div><!-- .content-area -->
	</div>
	
</div>

<div class="video-modal">
      <div class="video-container">
        <video id="video"></video>
        <div class="control">
          <div class="btmControl">
            <div class="btnPlay btn" title="Play/Pause video">
              <span class="icon-play"></span>
            </div>
            <div class="progress-bar">
              <div class="progress">
                <span class="bufferBar"></span>
                <span class="timeBar"></span>
              </div>
            </div>
            <!--<div class="volume" title="Set volume">
					<span class="volumeBar"></span>
				</div>-->
            <div class="sound sound2 btn" title="Mute/Unmute sound">
              <span class="icon-sound"></span>
            </div>
            <div class="btnFS btn" title="Switch to full screen">
              <span class="icon-fullscreen"></span>
            </div>
          </div>
        </div>
      </div>
    </div>