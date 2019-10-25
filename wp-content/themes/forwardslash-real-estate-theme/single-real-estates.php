<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Real Estate</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<body>

		<h1>Real Estate:</h1>

		<div class="container-for-real-estate">
			
			<?php

				if(have_posts()){
					while(have_posts()){
						the_post(); // get the real estate data
						the_title(); // real estate title
						the_content(); // real estate content
						the_post_thumbnail('medium'); // real estate image
						?>
						<p><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></p>
						<?php
					}
				} else {
					echo "No real estate data found";
				}

			?>

		</div>

		<?php wp_footer(); ?>
	</body>
</html>