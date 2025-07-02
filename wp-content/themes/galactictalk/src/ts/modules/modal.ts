/**
 * Modal
 *
 * .js-modal-trigger Open/close modal (#thankyou) on element click in class
 */

const triggers = document.querySelectorAll('.js-modal-trigger');
const overlay = document.querySelector('.overlay');
const modal = document.getElementById('thankyou');

// スクロールバーの幅を取得
function getScrollberWidth() {
  return window.innerWidth - document.documentElement.clientWidth;
}

// モーダル表示/非表示
function setModalVisibility(visible: boolean) {
  if (!modal || !overlay) return;
  modal.setAttribute('aria-hidden', visible ? 'false' : 'true');
  overlay.setAttribute('aria-hidden', visible ? 'false' : 'true');

  // モーダル表示時にスクロールバー非表示分の余白を追加
  if (visible) {
    const scrollberWidth = getScrollberWidth();
    document.body.style.overflow = 'hidden';
    document.body.style.paddingRight = `${scrollberWidth}px`;
  } else {
    document.body.style.overflow = '';
    document.body.style.paddingRight = '';
  }
}

// .js-modal-trigger クリックでモーダルを開く
triggers.forEach((trigger) => {
  trigger.addEventListener('click', (e) => {
    e.preventDefault();
    if (!modal || !overlay) return;
    const isOpen = modal.getAttribute('aria-hidden') === 'false';
    setModalVisibility(!isOpen);
  });
});

// .overlay クリックでモーダルを閉じる
overlay?.addEventListener('click', (e) => {
  if (e.target === overlay) setModalVisibility(false);
});

// ESC キーでモーダルを閉じる
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') setModalVisibility(false);
});
