 <!--header start here -->
 <header class="navbar fixed-top navbar-expand-md subMenu sticky_header" style="position: fixed;">
     <div class="container">
         <a class="navbar-brand logo" href="#">
             <img src="<?php echo base_url() ?>assets/evento/assets/img/logo.png" alt="Evento" />
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="lnr lnr-text-align-right"></span>
         </button>
         <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
             <ul id="grupmenu" class="nav navbar-nav menu">
                 <li class="nav-item">
                     <a class="nav-link" href="<?php echo site_url() ?>/home">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link menu-app menudaftar" data-val="Userpage/daftarworkshop">Daftar-workshop</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link menu-app" data-val="Userpage/aktivitas">Aktivitas</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link menu-app" data-val="Userpage/modul">Modul</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <div class="media align-items-center">

                             <div class="media-body d-lg-block">
                                 <span class="mb-0 text-sm  font-weight-bold">
                                     <?php
                                        $str = $this->session->userdata('nama_user');
                                        $myname = explode(" ", $str);
                                        echo $myname[0];
                                        ?>

                                 </span>
                                 <span class="fa fa-sort-down" style="color:white; margin-left:1px;"></span>
                             </div>
                         </div>
                     </a>
                     <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">

                         <!-- <a class="dropdown-item menu-app menudaftar" data-val="Userpage/daftarworkshop">Daftar Workshop</a> -->
                         <a class="dropdown-item logout" data-val="Account/logout">
                             <i class="ni ni-user-run"></i>
                             <span>Logout</span>
                         </a>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
 </header>
 <!--header end here-->
 <div id="container-content">
     <?php echo $content ?>
 </div>