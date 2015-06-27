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