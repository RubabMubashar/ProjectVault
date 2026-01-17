<?php
$pageTitle = "Settings";
require_once "includes/profile-data.php";
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
            <a href="dashboard.php" class="menu-item">
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

            <a href="projects.php" class="menu-item">
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

            <a href="setting.php" class="menu-item active">
                <span class="active-indicator"></span>
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
         <?php include "includes/navbar.php"; ?>

        <!-- Main content -->
        <section class="content profile-settings">
            <h2 class="settings-title">Edit Your Profile</h2>

            <!-- Avatar -->
            <div class="avatar-wrapper">
                <img src="<?php echo $avatar; ?>" alt="Avatar" class="avatar-img" id="avatarPreview">

                <button class="avatar-upload-btn" type="button" title="Upload image">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M5.833 19.708h12.334a3.083 3.083 0 0 0 3.083-3.083V9.431a3.083 3.083 0 0 0-3.083-3.084h-1.419c-.408 0-.8-.163-1.09-.452l-1.15-1.151a1.542 1.542 0 0 0-1.09-.452h-2.836c-.41 0-.8.163-1.09.452l-1.15 1.151c-.29.29-.682.452-1.09.452H5.833A3.083 3.083 0 0 0 2.75 9.431v7.194a3.083 3.083 0 0 0 3.083 3.083"/><path d="M12 16.625a4.111 4.111 0 1 0 0-8.222a4.111 4.111 0 0 0 0 8.222"/></g></svg>
                </button>
            </div>

            <!-- Form -->
            <form id="profileForm" class="profile-form" action="assets/backend/profile.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" value="<?php echo $name; ?>" readonly required>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" value="<?php echo $email; ?>" readonly required>
                </div>

                <div class="form-group full">
                  <label>Profession</label>
                  <input type="text" name="profession" value="<?php echo $profession; ?>" readonly required>
                </div>

                 <!-- file input must be inside the form -->
                 <input type="file" name="avatar" id="avatarInput" accept="image/*" hidden>
             </form>


            <!-- Action -->
            <div class="settings-actions">
              <button class="btn btn-gradient" id="editSaveBtn" type="button">
               Edit Profile
              </button>
            </div>


        </section>

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
            <a href="dashboard.php" class="menu-item">
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

            <a href="projects.php" class="menu-item">
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

            <a href="setting.php" class="menu-item active">
                <span class="active-indicator"></span>
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