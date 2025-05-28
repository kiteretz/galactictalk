<?php
/**
 * Archive Course Template
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
			'title'    => 'Course',
			'subtitle' => 'コース紹介',
			'image'    => 'mv-course.webp',
		)
	);
	?>
	<div class="container grid ~gap-20/28 ~mb-80/96">
		<h2 class="grid gap-16 font-barlow font-bold uppercase leading-none ~text-20/24 font-palt before:block before:h-6 before:w-40 before:rounded-full before:bg-brand-500">タグから探す</h2>
		<?php
		// タグ一覧を取得.
		$course_tags = get_terms(
			array(
				'taxonomy'   => 'course_tag',
				'hide_empty' => true,
			)
		);
		// 現在のタグを取得.
		$current_tag = get_query_var( 'course_tag' );
		?>
		<ul class="flex flex-wrap ~gap-x-16/20 gap-y-8">
			<li>
				<a href="<?php echo esc_url( get_post_type_archive_link( 'course' ) ); ?>" class="tag-md bg-brand-200 text-brand-900 ~text-15/16 ~px-20/24 <?php echo ( ! $current_tag ) ? 'bg-brand-500 text-white' : ''; ?>">すべて</a>
			</li>
			<?php foreach ( $course_tags as $course_tag ) : ?>
				<li>
					<a href="<?php echo esc_url( get_term_link( $course_tag ) ); ?>" class="tag-md bg-brand-200 text-brand-900 ~text-15/16 ~px-20/24 <?php echo ( $current_tag === $course_tag->slug ) ? 'bg-brand-500 text-white' : ''; ?>"><?php echo esc_html( $course_tag->name ); ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php if ( have_posts() ) : ?>
		<div class="container grid ~gap-x-20/32 ~gap-y-40/80 sm:grid-cols-2 lg:grid-cols-3">
			<?php
			while ( have_posts() ) :
				the_post();
				// Get the English title and tags.
				$english_title = get_field( 'english_title' );
				$tags          = get_the_terms( get_the_ID(), 'course_tag' );
				?>
				<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="relative">
					<?php if ( get_field( 'popular_badge' ) ) : ?>
						<p class="absolute -left-11 top-8 z-10 text-white text-center ~text-16/20 font-bold leading-relaxed inline-flex justify-center items-center ~rounded-4/8 ~py-4/8 ~px-12/16 bg-[linear-gradient(251deg,#FF6CAE_-35.88%,#FF0E79_134.9%)]">人気コース</p>
					<?php endif; ?>
					<div class="<?php cx( 'relative flex aspect-[317/517] w-full flex-col overflow-hidden rounded-24 shadow-sm sm:aspect-[352/513] lg:shadow-lg' ); ?>">
						<div class="absolute inset-0">
							<img class="size-full object-cover" src="<?php echo esc_url( get_the_post_thumbnail_url() ); ?>" alt="" width="352" height="513">
						</div>
						<div class="absolute inset-0 flex bg-gradient-to-b from-transparent from-[47.52%] to-[rgba(110,0,194,0.80)] to-[93.64%]">
							<div class="w-full relative mt-auto grid auto-rows-min items-start justify-items-center py-24 min-h-234 ~px-16/24">
								<?php if ( $english_title ) : ?>
									<div class="font-barlow font-bold uppercase tracking-[-0.04em] text-44/none mb-8 mx-[-0.375rem]"><?php echo esc_html( $english_title ); ?></div>
								<?php endif; ?>
								<h3 class="font-bold text-center leading-none tracing-[-0.02em] ~text-16/18"><?php echo esc_html( get_the_title() ); ?></h3>
								<?php if ( $tags ) : ?>
									<ul class="flex flex-wrap gap-5 mt-16 justify-center">
										<?php
										foreach ( $tags as $_tag ) :
											?>
											<li class="tag-sm inline-block rounded-full bg-brand-200 font-bold text-brand-900 ~px-12/16"><?php echo esc_html( $_tag->name ); ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>
								<?php if ( has_excerpt() ) : ?>
									<p class="leading-relaxed line-clamp-3 mt-16"><?php echo esc_html( get_the_excerpt() ); ?></p>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</a>
			<?php endwhile; ?>
		</div>
		<?php
	endif;
	?>
</div>

<section class="col-10 mx-gutter lg:mx-auto">
	<?php get_template_part( 'parts/button-cta' ); ?>
</section>

<?php
get_footer();
