<?php get_header(); ?>

	<div class="container">
		<?php
			$search_data = get_search_query();
			echo 'Search result: ' . $search_data;
		?>
	</div>

<?php get_footer(); ?>