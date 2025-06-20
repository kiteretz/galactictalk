<?php
/**
 * Modal
 *
 * @package GalacticTalk
 */

?>

<div id="modal-overlay" class="
<?php
	cx(
		'fixed inset-0 w-full h-full bg-black/50 z-[1000] transition-opacity duration-300 ease-[ease] opacity-0 pointer-events-none',
		'[&.active]:opacity-100 [&.active]:pointer-events-auto'
	)
	?>
"></div>
<div id="modal-info" class="
<?php
	cx(
		'modal',
		'grid ~gap-y-20/32 fixed top-1/2 left-1/2 -translate-x-1/2 translate-y-[-60%] bg-white ~px-12/16 ~pt-32/64 pb-56 rounded-8 shadow-md z-[1001] max-w-720 w-full max-h-[100vh] overflow-y-auto transition-all duration-300 ease-[ease] opacity-0 pointer-events-none',
		'[&.active]:opacity-100 [&.active]:pointer-events-auto [&.active]:-translate-x-1/2 [&.active]:-translate-y-1/2',
	)
	?>
" role="dialog" aria-labelledby="modal-info-title">
	<h2 class="text-[#07030E] font-barlow font-bold uppercase text-center text-64 leading-none tracking-[-0.02em]">
	Thank you<br />
	for Visiting
	</h2>
	<div class="grid ~gap-y-12/16 text-black ~text-15/16 text-center leading-loose">
		<p>GalacticTalk は、地球にある制作会社<br />
		株式会社キテレツが制作した架空の宇宙語スクールです 🚀</p>
		<p>このサイトの企画からデザイン、実装など一連のプロセスを体験できる講座を<br />
		オンライン教育サービス Coloso にて公開中！</p>
	</div>
	<?php
	button(
		'講座詳細はこちら',
		array(
			'href'       => 'https://coloso.jp/products/creativeteam-kiteretz-jp',
			'target'     => '_blank',
			'text_class' => '~text-16/18',
			'icon'       => 'external',
			'icon_class' => 'before:size-24',
			'class'      => 'mx-auto text-brand-600 max-w-320',
		)
	);
	?>
	<button class="
	<?php
		cx(
			'modal-close',
			'size-24 absolute top-40 right-40'
		)
		?>
	" aria-label="モーダルを閉じる">
		<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none" viewBox="0 0 26 26">
			<path stroke="#000" d="m1 1 24 24M1 25 25 1"/>
		</svg>
	</button>
</div>
