<?php
/**
 * Single Tutor Template
 *
 * @package GalacticTalk
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>

	<div class="editor-styles-wrapper min-h-dvh">
		<?php
		get_template_part(
			'parts/page-header'
		);
		?>

		<div class="block-editor-block-list__layout is-root-container is-layout-flow">
			<?php the_content(); ?>
		</div>
	</div>

<?php endwhile; ?>

<?php
$tutors = get_posts(
	array(
		'post_type'   => 'tutor',
		'numberposts' => 5,
	)
);

if ( $tutors ) {
	get_template_part(
		'parts/tutor-section',
		null,
		array( 'tutors' => $tutors )
	);
}
?>

<?php
$courses = get_posts(
	array(
		'post_type'   => 'course',
		'numberposts' => 5,
	)
);

if ( $courses ) {
	get_template_part(
		'parts/course-section',
		null,
		array(
			'courses' => $courses,
			'class'   => 'xl:!pb-0',
		)
	);
}
?>

<section class="mt-0 xl:-mt-80">
	<?php get_template_part( 'parts/button-cta' ); ?>
</section>

<?php
get_footer();
