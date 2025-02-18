<?php
/**
 * The main template file
 *
 * @package GalacticTalk
 */

get_header();
?>

<!-- Hero section -->
<section class="relative grid lg:~lg:~-mb-176/120 justify-items-center">
	<div class="relative z-10 pt-16 grid lg:pt-0 w-full ~text-55/132 lg:text-[min(calc((100svh-var(--header-height))*0.162),8.3025vw)]">
		<!-- Copy text -->
		<div class="grid place-items-center content-start gap-10 py-15 ~px-8/40 *:col-span-full *:row-span-full lg:gap-0 lg:p-0 lg:pt-[0.3em] text-center mt-[--header-height] self-start row-[1/2] col-[1/2]">
			<h1 class="js-split-text-mv grid leading-none !tracking-tighter">
				<span class="sr-only">The Power of Language</span>
				<?php split_text( 'The Power', 'gradient-text' ); ?>
				<?php split_text( 'of Language', 'gradient-text' ); ?>
			</h1>
			<p class="js-tagline font-semibold leading-tight text-brand-300 gradient-text ~/lg:~text-11/28 ~pt-6/14 lg:text-[0.2em] lg:leading-none">ワクワクする未来を話そう</p>
		</div>
		<!-- Main images -->
		<div class="pointer-events-none row-[1/3] col-[1/2]">
			<!-- Tutors and door -->
			<div class="relative inset-x-0 grid justify-items-center">
				<div class="absolute inset-0 grid justify-items-center bottom-[1em] overflow-hidden"><?php // To clip the initial bottom overflow. ?>
					<?php
					foreach ( array(
						array(
							'class'  => 'w-[2.43em] translate-x-[-1.745em] translate-y-[1.363em] rotate-[-21deg] lg:w-[1.7em] lg:-translate-x-[1.9em] lg:translate-y-[0.27em] lg:rotate-[-33deg]',
							'width'  => 252,
							'height' => 455,
							'src'    => '/assets/images/tutor-whole-1.webp',
						),
						array(
							'class'  => 'w-[2.763em] translate-y-[0.7636em] lg:w-[1.9em] lg:translate-x-[1.7em] lg:translate-y-[0.1em] lg:rotate-[30deg]',
							'width'  => 279,
							'height' => 425,
							'src'    => '/assets/images/tutor-whole-2.webp',
						),
						array(
							'class'  => 'w-[2.654em] translate-x-[1.745em] translate-y-[1.363em] rotate-[28deg] lg:w-[1.867em] lg:translate-x-[2.2em] lg:translate-y-[1.7em] lg:rotate-[45deg]',
							'width'  => 319,
							'height' => 456,
							'src'    => '/assets/images/tutor-whole-3.webp',
						),
					) as $image ) :
						?>
						<div class="<?php cx( 'js-tutor absolute mt-[calc(var(--header-height)+1.9em)]', $image['class'] ); ?>">
							<img
								class="w-full"
								src="<?php echo esc_url( get_theme_file_uri( $image['src'] ) ); ?>"
								width="<?php echo esc_attr( $image['width'] ); ?>"
								height="<?php echo esc_attr( $image['height'] ); ?>"
								alt=""
							>
						</div>
					<?php endforeach; ?>
				</div>
				<!-- Another world -->
				<div class="absolute inset-0 [mask:linear-gradient(to_bottom,#000_calc(100%-1em),transparent)]">
					<div class="
						<?php
						cx(
							'js-another-world-mask absolute inset-0',
							'[mask-image:url(../images/another-world-mask.png)]',
							'[mask-position:center_calc(50%+(var(--header-height)+5em)/2)]',
							'[mask-repeat:no-repeat] [mask-size:5.2739726em_6.7em]',
							'lg:[mask-position:center_calc(50%+(var(--header-height)+1.9em)/2)] lg:[mask-size:5.2739726em_5.5em]'
						)
						?>
					">
						<img
							class="js-another-world h-[calc(8em+var(--header-height))] object-cover object-bottom scale-90 lg:origin-[center_70%]"
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/another-world.jpg' ) ); ?>"
							width="2400" height="1600" alt=""
						>
					</div>
				</div>
				<img
					class="js-door relative z-20 mt-[calc(var(--header-height)+4.673em)] h-[6.7em] w-auto scale-[1.1] lg:mt-[calc(var(--header-height)+1.9em)] lg:h-[5.5em] lg:scale-100"
					src="<?php echo esc_url( get_theme_file_uri( '/assets/images/door.webp' ) ); ?>"
					width="1680" height="1752" alt=""
				>
			</div>
			<!-- Crystals and Sparkles and Spaceships -->
			<div class="absolute inset-0 z-20 grid place-items-center">
				<?php
				foreach ( array(
					array(
						'class'  => 'js-spaceship hidden lg:block lg:w-[1.295em] lg:-translate-x-[3.914em] lg:translate-y-[-1.8em]',
						'src'    => 'spaceship-1.webp',
						'width'  => 235,
						'height' => 139,
					),
					array(
						'class'  => 'js-ufo hidden lg:block lg:w-[1.34em] lg:translate-x-[4.261em] lg:translate-y-[-0.5em]',
						'src'    => 'spaceship-2.webp',
						'width'  => 252,
						'height' => 87,
					),
					array(
						'class' => 'js-staggered-mv hidden lg:block lg:w-[0.316em] lg:translate-x-[-2.951em] lg:translate-y-[0.545em]',
						'src'   => 'star-white.svg',
					),
					array(
						'class'  => 'js-staggered-mv hidden lg:block lg:rotate-[-30deg] lg:w-[0.241em] lg:translate-x-[-3.222em] lg:translate-y-[0.800em]',
						'src'    => 'crystal-red.webp',
						'width'  => 83,
						'height' => 145,
					),
					array(
						'class'  => 'js-staggered-mv hidden lg:block lg:rotate-[45deg] lg:w-[0.391em] lg:translate-x-[-3.433em] lg:translate-y-[1.583em]',
						'src'    => 'crystal-green.webp',
						'width'  => 62,
						'height' => 114,
					),
					array(
						'class'  => 'js-staggered-mv w-[0.681em] rotate-[15deg] translate-x-[-3em] translate-y-[3.181em] lg:w-[0.587em] lg:translate-x-[-2.635em] lg:translate-y-[1.952em]',
						'src'    => 'crystal-yellow.webp',
						'width'  => 103,
						'height' => 160,
					),
					array(
						'class' => 'js-staggered-mv w-[0.4em] translate-x-[-2.181em] translate-y-[3.454em] lg:w-[0.316em] lg:translate-x-[-1.777em] lg:translate-y-[2.110em]',
						'src'   => 'star-white.svg',
					),
					array(
						'class' => 'js-staggered-mv w-[1.4em] translate-x-[1.454em] translate-y-[3.454em] lg:w-[1.039em] lg:translate-x-[1.174em] lg:translate-y-[2.020em]',
						'src'   => 'star-white.svg',
					),
					array(
						'class' => 'js-staggered-mv w-[0.664em] translate-x-[1.963em] translate-y-[3.09em] lg:w-[0.482em] lg:translate-x-[1.596em] lg:translate-y-[1.779em]',
						'src'   => 'star-white.svg',
					),
					array(
						'class' => 'js-staggered-mv hidden lg:block lg:w-[0.557em] lg:translate-x-[3.403em] lg:translate-y-[1.282em]',
						'src'   => 'star-white.svg',
					),
					array(
						'class'  => 'js-staggered-mv hidden lg:block lg:rotate-[-30deg] lg:w-[0.422em] lg:translate-x-[3.613em] lg:translate-y-[0.620em]',
						'src'    => 'crystal-purple.webp',
						'width'  => 68,
						'height' => 110,
					),
					array(
						'class' => 'js-staggered-mv hidden lg:block lg:w-[0.301em] lg:translate-x-[3.719em] lg:translate-y-[0.176em]',
						'src'   => 'star-white.svg',
					),
					array(
						'class' => 'js-staggered-mv hidden lg:block w-[0.723em] translate-x-[-3.613em] translate-y-[5.483em] lg:w-[0.211em] lg:translate-x-[3.117em] lg:translate-y-[-0.32em]',
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
	<div class="lg:hidden -z-10 absolute inset-x-0 ~/lg:~-top-0/560">
		<img
			class="w-full h-full object-cover"
			src="<?php echo esc_url( get_theme_file_uri( '/assets/images/bg-hero-sp.webp' ) ); ?>"
			width="960" height="796" alt=""
		>
	</div>
	<!-- Background image for desktop -->
	<div class="hidden justify-center -z-10 absolute inset-0 lg:flex">
		<img
			class="max-w-none w-auto h-[127%]"
			src="<?php echo esc_url( get_theme_file_uri( '/assets/images/bg-hero.webp' ) ); ?>"
			width="1846" height="1407" alt=""
		>
	</div>
	<!-- News area -->
	<?php
	$news = get_posts(
		array(
			'post_type'   => 'post',
			'numberposts' => 5,
		)
	);
	if ( $news ) :
		?>
		<div class="lg:absolute right-0 w-full aspect-[16/10] max-h-svh">
			<div class="splide js-news-mv js-news-carousel z-20 mx-auto -mt-[6vw] flex flex-col ~/lg:~gap-28/40 md:max-w-768 lg:absolute lg:right-16 lg:mt-0 lg:max-w-400 lg:gap-24 lg:bottom-gutter 2xl:max-w-[26vw] 2xl:gap-[1.75vw]">
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
					<div class="splide__list">
						<?php foreach ( $news as $index => $_post ) : ?>
							<div class="splide__slide -my-4 flex w-full justify-center transition-[transform] duration-300 ease-in-out even:[rotate:4deg]" style="z-index: <?php echo esc_attr( count( $news ) - $index ); ?>">
								<a href="<?php echo esc_url( get_the_permalink( $_post ) ); ?>" class="my-4 flex h-full max-h-100 w-[calc(100%-calc(var(--gutter)*2))] overflow-hidden rounded-16 bg-white text-brand-900 shadow ~gap-4/8 2xl:my-[0.25vw] 2xl:rounded-[1vw]">
									<div class="basis-1/3">
										<img class="h-full w-full object-cover" src="<?php echo esc_url( get_the_post_thumbnail_url( $_post, 'full' ) ); ?>" alt="" width="120" height="100">
									</div>
									<div class="flex flex-col basis-2/3 ~px-4/8 ~py-12/16 tracking-tighter 2xl:px-[0.5vw]">
										<time datetime="<?php echo esc_html( get_the_date( 'Y.m.d', $_post ) ); ?>" class="min-w-0 font-barlow ~lg/2xl:~text-12/13 2xl:text-[0.8125vw]"><?php echo esc_html( get_the_date( 'Y.m.d', $_post ) ); ?></time>
										<div class="line-clamp-2 font-medium leading-normal 2xl:text-15"><?php echo esc_html( $_post->post_title ); ?></div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
</section>

<!-- Features section -->
<section class="relative -mt-48 lg:~lg:~-mt-0/144 2xl:mt-[-9vw]">
	<div class="z-10 grid place-items-center ~gap-40/72 lg:pt-160">
		<?php
		get_template_part(
			'parts/hgroup',
			null,
			array(
				'heading'    => array( 'Features' ),
				'subheading' => 'ギャラクティックトークの特徴',
				'class'      => '~/lg:~translate-y-280/380 lg:translate-y-0',
			)
		);
		?>
		<div class="grid ~gap-40/80">
			<div class="flex flex-col-reverse lg:gap-40 lg:grid lg:[&>*]:col-span-full lg:[&>*]:row-span-full">
				<!-- Introduction -->
				<div class="z-10 -mt-8 grid gap-40 px-gutter-1.5 lg:auto-rows-min lg:gap-64">
					<div class="grid gap-gutter-1.5 lg:gap-8">
						<div class="grid place-items-center gap-8 lg:mx-auto lg:w-fit lg:grid-cols-[repeat(2,auto)] lg:content-end">
							<span class="relative">
								<span class="absolute -right-64 -top-24 lg:-top-44 grid rotate-[15deg] place-items-center rounded-full bg-[#F748A1] font-black ~text-18/24 ~/lg:~size-100/120 lg:-right-48">地球初！</span>
								<span class="relative -mt-16 inline-block !font-barlow-condensed !font-semibold leading-none gradient-text ~/2xl:~text-[12.5rem]/[18.75rem]">100</span>
							</span>
							<span class="grid gap-8 font-black leading-none ~/2xl:~text-32/48 lg:self-end lg:justify-self-start lg:pb-24">
								<span>以上の星の</span>
								<span>伝わる言語</span>
								<span>が学べる</span>
							</span>
						</div>
						<div class="grid text-center ~text-18/24 font-bold lg:content-start">
							<span>教材とカリキュラムが試せる！</span>
							<span>無料トライアルでぜひギャラクティックトークを</span>
							<span>お得に試してみてください。</span>
						</div>
					</div>
				</div>
				<!-- Images -->
				<div class="pointer-events-none grid h-full w-full max-w-480 mx-auto [&>*]:col-span-full [&>*]:row-span-full">
					<!-- Arched images -->
					<div class="js-staggered grid grid-cols-2 place-items-center px-18 ~/md:~-translate-y-172/360 md:~/lg:~-translate-y-200/240 ~/lg:~gap-10/24 lg:translate-y-112">
						<?php
						foreach ( array(
							array(
								'class'  => 'lg:-translate-x-744 lg:-translate-y-192',
								'src'    => 'features-1.webp',
								'width'  => 235,
								'height' => 139,
							),
							array(
								'class'  => 'lg:translate-x-472 lg:-translate-y-344',
								'src'    => 'features-2.webp',
								'width'  => 252,
								'height' => 87,
							),
							array(
								'class'  => 'lg:translate-x-768 lg:-translate-y-192',
								'src'    => 'features-3.webp',
								'width'  => 252,
								'height' => 87,
							),
						) as $image ) :
							?>
							<div class="<?php cx( 'aspect-[265/457] w-full overflow-hidden rounded-t-full last:hidden lg:absolute lg:last:block lg:~lg/2xl:~w-200/268', $image['class'] ); ?>">
								<img
									class="h-full w-full object-cover ~rounded-[0.5rem]/[0.75rem]"
									src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $image['src'] ) ); ?>"
									width="<?php echo esc_attr( $image['width'] ?? 160 ); ?>"
									height="<?php echo esc_attr( $image['height'] ?? 160 ); ?>"
									alt=""
								>
							</div>
						<?php endforeach; ?>
					</div>
					<!-- Headphone and crystals -->
					<div class="js-staggered hidden lg:grid place-items-center lg:translate-y-136">
						<?php
						foreach ( array(
							array(
								'class'  => 'lg:rotate-[-16deg] lg:~lg/2xl:~w-200/232 lg:-translate-x-464 lg:-translate-y-496',
								'src'    => 'headphone.webp',
								'width'  => 103,
								'height' => 160,
							),
							array(
								'class'  => 'lg:~lg/2xl:~w-72/84 lg:rotate-[19deg] lg:-translate-x-384 lg:-translate-y-224',
								'src'    => 'crystal-yellow.webp',
								'width'  => 103,
								'height' => 160,
							),
							array(
								'class'  => 'lg:~lg/2xl:~w-24/36 lg:rotate-[-24deg] lg:-translate-x-536 lg:-translate-y-208',
								'src'    => 'crystal-red.webp',
								'width'  => 83,
								'height' => 145,
							),
							array(
								'class'  => 'lg:~lg/2xl:~w-56/64 lg:rotate-[-21deg] lg:-translate-x-464 lg:-translate-y-48',
								'src'    => 'crystal-purple.webp',
								'width'  => 68,
								'height' => 110,
							),
							array(
								'class'  => 'lg:~lg/2xl:~w-40/52 lg:rotate-[35deg] lg:-translate-x-512 lg:-translate-y-176',
								'src'    => 'crystal-green.webp',
								'width'  => 62,
								'height' => 114,
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
			<!-- Content -->
			<div class="js-staggered container grid ~gap-24/56 lg:grid-cols-3">
				<?php
				$features = array(
					array(
						'image'   => array(
							'src' => 'features-4.webp',
						),
						'title'   => '言語だけでなく文化も学べるネイティブ講師',
						'content' => 'ギャラクティックトークの講師は、全員その星生まれのネイティブ。言語だけでなく、その星で暮らす人からリアルな文化や風習を学べることも魅力です。',
					),
					array(
						'image'   => array(
							'src' => 'features-5.webp',
						),
						'title'   => 'さまざまな文化に出会える、交流プログラム',
						'content' => '様々な惑星からの学習者同士が交流できるオンラインイベントを定期的に開催。一緒にアクティビティを楽しんだり、ひとりで参加しても楽しめる企画をご用意しています。',
					),
					array(
						'image'   => array(
							'src' => 'features-6.webp',
						),
						'title'   => '忙しくても、30分で学べるカリキュラム',
						'content' => 'ちょっとした移動時間でも学べる、30分から取り組めるカリキュラムと専用デバイスで、仕事や学業と並行して無理なく学習を継続することができます。',
					),
				);

				foreach ( $features as $feature ) :
					?>
					<div class="grid place-items-center gap-24 px-gutter-1.5 tracking-[-0.04em] auto-rows-min lg:px-0">
						<img
							class="w-[72%] lg:w-[80%]"
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $feature['image']['src'] ) ); ?>"
							alt=""
							width="280"
							height="309"
						>
						<div class="grid place-items-center ~gap-16/24">
							<div class="grid gap-16">
								<h3 class="text-center font-black ~text-24/32 leading-normal"><?php echo esc_html( $feature['title'] ); ?></h3>
								<p class="leading-relaxed"><?php echo esc_html( $feature['content'] ); ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<section class="col-10 -mt-40 mx-gutter lg:mx-auto">
	<?php get_template_part( 'parts/button-cta' ); ?>
</section>

<!-- Courses section -->
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
		array( 'courses' => $courses )
	);
}
?>

