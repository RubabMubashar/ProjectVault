<!-- Navbar -->
        <header class="navbar">
            <h1 class="nav-title">
             <?php echo $pageTitle ?? 'Dashboard'; ?>
            </h1>

            <div class="nav-right">
                <!-- Mobile menu (only mobile) -->
                <button class="icon-btn mobile-menu" type="button" aria-label="Open menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path fill="currentColor"
                            d="M4 7a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1zm0 5a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1zm0 5a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1z" />
                    </svg>
                </button>

                <!-- Dark theme button -->
                <button class="icon-btn" type="button" aria-label="Toggle theme">
                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M21.182 14.86A9.474 9.474 0 1 1 9.139 2.819a1.053 1.053 0 0 1 1.38 1.295a7.705 7.705 0 0 0-.085 4.642a6.999 6.999 0 0 0 4.81 4.811c1.52.45 3.14.42 4.643-.084a1.053 1.053 0 0 1 1.295 1.379" />
                    </svg>
                </button>

                <!-- User profile -->
               <div class="user-chip">
                 <img class="user-avatar" src="<?php echo $avatar; ?>" alt="User">
                 <div class="user-text">
                   <span class="user-name"><?php echo $name; ?></span>
                   <span class="user-email"><?php echo $email; ?></span>
                 </div>
                </div>

            </div>
        </header>