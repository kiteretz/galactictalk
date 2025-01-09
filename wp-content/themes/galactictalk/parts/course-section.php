<?php
/**
 * Course section
 *
 * @package GalacticTalk
 */

$defaults = array(
	'class'   => '',
	'courses' => array(),
);
$args     = wp_parse_args( $args, $defaults );
?>

<section class="<?php cx( 'relative grid gap-40 overflow-hidden xl:gap-0 xl:h-1012', $args['class'] ); ?>">
	<div class="w-[calc(var(--cw)*100)]">
		<?php if ( is_front_page() ) : ?>
			<hgroup class="grid justify-items-center gap-8 text-center ~px-24/32">
				<h2 class="uppercase leading-none ~text-40/120 gradient-text">Popular Courses</h2>
				<p class="inline-block bg-brand-500 font-bold ~rounded-4/8 ~px-12/16 ~py-4/8">人気コース</p>
			</hgroup>
		<?php else : ?>
			<h2 class="grid container gap-16 font-barlow font-bold uppercase leading-none ~text-48/64 font-palt before:block before:h-6 before:w-40 before:rounded-full before:bg-brand-500">Courses</h2>
		<?php endif; ?>
	</div>
	<div class="splide js-course-carousel relative grid ~gap-40/80 lg:pt-64 xl:h-960 xl:px-0 xl:pt-432">
		<div class="
			<?php
			cx(
				'splide__track js-draggable-course',
				'-my-64 py-64 xl:size-[calc(var(--radius)*2)] xl:overflow-visible',
				// Centering.
				'xl:![translate:calc(50vw-50%-var(--scrollbar-width)/2)]',
				'xl:[--radius:265rem]'
			)
			?>
		">
			<ul class="splide__list xl:!grid xl:h-full xl:w-full xl:rotate-[-12deg] xl:place-items-center">
				<?php foreach ( $args['courses'] as $index => $_post ) : ?>
					<li class="
						<?php
						cx(
							'splide__slide',
							'xl:absolute xl:rotate-[--rotate]',
							// Rotate each course per 6 degrees.
							'xl:[--rotate:calc(var(--index)*6deg)]',
							// Calculate the angle for each course.
							'xl:[--angle:calc(var(--rotate)-90deg)]',
							// Each position is calculated with trigonometric functions.
							'xl:translate-x-[calc(cos(var(--angle))*var(--radius))]',
							'xl:translate-y-[calc(sin(var(--angle))*var(--radius))]',
						)
						?>
					" style="--index: <?php echo esc_attr( $index ); ?>">
						<?php
						get_template_part(
							'parts/course-card',
							null,
							array( 'post' => $_post )
						);
						?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div class="z-10 xl:-mt-200 xl:w-[calc(var(--cw)*100)]">
		<?php
		button(
			'コースの一覧を見る',
			array(
				'href'  => esc_url( home_url( '/course/' ) ),
				'class' => 'w-fit mx-auto',
			)
		);
		?>
	</div>
</section>
