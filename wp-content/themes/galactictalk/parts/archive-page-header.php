<?php
/**
 * Archive page header
 *
 * @package GalacticTalk
 */

$defaults = array(
	'title'    => '',
	'subtitle' => '',
	'image'    => '',
);
$args     = wp_parse_args( $args, $defaults );
?>

<div class="grid mb-80 *:col-span-full *:row-span-full lg:~mb-0/[-10.5rem]">
	<div class="relative -z-10 ~h-[16.875rem]/800 overflow-hidden">
		<?php if ( $args['image'] ) : ?>
			<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/' . $args['image'] ) ); ?>" alt="" class="object-cover size-full">
		<?php endif; ?>
		<div class="absolute inset-0 bg-gradient-to-b from-transparent from-70% to-black lg:from-50%"></div>
	</div>
	<div class="container h-fit ~pt-200/240 lg:pb-92">
		<?php if ( $args['title'] ) : ?>
			<div class="flex flex-col ~gap-12/16">
				<h1 class="uppercase font-barlow ~text-40/120 text-white font-bold leading-none tracking-[-0.02em]"><?php echo esc_html( $args['title'] ); ?></h1>
				<?php if ( $args['subtitle'] ) : ?>
					<p class="text-white font-notosans ~text-15/16 font-bold leading-relaxed w-fit bg-brand-500 rounded-4 py-4 px-12 flex justify-center items-center"><?php echo esc_html( $args['subtitle'] ); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</div>
</div>
