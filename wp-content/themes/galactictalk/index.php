<?php
/**
 * The main template file
 *
 * @package GalacticTalk
 */

get_header();
?>

<!-- Hero section -->
<section class="relative grid lg:~lg:~-mb-176/120">
	<div class="relative z-10 mt-112 grid aspect-[360/600] lg:mt-[calc(var(--header-height)+2.45625rem)] lg:aspect-[1600/1000]">
		<!-- Copy text -->
		<div class="grid place-items-center content-start gap-10 py-15 ~px-8/40 *:col-span-full *:row-span-full lg:gap-0 lg:p-0">
			<h1 class="text-center ~text-55/132 leading-none !tracking-tighter gradient-text lg:text-[8.75vw]">The Power<br>of Language</h1>
			<p class="text-center font-semibold leading-tight text-brand-300 gradient-text ~/lg:~text-11/28 ~pt-6/14 lg:text-[1.75vw] lg:leading-none">ワクワクする未来を話そう</p>
		</div>
		<!-- Main images -->
		<div class="pointer-events-none absolute inset-x-0 ~/lg:~bottom-152/520 lg:bottom-[3.125vw]">
			<!-- Tutors and door -->
			<div class="relative grid place-items-center">
				<?php
				foreach ( array(
					array(
						'class'  => 'w-[29.6vw] translate-x-[-23.3vw] translate-y-[-6.6vw] rotate-[-21deg] lg:w-[14.56vw] lg:translate-x-[-15.375vw] lg:translate-y-[-8vw] lg:rotate-[-33deg]',
						'width'  => 252,
						'height' => 455,
						'src'    => '/assets/images/tutor-whole-1.webp',
					),
					array(
						'class'  => 'w-[33.2vw] translate-y-[-14.7vw] lg:w-[15.75vw] lg:translate-x-[14.375vw] lg:translate-y-[-10.625vw] lg:rotate-[30deg]',
						'width'  => 279,
						'height' => 425,
						'src'    => '/assets/images/tutor-whole-2.webp',
					),
					array(
						'class'  => 'w-[36.5vw] translate-x-[22.2vw] translate-y-[-6.3vw] rotate-[28deg] lg:w-[15.5vw] lg:translate-x-[18.5vw] lg:translate-y-[1.0625vw] lg:rotate-[45deg]',
						'width'  => 319,
						'height' => 456,
						'src'    => '/assets/images/tutor-whole-3.webp',
					),
				) as $image ) :
					?>
					<div class="<?php cx( 'absolute', $image['class'] ); ?>">
						<img
							class="w-full"
							src="<?php echo esc_url( get_theme_file_uri( $image['src'] ) ); ?>"
							width="<?php echo esc_attr( $image['width'] ); ?>"
							height="<?php echo esc_attr( $image['height'] ); ?>"
							alt=""
						>
					</div>
				<?php endforeach; ?>
				<img
					class="relative z-20 w-[90vw] scale-[115%] translate-y-[31vw] max-w-none drop-shadow-[0_-2rem_2rem_rgba(0,0,0,0.4)] lg:w-[44vw] lg:translate-y-[2vw]"
					src="<?php echo esc_url( get_theme_file_uri( '/assets/images/door.webp' ) ); ?>"
					width="279" height="428" alt=""
				>
			</div>
			<!-- Crystals and Sparkles and Spaceships -->
			<div class="absolute inset-0 z-20 grid place-items-center">
				<?php
				foreach ( array(
					array(
						'class'  => 'hidden lg:block lg:w-[10.75vw] lg:translate-x-[-32.5vw] lg:translate-y-[-26.75vw]',
						'src'    => 'spaceship-1.webp',
						'width'  => 235,
						'height' => 139,
					),
					array(
						'class'  => 'hidden lg:block lg:w-[11.125vw] lg:translate-x-[35.375vw] lg:translate-y-[-14.125vw]',
						'src'    => 'spaceship-2.webp',
						'width'  => 252,
						'height' => 87,
					),
					array(
						'class'  => 'w-[10.55vw] rotate-[15deg] translate-x-[-45vw] translate-y-[32.3vw] lg:w-[4.875vw] lg:translate-x-[-21.875vw] lg:translate-y-[6.1875vw]',
						'src'    => 'crystal-yellow.webp',
						'width'  => 103,
						'height' => 160,
					),
					array(
						'class'  => 'hidden lg:block lg:rotate-[45deg] lg:w-[3.25vw] lg:translate-x-[-28.5vw] lg:translate-y-[3.125vw]',
						'src'    => 'crystal-green.webp',
						'width'  => 62,
						'height' => 114,
					),
					array(
						'class'  => 'hidden lg:block lg:rotate-[-30deg] lg:w-[2vw] lg:translate-x-[-26.75vw] lg:translate-y-[-3.375vw]',
						'src'    => 'crystal-red.webp',
						'width'  => 83,
						'height' => 145,
					),
					array(
						'class'  => 'hidden lg:block lg:rotate-[-30deg] lg:w-[3.5vw] lg:translate-x-[30vw] lg:translate-y-[-4.875vw]',
						'src'    => 'crystal-purple.webp',
						'width'  => 68,
						'height' => 110,
					),
					array(
						'class' => 'hidden lg:block lg:w-[2.625vw] lg:translate-x-[-24.5vw] lg:translate-y-[-5.5vw]',
						'src'   => 'star-white.svg',
					),
					array(
						'class' => 'w-[6vw] translate-x-[-30vw] translate-y-[35.5vw] lg:w-[1.75vw] lg:translate-x-[25.875vw] lg:translate-y-[-12.75vw]',
						'src'   => 'star-white.svg',
					),
					array(
						'class' => 'w-[18vw] translate-x-[20.4vw] translate-y-[34.1vw] lg:w-[8.625vw] lg:translate-x-[9.75vw] lg:translate-y-[6.75vw]',
						'src'   => 'star-white.svg',
					),
					array(
						'class' => 'w-[8vw] translate-x-[27.6vw] translate-y-[29.8vw] lg:w-[4vw] lg:translate-x-[13.25vw] lg:translate-y-[4.75vw]',
						'src'   => 'star-white.svg',
					),
					array(
						'class' => 'hidden lg:block lg:w-[4.625vw] lg:translate-x-[28.25vw] lg:translate-y-[0.625vw]',
						'src'   => 'star-white.svg',
					),
					array(
						'class' => 'hidden lg:block lg:w-[2.5vw] lg:translate-x-[30.875vw] lg:translate-y-[-8.5625vw]',
						'src'   => 'star-white.svg',
					),
					array(
						'class' => 'hidden lg:block lg:w-[2.625vw] lg:translate-x-[-14.75vw] lg:translate-y-[7.5vw]',
						'src'   => 'star-white.svg',
					),
				) as $image ) :
					?>
					<img
						class="<?php cx( 'absolute', $image['class'] ); ?>"
						src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $image['src'] ) ); ?>"
						width="<?php echo esc_attr( $image['width'] ?? 160 ); ?>"
						height="<?php echo esc_attr( $image['height'] ?? 160 ); ?>"
						alt=""
					>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- Background image for mobile -->
	<div class="lg:hidden -z-10 absolute inset-x-0 top-[4.444vw]">
		<img
			class="w-full h-full object-cover"
			src="<?php echo esc_url( get_theme_file_uri( '/assets/images/bg-hero-sp.webp' ) ); ?>"
			width="960" height="796" alt=""
		>
	</div>
	<!-- Background image for desktop -->
	<div class="hidden justify-center w-full -z-10 absolute inset-x-0 lg:flex">
		<img
			class="w-full h-full object-contain"
			src="<?php echo esc_url( get_theme_file_uri( '/assets/images/bg-hero.webp' ) ); ?>"
			width="1600" height="1591" alt=""
		>
	</div>
	<!-- News area -->
	<?php
	$news = get_posts(
		array( 'post_type' => 'post' )
	);
	if ( $news ) :
		?>
		<div class="splide js-news-carousel z-20 mx-auto -mt-[6vw] flex flex-col ~/lg:~gap-28/40 md:max-w-768 lg:absolute lg:right-16 lg:mt-0 lg:max-w-400 lg:gap-24 lg:~lg/xl:~bottom-0/152 2xl:max-w-[26vw] 2xl:gap-[1.75vw]">
			<div class="flex items-center justify-between gap-24 px-16 drop-shadow-[0_0_1rem_07030E] lg:justify-end lg:px-12 2xl:gap-[1.5vw]">
				<h2 class="uppercase leading-none ~text-28/40 gradient-text 2xl:text-[2.5vw]">News</h2>
				<div class="splide__arrows relative flex justify-end gap-16 2xl:gap-[1vw] disabled:[&_button]:opacity-50">
					<?php
					icon_button(
						'chevron-left',
						array(
							'class'      => 'splide__arrow splide__arrow--prev',
							'label'      => '前のニュース',
							'type'       => 'button',
							'icon_class' => '2xl:before:size-[2vw]',
						)
					);
					icon_button(
						'chevron-right',
						array(
							'class'      => 'splide__arrow splide__arrow--next',
							'label'      => '次のニュース',
							'type'       => 'button',
							'icon_class' => '2xl:before:size-[2vw]',
						)
					);
					?>
				</div>
			</div>
			<div class="splide__track overflow-visible lg:translate-x-28">
				<ul class="splide__list">
					<?php foreach ( $news as $index => $_post ) : ?>
						<li class="splide__slide -my-4 flex w-full justify-center transition-[transform] duration-300 ease-in-out even:[rotate:4deg]" style="z-index: <?php echo esc_attr( count( $news ) - $index ); ?>">
							<a href="<?php echo esc_url( get_the_permalink( $_post ) ); ?>" class="my-4 flex h-full max-h-100 w-[calc(100%-calc(var(--gutter)*2))] overflow-hidden rounded-16 bg-white text-brand-900 shadow ~gap-4/8 2xl:my-[0.25vw] 2xl:rounded-[1vw]">
								<div class="basis-1/3">
									<img class="h-full w-full object-cover" src="<?php echo esc_url( get_the_post_thumbnail_url( $_post, 'full' ) ); ?>" alt="" width="120" height="100">
								</div>
								<div class="flex flex-col basis-2/3 ~px-4/8 ~py-12/16 tracking-tighter 2xl:px-[0.5vw] 2xl:py-[1vw]">
									<time datetime="<?php echo esc_html( get_the_date( 'Y.m.d', $_post ) ); ?>" class="min-w-0 font-barlow ~lg/2xl:~text-12/13 2xl:text-[0.8125vw]"><?php echo esc_html( get_the_date( 'Y.m.d', $_post ) ); ?></time>
									<div class="line-clamp-2 font-medium leading-normal 2xl:text-[1vw]"><?php echo esc_html( $_post->post_title ); ?></div>
								</div>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	<?php endif; ?>
</section>

<?php
get_footer();
