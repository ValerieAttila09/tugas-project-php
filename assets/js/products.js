document.addEventListener("DOMContentLoaded", (event) => {
  let sidebarActive = true;
  let profileDropdownActive = false;
  let showModal = false;
  let showEditModal = false;
  const profileDropdownToggle = document.querySelectorAll("#profileToggle");
  const profileDropdown = document.getElementById("profileDropdown");
  const sidebarMenu = document.querySelectorAll("#sidebarMenu");
  const insertModal = document.getElementById("insertModal");
  const editModal = document.getElementById("editModal");
  const modalOverlay = document.getElementById("overlay");
  const insertModalToggle = document.querySelectorAll("#toggleInsertModal");
  const editModalToggle = document.querySelectorAll("#toggleEditModal");

  gsap.set(sidebarMenu, {
    width: "auto",
    opacity: 1,
    marginLeft: "6px",
  });
  gsap.set(profileDropdown, {
    opacity: 0,
    zIndex: -1,
    y: -20,
  });
  gsap.set(insertModal, {
    opacity: 0,
    zIndex: -1,
  });
  gsap.set(editModal, {
    opacity: 0,
    zIndex: -1,
  });
  gsap.set(modalOverlay, {
    opacity: 0,
    zIndex: -1,
  });

  window.editProduct = function (button) {
    const productId = button.getAttribute('data-id');
    const productName = button.getAttribute('data-name');
    const productDesc = button.getAttribute('data-desc');
    const productCategory = button.getAttribute('data-category');
    const productPrice = button.getAttribute('data-price');
    const productQty = button.getAttribute('data-qty');

    document.getElementById('edit_id_produk').value = productId;
    document.getElementById('edit_nama_produk').value = productName;
    document.getElementById('edit_deskripsi').value = productDesc;
    document.getElementById('edit_kategori').value = productCategory;
    document.getElementById('edit_harga').value = productPrice;
    document.getElementById('edit_kuantitas').value = productQty;

    if (!showEditModal) {
      if (showModal) {
        gsap.to(insertModal, {
          opacity: 0,
          onComplete: () => {
            insertModal.classList.add("hidden");
            gsap.to(insertModal, {
              zIndex: -1,
            })
          },
          duration: 0.35,
          ease: "power2.out",
        });
        showModal = !showModal;
      }

      gsap.to(editModal, {
        opacity: 1,
        onStart: () => {
          editModal.classList.remove("hidden");
          gsap.to(editModal, {
            zIndex: 1,
          });
          document.body.style.overflow = "hidden";
        },
        duration: 0.35,
        ease: "power2.out",
      });
      gsap.to(modalOverlay, {
        opacity: 1,
        onStart: () => {
          modalOverlay.classList.remove("hidden");
          gsap.to(modalOverlay, {
            zIndex: 1,
          })
        },
        duration: 0.35,
        ease: "power2.out",
      });
      showEditModal = !showEditModal;
    }
  };

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

  insertModalToggle.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      if (showModal) {
        gsap.to(insertModal, {
          opacity: 0,
          onComplete: () => {
            insertModal.classList.add("hidden");
            gsap.to(insertModal, {
              zIndex: -1,
            })
          },
          duration: 0.35,
          ease: "power2.out",
        });
        gsap.to(modalOverlay, {
          opacity: 0,
          onComplete: () => {
            modalOverlay.classList.add("hidden");
            gsap.to(modalOverlay, {
              zIndex: -1,
            });
            document.body.style.overflow = "auto";
          },
          duration: 0.35,
          ease: "power2.out",
        });
        showModal = !showModal;
      } else {
        if (showEditModal) {
          gsap.to(editModal, {
            opacity: 0,
            onComplete: () => {
              editModal.classList.add("hidden");
              gsap.to(editModal, {
                zIndex: -1,
              })
            },
            duration: 0.35,
            ease: "power2.out",
          });
          showEditModal = !showEditModal;
        }

        gsap.to(insertModal, {
          opacity: 1,
          onStart: () => {
            insertModal.classList.remove("hidden");
            gsap.to(insertModal, {
              zIndex: 1,
            });
            document.body.style.overflow = "hidden";
          },
          duration: 0.35,
          ease: "power2.out",
        });
        gsap.to(modalOverlay, {
          opacity: 1,
          onStart: () => {
            modalOverlay.classList.remove("hidden");
            gsap.to(modalOverlay, {
              zIndex: 1,
            })
          },
          duration: 0.35,
          ease: "power2.out",
        });
        showModal = !showModal;
      }
    })

  })

  editModalToggle.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      if (showEditModal) {
        gsap.to(editModal, {
          opacity: 0,
          onComplete: () => {
            editModal.classList.add("hidden");
            gsap.to(editModal, {
              zIndex: -1,
            })
          },
          duration: 0.35,
          ease: "power2.out",
        });
        gsap.to(modalOverlay, {
          opacity: 0,
          onComplete: () => {
            modalOverlay.classList.add("hidden");
            gsap.to(modalOverlay, {
              zIndex: -1,
            });
            document.body.style.overflow = "auto";
          },
          duration: 0.35,
          ease: "power2.out",
        });
        showEditModal = !showEditModal;
      } else {
        if (showModal) {
          gsap.to(insertModal, {
            opacity: 0,
            onComplete: () => {
              insertModal.classList.add("hidden");
              gsap.to(insertModal, {
                zIndex: -1,
              })
            },
            duration: 0.35,
            ease: "power2.out",
          });
          showModal = !showModal;
        }

        gsap.to(editModal, {
          opacity: 1,
          onStart: () => {
            editModal.classList.remove("hidden");
            gsap.to(editModal, {
              zIndex: 1,
            });
            document.body.style.overflow = "hidden";
          },
          duration: 0.35,
          ease: "power2.out",
        });
        gsap.to(modalOverlay, {
          opacity: 1,
          onStart: () => {
            modalOverlay.classList.remove("hidden");
            gsap.to(modalOverlay, {
              zIndex: 1,
            })
          },
          duration: 0.35,
          ease: "power2.out",
        });
        showEditModal = !showEditModal;
      }
    })
  })

  // Delete product event listener
  document.querySelectorAll('.delete-product').forEach(function (btn) {
    btn.addEventListener('click', async function (e) {
      e.preventDefault();
      const id = this.getAttribute('data-id');
      if (!id) return;
      if (!confirm('Apakah Anda yakin ingin menghapus produk ini?')) return;

      try {
        const res = await fetch('products.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: 'id_produk=' + id + '&deleteProduct=1'
        });
        const text = await res.text();
        if (text.includes('Delete Berhasil')) {
          alert('Produk berhasil dihapus');
          window.location.reload();
        } else {
          alert('Gagal menghapus produk');
        }
      } catch (err) {
        alert('Request failed: ' + err.message);
      }
    });
  });
  insertModal.addEventListener('click', e => e.stopPropagation());
  editModal.addEventListener('click', e => e.stopPropagation());
});