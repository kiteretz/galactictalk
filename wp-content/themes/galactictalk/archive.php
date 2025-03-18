<?php get_header(); ?>

<!-- TODO: メインビジュアルコンポーネントを作成する -->
<div class="relative mb-24 grid *:col-span-full *:row-span-full lg:mb-0">
	<div class="relative ~/lg:~h-400/600 overflow-hidden lg:h-[min(calc(100vw*0.75),37.5rem)]">
		<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/thumbnail_news.jpg' ) ); ?>" alt="" class='h-full w-full object-cover' />
		<div class="absolute inset-0 bg-gradient-to-b from-transparent from-10% to-black lg:from-40%"></div>
	</div>
	<div class="z-10 container mt-224 grid justify-self-end items-start lg:mt-auto lg:pb-142">
		<div class="grid font-barlow uppercase">
			<p class="font-bold leading-[1.2] ~text-40/120">News</p>
			<h1 class="mt-8/0 w-fit bg-brand-600 leading-relaxed lg:leading-none ~text-14/18 ~rounded-2/4 font-bold ~p-4/8">ニュース</h1>
		</div>
	</div>
</div>

<?php
	$news = get_posts(
		array(
			'post_type'   => 'post',
			'numberposts' => 5,
		)
	);
	if ( $news ) :
		?>
		<div>
			<div class="~px-20/32 pt-20">
				<div class="grid grid-cols-3 ~gap-16/32 lg:translate-x-28">
					<?php foreach ( $news as $index => $_post ) : ?>
						<div class="">
							<a href="<?php echo esc_url( get_the_permalink( $_post ) ); ?>" class="">
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
	<?php endif; ?>
</section>


<?php get_footer();
