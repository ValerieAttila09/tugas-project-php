document.addEventListener("DOMContentLoaded", (event) => {
  let sidebarActive = true;
  let profileDropdownActive = false;
  const profileDropdownToggle = document.querySelectorAll("#profileToggle");
  const profileDropdown = document.getElementById("profileDropdown");
  const sidebarMenu = document.querySelectorAll("#sidebarMenu");
  const modalOverlay = document.getElementById("modal-overlay");
  const modalContent = document.getElementById("modal-content");
  const toast = document.getElementById("toast");
  const toastMessage = document.getElementById("toast-message");

  // Quill editors storage
  let quillEditors = {};

  // ==================== GSAP INITIALIZATION ====================
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

  // ==================== SIDEBAR & PROFILE TOGGLE ====================
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
  });

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

  // ==================== TAB SWITCHING ====================
  const tabBtns = document.querySelectorAll(".tab-btn");
  const tabContents = document.querySelectorAll(".tab-content");

  tabBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      const targetTab = btn.getAttribute("data-tab");

      // Remove active class from all tabs and contents
      tabBtns.forEach(b => b.classList.remove("active"));
      tabContents.forEach(c => c.classList.remove("active"));

      // Add active class to clicked tab and corresponding content
      btn.classList.add("active");
      document.getElementById(`${targetTab}-tab`).classList.add("active");
    });
  });

  // ==================== HELPER FUNCTIONS ====================

  // Show toast notification
  function showToast(message, duration = 3000) {
    toastMessage.textContent = message;
    toast.classList.remove("hidden");
    gsap.fromTo(toast,
      { y: 20, opacity: 0 },
      { y: 0, opacity: 1, duration: 0.3 }
    );

    setTimeout(() => {
      gsap.to(toast, {
        y: 20,
        opacity: 0,
        duration: 0.3,
        onComplete: () => {
          toast.classList.add("hidden");
        }
      });
    }, duration);
  }

  // Show modal
  function showModal(content) {
    modalContent.innerHTML = content;
    modalOverlay.classList.remove("hidden");
    gsap.fromTo(modalContent,
      { scale: 0.9, opacity: 0 },
      { scale: 1, opacity: 1, duration: 0.3 }
    );
  }

  // Hide modal
  function hideModal() {
    gsap.to(modalContent, {
      scale: 0.9,
      opacity: 0,
      duration: 0.3,
      onComplete: () => {
        modalOverlay.classList.add("hidden");
        modalContent.innerHTML = '';
        // Destroy all quill editors in modal
        Object.keys(quillEditors).forEach(key => {
          if (quillEditors[key]) {
            delete quillEditors[key];
          }
        });
      }
    });
  }

  // Close modal when clicking overlay
  modalOverlay.addEventListener("click", (e) => {
    if (e.target === modalOverlay) {
      hideModal();
    }
  });

  // Initialize Quill editor
  function initQuill(elementId, placeholder = "Enter content...") {
    if (document.getElementById(elementId)) {
      quillEditors[elementId] = new Quill(`#${elementId}`, {
        theme: 'snow',
        placeholder: placeholder,
        modules: {
          toolbar: [
            ['bold', 'italic', 'underline'],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            ['link'],
            ['clean']
          ]
        }
      });
      return quillEditors[elementId];
    }
    return null;
  }

  // ==================== HERO SECTION ====================

  function loadHeroData() {
    // Show loading state
    document.getElementById('hero-content').innerHTML = `
      <div class="flex items-center justify-center py-12">
        <div class="text-center">
          <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-neutral-900 mx-auto mb-2"></div>
          <p class="text-sm text-neutral-600">Loading hero data...</p>
        </div>
      </div>
    `;

    fetch('./api/hero.php')
      .then(response => response.json())
      .then(data => {
        if (data.success && data.data) {
          displayHeroForm(data.data);
        } else {
          // If no data exists, show empty form
          displayHeroForm({
            id: '',
            quote: '',
            judul: '',
            keterangan: '',
            gambar: ''
          });
          showToast('No hero data found. Please fill in the form.', 3000);
        }
      })
      .catch(error => {
        console.error('Error:', error);
        document.getElementById('hero-content').innerHTML = `
          <div class="bg-red-50 border border-red-200 rounded-lg p-4">
            <p class="text-sm text-red-600">Error loading hero data. Please refresh the page.</p>
            <button onclick="loadHeroData()" class="mt-2 text-sm text-red-700 underline">Retry</button>
          </div>
        `;
        showToast('Error loading hero data', 3000);
      });
  }

  function displayHeroForm(data) {
    const content = `
      <div class="rounded-lg p-4 mb-4">
        <p class="text-sm text-blue-700">
          <strong>📝 Edit Mode:</strong> Form ini sudah terisi dengan data dari database. Edit sesuka hati dan klik "Update Hero" untuk menyimpan perubahan.
        </p>
      </div>

      <form id="hero-form" class="space-y-4">
        <input type="hidden" name="id" value="${data.id || ''}">
        
        <div>
          <label class="block text-sm outfit-medium text-neutral-700 mb-2">Quote/Badge</label>
          <input type="text" name="quote" value="${data.quote || ''}" 
            class="w-full px-4 py-2 border border-[#ebebeb] rounded-md outfit-regular text-sm focus:outline-none focus:ring-2 focus:ring-neutral-900"
            placeholder="e.g., ✨ Welcome to my portfolio"
            required>
          ${data.quote ? `<p class="text-xs text-neutral-500 mt-1">Current: "${data.quote}"</p>` : ''}
        </div>

        <div>
          <label class="block text-sm outfit-medium text-neutral-700 mb-2">Title</label>
          <input type="text" name="judul" value="${data.judul || ''}" 
            class="w-full px-4 py-2 border border-[#ebebeb] rounded-md outfit-regular text-sm focus:outline-none focus:ring-2 focus:ring-neutral-900"
            placeholder="e.g., Hi, I'm Valerie"
            required>
          ${data.judul ? `<p class="text-xs text-neutral-500 mt-1">Current: "${data.judul}"</p>` : ''}
        </div>

        <div>
          <label class="block text-sm outfit-medium text-neutral-700 mb-2">Description (Rich Text Editor)</label>
          <div id="hero-keterangan-editor" class="bg-white border border-[#ebebeb] rounded-b-md"></div>
          <p class="text-xs text-neutral-500 mt-1">Gunakan toolbar diatas untuk format text (Bold, Italic, Lists, dll)</p>
        </div>

        <div>
          <label class="block text-sm outfit-medium text-neutral-700 mb-2">Hero Image</label>
          <input type="file" name="gambar" accept="image/*"
            class="w-full px-4 py-2 border border-[#ebebeb] rounded-md outfit-regular text-sm focus:outline-none">
          ${data.gambar ? `
            <div class="mt-2 p-2 bg-neutral-50 rounded border border-neutral-200">
              <p class="text-xs text-neutral-600 mb-1">Current image:</p>
              <img src="../../assets/images/${data.gambar}" alt="Hero preview" class="max-w-xs h-auto rounded border border-neutral-300">
              <p class="text-xs text-neutral-500 mt-1">${data.gambar}</p>
            </div>
          ` : '<p class="text-xs text-neutral-500 mt-1">No image uploaded yet</p>'}
        </div>

        <div class="w-full h-px bg-[#d7d7d7] rounded-full"></div>

        <div class="flex gap-2 justify-end py-5">
          <button type="submit" class="px-6 py-2 my-2 bg-neutral-900 text-white rounded-md text-sm outfit-medium hover:bg-neutral-700 transition-all">
            💾 Update Hero Section
          </button>
        </div>
      </form>
    `;

    document.getElementById('hero-content').innerHTML = content;

    // Initialize Quill editor for description
    const quill = initQuill('hero-keterangan-editor', 'Enter description...');
    if (quill && data.keterangan) {
      quill.root.innerHTML = data.keterangan;
    }

    // Handle form submission
    document.getElementById('hero-form').addEventListener('submit', (e) => {
      e.preventDefault();

      const formData = new FormData(e.target);
      formData.set('keterangan', quill.root.innerHTML);

      // Show loading on button
      const submitBtn = e.target.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerHTML;
      submitBtn.innerHTML = '⏳ Updating...';
      submitBtn.disabled = true;

      fetch('./api/hero.php', {
        method: 'POST',
        body: formData
      })
        .then(response => response.json())
        .then(data => {
          submitBtn.innerHTML = originalText;
          submitBtn.disabled = false;

          if (data.success) {
            showToast('✅ Hero section updated successfully!');
            loadHeroData();
          } else {
            showToast('❌ ' + (data.message || 'Failed to update hero section'));
          }
        })
        .catch(error => {
          console.error('Error:', error);
          submitBtn.innerHTML = originalText;
          submitBtn.disabled = false;
          showToast('❌ Error updating hero section');
        });
    });
  }

  // ==================== ABOUT ME SECTION ====================

  function loadAboutData() {
    fetch('./api/about.php')
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          displayAboutTable(data.data);
        } else {
          showToast('Failed to load about me data');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showToast('Error loading about me data');
      });
  }

  function displayAboutTable(items) {
    if (!items || items.length === 0) {
      document.getElementById('about-table').innerHTML = '<p class="text-neutral-500 text-sm">No items yet. Click "Add Item" to create one.</p>';
      return;
    }

    const table = `
      <table class="w-full">
        <thead>
          <tr>
            <th class="text-left">Icon</th>
            <th class="text-left">Title</th>
            <th class="text-left">Description</th>
            <th class="text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          ${items.map(item => `
            <tr>
              <td><span class="text-2xl">${item.icon}</span></td>
              <td class="outfit-medium">${item.judul}</td>
              <td class="text-sm text-neutral-600">${item.keterangan.substring(0, 50)}...</td>
              <td>
                <button onclick="editAbout(${item.id})" class="text-blue-600 hover:underline text-sm mr-2">Edit</button>
                <button onclick="deleteAbout(${item.id})" class="text-red-600 hover:underline text-sm">Delete</button>
              </td>
            </tr>
          `).join('')}
        </tbody>
      </table>
    `;

    document.getElementById('about-table').innerHTML = table;
  }

  document.getElementById('add-about-btn').addEventListener('click', () => {
    showAboutModal();
  });

  function showAboutModal(item = null) {
    const modalHtml = `
      <div class="p-6">
        <h3 class="text-xl outfit-semibold text-neutral-900 mb-4">${item ? 'Edit' : 'Add'} About Me Item</h3>
        <form id="about-form" class="space-y-4">
          ${item ? `<input type="hidden" name="id" value="${item.id}">` : ''}
          
          <div>
            <label class="block text-sm outfit-medium text-neutral-700 mb-2">Icon (Emoji)</label>
            <input type="text" name="icon" value="${item?.icon || ''}" maxlength="2"
              class="w-full px-4 py-2 border border-[#ebebeb] rounded-md outfit-regular text-sm focus:outline-none focus:ring-2 focus:ring-neutral-900"
              placeholder="🎨" required>
          </div>

          <div>
            <label class="block text-sm outfit-medium text-neutral-700 mb-2">Title</label>
            <input type="text" name="judul" value="${item?.judul || ''}"
              class="w-full px-4 py-2 border border-[#ebebeb] rounded-md outfit-regular text-sm focus:outline-none focus:ring-2 focus:ring-neutral-900"
              required>
          </div>

          <div>
            <label class="block text-sm outfit-medium text-neutral-700 mb-2">Description</label>
            <div id="about-keterangan-editor"></div>
          </div>

          <div class="flex gap-2 justify-end mt-4">
            <button type="button" onclick="hideModal()" class="px-6 py-2 bg-neutral-200 text-neutral-700 rounded-md text-sm outfit-medium hover:bg-neutral-300 transition-all">
              Cancel
            </button>
            <button type="submit" class="px-6 py-2 bg-neutral-900 text-white rounded-md text-sm outfit-medium hover:bg-neutral-700 transition-all">
              ${item ? 'Update' : 'Create'}
            </button>
          </div>
        </form>
      </div>
    `;

    showModal(modalHtml);

    // Initialize Quill
    const quill = initQuill('about-keterangan-editor', 'Enter description...');
    if (quill && item?.keterangan) {
      quill.root.innerHTML = item.keterangan;
    }

    // Handle form submission
    document.getElementById('about-form').addEventListener('submit', (e) => {
      e.preventDefault();

      const formData = new FormData(e.target);
      const data = {
        icon: formData.get('icon'),
        judul: formData.get('judul'),
        keterangan: quill.root.innerHTML
      };

      if (item) {
        data.id = item.id;
      }

      const url = './api/about.php';
      const method = item ? 'PUT' : 'POST';

      fetch(url, {
        method: method,
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      })
        .then(response => response.json())
        .then(result => {
          if (result.success) {
            showToast(result.message);
            hideModal();
            loadAboutData();
          } else {
            showToast(result.message || 'Operation failed');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          showToast('Error saving about item');
        });
    });
  }

  window.editAbout = function (id) {
    fetch(`./api/about.php?id=${id}`)
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          showAboutModal(data.data);
        } else {
          showToast('Failed to load item data');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showToast('Error loading item data');
      });
  };

  window.deleteAbout = function (id) {
    if (!confirm('Are you sure you want to delete this item?')) return;

    fetch('./api/about.php', {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id: id })
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          showToast('Item deleted successfully');
          loadAboutData();
        } else {
          showToast(data.message || 'Failed to delete item');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showToast('Error deleting item');
      });
  };

  // ==================== SKILLS SECTION ====================

  function loadSkillsData() {
    fetch('./api/skills.php')
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          displaySkillsTable(data.data);
        } else {
          showToast('Failed to load skills data');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showToast('Error loading skills data');
      });
  }

  function displaySkillsTable(items) {
    if (!items || items.length === 0) {
      document.getElementById('skills-table').innerHTML = '<p class="text-neutral-500 text-sm">No skills yet. Click "Add Skill" to create one.</p>';
      return;
    }

    const table = `
      <table class="w-full">
        <thead>
          <tr>
            <th class="text-left">Icon</th>
            <th class="text-left">Skill</th>
            <th class="text-left">Description</th>
            <th class="text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          ${items.map(item => `
            <tr>
              <td><span class="text-2xl">${item.icon}</span></td>
              <td class="outfit-medium">${item.skill}</td>
              <td class="text-sm text-neutral-600">${item.keterangan.substring(0, 50)}...</td>
              <td>
                <button onclick="editSkill(${item.id})" class="text-blue-600 hover:underline text-sm mr-2">Edit</button>
                <button onclick="deleteSkill(${item.id})" class="text-red-600 hover:underline text-sm">Delete</button>
              </td>
            </tr>
          `).join('')}
        </tbody>
      </table>
    `;

    document.getElementById('skills-table').innerHTML = table;
  }

  document.getElementById('add-skill-btn').addEventListener('click', () => {
    showSkillModal();
  });

  function showSkillModal(item = null) {
    const modalHtml = `
      <div class="p-6">
        <h3 class="text-xl outfit-semibold text-neutral-900 mb-4">${item ? 'Edit' : 'Add'} Skill</h3>
        <form id="skill-form" class="space-y-4">
          ${item ? `<input type="hidden" name="id" value="${item.id}">` : ''}
          
          <div>
            <label class="block text-sm outfit-medium text-neutral-700 mb-2">Icon (Emoji)</label>
            <input type="text" name="icon" value="${item?.icon || ''}" maxlength="2"
              class="w-full px-4 py-2 border border-[#ebebeb] rounded-md outfit-regular text-sm focus:outline-none focus:ring-2 focus:ring-neutral-900"
              placeholder="💻" required>
          </div>

          <div>
            <label class="block text-sm outfit-medium text-neutral-700 mb-2">Skill Name</label>
            <input type="text" name="skill" value="${item?.skill || ''}"
              class="w-full px-4 py-2 border border-[#ebebeb] rounded-md outfit-regular text-sm focus:outline-none focus:ring-2 focus:ring-neutral-900"
              required>
          </div>

          <div>
            <label class="block text-sm outfit-medium text-neutral-700 mb-2">Description</label>
            <div id="skill-keterangan-editor"></div>
          </div>

          <div class="flex gap-2 justify-end mt-4">
            <button type="button" onclick="hideModal()" class="px-6 py-2 bg-neutral-200 text-neutral-700 rounded-md text-sm outfit-medium hover:bg-neutral-300 transition-all">
              Cancel
            </button>
            <button type="submit" class="px-6 py-2 bg-neutral-900 text-white rounded-md text-sm outfit-medium hover:bg-neutral-700 transition-all">
              ${item ? 'Update' : 'Create'}
            </button>
          </div>
        </form>
      </div>
    `;

    showModal(modalHtml);

    const quill = initQuill('skill-keterangan-editor', 'Enter description...');
    if (quill && item?.keterangan) {
      quill.root.innerHTML = item.keterangan;
    }

    document.getElementById('skill-form').addEventListener('submit', (e) => {
      e.preventDefault();

      const formData = new FormData(e.target);
      const data = {
        icon: formData.get('icon'),
        skill: formData.get('skill'),
        keterangan: quill.root.innerHTML
      };

      if (item) {
        data.id = item.id;
      }

      const url = './api/skills.php';
      const method = item ? 'PUT' : 'POST';

      fetch(url, {
        method: method,
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      })
        .then(response => response.json())
        .then(result => {
          if (result.success) {
            showToast(result.message);
            hideModal();
            loadSkillsData();
          } else {
            showToast(result.message || 'Operation failed');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          showToast('Error saving skill');
        });
    });
  }

  window.editSkill = function (id) {
    fetch(`./api/skills.php?id=${id}`)
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          showSkillModal(data.data);
        } else {
          showToast('Failed to load skill data');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showToast('Error loading skill data');
      });
  };

  window.deleteSkill = function (id) {
    if (!confirm('Are you sure you want to delete this skill?')) return;

    fetch('./api/skills.php', {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id: id })
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          showToast('Skill deleted successfully');
          loadSkillsData();
        } else {
          showToast(data.message || 'Failed to delete skill');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showToast('Error deleting skill');
      });
  };

  // ==================== CLIENT FEEDBACK SECTION ====================

  function loadClientData() {
    fetch('./api/client.php')
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          displayClientTable(data.data);
        } else {
          showToast('Failed to load client data');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showToast('Error loading client data');
      });
  }

  function displayClientTable(items) {
    if (!items || items.length === 0) {
      document.getElementById('client-table').innerHTML = '<p class="text-neutral-500 text-sm">No testimonials yet. Click "Add Testimonial" to create one.</p>';
      return;
    }

    const table = `
      <table class="w-full">
        <thead>
          <tr>
            <th class="text-left">Rating</th>
            <th class="text-left">Name</th>
            <th class="text-left">Position</th>
            <th class="text-left">Feedback</th>
            <th class="text-left">Actions</th>
          </tr>
        </thead>
        <tbody>
          ${items.map(item => `
            <tr>
              <td><span class="text-yellow-500">${'★'.repeat(item.rating)}</span></td>
              <td class="outfit-medium">${item.nama}</td>
              <td class="text-sm text-neutral-600">${item.jabatan}</td>
              <td class="text-sm text-neutral-600">${item.feedback.substring(0, 50)}...</td>
              <td>
                <button onclick="editClient(${item.id})" class="text-blue-600 hover:underline text-sm mr-2">Edit</button>
                <button onclick="deleteClient(${item.id})" class="text-red-600 hover:underline text-sm">Delete</button>
              </td>
            </tr>
          `).join('')}
        </tbody>
      </table>
    `;

    document.getElementById('client-table').innerHTML = table;
  }

  document.getElementById('add-client-btn').addEventListener('click', () => {
    showClientModal();
  });

  function showClientModal(item = null) {
    const modalHtml = `
      <div class="p-6">
        <h3 class="text-xl outfit-semibold text-neutral-900 mb-4">${item ? 'Edit' : 'Add'} Client Testimonial</h3>
        <form id="client-form" class="space-y-4">
          ${item ? `<input type="hidden" name="id" value="${item.id}">` : ''}
          
          <div>
            <label class="block text-sm outfit-medium text-neutral-700 mb-2">Rating (1-5)</label>
            <select name="rating" class="w-full px-4 py-2 border border-[#ebebeb] rounded-md outfit-regular text-sm focus:outline-none focus:ring-2 focus:ring-neutral-900" required>
              ${[1, 2, 3, 4, 5].map(r => `<option value="${r}" ${item?.rating == r ? 'selected' : ''}>${r} Star${r > 1 ? 's' : ''}</option>`).join('')}
            </select>
          </div>

          <div>
            <label class="block text-sm outfit-medium text-neutral-700 mb-2">Client Name</label>
            <input type="text" name="nama" value="${item?.nama || ''}"
              class="w-full px-4 py-2 border border-[#ebebeb] rounded-md outfit-regular text-sm focus:outline-none focus:ring-2 focus:ring-neutral-900"
              required>
          </div>

          <div>
            <label class="block text-sm outfit-medium text-neutral-700 mb-2">Position/Title</label>
            <input type="text" name="jabatan" value="${item?.jabatan || ''}"
              class="w-full px-4 py-2 border border-[#ebebeb] rounded-md outfit-regular text-sm focus:outline-none focus:ring-2 focus:ring-neutral-900"
              required>
          </div>

          <div>
            <label class="block text-sm outfit-medium text-neutral-700 mb-2">Feedback</label>
            <div id="client-feedback-editor"></div>
          </div>

          <div class="flex gap-2 justify-end mt-4">
            <button type="button" onclick="hideModal()" class="px-6 py-2 bg-neutral-200 text-neutral-700 rounded-md text-sm outfit-medium hover:bg-neutral-300 transition-all">
              Cancel
            </button>
            <button type="submit" class="px-6 py-2 bg-neutral-900 text-white rounded-md text-sm outfit-medium hover:bg-neutral-700 transition-all">
              ${item ? 'Update' : 'Create'}
            </button>
          </div>
        </form>
      </div>
    `;

    showModal(modalHtml);

    const quill = initQuill('client-feedback-editor', 'Enter feedback...');
    if (quill && item?.feedback) {
      quill.root.innerHTML = item.feedback;
    }

    document.getElementById('client-form').addEventListener('submit', (e) => {
      e.preventDefault();

      const formData = new FormData(e.target);
      const data = {
        rating: parseInt(formData.get('rating')),
        nama: formData.get('nama'),
        jabatan: formData.get('jabatan'),
        feedback: quill.root.innerHTML
      };

      if (item) {
        data.id = item.id;
      }

      const url = './api/client.php';
      const method = item ? 'PUT' : 'POST';

      fetch(url, {
        method: method,
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      })
        .then(response => response.json())
        .then(result => {
          if (result.success) {
            showToast(result.message);
            hideModal();
            loadClientData();
          } else {
            showToast(result.message || 'Operation failed');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          showToast('Error saving testimonial');
        });
    });
  }

  window.editClient = function (id) {
    fetch(`./api/client.php?id=${id}`)
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          showClientModal(data.data);
        } else {
          showToast('Failed to load client data');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showToast('Error loading client data');
      });
  };

  window.deleteClient = function (id) {
    if (!confirm('Are you sure you want to delete this testimonial?')) return;

    fetch('./api/client.php', {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id: id })
    })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          showToast('Testimonial deleted successfully');
          loadClientData();
        } else {
          showToast(data.message || 'Failed to delete testimonial');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        showToast('Error deleting testimonial');
      });
  };

  // Make functions available globally
  window.hideModal = hideModal;
  window.loadHeroData = loadHeroData;

  // ==================== INITIAL LOAD (AUTO LOAD DATA FROM DATABASE) ====================
  loadHeroData();      // Load hero data dari database
  loadAboutData();     // Load about me data dari database
  loadSkillsData();    // Load skills data dari database
  loadClientData();    // Load client testimonials dari database
});