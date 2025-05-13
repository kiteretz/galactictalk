<?php
/**
 * Archive Testimonials Template
 *
 * @package GalacticTalk
 */

get_header();

// Current post background colors.
$bg_colors = array( '#00AF83', '#E9A124', '#1B97D0', '#6E00C2', '#F748A2' );
$index     = 0;
?>

<div>
	<?php
	get_template_part(
		'parts/page-header',
		null,
		array(
			'title'    => 'Testimonials',
			'subtitle' => '受講生の声',
			'image'    => 'mv-testimonial.webp',
			'excerpt'  => '受講生アンケートでいただいた声をご紹介いたします。',
		)
	);
	?>

	<?php if ( have_posts() ) : ?>
		<section class="~px-20/32">
			<div class="grid md:grid-cols-2 ~gap-20/32 max-w-1120 mx-auto">
				<?php
				while ( have_posts() ) :
					the_post();
					// Get the post background color.
					$current_color = $bg_colors[ $index % count( $bg_colors ) ];
					++$index;
					?>
					<div class="flex gap-18 ~p-16/24 rounded-24 bg-[--bg-color]" style="--bg-color: <?php echo esc_attr( $current_color ); ?>">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="size-64 shrink-0 overflow-hidden rounded-full lg:size-80">
								<?php echo get_the_post_thumbnail( null, 'thumbnail', array( 'class' => 'h-full w-full object-cover' ) ); ?>
							</div>
						<?php endif; ?>
						<div class="grid h-full grid-rows-[auto_1fr] gap-12 lg:gap-16">
							<h3 class="text-16 font-black leading-normal lg:text-18"><?php echo esc_html( get_the_title() ); ?></h3>
							<p class="line-clamp-4"><?php the_content(); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</section>
	<?php endif; ?>
</div>

<?php
get_footer();
