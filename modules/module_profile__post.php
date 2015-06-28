<?php function makeProfilePost ($url, $name, $date, $type, $desc) { ?>

<article class="medium-10 column right">
	<div class="row">
		<h3 class="medium-8 column"><a href="<?php echo $url; ?>" target="_blank"><?php echo $name; ?></a></h3>
		<div class="date medium-4 column medium-text-right"><?php echo $date; ?></div>
	</div>
	<div class="row">
		<div class="role column"><b><?php echo $type; ?></b></div>
		<p class="column"><?php echo $desc; ?></p>
	</div>
</article>

<?php } ?>