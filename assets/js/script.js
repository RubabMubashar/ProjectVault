//  Javascript for toggling between light and dark themes
const themeBtn = document.querySelector('[aria-label="Toggle theme"]');

if (themeBtn) {
  const moonSVG = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path fill="none" stroke="currentColor" stroke-linecap="round"
        stroke-linejoin="round" stroke-width="1.5"
        d="M21.182 14.86A9.474 9.474 0 1 1 9.139 2.819a1.053 1.053 0 0 1 1.38 1.295
        a7.705 7.705 0 0 0-.085 4.642a6.999 6.999 0 0 0 4.81 4.811
        c1.52.45 3.14.42 4.643-.084a1.053 1.053 0 0 1 1.295 1.379"/>
    </svg>
  `;

  const sunSVG = `
    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 24 24" fill="currentColor"><path fill="currentColor" d="M12 2a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0V3a1 1 0 0 1 1-1zm7.071 2.929a1 1 0 0 1 0 1.414l-.707.707a1 1 0 1 1-1.414-1.414l.707-.707a1 1 0 0 1 1.414 0zm-14.142 0a1 1 0 0 1 1.414 0l.707.707A1 1 0 0 1 5.636 7.05l-.707-.707a1 1 0 0 1 0-1.414zM12 8a4 4 0 1 0 0 8a4 4 0 0 0 0-8zm-6 4a6 6 0 1 1 12 0a6 6 0 0 1-12 0zm-4 0a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1zm17 0a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1zM5.636 16.95a1 1 0 0 1 1.414 1.414l-.707.707a1 1 0 0 1-1.414-1.414l.707-.707zm11.314 1.414a1 1 0 0 1 1.414-1.414l.707.707a1 1 0 0 1-1.414 1.414l-.707-.707zM12 19a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1z"/></svg>
  `;
  // Load saved theme
  const savedTheme = localStorage.getItem("theme");

  if (savedTheme === "dark") {
    document.body.classList.add("dark");
    themeBtn.innerHTML = sunSVG;
  } else {
    document.body.classList.remove("dark");
    themeBtn.innerHTML = moonSVG;
  }

  // Toggle theme
  themeBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark");

    const isDark = document.body.classList.contains("dark");

    localStorage.setItem("theme", isDark ? "dark" : "light");
    themeBtn.innerHTML = isDark ? sunSVG : moonSVG;
  });
}
// ==============================
// Mobile menu toggle
// ==============================
const openBtn = document.querySelector(".mobile-menu");
const closeMenuBtn = document.getElementById("closeMenuBtn");
const overlay = document.getElementById("mobileOverlay");

function openMenu() {
  document.body.classList.add("menu-open");
}

function closeMenu() {
  document.body.classList.remove("menu-open");
}

if (openBtn) openBtn.addEventListener("click", openMenu);
if (closeMenuBtn) closeMenuBtn.addEventListener("click", closeMenu);
if (overlay) overlay.addEventListener("click", closeMenu);


// ==============================
// Category Delete (POST + Warning)
// ==============================
document.querySelectorAll(".category-delete-form").forEach(form => {
  form.addEventListener("submit", async (e) => {
    e.preventDefault(); // stop default submit

    const categoryId = form.dataset.id;
    if (!categoryId) return;

    try {
      const res = await fetch(
        `assets/backend/categories/check-projects.php?id=${categoryId}`
      );
      const data = await res.json();

      let message = "Are you sure you want to delete this category?";

      if (data.count > 0) {
        message =
          `This category has ${data.count} project(s).\n\n` +
          `Deleting it will also delete all related projects.\n\n` +
          `Do you want to continue?`;
      }

      if (!confirm(message)) return;

      // user confirmed → submit form
      form.submit();

    } catch (err) {
      alert("Something went wrong. Please try again.");
    }
  });
});

// ==============================
// Add Category Modal (UI only)
// ==============================
const modal = document.getElementById("categoryModal");

if (modal) {
  const closeModalBtn = modal.querySelector(".modal-close");
  const cancelBtn = modal.querySelector(".modal-cancel");
  const input = document.getElementById("categoryInput");

  // open modal ONLY from buttons meant to open it
  const openBtns = document.querySelectorAll("[data-open-category]");

  openBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      modal.style.display = "flex";
      if (input) {
        input.value = "";
        setTimeout(() => input.focus(), 100);
      }
    });
  });

  function closeModal() {
    modal.style.display = "none";
  }

  if (closeModalBtn) closeModalBtn.addEventListener("click", closeModal);
  if (cancelBtn) cancelBtn.addEventListener("click", closeModal);

  // close on overlay click
  modal.addEventListener("click", (e) => {
    if (e.target === modal) closeModal();
  });
}


// ==============================
// Project Modal (UI only)
// ==============================
const projectModal = document.getElementById("projectModal");
const saveBtn = document.getElementById("saveProjectBtn");



if (projectModal) {
  const modalTitle = document.getElementById("projectModalTitle");
  const closeBtn = projectModal.querySelector(".modal-close");
  const cancelBtn = projectModal.querySelector(".modal-cancel");

  const titleInput = document.getElementById("projectTitle");
  const categoryInput = document.getElementById("projectCategory");
  const linkInput = document.getElementById("projectLink");

  // OPEN: Add Project
  document.querySelectorAll(".btn").forEach(btn => {
    if (btn.textContent.trim() === "Add Project") {
      btn.addEventListener("click", () => {
        modalTitle.textContent = "Add Project";
        saveBtn.textContent = "Add Project";


        // reset fields
        titleInput.value = "";
        categoryInput.value = "";
        linkInput.value = "";

        projectModal.style.display = "flex";
      });
    }
  });

  // OPEN: Edit Project (UI fill only — backend later)
  document.querySelectorAll(".edit-btn").forEach(btn => {
    btn.addEventListener("click", (e) => {
      const row = e.currentTarget.closest("tr");

      modalTitle.textContent = "Edit Project";
      saveBtn.textContent = "Update Project";


      titleInput.value = row.children[0].textContent.trim();
      categoryInput.value = row.children[1].dataset.categoryId || "";
      linkInput.value = row.querySelector(".link-cell span").textContent.trim();

      projectModal.style.display = "flex";
    });
  });

  // CLOSE modal
  function closeModal() {
    projectModal.style.display = "none";
  }

  if (closeBtn) closeBtn.addEventListener("click", closeModal);
  if (cancelBtn) cancelBtn.addEventListener("click", closeModal);

  // close on overlay click
  projectModal.addEventListener("click", (e) => {
    if (e.target === projectModal) closeModal();
  });
}

//  ==============================
// Project Form Handling (Add/Edit)
//  ==============================
const projectForm = document.getElementById("projectForm");
const projectIdInput = document.getElementById("projectId");

// ADD project
document.querySelectorAll(".btn").forEach(btn => {
  if (btn.textContent.trim() === "Add Project") {
    btn.addEventListener("click", () => {
      projectForm.action = "assets/backend/projects/create.php";
      projectIdInput.value = "";
    });
  }
});

// EDIT project
document.querySelectorAll(".edit-btn").forEach(btn => {
  btn.addEventListener("click", (e) => {
    const row = e.currentTarget.closest("tr");

    projectForm.action = "assets/backend/projects/update.php";
    projectIdInput.value = btn.dataset.id; // from edit button

    document.getElementById("projectTitle").value =
      row.children[0].textContent.trim();

    document.getElementById("projectCategory").value =
      row.children[1].dataset.categoryId;

    document.getElementById("projectLink").value =
      row.querySelector(".link-cell span").textContent.trim();
  });
});


// ==============================
// Copy to Clipboard
// ==============================
document.querySelectorAll(".copy-btn").forEach(btn => {
  const defaultIcon = `
    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664c0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75a2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15a2.25 2.25 0 0 1 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z"/></svg>
  `;

  const copiedIcon = `
   <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.35 3.836c-.065.21-.1.433-.1.664c0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75a2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15a2.25 2.25 0 0 1 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08c1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0 1 18 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5l3-3.75"/></svg>
  `;

  btn.innerHTML = defaultIcon;

  btn.addEventListener("click", () => {
    const linkText = btn
      .closest(".link-cell")
      .querySelector("span")
      .textContent
      .trim();

    navigator.clipboard.writeText(linkText).then(() => {
      btn.innerHTML = copiedIcon;
      btn.classList.add("copied");


      setTimeout(() => {
        btn.innerHTML = defaultIcon;
        btn.classList.remove("copied");

      }, 1200);
    });
  });
});

//  ==============================
// Profile Settings Edit Mode
//  ==============================  
const editSaveBtn = document.getElementById("editSaveBtn");
const settingsSection = document.querySelector(".profile-settings");
const form = document.getElementById("profileForm");
const inputs = form.querySelectorAll("input[type='text'], input[type='email']");
const avatarBtn = document.querySelector(".avatar-upload-btn");
const avatarInput = document.getElementById("avatarInput");
const avatarPreview = document.getElementById("avatarPreview");

let isEditing = false;

editSaveBtn.addEventListener("click", () => {
  isEditing = !isEditing;

  settingsSection.classList.toggle("editing", isEditing);

  inputs.forEach(input => {
    input.readOnly = !isEditing;
  });

  editSaveBtn.textContent = isEditing ? "Save Changes" : "Edit Profile";

  // when switching from edit → save
  if (!isEditing) {
    document.getElementById("profileForm").submit();
  }
});


// allow avatar select only in edit mode
avatarBtn.addEventListener("click", () => {
  if (!isEditing) return;
  avatarInput.click();
});

// preview image before saving
avatarInput.addEventListener("change", () => {
  const file = avatarInput.files[0];
  if (!file) return;

  const reader = new FileReader();
  reader.onload = () => {
    avatarPreview.src = reader.result;
  };
  reader.readAsDataURL(file);
});