<!-- Tutors section -->
<?php
$tutors = get_posts(
	array(
		'post_type'   => 'tutor',
		'numberposts' => 5,
	)
);

if ( $tutors ) :
	?>
	<section class="splide js-tutor-carousel grid ~gap-40/80 xl:-mt-320">
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
		<div class="splide__track -my-64 py-64 xl:grid xl:justify-items-center">
			<div class="js-staggered splide__list flex-row xl:!flex xl:max-w-container xl:flex-wrap xl:justify-center xl:gap-x-32 xl:gap-y-48">
				<?php foreach ( $tutors as $_post ) : ?>
					<div class="splide__slide">
						<?php
						get_template_part(
							'parts/tutor-card',
							null,
							array( 'post' => $_post )
						);
						?>
					</div>
				<?php endforeach; ?>
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
<?php endif; ?>

<!-- Testimonials section -->
<?php
$testimonials = get_posts(
	array(
		'post_type'   => 'testimonial',
		'numberposts' => 6,
	)
);
if ( $testimonials ) :
	?>
	<section class="splide js-testimonial-carousel relative grid place-items-center ~gap-40/80">
		<?php
		get_template_part(
			'parts/hgroup',
			null,
			array(
				'heading'    => array( 'Testimonials' ),
				'subheading' => '受講生の声',
			)
		);
		?>
		<div class="splide__track pt-40 w-full">
			<div class="splide__list">
				<?php
				$bg_colors = array( '#F748A2', '#00AF83', '#E9A124', '#F748A2', '#6E00C2', '#1B97D0' );
				foreach ( $testimonials as $index => $_post ) :
					?>
					<div class="
						<?php
						cx(
							'splide__slide flex transition-transform duration-700 ease-out h-282 lg:h-234',
							'[&.is-active]:-translate-y-40',
							'has-[+.is-prev]:-translate-y-40',
							'[.is-next+&]:-translate-y-40',
						)
						?>
					" style="--bg-color: <?php echo esc_attr( $bg_colors[ $index % count( $bg_colors ) ] ); ?>">
						<div class="flex aspect-[264/280] h-280 flex-col items-center gap-16 rounded-24 bg-[--bg-color] p-16 lg:aspect-[352/232] lg:h-232 lg:flex-row lg:items-start lg:gap-24 lg:p-24">
							<?php if ( has_post_thumbnail( $_post ) ) : ?>
								<div class="size-64 shrink-0 overflow-hidden rounded-full lg:size-90">
									<?php echo get_the_post_thumbnail( $_post, 'thumbnail', array( 'class' => 'h-full w-full object-cover' ) ); ?>
								</div>
							<?php endif; ?>
							<div class="grid h-full grid-rows-[auto_1fr] gap-12 lg:gap-16">
								<h3 class="text-16 font-black leading-normal lg:text-18"><?php echo esc_html( $_post->post_title ); ?></h3>
								<p class="line-clamp-4"><?php echo esc_html( wp_strip_all_tags( get_the_content( null, false, $_post ) ) ); ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php
		button(
			'受講生の声の一覧を見る',
			array( 'href' => esc_url( home_url( '/testimonial/' ) ) )
		);
		?>
	</section>
