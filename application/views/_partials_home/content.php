<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md subMenu">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img src="<?php echo base_url() ?>assets/evento/assets/img/logo.png" alt="Evento" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class="nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#s2">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#s3">Jadwal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#s4">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#s5">FAQ</a>
                </li>
                <?php
                if ($this->session->userdata('email_user') == '' && $this->session->userdata('username_admin') == '') {
                ?>
                    <li class="nav-item">
                        <a class="nav-link menu-app" href="<?php echo site_url() ?>/account">Registrasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="<?php echo site_url() ?>/account/logindirect">Masuk</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">

                                <div class="media-body d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">
                                        <?php
                                        if ($this->session->userdata('email_user')) {
                                            $str = $this->session->userdata('nama_user');
                                        } else if ($this->session->userdata('username_admin')) {
                                            $str = $this->session->userdata('username_admin');
                                        }
                                        $myname = explode(" ", $str);
                                        echo $myname[0];
                                        ?>

                                    </span>
                                    <span class="fa fa-sort-down" style="color:white; margin-left:1px;"></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <?php
                            if ($this->session->userdata('email_user')) {
                                echo '<a class="dropdown-item menudaftar" href="'.site_url().'/userpage">My page</a>';
                            }else if ($this->session->userdata('username_admin')) {
                                echo '<a class="dropdown-item menudaftar" href="'.site_url().'/admin/dashboard">Admin page</a>';
                            }
                            ?>
                            <a class="dropdown-item logout" data-val="Account/logout">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</header>
<!--header end here-->
<div id="container-content">
    <?php echo $content ?>
</div>