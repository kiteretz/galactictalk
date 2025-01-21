<?php
/**
 * Split Text
 *
 * @package GalacticTalk
 */

/**
 * Renders a split text element.
 *
 * @param string $text The text to split.
 * @param string $classname The classname to add to the span.
 * @return void
 */
function split_text( $text, $classname = '' ) {
	?>
	<span class="overflow-hidden *:inline-block" aria-hidden="true">
		<?php
		foreach ( mb_str_split( $text ) as $char ) {
			if ( ' ' === $char ) {
				echo '<span>&nbsp;</span>';
			} else {
				echo '<span class="will-change-transform ' . esc_attr( $classname ) . '">' . esc_html( $char ) . '</span>';
			}
		}
		?>
	</span>
	<?php
}