<?php endif; ?>

<!-- Plan & pricing section -->
<section class="container grid place-items-center gap-40 px-24 lg:gap-80">
	<?php
	get_template_part(
		'parts/hgroup',
		null,
		array(
			'heading'    => array( 'Plans &', 'Pricing' ),
			'subheading' => '料金プラン',
		)
	);
	?>
	<div class="grid ~gap-24/40">
		<div class="js-staggered grid gap-20 lg:grid-cols-3 xl:gap-32">
			<?php
			$price_cards = array(
				array(
					'title'       => 'BASIC',
					'title_ja'    => 'ベーシックプラン',
					'description' => '気軽に始められる',
					'price'       => 15000,
					'features'    => array(
						'language' => '地球語に特化した基本的な学習プラン',
						'level'    => '初めて言語学習を始める方向け',
						'benefits' => '基本的なサポート体制',
					),
					'card_class'  => '[--bg:theme(colors.green.DEFAULT)]',
				),
				array(
					'title'       => 'STANDARD',
					'title_ja'    => 'スタンダードプラン',
					'description' => 'しっかりと学べて人気No.1',
					'price'       => 25000,
					'features'    => array(
						'language' => '地球語と異星語のバランスの取れた学習',
						'level'    => '地球語と異星語のバランスの取れた学習',
						'benefits' => '充実したサポートと文化交流の機会',
					),
					'card_class'  => '[--bg:theme(colors.brand.600)]',
				),
				array(
					'title'       => 'PREMIUM',
					'title_ja'    => 'プレミアムプラン',
					'description' => '資格取得やビジネス用途にも',
					'price'       => 40000,
					'features'    => array(
						'language' => '全言語コースへのフルアクセス',
						'level'    => '最新の学習テクノロジーの利用',
						'benefits' => 'プレミアム特典と体験プログラム',
					),
					'card_class'  => '[--bg:theme(colors.orange.DEFAULT)]',
				),
			);

			foreach ( $price_cards as $card ) {
				get_template_part(
					'parts/price-card',
					null,
					$card
				);
			}
			?>
		</div>
		<p class="text-center">各プランは月額制で、いつでもアップグレードが可能です。また、法人向けの特別プランやグループ割引なども用意しています。</p>
	</div>
