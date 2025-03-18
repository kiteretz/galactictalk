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

	<!-- TODO: メインビジュアルコンポーネントを作成する -->
	<div class="h-600 flex items-center justify-center bg-[#9100FF]">MainVisual</div>

	<section class="~px-16/32">
		<div class="grid md:grid-cols-2 ~gap-16/32 max-w-1120 mx-auto pt-20">
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
<?php endif; ?>

<?php get_footer();
