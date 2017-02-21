	</div><!-- #content -->

	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="social-icons">
			<?php social_icons_list(); ?>
		</div>

		<div class="site-info">
			<?php printf( __( 'Powered by %s, Designed By %s', 'undiscovered' ), '<a href="http://wordpress.org/" rel="generator">WordPress</a>', '<a href="http://www.themeshaker.com/" rel="designer">Themeshaker</a>' ); ?>
			<br />
			<?php printf( __( 'Copyright &copy; %s %s', 'undiscovered' ), date('Y'), get_bloginfo('name') ); ?>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