</section>

<section class="col-10 mx-gutter lg:mx-auto">
	<?php get_template_part( 'parts/button-cta' ); ?>
</section>

<!-- Marquee section -->
<section class="flex *:animate-marquee *:shrink-0" aria-hidden="true">
	<?php for ( $i = 0; $i < 3; $i++ ) : ?>
		<div class="flex flex-nowrap ~text-64/80 uppercase leading-none tracking-[-0.02em] stroke-text">
			<?php
			foreach (
				array(
					array(
						'text'        => 'Binary Code',
						'src'         => 'marquee-3.webp',
						'image_class' => 'mx-8',
					),
					array(
						'text' => 'Terralinga',
						'src'  => 'marquee-2.webp',
					),
					array(
						'text' => 'Zorbish',
						'src'  => 'marquee-1.webp',
					),
					array(
						'text'        => 'Crystal Tone',
						'src'         => 'marquee-4.webp',
						'image_class' => 'w-66',
					),
					array(
						'text'        => 'Psychic Wave',
						'src'         => 'marquee-5.webp',
						'image_class' => 'w-66',
					),
				)
				as $item ) :
				?>
				<div class="flex shrink-0 items-center font-barlow font-bold">
					<p class="gradient-stroke-text"><?php echo esc_html( $item['text'] ); ?></p>
					<img
						class="<?php cx( $item['image_class'] ?? '', 'mx-24' ); ?>"
						src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $item['src'] ) ); ?>"
						alt=""
						width="140"
						height="140"
					>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endfor; ?>
