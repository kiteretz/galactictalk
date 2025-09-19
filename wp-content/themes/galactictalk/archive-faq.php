<?php
/**
 * Archive FAQ Template
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
			'title'    => 'FAQ',
			'subtitle' => 'よくあるご質問',
			'image'    => 'mv-faq.webp',
		)
	);
	?>

	<section class="w-col-10 mx-auto grid place-items-center gap-40 lg:gap-80">
		<?php if ( have_posts() ) : ?>
			<ul class="grid">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<li class="js-accordion group/button grid border-b-px border-brand-400" aria-expanded="false">
						<button class="js-accordion-trigger flex w-full items-center justify-between ~gap-12/16 ~py-16/24 ~px-12/16 font-bold">
							<span class="flex items-center ~gap-12/16 text-left ~text-16/18 before:-translate-y-4 before:text-40 before:leading-none before:content-['Q'] before:gradient-text"><?php echo esc_html( get_the_title() ); ?></span>
							<span class="grid size-24 shrink-0 place-items-center transition-transform duration-300 ease-out-back after:w-full after:icon-chevron-down after:text-brand-300 group-aria-expanded/button:rotate-180"></span>
						</button>
						<div class="grid grid-rows-[1fr] overflow-hidden transition-all duration-300 aria-hidden:grid-rows-[0fr]" aria-hidden="true">
							<div class="min-h-0">
								<div class="flex ~gap-16/24 ~px-12/16 ~pb-16/24 before:-translate-y-4 before:text-40 before:leading-none before:content-['A'] before:gradient-text">
									<div class="w-full ~text-15/16 space-y-[1em] [&_a]:underline [&_a]:hover:no-underline [&_a]:w-fit"><?php the_content(); ?></div>
								</div>
							</div>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</section>
</div>

<section class="col-10 mx-gutter lg:mx-auto">
	<?php get_template_part( 'parts/button-cta' ); ?>
</section>

<?php
get_footer();
