<?php
/**
 * Archive page header
 *
 * @package GalacticTalk
 */

$is_course_single = is_singular( 'course' );
$is_tutor_single  = is_singular( 'tutor' );

// Get course data.
$english_title = get_field( 'english_title' );
$tagline       = get_field( 'tagline' );
$tags          = get_the_terms( get_the_ID(), 'course_tag' );
$time          = get_field( 'time' );
$tutor         = get_field( 'tutor' );
$resource      = get_field( 'resource' );

// Get the arguments.
$defaults = array(
	'title'    => '',
	'subtitle' => '',
	'image'    => '',
);
$args     = wp_parse_args( $args, $defaults );
?>

<div class="<?php cx( 'grid mb-80 *:col-span-full *:row-span-full', $is_course_single ? '' : 'lg:~mb-0/[-10.5rem]' ); ?>">
	<div class="<?php cx( 'relative overflow-hidden', $is_course_single ? '~h-[35.75rem]/800' : '-z-10 ~h-[16.875rem]/800' ); ?>">
		<?php
		if ( $is_course_single || $is_tutor_single ) :
			the_post_thumbnail( 'full', array( 'class' => 'h-full w-full object-cover lg:h-auto lg:translate-y-[-10%]' ) );
		elseif ( $args['image'] ) :
			?>
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $args['image'] ) ); ?>" alt="" class="object-cover size-full">
		<?php endif; ?>
		<div class="absolute inset-0 bg-gradient-to-b from-transparent from-70% to-black lg:from-50%"></div>
	</div>
	<div class="z-10 container h-fit ~pt-200/240 lg:pb-92">
		<?php if ( $is_course_single ) : ?>
			<div class="grid font-barlow uppercase">
				<?php if ( $english_title ) : ?>
					<p class="font-bold leading-none ~mb-12/16 ~text-40/120"><?php echo esc_html( $english_title ); ?></p>
				<?php endif; ?>
				<h1 class="mb-2 w-fit bg-brand-500 leading-relaxed ~text-15/16 ~rounded-4/8 ~px-12/16 ~py-4/8"><?php the_title(); ?></h1>
				<?php if ( $tagline ) : ?>
					<div class="font-bold leading-normal ~my-20/32 ~text-32/48"><?php echo esc_html( $tagline ); ?></div>
				<?php endif; ?>
			</div>
			<div class="grid grid-cols-1 ~gap-16/24 items-start lg:grid-cols-[repeat(2,auto)]">
				<div class="grid ~gap-16/24">
					<?php if ( $tags && ! is_wp_error( $tags ) ) : ?>
						<div class="flex gap-8">
							<?php foreach ( $tags as $_tag ) : ?>
								<span class="tag-sm inline-block rounded-full bg-brand-200 font-bold text-brand-900 lg:tag-md"><?php echo esc_html( $_tag->name ); ?></span>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					<?php if ( has_excerpt() ) : ?>
						<div class="font-bold"><?php echo wp_kses_post( get_the_excerpt() ); ?></div>
					<?php endif; ?>
				</div>
				<?php if ( array_filter( array( $time, $tutor, $resource ) ) ) : ?>
					<div class="grid grid-cols-3 rounded-16 bg-brand-400/85 ~gap-4/8 ~px-12/16 ~pt-12/16 ~pb-4/8 lg:min-w-400 lg:place-self-end">
						<?php
						if ( $time ) :
							$time = explode( ' ', $time, 2 );
							?>
							<div class="grid place-items-center">
								<div class="w-48 h-48">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/course-time.svg" alt="">
								</div>
								<div class="flex min-h-[5.3125rem] items-center font-barlow font-bold leading-none">
									<span class="flex items-end">
										<span class="~md:~text-32/48"><?php echo esc_html( $time[0] ); ?></span>
										<?php if ( isset( $time[1] ) ) : ?>
											<span class="~text-16/20 pb-[0.25em]"><?php echo esc_html( $time[1] ); ?></span>
										<?php endif; ?>
									</span>
								</div>
							</div>
						<?php endif; ?>
						<?php
						if ( $tutor ) :
							$tutor = explode( ' ', $tutor, 2 );
							?>
							<div class="grid place-items-center">
								<div class="w-48 h-48">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/course-tutor.svg" alt="">
								</div>
								<div class="flex min-h-[5.3125rem] items-center font-barlow font-extrabold uppercase leading-none">
									<span class="flex flex-col items-center gap-4">
										<span class="~md:~text-24/32"><?php echo esc_html( $tutor[0] ); ?></span>
										<?php if ( isset( $tutor[1] ) ) : ?>
											<span><?php echo esc_html( $tutor[1] ); ?></span>
										<?php endif; ?>
									</span>
								</div>
							</div>
						<?php endif; ?>
						<?php if ( $resource ) : ?>
							<div class="grid place-items-center">
								<div class="w-48 h-48">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/course-resource.svg" alt="">
								</div>
								<span class="flex min-h-[5.3125rem] items-center font-bold"><?php echo wp_kses_post( $resource ); ?></span>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php else : ?>
			<?php if ( $args['title'] ) : ?>
				<div class="flex flex-col ~gap-12/16">
					<h1 class="uppercase font-barlow ~text-40/120 text-white font-bold leading-none tracking-[-0.02em]"><?php echo esc_html( $args['title'] ); ?></h1>
					<?php if ( $args['subtitle'] ) : ?>
						<p class="text-white font-notosans ~text-15/16 font-bold leading-relaxed w-fit bg-brand-500 rounded-4 py-4 px-12 flex justify-center items-center"><?php echo esc_html( $args['subtitle'] ); ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</div>