</section>

<!-- Magazine section -->
<?php
$magazine = get_posts(
	array(
		'post_type'   => 'magazine',
		'numberposts' => 4,
	)
);

if ( $magazine ) :
	?>
	<section class="splide js-magazine-carousel relative grid ~gap-40/80 lg:px-0">
		<?php
		get_template_part(
			'parts/hgroup',
			null,
			array(
				'heading'    => array( 'Magazine' ),
				'subheading' => 'マガジン',
			)
		);
		?>
		<div class="splide__track -my-64 py-64 xl:-mb-80 xl:grid xl:justify-items-center">
			<div class="js-staggered splide__list max-w-container xl:!flex xl:flex-row xl:flex-wrap">
				<?php
				foreach ( $magazine as $index => $_post ) :
					if ( 0 === $index ) :
						?>
						<div class="splide__slide min-w-264 basis-1/3 xl:mb-120 xl:basis-full xl:px-29">
							<?php
							get_template_part(
								'parts/magazine-card',
								null,
								array(
									'post'     => $_post,
									'featured' => true,
								)
							);
							?>
						</div>
					<?php else : ?>
						<div class="splide__slide min-w-264 basis-1/3 xl:px-29">
							<?php
							get_template_part(
								'parts/magazine-card',
								null,
								array( 'post' => $_post )
							);
							?>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
		<?php
		button(
			'マガジン一覧を見る',
			array(
				'href'  => esc_url( home_url( '/magazine/' ) ),
				'class' => 'mx-auto',
			)
		);
		?>
	</section>
