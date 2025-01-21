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
			<h1 class="js-split-text grid text-center ~text-55/132 leading-none !tracking-tighter gradient-text lg:text-[8.75vw]">
				<span class="sr-only">The Power of Language</span>
				<?php split_text( 'The Power' ); ?>
				<?php split_text( 'of Language' ); ?>
			</h1>
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
		array(
			'post_type'   => 'post',
			'numberposts' => 5,
		)
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
								<div class="flex flex-col basis-2/3 ~px-4/8 ~py-12/16 tracking-tighter 2xl:px-8 2xl:py-16">
									<time datetime="<?php echo esc_html( get_the_date( 'Y.m.d', $_post ) ); ?>" class="min-w-0 font-barlow ~lg/2xl:~text-12/13 2xl:text-13"><?php echo esc_html( get_the_date( 'Y.m.d', $_post ) ); ?></time>
									<div class="line-clamp-2 font-medium leading-normal 2xl:text-16"><?php echo esc_html( $_post->post_title ); ?></div>
								</div>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	<?php endif; ?>
</section>

<!-- Features section -->
<section class="relative mt-40 lg:~lg:~-mt-0/144 2xl:mt-[-9vw]">
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
					<div class="grid px-24 text-center font-bold ~text-18/24 lg:content-start">
						<span>教材とカリキュラムが試せる！</span>
						<span>無料トライアルでぜひギャラクティックトークを</span>
						<span>お得に試してみてください。</span>
					</div>
				</div>
				<!-- Images -->
				<div class="pointer-events-none grid h-full w-full max-w-480 mx-auto [&>*]:col-span-full [&>*]:row-span-full">
					<!-- Arched images -->
					<div class="js-staggered grid grid-cols-2 place-items-center px-18 ~/lg:~-translate-y-152/240 ~/lg:~gap-10/24 lg:translate-y-112">
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
			<ul class="js-staggered splide__list flex-row xl:!flex xl:max-w-container xl:flex-wrap xl:justify-center xl:gap-x-32 xl:gap-y-48">
				<?php foreach ( $tutors as $_post ) : ?>
					<li class="splide__slide">
						<?php
						get_template_part(
							'parts/tutor-card',
							null,
							array( 'post' => $_post )
						);
						?>
					</li>
				<?php endforeach; ?>
			</ul>
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
			<ul class="splide__list">
				<?php
				$bg_colors = array( '#F748A2', '#00AF83', '#E9A124', '#F748A2', '#6E00C2', '#1B97D0' );
				foreach ( $testimonials as $index => $_post ) :
					?>
					<li class="
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
					</li>
				<?php endforeach; ?>
			</ul>
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
<section class="flex *:animate-marquee *:shrink-0">
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
			<ul class="js-staggered splide__list max-w-container xl:!flex xl:flex-row xl:flex-wrap">
				<?php
				foreach ( $magazine as $index => $_post ) :
					if ( 0 === $index ) :
						?>
						<li class="splide__slide min-w-264 basis-1/3 xl:mb-120 xl:basis-full xl:px-29">
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
						</li>
					<?php else : ?>
						<li class="splide__slide min-w-264 basis-1/3 xl:px-29">
							<?php
							get_template_part(
								'parts/magazine-card',
								null,
								array( 'post' => $_post )
							);
							?>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
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
		<div class="grid">
		<?php foreach ( $faqs as $_post ) : ?>
			<div class="js-accordion group/button grid border-b-px border-brand-400" aria-expanded="false">
				<button class="js-accordion-trigger flex w-full items-center justify-between gap-24 py-20 font-black lg:py-30">
					<span class="flex items-center gap-24 text-left ~text-16/18 before:-translate-y-4 before:text-40 before:leading-none before:content-['Q'] before:gradient-text"><?php echo esc_html( $_post->post_title ); ?></span>
					<span class="grid size-24 shrink-0 place-items-center transition-transform duration-300 ease-out-back after:icon-chevron-down after:text-brand-300 group-aria-expanded/button:rotate-180">
				</button>
				<div class="grid grid-rows-[1fr] overflow-hidden font-semibold transition-all duration-300 aria-hidden:grid-rows-[0fr]" aria-hidden="true">
					<div class="min-h-0">
						<div class="flex gap-24 pb-28 lg:pr-48 lg:pb-40 before:-translate-y-4 before:text-40 before:leading-none before:content-['A'] before:gradient-text">
							<p class="mt-4"><?php echo esc_html( wp_strip_all_tags( get_the_content( null, false, $_post ) ) ); ?></p>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
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

<!-- Halos (background) -->
<div class="absolute inset-0 -z-10 grid place-items-center mix-blend-screen overflow-hidden w-[calc(var(--cw)*100)]">
	<?php
	foreach ( array(
		'w-960 top-[119rem] -left-672 lg:w-[140vw] lg:top-[143vw] lg:left-[-50vw]',
		'w-960 top-[256rem] -left-144 lg:w-[120vw] lg:top-[191vw] lg:left-[11vw]',
		'w-960 top-[392rem] -left-620 lg:w-[120vw] lg:top-[318vw] lg:left-[-28vw]',
		'hidden lg:block lg:w-[102vw] lg:top-[394vw] lg:left-[37vw]',
		'w-960 top-[473rem] -left-176 lg:w-[130vw] lg:top-[515vw] lg:left-[-32vw]',
	) as $classes ) :
		?>
		<img
			class="<?php cx( 'absolute mix-blend-screen h-auto max-w-none', $classes ); ?>"
			src="<?php echo esc_url( get_theme_file_uri( '/assets/images/halo.webp' ) ); ?>"
			alt=""
			width="800"
			height="800"
		>
	<?php endforeach; ?>
</div>

<?php
get_footer();
