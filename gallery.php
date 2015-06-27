<?php include_once("elements/head.php"); ?>
	<?php include_once("elements/header.php"); ?>
	<div id="image-container">
		
		<!-- Move gallery code to separate module file -->
		<?php
		// GET IMAGES IN ARRAY
		$dir='img/gallery';
		$dir_handle = opendir($dir);
		while (false !== ($file = readdir($dir_handle))) {
			if ($file != '.' && $file != '..') {
				$currentModified = filectime($dir."/".$file);
				$images[] = $file;
				$image_dates[] = $currentModified;
			}
		}
		closedir($dir_handle);

		// Sorting dates by newest first
		arsort($image_dates);

		//Match images array to image_dates array
	    $file_names_Array = array_keys($image_dates);
	    foreach ($file_names_Array as $idx => $name) $name=$images[$name];
	    $image_dates = array_merge($image_dates);
	    
	    $i = 0;

	    //Loop through dates array and then printing the image-HTML
	    foreach ($image_dates as $image_dates){
	        $date = $image_dates;
	        $j = $file_names_Array[$i];
	        $image = $images[$j];
	        $i++;
	            
	        print '<div><img src="img/gallery/' . $image . '" /></div>';        
	    }
		
		?>

	</div>
	<!--<?php include_once("elements/footer.php"); ?> -->
	<script>
		$(document).ready(function () {
			$("#image-container").justifiedGallery();
		});
	</script>
<?php include_once("elements/foot.php"); ?>