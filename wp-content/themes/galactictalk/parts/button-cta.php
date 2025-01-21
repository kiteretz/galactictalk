<?php
/**
 * CTA button
 *
 * @package GalacticTalk
 */

$defaults = array(
	'class' => '',
);
$args     = wp_parse_args( $args, $defaults );
?>

<a class="
	<?php
	cx(
		'js-bounce-in group/cta mx-auto grid h-80 !max-w-640 grid-cols-[auto,1fr] grid-rows-[5rem] items-center rounded-full bg-[theme(colors.pink.DEFAULT)] pl-0 pr-28 tracking-[-0.02em] transition-all duration-300 ease-out',
		'lg:h-120 lg:!max-w-col-10 lg:grid-cols-[repeat(3,auto)] lg:grid-rows-[7.5rem] lg:pl-48 lg:pr-0',
		'hover:drop-shadow-[0_0_1.5rem_theme(colors.pink.DEFAULT)]',
		$args['class']
	);
	?>
" href="#">
	<div class="col-[1/2] row-[1/2] h-96 self-end overflow-hidden rounded-bl-40 lg:col-auto lg:row-auto lg:h-160 lg:w-196 lg:rounded-bl-0">
		<img class="w-108 lg:w-220 transition-transform duration-200 delay-75 ease-out-back group-hover/cta:-rotate-6" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/tutor-whole-3.webp' ) ); ?>" alt="" width="220" height="315">
	</div>
	<div class="flex items-center justify-between -ml-16 gap-12 font-bold leading-none text-white ~text-15/24">
		<span class="leading-normal break-keep"><span class="~text-16/32">14日間トライアル</span><wbr>に申し込む</span>
		<span class="grid shrink-0 place-items-center rounded-full bg-white text-[#F748A2] ~size-32/40 before:icon-chevron-right before:size-16"></span>
	</div>
	<div class="relative col-[1/2] row-[1/2] grid w-130 place-items-center *:col-span-full *:row-span-full lg:col-auto lg:row-auto lg:w-248">
		<img class="hidden lg:block w-42 translate-x-[2rem] translate-y-[-0.5rem] rotate-[24deg] scale-x-[-1] transition-transform duration-300 delay-100 ease-out-back group-hover/cta:translate-y-[-2rem] lg:w-108 lg:translate-x-[-2rem] lg:translate-y-[-1.5rem]" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/headphone.webp' ) ); ?>" alt="" width="108" height="136">
		<img class="hidden lg:block w-18 translate-y-[1.25rem] rotate-[-19deg] transition-transform duration-300 delay-150 ease-out-back group-hover/cta:translate-y-0 lg:w-50 lg:translate-x-[3rem] lg:translate-y-[0.5rem]" src="<?php echo esc_url( get_theme_file_uri( '/assets/images/crystal-yellow.webp' ) ); ?>" alt="" width="50" height="78">
	</div>
</a>
