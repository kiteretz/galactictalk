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

<section class="col-10 mx-gutter lg:mx-auto">
	<p class="text-center ~text-20/24 font-bold leading-relaxed ~mb-52/94">
		教材とカリキュラムが試せる！<br />
		無料トライアルでぜひギャラクティックトークを<br />
		お得に試してみてください。
	</p>
	<?php get_template_part( 'parts/button-cta' ); ?>
</section>

<?php
get_footer();
