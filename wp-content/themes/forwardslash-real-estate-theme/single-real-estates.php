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

					$realEstateID = get_the_ID();

				}
			} else {
				echo "No real estate data found";
			}

			// Location logic

			$locations = get_terms('location');

			$realEstateLocations = get_the_terms($realEstateID, 'location');

			foreach ($realEstateLocations as $key => $value) {
				$realEstateLocationID = $value->term_id;
			}

			// end of Location logic

			// Types logic

			$types = get_terms('type');

			$realEstateTypes = get_the_terms($realEstateID, 'type');

			foreach ($realEstateTypes as $key => $value) {
				$realEstateTypeID = $value->term_id;
			}

			// end of Types logic

		?>

	</div>
 
	<?php if( current_user_can( 'manage_options' ) ): ?>

		<?php if(have_posts()): ?>

			<?php while(have_posts()): ?>

				<?php the_post(); ?>

				<div id="custom-form-container">

					<form id="real-estate-form-data">

						<div>
							<label for="title">Title:</label>
							<input type="text" name="title" id="title" value="<?php the_title(); ?>" />
						</div>

						<div id="locations-container">
							<p id="location-text">Locations:</p>
							<?php foreach($locations as $key => $location): ?>

								<div class="location-wrapper">
								<input type="radio" name="location" value="<?php echo $location->term_id; ?>" 
									<?php echo (isset($realEstateLocationID) && !empty($realEstateLocationID) && $realEstateLocationID == $location->term_id) ? 'checked' : ''; ?>><?php echo $location->name; ?>
								</div>

							<?php endforeach; ?>	
						</div>

						<div id="types-container">
							<p id="type-text">Types:</p>
							<?php foreach($types as $key => $type): ?>

								<div class="type-wrapper">
									<input type="radio" name="type" value="<?php echo $type->term_id; ?>" 
										<?php echo (isset($realEstateTypeID) && !empty($realEstateTypeID) && $realEstateTypeID == $type->term_id) ? 'checked' : ''; ?>><?php echo $type->name; ?>
								</div>

							<?php endforeach; ?>	
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