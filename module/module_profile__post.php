<?php function makeProfilePost ($url, $name, $date, $type, $desc) { ?>

<article>
	<h3><a href="<?php echo $url; ?>" target="_blank"><?php echo $name; ?></a><div class="date"><?php echo $date; ?></div></h3>
	<div class="role"><b><?php echo $type; ?></b></div>
	<p><?php echo $desc; ?></p>
</article>

<?php } ?>