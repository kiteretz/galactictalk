<?php
/**
 * Course card
 *
 * @package GalacticTalk
 */

$defaults = array(
	'post'        => null,
	'class'       => '',
	'aria-hidden' => false,
);
$args     = wp_parse_args( $args, $defaults );

$english_title = get_field( 'english_title', $args['post'] );
$tags          = get_the_terms( $args['post'], 'course_tag' );
?>

<a class="<?php cx( 'relative flex aspect-[248/500] w-248 flex-col overflow-hidden rounded-24 shadow-sm lg:aspect-[368/600] lg:w-368 lg:shadow-lg', $args['class'] ); ?>" href="<?php echo esc_url( get_the_permalink( $args['post'] ) ); ?>"
<?php echo $args['aria-hidden'] ? 'aria-hidden="true"' : ''; ?>
>
	<div class="absolute inset-0">
		<img class="size-full object-cover" src="<?php echo esc_url( get_the_post_thumbnail_url( $args['post'], 'full' ) ); ?>" alt="" width="368" height="600">
	</div>
	<div class="absolute inset-0 flex bg-gradient-to-b from-transparent from-[47.52%] to-[rgba(110,0,194,0.80)] to-[93.64%]">
		<div class="w-full relative mt-auto grid auto-rows-min items-start justify-items-center ~px-8/24 ~py-16/28 ~min-h-240/220">
			<?php if ( $english_title ) : ?>
				<div class="font-barlow font-bold uppercase leading-none tracking-[-0.02em] ~text-32/48 ~mx-0/[-0.3125rem]"><?php echo esc_html( $english_title ); ?></div>
			<?php endif; ?>
			<h3 class="font-bold text-center ~text-16/18"><?php echo esc_html( get_the_title( $args['post'] ) ); ?></h3>
			<?php if ( $tags ) : ?>
				<ul class="flex flex-wrap ~gap-4/8 ~mt-12/16">
					<?php
					foreach ( $tags as $_tag ) :
						?>
						<li class="tag-sm inline-block rounded-full bg-brand-200 font-bold text-brand-900"><?php echo esc_html( $_tag->name ); ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<?php if ( has_excerpt( $args['post'] ) ) : ?>
				<p class="leading-relaxed line-clamp-3 ~mt-12/16"><?php echo esc_html( get_the_excerpt( $args['post'] ) ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</a>
