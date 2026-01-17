<?php
$pageTitle = "Projects";
require_once 'includes/profile-data.php';
require_once 'assets/backend/projects/fetch.php';
require_once 'assets/backend/categories/fetch.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Vault</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-head">
            <h1><span><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 32 32"><path fill="currentColor" d="M20 14h8a2.002 2.002 0 0 0 2-2V4a2.002 2.002 0 0 0-2-2h-8a2.002 2.002 0 0 0-2 2H9a2.002 2.002 0 0 0-2 2v4H4a2.002 2.002 0 0 0-2 2v8a2.002 2.002 0 0 0 2 2h2v4a2.002 2.002 0 0 0 2 2h10a2.002 2.002 0 0 0 2 2h8a2.002 2.002 0 0 0 2-2v-8a2.002 2.002 0 0 0-2-2h-8a2.002 2.002 0 0 0-2 2v6H8v-4h4a2.002 2.002 0 0 0 2-2v-8a2.002 2.002 0 0 0-2-2H9V6h9v6a2.002 2.002 0 0 0 2 2Zm0 14v-4h8v4Zm8-8v2h-8v-2ZM4 20v-4h8v4Zm8-6H4v-2h8Zm8-2V8h8v4Zm8-8v2h-8V4Z"/></svg></span><strong>Project</strong> vault</h1>
            <p class="menu-label">MENU</p>
        </div>

        <nav class="sidebar-menu">
            <!-- Active item -->
            <a href="index.php" class="menu-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M21 21h-8v-6h8v6Zm-10 0H3V11h8v10Zm10-8h-8V3h8v10ZM11 9H3V3h8v6Z" />
                </svg>
                <span>Dashboard</span>
            </a>

            <a href="categories.php" class="menu-item">

                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M19.298 9.566H4.702a1.964 1.964 0 0 0-1.535.744a1.944 1.944 0 0 0-.363 1.66l1.565 6.408a3.894 3.894 0 0 0 1.4 2.072c.682.519 1.517.8 2.376.8h7.708c.859 0 1.694-.281 2.376-.8a3.894 3.894 0 0 0 1.4-2.072l1.565-6.407a1.94 1.94 0 0 0-1.044-2.208a1.964 1.964 0 0 0-.854-.197M8.087 13.46v3.895M12 13.46v3.895m3.913-3.895v3.895m2.935-7.789a6.8 6.8 0 0 0-2.006-4.82A6.864 6.864 0 0 0 12 2.75a6.864 6.864 0 0 0-4.842 1.996a6.8 6.8 0 0 0-2.005 4.82" />
                </svg>
                <span>Categories</span>
            </a>

            <a href="projects.php" class="menu-item active">
                <span class="active-indicator"></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 24 24" fill="#000000">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5">
                        <path d="M14.186 2.753v3.596c0 .487.195.955.54 1.3a1.85 1.85 0 0 0 1.306.539h4.125" />
                        <path
                            d="M20.25 8.568v8.568a4.251 4.251 0 0 1-1.362 2.97a4.283 4.283 0 0 1-3.072 1.14h-7.59a4.294 4.294 0 0 1-3.1-1.124a4.265 4.265 0 0 1-1.376-2.986V6.862a4.25 4.25 0 0 1 1.362-2.97a4.283 4.283 0 0 1 3.072-1.14h5.714a3.503 3.503 0 0 1 2.361.905l2.96 2.722a2.971 2.971 0 0 1 1.031 2.189M7.647 7.647h3.265M7.647 12h8.706m-8.706 4.353h8.706" />
                    </g>
                </svg>
                <span>Projects</span>
            </a>

            <a href="setting.php" class="menu-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 24 24" fill="#000000">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5">
                        <path d="M12.132 15.404a3.364 3.364 0 1 0 0-6.728a3.364 3.364 0 0 0 0 6.728" />
                        <path
                            d="M20.983 15.094a9.43 9.43 0 0 1-1.802 3.1l-2.124-.482a7.245 7.245 0 0 1-2.801 1.56l-.574 2.079a9.462 9.462 0 0 1-1.63.149a9.117 9.117 0 0 1-2.032-.23l-.609-2.146a7.475 7.475 0 0 1-2.457-1.493l-2.1.54a9.357 9.357 0 0 1-1.837-3.33l1.55-1.722a7.186 7.186 0 0 1 .069-2.652L3.107 8.872a9.356 9.356 0 0 1 2.067-3.353l2.17.54A7.68 7.68 0 0 1 9.319 4.91l.574-2.124a8.886 8.886 0 0 1 2.17-.287c.585 0 1.17.054 1.745.16l.551 2.113c.83.269 1.608.68 2.296 1.217l2.182-.563a9.368 9.368 0 0 1 2.043 3.1l-1.48 1.607a7.405 7.405 0 0 1 .068 3.364z" />
                    </g>
                </svg>
                <span>Setting</span>
            </a>
        </nav>
    </aside>


    <div class="main">
       <!-- Navbar -->
         <?php include 'includes/navbar.php'; ?>

        <!-- Main content -->
        <section class="content">
            <!-- Top actions row -->
            <div class="content-actions">
                <button class="btn btn-gradient" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M12 6.722v10.556M17.278 12H6.722M12 21.5a9.5 9.5 0 1 0 0-19a9.5 9.5 0 0 0 0 19" />
                    </svg>
                    <span>Add Project</span>
                </button>
            </div>

            <!-- Projects card -->
            <div class="project-card">
                <?php if (count($projects) === 0): ?>
                <!-- Empty state -->
                <div class="empty-state" id="projectEmpty">
                    <p>No projects yet</p>
                    <span>Click “Add Project” to create your first project</span>
                </div>
                 <?php else: ?>
                <!-- Table -->
                <div class="table-wrapper" id="projectTable">
                    <table>
                        <thead>
                            <tr>
                                <th>Project Title</th>
                                <th>Category</th>
                                <th>Project Link</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
          <?php foreach ($projects as $project): ?>
            <tr>
              <td><?php echo htmlspecialchars($project['title']); ?></td>

             <td data-category-id="<?php echo $project['category_id']; ?>">
  <?php echo htmlspecialchars($project['category_name']); ?>
