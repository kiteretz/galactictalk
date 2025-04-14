<?php
/**
 * Single Post Template
 *
 * This template is used to display a single post.
 *
 * @package GalacticTalk
 */

$tags = wp_get_post_terms( get_the_ID(), array( 'course_tag', 'magazine_tag', 'tutor_tag' ) );

get_header(); ?>

<div class="relative grid lg:*:col-span-full lg:*:row-span-full">
	<div class="relative ~h-[16.875rem]/800 overflow-hidden ~mb-[-1.875rem]/[-9.875rem] lg:mb-0">
		<img src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="" class="object-cover size-full">
		<div class="absolute inset-0 bg-gradient-to-b from-transparent from-70% to-black lg:from-50%"></div>
	</div>
	<div class="z-10 container self-end lg:mb-25">
		<div class="flex flex-col ~gap-20/32">
			<h1 class="~text-32/48 text-white font-bold leading-normal"><?php echo esc_html( get_the_title() ); ?></h1>
			<?php if ( $tags ) : ?>
				<ul class="flex flex-wrap gap-8">
					<?php foreach ( $tags as $_tag ) : ?>
						<li class="tag-sm inline-block rounded-full bg-brand-100 font-bold text-brand-900 lg:tag-md"><?php echo esc_html( $_tag->name ); ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="editor-styles-wrapper">
	<div class="block-editor-block-list__layout is-root-container is-layout-flow !py-0">
		<?php the_content(); ?>
	</div>
</div>

<section class="col-10 mx-gutter lg:mx-auto">
	<?php get_template_part( 'parts/button-cta' ); ?>
</section>

<?php
get_footer();
