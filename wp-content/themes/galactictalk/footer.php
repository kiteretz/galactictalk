<?php
/**
 * The footer
 *
 * @package GalacticTalk
 */

?>
</main>

</div>

<footer class="
	<?php
	cx(
		'relative overflow-hidden from-transparent',
		'[background-image:linear-gradient(to_bottom,transparent_4.35rem,#3E1F56_4.35rem,#0000_100%)]',
		'lg:[background-image:linear-gradient(to_bottom,transparent_30.2%,#3E1F56_30.2%,#0000_100%)]',
	)
	?>
">
	<div class="container relative z-10 grid gap-50 pt-20 ~pb-72/244">
		<div class="grid items-center gap-16 *:col-span-full *:row-span-full">
			<p class="js-split-text leading-[1.04] tracking-[-0.03em] ~text-50/132 stroke-text *:inline-block">
				<span class="sr-only">The Power of Language</span>
				<?php split_text( 'The Power' ); ?>
				<?php split_text( 'of Language' ); ?>
			</p>
			<p class="font-bold leading-normal ~text-10/28 ~px-1/4 gradient-text">ワクワクする未来を話そう</p>
		</div>
		<div class="flex w-[13rem] flex-col ~gap-40/80 lg:w-auto lg:flex-row lg:items-start">
			<div class="grid max-w-[18.625rem] place-items-start gap-[1.6875rem]">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="~h-38/54 w-full" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo.svg' ) ); ?>" alt="<?php bloginfo( 'name' ); ?>" width="297" height="54">
				</a>
				<div class="break-keep leading-normal">東京都近未来区1-2-3 ギャラクシービル102F</div>
			</div>
			<nav>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => null,
						'menu_id'        => 'menu-footer',
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>
		</div>
	</div>
	<div class="js-staggered pointer-events-none absolute inset-0">
		<?php
		foreach ( array(
			array(
				'class'  => '-bottom-8 ~/lg:~left-200/264 ~/lg:~w-260/360 lg:left-[63vw] lg:top-0 lg:w-[28.875rem]',
				'src'    => '/assets/images/footer-1.webp',
				'width'  => 462,
				'height' => 653,
			),
			array(
				'class'  => '~/lg:~top-120/200 ~/lg:~left-480/680 ~/lg:~w-220/320 lg:-left-[4.1875rem] lg:bottom-0 lg:top-388 lg:w-280',
				'src'    => '/assets/images/footer-2.webp',
				'width'  => 280,
				'height' => 395,
			),
		) as $image ) :
			?>
			<img
				class="<?php cx( 'absolute rounded-t-full ~rounded-b-[2.5rem]/[6rem]', $image['class'] ); ?>"
				src="<?php echo esc_url( get_theme_file_uri( $image['src'] ) ); ?>"
				alt=""
				width="<?php echo esc_attr( $image['width'] ); ?>"
				height="<?php echo esc_attr( $image['height'] ); ?>"
			>
		<?php endforeach; ?>
	</div>
</footer>

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

<!-- Overlay for introduction animation -->
<div class="js-introduction h-screen grid place-items-center w-full z-50 fixed inset-x-0 bg-black"></div>


<?php wp_footer(); ?>
</body>
</html>
