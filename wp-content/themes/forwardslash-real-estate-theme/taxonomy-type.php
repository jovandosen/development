<?php get_header(); ?>

	<h1 class="description-data">Types info:</h1>

	<div class="container-for-types">
		
		<?php

			if(have_posts()){
				while(have_posts()){
					the_post(); // get the real estate data
					the_title(); // real estate title
					the_content(); // real estate content
					the_post_thumbnail('medium'); // real estate image
					?>
					<p><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></p>
					<hr class="line-break" />
					<?php
				}
				?>
				<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>	
				<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
				<?php
				the_posts_pagination();
			} else {
				echo "No real estate data found";
			}

		?>

	</div>

<?php get_footer(); ?>