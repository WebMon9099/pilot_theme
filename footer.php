<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->
</br>
		<footer id="colophon" class="site-footer" role="contentinfo">
			
				<?php if(is_user_logged_in()): ?>
<div id="footer_container">	
				<ul>
					<li><a href="/about">About</a></li>
					<li><a href="/updates">Updates</a></li>
					<li><a href="/frequently-asked-questions">FAQ</a></li>
					<li><a href="/terms-conditions">Terms</a></li>
					<li><a href="/privacy-policy">Privacy</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
				<img src="/parts/footer_logo.svg">
			</div>
<?php else: // Else show this. ?>
<div style="border-top: 1px solid #ddd;">
			</div>
<div id="public_footer_container">
<div class="_third">
	<b>Preparation for:</b>
	<a href="/preparation-aspiring-pilots">Aspiring Pilots</a>
	<a href="/preparation-cadet-schemes">Cadet Schemes</a>
	<a href="/preparation-experienced-pilots">Experienced Pilots</a>
	<a href="/preparation-low-cost-carriers">Low-Cost Carriers</a>
</div>

<div class="_third">
	<b>Trending Pilot Assessments</b>
	<a href="/indigo-cadet-pilot-programme">IndiGo Pilot Cadet Scheme</a>
	<a href="/british-airways-speedbird-pilot-academy">BA Speedbird Pilot Academy</a>
	<a href="/scoot-airlines">Scoot Airlines</a>
	<a href="/leading-edge">Leading Edge</a>
	<a href="/delta-air-lines-propel">Delta Air Lines Propel</a>
</div>	

<div class="_third_last">
	<b>Need help with your preparation?</b>
	<p class="_whatsapp">Send a message to <span>020 3745 41 42</span> or click <a href="https://wa.me/+442034754142">here</a>.</p>
	<p class="_facebook">To send us a message via Facebook Chat, click <a href="https://facebook.com/pilotaptitudetest">here</a>.</p>
	<p class="_email">Send your message to <span>support@pilotaptitudetest.com</span>.</p>
</div>	
	
			</div>
			
<div id="_base">
	<img src="/parts/logo_footer.svg">
	<div class="_menu">
		<ul>
					<li><a href="/about">About</a></li>
					<li><a href="/updates">Updates</a></li>
					<li><a href="/frequently-asked-questions">FAQ</a></li>
					<li><a href="/terms-conditions">Terms</a></li>
					<li><a href="/privacy-policy">Privacy</a></li>
					<li><a href="/contact">Contact</a></li>
				</ul>
	</div>
			</div>
			
			
<?php endif; ?>
			
			<!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
