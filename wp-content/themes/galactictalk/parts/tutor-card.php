<?php
/**
 * Tutor card
 *
 * @package GalacticTalk
 */

$defaults = array(
	'post'  => null,
	'class' => '',
);
$args     = wp_parse_args( $args, $defaults );

$english_title = get_field( 'english_title', $args['post'] );
$tags          = get_the_terms( $args['post'], 'tutor_tag' );
?>

<a class="<?php cx( 'relative flex h-full w-248 flex-col overflow-hidden rounded-40 lg:h-561 lg:w-352', $args['class'] ); ?>" href="<?php echo esc_url( get_the_permalink( $args['post'] ) ); ?>">
	<div class="flex h-full flex-col rounded-t-full bg-[radial-gradient(160.32%_65.66%_at_50%_0%,_#6E00C2_0%,_#20103C_100%)] ~md:~pt-48/80">
		<div class="relative grid auto-rows-min items-start justify-items-center gap-20 px-16 text-center">
			<?php
			// Separate the English title into two lines.
			if ( $english_title ) :
				$english_title = explode( ' ', $english_title, 2 );
				?>
				<div class="grid place-items-center gap-8 font-barlow font-extrabold uppercase leading-[0.8]">
					<span class="~md:~text-40/64"><?php echo esc_html( $english_title[0] ); ?></span>
					<?php if ( isset( $english_title[1] ) ) : ?>
						<span class="text-24"><?php echo esc_html( $english_title[1] ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<h3 class="font-bold ~text-15/18"><?php echo esc_html( get_the_title( $args['post'] ) ); ?></h3>
			<?php if ( $tags ) : ?>
				<ul class="flex flex-wrap justify-center gap-8 px-16">
					<?php foreach ( $tags as $_tag ) : ?>
						<li class="tag-sm inline-block rounded-full bg-brand-200 font-bold text-brand-900"><?php echo esc_html( $_tag->name ); ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<?php if ( has_excerpt( $args['post'] ) ) : ?>
				<p class="leading-relaxed ~text-14/16"><?php echo esc_html( get_the_excerpt( $args['post'] ) ); ?></p>
			<?php endif; ?>
		</div>
		<div class="relative mt-auto grid place-items-center rounded-b-40">
			<img class="z-10" src="<?php echo esc_url( get_the_post_thumbnail_url( $args['post'], 'full' ) ); ?>" alt="" width="384" height="600">
		</div>
	</div>
</a>
