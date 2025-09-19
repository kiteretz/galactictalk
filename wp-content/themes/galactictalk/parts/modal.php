<?php
/**
 * Modal
 *
 * @package GalacticTalk
 */

?>

<div id="thankyou" class="
<?php
	cx(
		'modal group/modal',
		'fixed inset-0 size-full grid place-items-center px-16 z-[1001]',
		'transition-all duration-300 ease-out',
		'aria-hidden:opacity-0 aria-hidden:invisible',
	)
	?>
" aria-hidden="true">
	<div
		class="
			<?php
			cx(
				'relative grid ~gap-y-20/32 w-full max-w-752 bg-white px-16 ~/lg:~pt-40/64 ~/lg:~pb-40/56 rounded-24 shadow-md overflow-y-auto',
				'transition duration-300 ease-out',
				'group-aria-hidden/modal:opacity-0 group-aria-hidden/modal:translate-y-32'
			)
			?>
		"
		role="dialog"
		aria-modal="true"
		aria-labelledby="thankyou-title"
	>
		<h2
			id="thankyou-title"
			class="text-[#07030E] font-barlow font-bold uppercase text-center ~text-48/64 leading-none tracking-[-0.02em]"
			aria-hidden="true"
		>
			<span class="sr-only">Thank you for Visiting</span>
			Thank you
			<br />
			for Visiting
		</h2>
		<div class="grid ~gap-y-12/16 text-black ~text-15/16 text-center leading-loose">
			<p>
				GalacticTalk は、地球にある制作会社
				<br />
				株式会社キテレツが制作した
				<br />
				架空の宇宙語スクールです 🚀
			</p>
			<p>
				このサイトの企画からデザイン・実装など
				<br />
				一連のプロセスを体験できる講座を
				<br />
				オンライン教育サービス Coloso にて公開中！
			</p>
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
		<button
			class="
				<?php
				cx(
					'~/lg:~size-20/24 absolute ~/lg:~top-24/40 ~/lg:~right-24/40'
				)
				?>
			"
			aria-label="モーダルを閉じる"
			data-micromodal-close
		>
			<?php
			// SVG アイコンの部分をクリックすると反応しないことがあるため、`pointer-events-none` を追加.
			?>
			<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none" viewBox="0 0 26 26" class="size-full pointer-events-none">
				<path stroke="#000" d="m1 1 24 24M1 25 25 1"/>
			</svg>
		</button>
	</div>
	<div
		class="
			<?php
			cx(
				'overlay',
				'fixed inset-0 size-full bg-black/50 -z-10',
			)
			?>
		"
		data-micromodal-close
	></div>
</div>
