<?php
/**
 * Archive Magazine Template
 *
 * @package GalacticTalk
 */

get_header(); ?>


<!-- TODO: メインビジュアル確定したらコーディングする -->
<div class="relative mb-24 grid *:col-span-full *:row-span-full lg:mb-0">
	<div class="relative ~/lg:~h-400/600 overflow-hidden lg:h-[min(calc(100vw*0.75),37.5rem)]">
		<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/thumbnail_magazine.jpg' ) ); ?>" alt="" class='h-full w-full object-cover' />
		<div class="absolute inset-0 bg-gradient-to-b from-transparent from-10% to-black lg:from-40%"></div>
	</div>
	<div class="z-10 container grid justify-self-end items-start ~mt-196/224">
		<div class="grid font-barlow uppercase">
			<p class="font-bold leading-[1.2] ~text-40/120">Magazine</p>
			<h1 class="mt-8/0 w-fit bg-brand-600 leading-relaxed lg:leading-none ~text-14/18 ~rounded-2/4 font-bold ~p-4/8">マガジン</h1>
		</div>
	</div>
</div>

<?php if ( have_posts() ) : ?>
	<div class="container grid ~gap-x-16/32 ~gap-y-40/80 lg:grid-cols-3">
		<?php while ( have_posts() ) : ?>
			<?php
			the_post();
			$tags = get_the_terms( get_the_ID(), 'magazine_tag' );
			?>
			<div class="shadow-[0_0_40_0_rgba(49,25,90,0.80)_inset,0_2px_32px_0_rgba(188,94,239,0.40)]">
				<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="group marker:selection:after:flex flex-col h-fit *:shrink-0">
					<div class="aspect-[352/198] overflow-hidden rounded-16">
						<img
							class="size-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-[1.05] group-active:scale-[1.05]"
							src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>"
							alt=""
							width="384"
							height="600"
						>
					</div>
					<div class="grid grow auto-rows-min items-start gap-12 mt-16">
						<h3 class="font-bold ~text-15/20 leading-normal">
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
