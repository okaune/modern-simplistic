<?php function makeHeroButton ($link, $class, $icon, $title) { ?>

<a href="<?php echo $link; ?>">
	<div class="<?php echo $class; ?>">
		<svg class="icon">
				<use xlink:href="<?php echo $icon; ?>" />
		</svg>
		<?php echo $title; ?>
	</div>
</a>

<?php } ?>