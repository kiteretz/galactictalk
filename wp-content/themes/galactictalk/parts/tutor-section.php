<?php
/**
 * Tutor section
 *
 * @package GalacticTalk
 */

$defaults = array(
	'class'  => '',
	'tutors' => array(),
);
$args     = wp_parse_args( $args, $defaults );
?>

<section class="
<?php
cx(
	'splide js-tutor-carousel grid ~gap-40/80',
	$args['class']
);
?>
">
	<?php if ( is_front_page() ) : ?>
		<?php
		get_template_part(
			'parts/hgroup',
			null,
			array(
				'heading'    => array( 'Popular', 'Tutors' ),
				'subheading' => '人気講師',
			)
		);
		?>
	<?php else : ?>
		<h2 class="grid container gap-16 font-barlow font-bold uppercase leading-none ~text-48/64 font-palt before:block before:h-6 before:w-40 before:rounded-full before:bg-brand-500">Other Tutors</h2>
	<?php endif; ?>
	<div class="splide__track -my-64 py-64 xl:grid xl:justify-items-center">
		<div class="js-staggered splide__list flex-row xl:!flex xl:max-w-container xl:flex-wrap xl:justify-center xl:gap-x-32 xl:gap-y-48">
			<?php
			for ( $i = 0; $i < 1; $i++ ) :
				foreach ( $args['tutors'] as $index => $_post ) :
					?>
					<div class="splide__slide">
						<?php
						get_template_part(
							'parts/tutor-card',
							null,
							array( 'post' => $_post )
						);
						?>
					</div>
					<?php
				endforeach;
			endfor;
			?>
		</div>
	</div>
	<?php
	button(
		'講師の一覧を見る',
		array(
			'href'  => esc_url( home_url( '/tutor/' ) ),
			'class' => 'mx-auto',
		)
	);
	?>
</section>
