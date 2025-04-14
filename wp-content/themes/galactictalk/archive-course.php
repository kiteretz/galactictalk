<?php
/**
 * Archive Template
 *
 * @package GalacticTalk
 */

get_header();
?>

<div>
	<?php
	get_template_part(
		'parts/page-header',
		null,
		array(
			'title'    => 'Course',
			'subtitle' => 'コース紹介',
			'image'    => 'mv-course.webp',
		)
	);
	?>

	<?php if ( have_posts() ) : ?>
		<div class="container grid ~gap-x-16/32 ~gap-y-40/80 lg:grid-cols-3">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php
				get_template_part(
					'parts/course-card',
					null
				);
				?>
			<?php endwhile; ?>
		</div>
		<?php
	endif;
	?>
</div>

<?php
get_footer();
