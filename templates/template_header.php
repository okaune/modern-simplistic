<?php function headerClass ($class) { ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Activate when responsive layout works
	<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<title>Ole Kristian Aune</title>
	<meta name="author" content="Ole Kristian Aune">
	<?php include_once('modules/module_styles.php'); ?>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="<?php echo $class; ?>">

<?php include_once("img/SVG/sprite.svg"); ?>
<header class="mainheader">
	<a href="/#">Ole Kristian Aune</a>
</header>

<?php } ?>