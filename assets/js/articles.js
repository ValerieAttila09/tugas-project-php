document.addEventListener('DOMContentLoaded', function () {

  const insertArticleModal = document.getElementById('insertArticle');
  const editArticleModal = document.getElementById('editArticle');
  const modalOverlay = document.getElementById('overlay');
  const toggleInsertBtn = document.getElementById('toggleInsertArticle');
  const createForm = document.getElementById('articleForm');
  const editForm = document.getElementById('articleEditForm');

  let showInsertModal = false;
  let showEditModal = false;
  let quillEditor = null;
  let quillEditEditor = null;

  const quillOptions = {
    debug: 'info',
    modules: {
      toolbar: true,
    },
    placeholder: 'Deskripsikan artikel Anda di sini...',
    theme: 'snow'
  };

  quillEditor = new Quill('#editor', quillOptions);
  quillEditEditor = new Quill('#editor-edit', quillOptions);

  gsap.set([insertArticleModal, editArticleModal, modalOverlay], {
    opacity: 0,
    zIndex: -1,
    visibility: 'hidden'
  });

  function hideAllModals() {
    if (showInsertModal) {
      gsap.to(insertArticleModal, {
        opacity: 0,
        duration: 0.3,
        ease: "power2.out",
        onComplete: () => {
          insertArticleModal.classList.add('hidden');
        }
      });
      showInsertModal = false;
    }
    if (showEditModal) {
      gsap.to(editArticleModal, {
        opacity: 0,
        duration: 0.3,
        ease: "power2.out",
        onComplete: () => {
          editArticleModal.classList.add('hidden');
        }
      });
      showEditModal = false;
    }
    gsap.to(modalOverlay, {
      opacity: 0,
      duration: 0.3,
      ease: "power2.out",
      onComplete: () => {
        modalOverlay.classList.add('hidden');
        document.body.style.overflow = 'auto';
      }
    });
  }

  function showInsertModalFunc() {
    if (showEditModal) hideAllModals();

    document.body.style.overflow = 'hidden';
    insertArticleModal.classList.remove('hidden');
    modalOverlay.classList.remove('hidden');

    gsap.to(modalOverlay, {
      opacity: 1,
      zIndex: 40,
      visibility: 'visible',
      duration: 0.3,
      ease: "power2.out",
    });
    gsap.to(insertArticleModal, {
      opacity: 1,
      zIndex: 50,
      visibility: 'visible',
      duration: 0.3,
      ease: "power2.out",
    });
    showInsertModal = true;

    createForm.reset();
    quillEditor.setContents([]);
  }

  function showEditModalFunc(data) {
    if (showInsertModal) hideAllModals();

    document.body.style.overflow = 'hidden';
    editArticleModal.classList.remove('hidden');
    modalOverlay.classList.remove('hidden');

    gsap.to(modalOverlay, {
      opacity: 1,
      zIndex: 40,
      visibility: 'visible',
      duration: 0.3,
      ease: "power2.out",
    });
    gsap.to(editArticleModal, {
      opacity: 1,
      zIndex: 50,
      visibility: 'visible',
      duration: 0.3,
      ease: "power2.out",
    });
    showEditModal = true;

    document.getElementById('edit_article_id').value = data.id || '';
    document.getElementById('edit_judul').value = data.title || '';
    document.getElementById('edit_kategori').value = data.category || 'Lainnya';
    quillEditEditor.setContents([]);
    if (data.content) {
      quillEditEditor.root.innerHTML = data.content;
    }
  }

  if (toggleInsertBtn) {
    toggleInsertBtn.addEventListener('click', function () {
      if (showInsertModal) {
        hideAllModals();
      } else {
        showInsertModalFunc();
      }
    });
  }

  document.querySelectorAll('.edit-article').forEach(btn => {
    btn.addEventListener('click', function () {
      const articleData = {
        id: this.getAttribute('data-id'),
        title: this.getAttribute('data-title'),
        content: this.getAttribute('data-content'),
        category: this.getAttribute('data-category'),
        publisher: this.getAttribute('data-publisher'),
        image: this.getAttribute('data-image')
      };
      showEditModalFunc(articleData);
    });
  });

  if (modalOverlay) {
    modalOverlay.addEventListener('click', hideAllModals);
  }

  async function postForm(form, endpoint) {
    const formData = new FormData(form);
    try {
      const res = await fetch(endpoint, {
        method: 'POST',
        body: formData,
      });
      return await res.json();
    } catch (err) {
      return { success: false, message: err.message };
    }
  }

  if (createForm) {
    createForm.addEventListener('submit', async function (e) {
      e.preventDefault();

      document.getElementById('isi').value = quillEditor.root.innerHTML;

      const btn = createForm.querySelector('button[type="submit"]');
      if (btn) btn.disabled = true;

      const result = await postForm(createForm, '../articles/store.php');
      alert(result.message || 'No response');
      if (result.success) {
        window.location.reload();
      } else {
        if (btn) btn.disabled = false;
      }
    });
  }

  if (editForm) {
    editForm.addEventListener('submit', async function (e) {
      e.preventDefault();

      document.getElementById('edit_isi').value = quillEditEditor.root.innerHTML;

      const btn = editForm.querySelector('button[type="submit"]');
      if (btn) btn.disabled = true;

      const result = await postForm(editForm, '../articles/update.php');
      alert(result.message || 'No response');
      if (result.success) {
        window.location.reload();
      } else {
        if (btn) btn.disabled = false;
      }
    });
  }

  document.querySelectorAll('.delete-article').forEach(function (btn) {
    btn.addEventListener('click', async function (e) {
      e.preventDefault();
      const id = this.getAttribute('data-id');
      if (!id) return;
      if (!confirm('Apakah Anda yakin ingin menghapus artikel ini?')) return;

      try {
        const res = await fetch('../articles/delete.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ id: id })
        });
        const result = await res.json();
        alert(result.message || 'No response');
        if (result.success) window.location.reload();
      } catch (err) {
        alert('Request failed: ' + err.message);
      }
    });
  });
});