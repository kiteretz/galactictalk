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
		'overlay',
		'fixed inset-0 w-full h-full bg-black/50 z-[1000] transition-opacity duration-300 ease-[ease] opacity-0 pointer-events-none',
		'aria-[hidden=false]:opacity-100 aria-[hidden=false]:pointer-events-auto'
	)
	?>
" aria-hidden="true"></div>
<div id="thankyou" class="
<?php
	cx(
		'modal',
		'fixed opacity-0 top-1/2 left-1/2 w-full max-w-752 max-h-[100vh] px-16 -translate-x-1/2 translate-y-[-60%] pointer-events-none z-[1001] transition-all duration-300 ease-[ease]',
		'aria-[hidden=false]:opacity-100 aria-[hidden=false]:pointer-events-auto aria-[hidden=false]:-translate-x-1/2 aria-[hidden=false]:-translate-y-1/2',
	)
	?>
" role="dialog" aria-labelledby="Thank you for Visiting" aria-hidden="true">
	<div class="
	<?php
		cx(
			'relative grid ~gap-y-20/32 bg-white px-16 ~/lg:~pt-40/64 ~/lg:~pb-40/56 rounded-24 shadow-md overflow-y-auto transition-all duration-300 ease-[ease]',
			'[.active_&]:opacity-100 [.active_&]:pointer-events-auto'
		)
		?>
	">
		<h2 class="text-[#07030E] font-barlow font-bold uppercase text-center ~text-48/64 leading-none tracking-[-0.02em]">
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
				'class'      => 'mx-auto text-brand-600 !min-w-296 w-full max-w-320',
			)
		);
		?>
		<button class="
		<?php
			cx(
				'js-modal-trigger modal-close',
				'~/lg:~size-20/24 absolute ~/lg:~top-24/40 ~/lg:~right-24/40'
			)
			?>
		" aria-label="モーダルを閉じる">
			<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none" viewBox="0 0 26 26" class="size-full">
				<path stroke="#000" d="m1 1 24 24M1 25 25 1"/>
			</svg>
		</button>
	</div>
</div>
