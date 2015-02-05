<?php
/**
 * Footer
 *
 * @package thatcamp
 * @since thatcamp 1.0
 */
?>
				</div>
			</div>
			<?php do_action( 'bp_after_container' ); ?>
			<div id="logos-wrapper">
				<div id="logos"  class="wrapper">
					<a href="http://chnm.gmu.edu/" title="CHNM.gmu.edu">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/RCHN-logo.png" alt="RCHN"/>
					</a>

					<a href="http://mellon.org/" title="Mellon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mellon.png" alt="Mellon" class="nospace"/>
					</a>
					<a href="http://mellon.org/" title="Mellon">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mellonlogo.png" alt="Mellon"/>
					</a>
					
				</div>
			</div>
			<?php do_action( 'bp_before_footer'   ); ?>
			<div id="footer-wrapper">
			<footer id="bottom-footer" class="wrapper" role="contentinfo">
				<nav id="bottom-nav" role="navigation">
					<div id="copyright"> 
					<a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cc.png" alt="Creative Commons"/>
					</a></div>
					<div id="credits"><?php do_action( 'bp_dtheme_credits' ); ?></div>
					<?php wp_nav_menu( array(
						'theme_location' => 'bottom', 
						'menu_class' => 'bottom_menu',
						'container' => ''
					));?>
				</nav>
				<?php do_action( 'bp_footer' ); ?>
			</footer>
		</div>
		<?php do_action( 'bp_after_footer' ); ?>
		<?php wp_footer(); ?>
	</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-17135423-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
