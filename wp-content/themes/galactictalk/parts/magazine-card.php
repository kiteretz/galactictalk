<?php
/**
 * Magazine card
 *
 * @package GalacticTalk
 */

$defaults = array(
	'post'     => null,
	'class'    => '',
	'featured' => false,
);
$args     = wp_parse_args( $args, $defaults );

$tags = get_the_terms( $args['post'], 'magazine_tag' );
?>

<a class="
	<?php
	cx(
		'flex flex-col h-fit *:shrink-0 ~/xl:~rounded-16/24',
		$args['class'],
		$args['featured'] ? 'items-end xl:flex-row' : ''
	);
	?>
	"
	href="<?php echo esc_url( get_the_permalink( $args['post'] ) ); ?>"
>
	<div class="
		<?php
		cx(
			'aspect-[328/218] ~/xl:~rounded-16/24 overflow-hidden shadow-lg',
			$args['featured'] ? 'xl:w-col-7' : ''
		);
		?>
	">
		<img
			class="size-full object-cover"
			src="<?php echo esc_url( get_the_post_thumbnail_url( $args['post'], 'full' ) ); ?>"
			alt=""
			width="384"
			height="600"
		>
	</div>
	<div class="
		<?php
		cx(
			'grid grow auto-rows-min items-start bg-neutral-200 text-brand-900 shadow-lg ~gap-12/16',
			'~/xl:~rounded-16/24 ~/xl:~p-16/24 ~/xl:~translate-x-16/24 ~/xl:~-translate-y-16/24',
			$args['featured'] ? 'xl:h-min xl:w-col-6 xl:-translate-x-34 xl:translate-y-40 xl:p-40' : ''
		);
		?>
	">
		<h3 class="<?php cx( 'font-black ~text-15/20', $args['featured'] ? 'xl:text-32' : '' ); ?>">
			<?php echo esc_html( get_the_title( $args['post'] ) ); ?>
		</h3>
		<?php if ( $tags ) : ?>
			<ul class="flex flex-wrap gap-8">
				<?php foreach ( $tags as $_tag ) : ?>
					<li class="tag-sm inline-block rounded-full bg-brand-100 font-bold text-brand-900 lg:tag-md"><?php echo esc_html( $_tag->name ); ?></li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		<?php if ( has_excerpt( $args['post'] ) ) : ?>
			<p class="line-clamp-3 leading-relaxed">
				<?php echo esc_html( get_the_excerpt( $args['post'] ) ); ?>
			</p>
		<?php endif; ?>
	</div>
</a>
