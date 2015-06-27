<footer>
	<div class="wrapper">
		<div class="contact">
			Laget av <span class="primarytextcolor">Ole Kristian Aune</span> &copy; <?php echo date("Y"); ?>
		</div>
		<?php include_once('modules/module_social_buttons.php'); ?>
	</div>
</footer>
<!-- Loading scripts at the end of the page -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>
<script src="bower_components/Justified-Gallery/dist/js/jquery.justifiedGallery.js"></script>
<script>
$("#image-container").justifiedGallery({
	rowHeight : 200,
	lastRow : 'justify',
	captions : false,
	margins : 3,
	border : 0,
	waitThumbnailsLoad : false
});
</script>
<script src="js/min/scripts-min.js"></script>
</body>
</html>