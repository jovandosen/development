<!DOCTYPE html>
<html lang="en">
	<head>
		<title>404 Not found</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body>

		<div class="container">
			<?php echo "<h2>This page does not exist!</h2>"; ?>
			<a href="<?php echo get_home_url(); ?>">Back to Homepage</a>
		</div>

		<?php wp_footer(); ?>
	</body>
</html>