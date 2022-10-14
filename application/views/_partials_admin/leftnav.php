<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul id="grupmenu" class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="<?php echo base_url() ?>assets/images/user.png" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2"><?php echo strtoupper($this->session->userdata('username_admin')); ?></span>
                    <span class="text-secondary text-small">ID : <?php echo $this->session->userdata('id_admin'); ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url() ?>/admin/dashboard">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url() ?>/admin/photo" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Foto Kegiatan</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url() ?>/admin/registered_user">
                <span class="menu-title">Pendaftar</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>