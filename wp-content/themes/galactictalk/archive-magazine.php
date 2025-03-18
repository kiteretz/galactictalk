<?php
/**
 * Archive Magazine Template
 *
 * @package GalacticTalk
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

<div class="container grid ~gap-x-16/32 ~gap-y-40/80 lg:grid-cols-3">

	<?php while ( have_posts() ) : ?>
		<?php
		the_post();
		$tags = get_the_terms( get_the_ID(), 'magazine_tag' );
		?>

		<div class="">
			<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="flex flex-col h-fit *:shrink-0 ~/xl:~rounded-16/24">
				<div class="aspect-[328/218] ~/xl:~rounded-16/24 overflow-hidden">
					<img
						class="size-full object-cover"
						src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>"
						alt=""
						width="384"
						height="600"
					>
				</div>
				<div class="grid grow auto-rows-min items-start gap-12 mt-16">
					<h3 class="font-black ~text-15/20">
						<?php echo esc_html( get_the_title() ); ?>
					</h3>
					<?php if ( $tags ) : ?>
						<ul class="flex flex-wrap gap-8">
							<?php foreach ( $tags as $_tag ) : ?>
								<li class="tag-sm inline-block rounded-full bg-brand-100 font-bold text-brand-900 lg:tag-md"><?php echo esc_html( $_tag->name ); ?></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<?php if ( has_excerpt() ) : ?>
						<p class="line-clamp-3 leading-relaxed">
							<?php echo esc_html( get_the_excerpt() ); ?>
						</p>
					<?php endif; ?>
				</div>
			</a>
		</div>

	<?php endwhile; ?>

</div>

	<?php
endif;
?>

<?php
get_footer();