</td>



              <td>
                <div class="link-cell">
                  <span><?php echo htmlspecialchars($project['project_link']); ?></span>
                  <button class="icon-btn copy-btn"></button>
                </div>
              </td>

              <td>
                <div class="action-btns">

                  <!-- Edit (we wire later) -->
                  <button
                    class="icon-btn edit-btn"
                    data-id="<?php echo $project['id']; ?>"
                  >
                  <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                                                viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="m16.862 4.487l1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                </button>

                  <!-- Delete -->
                  <form
                    action="assets/backend/projects/delete.php"
                    method="POST"
                    onsubmit="return confirm('Delete this project?');"
                    style="display:inline;"
                  >
                    <input type="hidden" name="id" value="<?php echo $project['id']; ?>">
                    <button class="icon-btn delete-btn" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200"
                                                viewBox="0 0 24 24">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5"
                                                    d="M4.687 6.213L6.8 18.976a2.5 2.5 0 0 0 2.466 2.092h3.348m6.698-14.855L17.2 18.976a2.5 2.5 0 0 1-2.466 2.092h-3.348m-1.364-9.952v5.049m3.956-5.049v5.049M2.75 6.213h18.5m-6.473 0v-1.78a1.5 1.5 0 0 0-1.5-1.5h-2.554a1.5 1.5 0 0 0-1.5 1.5v1.78z" />
                                            </svg>
                    </button>
                  </form>

                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

                    </table>
                </div>
                <?php endif; ?>
            </div>


        </section>
    </div>

    <!-- Add / Edit Project Modal -->
    <div class="modal-overlay" id="projectModal">
        <div class="modal-card">
            <div class="modal-header">
                <h2 id="projectModalTitle">Add Project</h2>

                <button class="icon-btn modal-close" type="button" aria-label="Close modal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M18.3 5.71a1 1 0 0 0-1.41 0L12 10.59L7.11 5.7A1 1 0 0 0 5.7 7.11L10.59 12l-4.9 4.89a1 1 0 1 0 1.42 1.42L12 13.41l4.89 4.9a1 1 0 0 0 1.42-1.42L13.41 12l4.9-4.89a1 1 0 0 0-.01-1.4Z" />
                </svg>
                </button>
            </div>

            <div class="modal-body">
                <!-- Project Title -->
                <label class="modal-label">Project Title</label>
                <form action="assets/backend/projects/create.php" method="POST" id="projectForm">
                    <input type="hidden" name="id" id="projectId">

                <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.995 3.744v7.5a6 6 0 1 1-12 0v-7.5m-2.25 16.502h16.5"/></svg>
                    <input type="text" name="title" id="projectTitle" placeholder="Enter project title">
                </div>

                <!-- Category -->
                <label class="modal-label">Category</label>
                <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32"><path fill="currentColor" d="m6.76 6l.45.89L7.76 8H12v5H4V6h2.76m.62-2H3a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9l-.72-1.45a1 1 0 0 0-.9-.55zm15.38 2l.45.89l.55 1.11H28v5h-8V6h2.76m.62-2H19a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-4l-.72-1.45a1 1 0 0 0-.9-.55zM6.76 19l.45.89l.55 1.11H12v5H4v-7h2.76m.62-2H3a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1H9l-.72-1.45a1 1 0 0 0-.9-.55zm15.38 2l.45.89l.55 1.11H28v5h-8v-7h2.76m.62-2H19a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-4l-.72-1.45a1 1 0 0 0-.9-.55z"/></svg>
                    <select id="projectCategory" name="category_id" required>
  <option value="">Select category</option>

  <?php foreach ($categories as $category): ?>
    <option value="<?php echo $category['id']; ?>">
      <?php echo htmlspecialchars($category['name']); ?>
    </option>
  <?php endforeach; ?>

