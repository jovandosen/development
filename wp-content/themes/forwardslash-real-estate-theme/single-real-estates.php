<?php get_header(); ?>

	<h1 class="description-data">Real Estate:</h1>

	<div class="container-for-real-estate">
		
		<?php

			if(have_posts()){
				while(have_posts()){
					the_post(); // get the real estate data
					the_title(); // real estate title
					the_content(); // real estate content
					the_post_thumbnail('medium'); // real estate image
				}
			} else {
				echo "No real estate data found";
			}

		?>

	</div>

	<?php if( current_user_can( 'manage_options' ) ): ?>

		<?php if(have_posts()): ?>

			<?php while(have_posts()): ?>

				<?php the_post(); ?>

				<div id="custom-form-container">

					<form>
						<div>
							<label for="title">Title:</label>
							<input type="text" name="title" id="title" value="<?php the_title(); ?>" />
						</div>
						<div id="real-estate-update-container">
							<button type="button" id="update-real-estate">UPDATE</button>
						</div>
						<input type="hidden" name="recordID" id="recordID" value="<?php echo get_the_ID(); ?>" />
					</form>
					
				</div>

			<?php endwhile; ?>

		<?php endif; ?>

	<?php endif; ?>

<?php get_footer(); ?>