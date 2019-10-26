<?php get_header(); ?>

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

	<div id="custom-form-container">

		<form>
			<input type="text" name="title" id="title" />
			<button type="button" id="update-real-estate">UPDATE</button>
		</form>
		
	</div>

<?php get_footer(); ?>