</select>

                </div>

                <!-- Project Link -->
                <label class="modal-label">Project Link</label>
                <div class="input-group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 20 20" fill="currentColor"><g fill="currentColor"><path d="M12.232 4.232a2.5 2.5 0 0 1 3.536 3.536l-1.225 1.224a.75.75 0 0 0 1.061 1.06l1.224-1.224a4 4 0 0 0-5.656-5.656l-3 3a4 4 0 0 0 .225 5.865a.75.75 0 0 0 .977-1.138a2.5 2.5 0 0 1-.142-3.667l3-3Z"/><path d="M11.603 7.963a.75.75 0 0 0-.977 1.138a2.5 2.5 0 0 1 .142 3.667l-3 3a2.5 2.5 0 0 1-3.536-3.536l1.225-1.224a.75.75 0 0 0-1.061-1.06l-1.224 1.224a4 4 0 1 0 5.656 5.656l3-3a4 4 0 0 0-.225-5.865Z"/></g></svg>
                    <input type="url" name="project_link" id="projectLink" placeholder="https://example.com">
                </div>
            </div>

            <div class="modal-actions">
                <button class="btn btn-gray modal-cancel" type="button">
                    Cancel
                </button>

                <button class="btn btn-gradient" type="submit" id="saveProjectBtn">
                    Save Project
                </button>
            </div>
  </form>
        </div>
    </div>



    <!-- Mobile Sidebar Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <!-- Mobile Sidebar (Off-canvas) -->
    <aside class="sidebar sidebar-mobile" id="mobileSidebar" aria-hidden="true">
        <div class="sidebar-mobile-top">
            <div class="sidebar-head">
                <h1><span><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 32 32"><path fill="currentColor" d="M20 14h8a2.002 2.002 0 0 0 2-2V4a2.002 2.002 0 0 0-2-2h-8a2.002 2.002 0 0 0-2 2H9a2.002 2.002 0 0 0-2 2v4H4a2.002 2.002 0 0 0-2 2v8a2.002 2.002 0 0 0 2 2h2v4a2.002 2.002 0 0 0 2 2h10a2.002 2.002 0 0 0 2 2h8a2.002 2.002 0 0 0 2-2v-8a2.002 2.002 0 0 0-2-2h-8a2.002 2.002 0 0 0-2 2v6H8v-4h4a2.002 2.002 0 0 0 2-2v-8a2.002 2.002 0 0 0-2-2H9V6h9v6a2.002 2.002 0 0 0 2 2Zm0 14v-4h8v4Zm8-8v2h-8v-2ZM4 20v-4h8v4Zm8-6H4v-2h8Zm8-2V8h8v4Zm8-8v2h-8V4Z"/></svg></span><strong>Project</strong> vault</h1>
                <p class="menu-label">MENU</p>
            </div>

            <!-- Close button -->
            <button class="icon-btn close-btn" type="button" aria-label="Close menu" id="closeMenuBtn">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M18.3 5.71a1 1 0 0 0-1.41 0L12 10.59L7.11 5.7A1 1 0 0 0 5.7 7.11L10.59 12l-4.9 4.89a1 1 0 1 0 1.42 1.42L12 13.41l4.89 4.9a1 1 0 0 0 1.42-1.42L13.41 12l4.9-4.89a1 1 0 0 0-.01-1.4Z" />
                </svg>
            </button>
        </div>

        <nav class="sidebar-menu">
            <a href="index.php" class="menu-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M21 21h-8v-6h8v6Zm-10 0H3V11h8v10Zm10-8h-8V3h8v10ZM11 9H3V3h8v6Z" />
                </svg>
                <span>Dashboard</span>
            </a>

            <a href="categories.php" class="menu-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M19.298 9.566H4.702a1.964 1.964 0 0 0-1.535.744a1.944 1.944 0 0 0-.363 1.66l1.565 6.408a3.894 3.894 0 0 0 1.4 2.072c.682.519 1.517.8 2.376.8h7.708c.859 0 1.694-.281 2.376-.8a3.894 3.894 0 0 0 1.4-2.072l1.565-6.407a1.94 1.94 0 0 0-1.044-2.208a1.964 1.964 0 0 0-.854-.197M8.087 13.46v3.895M12 13.46v3.895m3.913-3.895v3.895m2.935-7.789a6.8 6.8 0 0 0-2.006-4.82A6.864 6.864 0 0 0 12 2.75a6.864 6.864 0 0 0-4.842 1.996a6.8 6.8 0 0 0-2.005 4.82" />
                </svg>
                <span>Categories</span>
            </a>

            <a href="projects.php" class="menu-item active">
                <span class="active-indicator"></span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5">
                        <path d="M14.186 2.753v3.596c0 .487.195.955.54 1.3a1.85 1.85 0 0 0 1.306.539h4.125" />
                        <path
                            d="M20.25 8.568v8.568a4.251 4.251 0 0 1-1.362 2.97a4.283 4.283 0 0 1-3.072 1.14h-7.59a4.294 4.294 0 0 1-3.1-1.124a4.265 4.265 0 0 1-1.376-2.986V6.862a4.25 4.25 0 0 1 1.362-2.97a4.283 4.283 0 0 1 3.072-1.14h5.714a3.503 3.503 0 0 1 2.361.905l2.96 2.722a2.971 2.971 0 0 1 1.031 2.189M7.647 7.647h3.265M7.647 12h8.706m-8.706 4.353h8.706" />
                    </g>
                </svg>
                <span>Projects</span>
            </a>

            <a href="setting.php" class="menu-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5">
                        <path d="M12.132 15.404a3.364 3.364 0 1 0 0-6.728a3.364 3.364 0 0 0 0 6.728" />
                        <path
                            d="M20.983 15.094a9.43 9.43 0 0 1-1.802 3.1l-2.124-.482a7.245 7.245 0 0 1-2.801 1.56l-.574 2.079a9.462 9.462 0 0 1-1.63.149a9.117 9.117 0 0 1-2.032-.23l-.609-2.146a7.475 7.475 0 0 1-2.457-1.493l-2.1.54a9.357 9.357 0 0 1-1.837-3.33l1.55-1.722a7.186 7.186 0 0 1 .069-2.652L3.107 8.872a9.356 9.356 0 0 1 2.067-3.353l2.17.54A7.68 7.68 0 0 1 9.319 4.91l.574-2.124a8.886 8.886 0 0 1 2.17-.287c.585 0 1.17.054 1.745.16l.551 2.113c.83.269 1.608.68 2.296 1.217l2.182-.563a9.368 9.368 0 0 1 2.043 3.1l-1.48 1.607a7.405 7.405 0 0 1 .068 3.364z" />
                    </g>
                </svg>
                <span>Setting</span>
            </a>
        </nav>
    </aside>




    <script src="assets/js/script.js"></script>
</body>

</html>