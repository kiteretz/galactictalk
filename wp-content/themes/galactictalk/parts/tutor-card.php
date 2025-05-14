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

$english_title    = get_field( 'english_title', $args['post'] );
$tags             = get_the_terms( $args['post'], 'tutor_tag' );
$is_tutor_archive = is_post_type_archive( 'tutor' );
?>

<a class="
<?php
cx(
	'relative z-0 flex h-full w-248 flex-col',
	'lg:w-352',
	$args['class']
);
?>
"
href="<?php echo esc_url( get_the_permalink( $args['post'] ) ); ?>"
>
	<div class="flex h-full flex-col gap-12 rounded-t-[22.5rem] ~rounded-b-16/24 bg-[radial-gradient(160.32%_65.66%_at_50%_0%,_#6E00C2_0%,_#20103C_100%)] ~md:~pt-48/80">
		<?php
		if ( $is_tutor_archive ) :
			if ( get_field( 'popular_badge', $args['post'] ) ) :
				?>
				<p class="
					<?php
						cx(
							'absolute -top-7 -right-6 bg-[linear-gradient(187deg,#FF6CAE_-22.19%,#FF0E79_127.37%)] flex flex-col justify-center rounded-full ~size-70/106',
							'*:font-bold *:text-white *:text-center *:~text-16/22 *:leading-normal'
						);
					?>
				">
					<span>人気</span>
					<span>講師</span>
				</p>
				<?php
			endif;
		endif;
		?>
		<div class="relative grid auto-rows-min items-start justify-items-center ~px-12/19 text-center">
			<?php
			// Separate the English title into two lines.
			if ( $english_title ) :
				$english_title = explode( ' ', $english_title, 2 );
				?>
				<div class="grid place-items-center ~gap-4/8 font-barlow font-extrabold uppercase leading-[0.8] ~mb-4/8">
					<span class="~md:~text-48/64"><?php echo esc_html( $english_title[0] ); ?></span>
					<?php if ( isset( $english_title[1] ) ) : ?>
						<span class="~text-20/24"><?php echo esc_html( $english_title[1] ); ?></span>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<h3 class="font-bold ~text-16/18"><?php echo esc_html( get_the_title( $args['post'] ) ); ?></h3>
			<?php if ( $tags ) : ?>
				<ul class="flex flex-wrap justify-center ~gap-4/8 ~mt-12/16">
					<?php foreach ( $tags as $_tag ) : ?>
						<li class="tag-sm inline-block rounded-full bg-brand-200 font-bold text-brand-900 ~px-4/8 ~text-12/13"><?php echo esc_html( $_tag->name ); ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<?php if ( has_excerpt( $args['post'] ) ) : ?>
				<p class="leading-relaxed ~text-14/16"><?php echo esc_html( get_the_excerpt( $args['post'] ) ); ?></p>
			<?php endif; ?>
		</div>
		<div class="
		<?php
			cx(
				'relative mt-auto mx-auto overflow-hidden h-[13.3125rem] w-240 lg:h-312 lg:w-352',
			);
			?>
		">
			<img class="z-10 object-cover" src="<?php echo esc_url( get_the_post_thumbnail_url( $args['post'], 'full' ) ); ?>" alt="" width="352" height="312">
		</div>
	</div>
</a>
