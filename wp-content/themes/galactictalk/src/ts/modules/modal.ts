/**
 * Modal
 */
// import MicroModal from 'micromodal';

// MicroModal.init();

// 提供されたJavaScriptコード
// const triggers = document.querySelectorAll('.js-modal-trigger');
// const overlay = document.getElementById('modal-overlay');

// triggers?.forEach((trigger) => {
//   const id = (trigger as HTMLElement).dataset.targetMenu;

//   trigger.addEventListener('click', () => {
//     const modal = document.getElementById(`modal-${id}`);
//     const isOpen = modal?.getAttribute('aria-hidden') === 'true';
//     document.body.style.overflow = isOpen ? 'hidden' : 'auto';
//     modal?.setAttribute('aria-hidden', `${!isOpen}`);
//     overlay?.setAttribute('aria-hidden', `${!isOpen}`);
//   });
// });

// // オーバーレイクリックで閉じる機能を追加
// overlay?.addEventListener('click', () => {
//   const openModal = document.querySelector('.modal[aria-hidden="false"]');
//   if (openModal) {
//     document.body.style.overflow = 'auto';
//     openModal.setAttribute('aria-hidden', 'true');
//     overlay.setAttribute('aria-hidden', 'true');
//   }
// });

// // ESCキーで閉じる機能を追加
// document.addEventListener('keydown', (e) => {
//   if (e.key === 'Escape') {
//     const openModal = document.querySelector('.modal[aria-hidden="false"]');
//     if (openModal) {
//       document.body.style.overflow = 'auto';
//       openModal.setAttribute('aria-hidden', 'true');
//       overlay?.setAttribute('aria-hidden', 'true');
//     }
//   }
// });

// URL駆動モーダルシステム
class UrlModalSystem {
  overlay: HTMLElement | null;
  currentModal: HTMLElement | null;

  constructor() {
    this.overlay = document.getElementById('modal-overlay');
    this.currentModal = null;
    this.init();
  }

  init() {
    // ページ読み込み時にハッシュをチェック
    this.checkHash();

    // ハッシュ変更を監視
    window.addEventListener('hashchange', () => {
      this.checkHash();
    });

    // オーバーレイクリックで閉じる
    this.overlay?.addEventListener('click', () => {
      this.closeModal();
    });

    // ESCキーで閉じる
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        this.closeModal();
      }
    });

    // 閉じるボタンの設定
    document.querySelectorAll('.modal-close').forEach((btn) => {
      btn.addEventListener('click', () => {
        this.closeModal();
      });
    });
  }

  checkHash() {
    const hash = window.location.hash;

    if (hash && hash.startsWith('#modal-')) {
      const modalId = hash.substring(1); // #を除去
      this.openModal(modalId);
    } else {
      this.closeAllModals();
    }
  }

  openModal(modalId) {
    // 既存のモーダルを閉じる
    this.closeAllModals();

    const modal = document.getElementById(modalId);
    if (modal) {
      this.currentModal = modal;
      document.body.style.overflow = 'hidden';
      this.overlay?.classList.add('active');
      modal.classList.add('active');

      // フォーカスをモーダル内の最初のフォーカス可能要素に移動
      const focusableElement = modal.querySelector(
        'input, button, textarea, select, a[href]',
      );
      if (focusableElement) {
        setTimeout(() => (focusableElement as HTMLElement).focus(), 100);
      }
    }
  }

  closeModal() {
    // ハッシュをクリア（履歴に残さない）
    if (window.location.hash) {
      history.replaceState(
        null,
        '',
        window.location.pathname + window.location.search,
      );
    }
    this.closeAllModals();
  }

  closeAllModals() {
    document.body.style.overflow = 'auto';
    this.overlay?.classList.remove('active');

    document.querySelectorAll('.modal.active').forEach((modal) => {
      modal.classList.remove('active');
    });

    this.currentModal = null;
  }
}

// システム初期化
document.addEventListener('DOMContentLoaded', () => {
  new UrlModalSystem();
});
