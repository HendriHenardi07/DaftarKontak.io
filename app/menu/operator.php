<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Operator
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?page=datakontak" class="nav-link">
                  <i class="fas fa-phone nav-icon"></i>
                  <p>Daftar Kontak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=kelolakontak" class="nav-link">
                  <i class="fas fa-folder-plus nav-icon"></i>
                  <p>Kelola Kontak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=kategori" class="nav-link">
                  <i class="fas fa-th-list nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-red">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Log out
              </p>
            </a>
          </li>
        </ul>
      </nav>