<?php endif; ?>

<!-- FAQ section -->
<?php
$faqs = get_posts(
	array( 'post_type' => 'faq' )
);

if ( $faqs ) :
	?>
	<section class="w-col-10 mx-auto grid place-items-center gap-40 lg:gap-80">
		<?php
		get_template_part(
			'parts/hgroup',
			null,
			array(
				'heading'    => array( 'FAQ' ),
				'subheading' => 'よくあるご質問',
			)
		);
		?>
		<ul class="grid">
			<?php foreach ( $faqs as $_post ) : ?>
				<li class="js-accordion group/button grid border-b-px border-brand-400" aria-expanded="false">
					<button class="js-accordion-trigger flex w-full items-center justify-between gap-24 py-20 font-black lg:py-30">
						<span class="flex items-center gap-24 text-left ~text-16/18 before:-translate-y-4 before:text-40 before:leading-none before:content-['Q'] before:gradient-text"><?php echo esc_html( $_post->post_title ); ?></span>
						<span class="grid size-24 shrink-0 place-items-center transition-transform duration-300 ease-out-back after:w-full after:icon-chevron-down after:text-brand-300 group-aria-expanded/button:rotate-180">
						</span>
					</button>
					<div class="grid grid-rows-[1fr] overflow-hidden font-semibold transition-all duration-300 aria-hidden:grid-rows-[0fr]" aria-hidden="true">
						<div class="min-h-0">
							<div class="flex gap-24 pb-28 lg:pr-48 lg:pb-40 before:-translate-y-4 before:text-40 before:leading-none before:content-['A'] before:gradient-text">
								<p class="mt-4"><?php echo esc_html( wp_strip_all_tags( get_the_content( null, false, $_post ) ) ); ?></p>
							</div>
						</div>
					</div>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php
		button(
			'よくあるご質問の一覧を見る',
			array(
				'href'  => esc_url( home_url( '/faq/' ) ),
				'class' => 'mx-auto',
			)
		);
		?>
	</section>
<?php endif; ?>

<section class="col-10 mx-gutter lg:mx-auto">
	<?php get_template_part( 'parts/button-cta' ); ?>
</section>

<?php
get_footer();
