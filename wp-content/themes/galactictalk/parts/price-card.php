<?php
/**
 * Price card template
 *
 * @package GalacticTalk
 */

$defaults = array(
	'title'       => '',
	'title_ja'    => '',
	'description' => '',
	'price'       => 0,
	'features'    => array(
		'language' => '',
		'level'    => '',
		'benefits' => '',
	),
	'card_class'  => '',
);
$args     = wp_parse_args( $args, $defaults );
?>

<div class="<?php cx( 'grid grid-rows-[auto_1fr] content-start gap-20 rounded-16 bg-[--bg] ~p-12/24 lg:gap-32', $args['card_class'] ); ?>">
	<div class="grid gap-16">
		<div class="relative mb-10 rounded-8 bg-white p-10 text-center font-bold leading-none text-brand-950">
			<?php echo esc_html( $args['description'] ); ?>
			<svg aria-hidden="true" class="absolute left-1/2 bottom-1 -translate-x-1/2 translate-y-[95%] w-14 h-10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 9.74512V0.745117H0.5L7 9.74512Z" fill="white"/><path d="M7 9.74512V0.745117H13.5L7 9.74512Z" fill="white"/></svg>
		</div>
		<div class="flex flex-col gap-20 md:flex-row md:justify-center md:gap-16 lg:flex-col lg:gap-32">
			<div class="grid basis-5/12 gap-16 text-center">
				<div class="grid gap-8 leading-[0.8]">
					<div class="font-barlow font-bold uppercase ~text-24/32"><?php echo esc_html( $args['title'] ); ?></div>
					<div class="font-bold ~text-16/18"><?php echo esc_html( $args['title_ja'] ); ?></div>
				</div>
				<div class="flex items-center justify-center gap-8">
					<span class="font-black ~pt-4/8 inline-block shrink-0">月額</span>
					<span class="font-barlow ~text-48/64 font-bold leading-[0.8]">¥<?php echo esc_html( number_format( $args['price'] ) ); ?></span>
				</div>
			</div>
			<table class="basis-7/12">
				<tbody class="
					<?php
					cx(
						'grid leading-relaxed ~gap-4/8 *:grid *:grid-cols-[4rem_1fr] *:~gap-4/8',
						'[&_th]:rounded-4 [&_th]:bg-white [&_th]:px-8 [&_th]:text-[--bg]',
						'[&_th]:self-start [&_th]:pt-2 [&_th]:text-center [&_th]:font-bold',
						'[&_td]:font-semibold [&_td]:pt-2',
					);
					?>
				">
					<tr>
						<th>言語</th>
						<td><?php echo esc_html( $args['features']['language'] ); ?></td>
					</tr>
					<tr>
						<th>レベル</th>
						<td><?php echo esc_html( $args['features']['level'] ); ?></td>
					</tr>
					<tr>
						<th>特典</th>
						<td><?php echo esc_html( $args['features']['benefits'] ); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<?php
	button(
		'このプランを申し込む',
		array(
			'href'  => '#',
			'class' => 'mx-auto w-full !min-w-0 self-end border-white !px-24 !py-16 text-white before:!bg-white hover:!bg-white hover:!text-[--bg] md:max-w-320',
		)
	);
	?>
</div>
