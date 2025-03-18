<?php
/**
 * The template for displaying testimonial archive pages
 *
 * @package GalacticTalk
 */

get_header();
?>

<?php
$testimonials = get_posts(
	array(
		'post_type'   => 'testimonial',
		'numberposts' => 6,
	)
);
if ( $testimonials ) :
	?>

	<div>

		<!-- TODO: メインビジュアルコンポーネントを作成する -->
		<div class="relative mb-24 grid *:col-span-full *:row-span-full lg:mb-0">
			<div class="relative ~/lg:~h-400/600 overflow-hidden lg:h-[min(calc(100vw*0.75),37.5rem)]">
				<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/thumbnail_testimonial.jpg' ) ); ?>" alt="" class='h-full w-full object-cover' />
				<div class="absolute inset-0 bg-gradient-to-b from-transparent from-10% to-black lg:from-40%"></div>
			</div>
			<div class="z-10 container mt-224 grid justify-self-end items-start lg:mt-auto lg:pb-142">
				<div class="grid font-barlow uppercase">
					<p class="mb-8/0 font-bold leading-[1.2] ~text-40/120">Testimonials</p>
					<h1 class="mb-2 w-fit bg-brand-600 leading-relaxed lg:leading-none ~text-14/18 ~rounded-2/4 font-bold ~p-4/8">受講生の声</h1>
					<div class="font-bold ~mt-16/32">受講生アンケートでいただいた声をご紹介いたします。</div>
				</div>
			</div>
		</div>

		<section class="~px-20/32 pt-20">
			<div class="grid md:grid-cols-2 ~gap-20/32 max-w-1120 mx-auto">
				<?php
				$bg_colors = array( '#F748A2', '#00AF83', '#E9A124', '#6E00C2', '#1B97D0' );
				foreach ( $testimonials as $index => $_post ) :
					?>
					<div class="rounded-24 bg-[--bg-color]" style="--bg-color: <?php echo esc_attr( $bg_colors[ $index % count( $bg_colors ) ] ); ?>">
						<div class="flex gap-18 p-24">
							<?php if ( has_post_thumbnail( $_post ) ) : ?>
								<div class="size-64 shrink-0 overflow-hidden rounded-full lg:size-80">
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
		</section>
	</div>
<?php endif; ?>

<?php get_footer();
