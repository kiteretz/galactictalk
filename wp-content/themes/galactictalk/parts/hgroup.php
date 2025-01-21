<?php
/**
 * Hgroup
 *
 * @package GalacticTalk
 */

$defaults = array(
	'class'      => '',
	'heading'    => array(),
	'subheading' => '',
);
$args     = wp_parse_args( $args, $defaults );
?>

<hgroup class="<?php cx( 'grid justify-items-center gap-8 text-center ~px-24/32', $args['class'] ); ?>">
	<?php if ( $args['heading'] ) : ?>
		<h2 class="js-split-text grid uppercase leading-none ~text-40/120 lg:flex lg:gap-24">
			<span class="sr-only"><?php echo esc_html( implode( ' ', $args['heading'] ) ); ?></span>
			<?php
			foreach ( $args['heading'] as $text ) {
				split_text( $text, 'gradient-text' );
			}
			?>
		</h2>
	<?php endif; ?>
	<?php if ( $args['subheading'] ) : ?>
		<p class="inline-block bg-brand-500 font-bold ~rounded-4/8 ~px-12/16 ~py-4/8"><?php echo esc_html( $args['subheading'] ); ?></p>
	<?php endif; ?>
</hgroup>
