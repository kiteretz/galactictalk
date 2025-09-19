<?php
/**
 * Page Template
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
		<div class="block-editor-block-list__layout is-root-container is-layout-flow relative z-10">
			<?php the_content(); ?>
		</div>
	</div>
<?php endwhile; ?>

<?php if ( is_page( 'service' ) ) : ?>
	<section class="splide js-service-carousel relative">
		<h3 class="
			<?php
				cx(
					'container grid grid-cols-[auto_1fr] gap-16 leading-normal font-barlow font-palt font-bold ~text-24/32 ~mb-20/32',
					'before:block before:w-6 before:h-full before:rounded-full before:bg-brand-500'
				);
			?>
		"
		>文化交流プログラム</h3>
		<div class="splide__track pt-40 w-full ~mb-32/64">
			<div class="splide__list">
				<?php
				$bg_colors = array( '#FF3AA0', '#0095FF', '#9100FF', '#00AF92', '#F78324' );
				foreach ( array(
					array(
						'img'   => 'service-culture-1.webp',
						'label' => 'カルチャー交換マーケット',
						'body'  => '自分の星（または好みの惑星）の文化を発信＆交換！',
					),
					array(
						'img'   => 'service-culture-2.webp',
						'label' => '宇宙スナック「ソラノミ」',
						'body'  => 'ひとり参加でも安心。気軽に寄れるフリー参加型イベント',
					),
					array(
						'img'   => 'service-culture-3.webp',
						'label' => '星間シェアキッチン',
						'body'  => '惑星ごとの料理文化を学びながら、実際に「宇宙料理」を作ってみる',
					),
					array(
						'img'   => 'service-culture-4.webp',
						'label' => '異星語でうたおう',
						'body'  => '宇宙語のリズム・発音を活かして“歌”として体験する、音楽×言語のコラボ企画',
					),
					array(
						'img'   => 'service-culture-5.webp',
						'label' => '異星クイズパーティ',
						'body'  => '惑星別チーム対抗！カルチャー×言語クイズ',
					),
				) as $index => $culture ) :
					?>
					<div class="
						<?php
						cx(
							'splide__slide flex transition-transform duration-700 ease-out h-348 lg:h-332',
							'[&.is-active]:-translate-y-40',
							'has-[+.is-prev]:-translate-y-40',
							'[.is-next+&]:-translate-y-40',
						)
						?>
					" style="--bg-color: <?php echo esc_attr( $bg_colors[ $index % count( $bg_colors ) ] ); ?>">
						<div class="grid aspect-[248/346] h-346 gap-18 justify-items-center rounded-24 bg-[--bg-color] p-16 lg:aspect-[372/330] lg:h-330 lg:p-24">
							<div class="shrink-0 w-140">
								<img
									class="w-full"
									src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $culture['img'] ) ); ?>"
									alt=""
									width="372"
									height="330"
								>
							</div>
							<div class="grid h-full grid-rows-[auto_1fr] gap-8">
								<h3 class="text-16 font-bold leading-normal lg:text-24"><?php echo esc_html( $culture['label'] ); ?></h3>
								<p class="text-15 leading-relaxed lg:text-16"><?php echo esc_html( $culture['body'] ); ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="container">
			<h4 class="
				<?php
					cx(
						'rounded-4 flex justify-center items-center bg-brand-500 text-white text-20 font-bold w-fit mb-24 leading-relaxed',
						'~px-4/8'
					);
				?>
			">こんな方にオススメ</h4>
			<ul class="grid gap-8 md:gap-x-32 md:grid-cols-2">
				<?php
				foreach ( array(
					'宇宙語を勉強中だけど話す機会が少ない方',
					'一人でも気軽に楽しめる宇宙語アクティビティを探している方',
					'多様な価値観と対話する力を、言語＋文化の両面から磨きたい方',
					'宇宙旅行、ワーキングホリデイを予定している方',
				) as $item ) :
					?>
					<li class="flex text-white font-bold leading-relaxed ~text-15/16 ~gap-12/16">
						<img
							src="<?php echo esc_url( get_theme_file_uri( '/assets/images/icon/check.svg' ) ); ?>"
							alt=""
							width="32"
							height="32"
							class="shrink-0 self-start"
						>
						<?php echo esc_html( $item ); ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>

	<section class="col-10 mx-gutter lg:mx-auto">
		<p class="text-center ~text-20/24 font-bold leading-relaxed ~mb-52/94">
			教材とカリキュラムが試せる！<br />
			無料トライアルでぜひギャラクティックトークを<br />
			お得に試してみてください。
		</p>
		<?php get_template_part( 'parts/button-cta' ); ?>
	</section>

	<?php
endif;
get_footer();
