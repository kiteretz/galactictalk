<?php
/**
 * Archive Template
 *
 * @package GalacticTalk
 */

get_header();
?>

<div>
	<?php
	get_template_part(
		'parts/page-header',
		null,
		array(
			'title'    => 'News',
			'subtitle' => '新着情報',
			'image'    => 'mv-news.webp',
		)
	);
	?>

	<?php if ( have_posts() ) : ?>
		<div class="container grid ~gap-x-16/32 ~gap-y-40/80 lg:grid-cols-3">
			<?php while ( have_posts() ) : ?>
				<?php
				the_post();
				?>
				<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="group marker:selection:after:flex flex-col h-fit *:shrink-0">
					<div class="aspect-[352/198] overflow-hidden ~rounded-12/16">
						<img
							class="size-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-[1.05] group-active:scale-[1.05]"
							src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>"
							alt=""
							width="384"
							height="600"
						>
					</div>
					<div class="grid grow auto-rows-min items-start ~mt-16/24">
						<p class="text-brand-400 text-ellipsis overflow-hidden font-barlow ~text-15/16 leading-normal"><?php echo esc_html( get_the_date() ); ?></p>
						<h3 class="line-clamp-2 ~text-16/20 font-bold leading-normal text-brand-400 text-ellipsis overflow-hidden">
							<?php echo esc_html( get_the_title() ); ?>
						</h3>
						<?php if ( has_excerpt() ) : ?>
							<p class="line-clamp-3 leading-normal ~text-15/16 font-barlow text-ellipsis overflow-hidden ~mt-12/16">
								<?php echo esc_html( get_the_excerpt() ); ?>
							</p>
						<?php endif; ?>
					</div>
				</a>
			<?php endwhile; ?>
		</div>
		<?php
	endif;
	?>
</div>

<?php
get_footer();
