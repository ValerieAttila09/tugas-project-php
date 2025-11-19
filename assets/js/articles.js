document.addEventListener('DOMContentLoaded', function () {

  const insertArticleModal = document.getElementById('insertArticle');
  const editArticleModal = document.getElementById('editArticle');
  const modalOverlay = document.getElementById('overlay');
  const toggleInsertBtn = document.getElementById('toggleInsertArticle');
  const createForm = document.getElementById('articleForm');
  const editForm = document.getElementById('articleEditForm');
  const sidebarMenu = document.querySelectorAll("#sidebarMenu");
  const profileDropdownToggle = document.querySelectorAll("#profileToggle");
  const profileDropdown = document.getElementById("profileDropdown");

  let sidebarActive = true;
  let profileDropdownActive = false;
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

  gsap.set(sidebarMenu, {
    width: "auto",
    opacity: 1,
    marginLeft: "6px",
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
        gsap.to(modalOverlay, {
          zIndex: 1,
          ease: "power2.out",
          duration: 0.3
        });
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

    gsap.to(insertArticleModal, {
      opacity: 1,
      zIndex: 50,
      visibility: 'visible',
      duration: 0.3,
      ease: "power2.out",
    });
    gsap.to(modalOverlay, {
      opacity: 1,
      zIndex: 15,
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

    gsap.to(editArticleModal, {
      opacity: 1,
      zIndex: 50,
      visibility: 'visible',
      duration: 0.3,
      ease: "power2.out",
    });
    gsap.to(modalOverlay, {
      opacity: 1,
      zIndex: 15,
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
    modalOverlay.addEventListener('click', function (e) {
      // Only close modal if clicking directly on overlay, not on modal itself
      if (e.target === modalOverlay) {
        hideAllModals();
      }
    });
  }

  profileDropdownToggle.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      if (profileDropdownActive) {
        gsap.to(profileDropdown, {
          opacity: 0,
          onComplete: () => {
            profileDropdown.classList.add("hidden");
            gsap.to(profileDropdown, {
              zIndex: -1,
            })
          },
          y: -20,
          duration: 0.35,
          ease: "power2.out",
        })
        profileDropdownActive = !profileDropdownActive;
      } else {
        gsap.to(profileDropdown, {
          opacity: 1,
          onStart: () => {
            profileDropdown.classList.remove("hidden");
            gsap.to(profileDropdown, {
              zIndex: 1,
            })
          },
          y: 0,
          duration: 0.35,
          ease: "power2.out",
        })
        profileDropdownActive = !profileDropdownActive;
      }
    })
  })
  document.getElementById("sidebar-toggle").addEventListener("click", () => {
    if (sidebarActive) {
      gsap.to("#sidebar", {
        width: "66px",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to("#mainContent", {
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to(sidebarMenu, {
        width: "0%",
        opacity: 0,
        marginLeft: "0px",
        duration: 0.35,
        ease: "power2.out",
      });
      sidebarActive = !sidebarActive;
    } else {
      gsap.to("#sidebar", {
        width: "280px",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to("#mainContent", {
        width: "100%",
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to(sidebarMenu, {
        width: "auto",
        opacity: 1,
        marginLeft: "6px",
        duration: 0.35,
        ease: "power2.out",
      });
      sidebarActive = !sidebarActive;
    }
  });

  async function postForm(form, endpoint) {
    const formData = new FormData(form);
    try {
      const res = await fetch(endpoint, {
        method: 'POST',
        body: formData
      });
      return await res.json();
    } catch (err) {
      // alert(err);
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
      // alert(result.message || 'No response');
      if (result.success) {
        window.location.reload();
      } else {
        if (btn) btn.disabled = false;
        window.location.reload();
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
      // alert(result.message || 'No response');
      if (result.success) {
        window.location.reload();
      } else {
        if (btn) btn.disabled = false;
        window.location.reload();
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
        // alert(result.message || 'No response');
        if (result.success) window.location.reload();
      } catch (err) {
        // alert('Request failed: ' + err.message);
        window.location.reload();
      }
    });
  });
  insertArticleModal.addEventListener('click', e => e.stopPropagation());
  editArticleModal.addEventListener('click', e => e.stopPropagation());
});