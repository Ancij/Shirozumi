<footer class="footer row no-margin">
	<div class="col-xs-12 center-xs">
		<p>Made with <span class="color-red">❤</span> by <a href="http://twitter.com/lauserk">Kildare</a></p>
	</div>
</footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<?php 
		wp_enqueue_script('home', get_template_directory_uri() . '/assets/js/home.js"', array ( 'jquery' ), 1.0, true);
	?>
	<?php wp_footer(); ?>
</body>
</html>