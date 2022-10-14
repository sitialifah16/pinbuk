<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>
        </span> Dashboard </h3>
</div>
<div class="row">
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="<?php echo base_url() ?>assets/admin/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Kelas BMT, Koperasi, & LKM
                </h4><br><br>
                <h2 class="mb-5"><?php echo $bmt; ?></h2>
                <h6 class="card-text">peserta</h6>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="<?php echo base_url() ?>assets/admin/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Kelas PINBUK Daerah & Pegiat Pemberdayaan Masyarakat
                </h4>
                <h2 class="mb-5"><?php echo $pinda; ?></h2>
                <h6 class="card-text">peserta</h6>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
                <img src="<?php echo base_url() ?>assets/admin/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Kelas CSR, PKBL, & Badan Pemberdayaan Masyarakat
                </h4><br>
                <h2 class="mb-5"><?php echo $csr; ?></h2>
                <h6 class="card-text">peserta</h6>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
            <div class="card-body">
                <img src="<?php echo base_url() ?>assets/admin/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Pendaftar Hari Ini <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4><br>
                <h2 class="mb-5"><?php echo $today; ?></h2>
                <h6 class="card-text">peserta</h6>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <img src="<?php echo base_url() ?>assets/admin/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Pendaftar Belum Terverifikasi <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5"><?php echo $notverified; ?></h2>
                <h6 class="card-text">peserta</h6>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
                <img src="<?php echo base_url() ?>assets/admin/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Pendaftar Tak Lolos Verifikasi <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4>
                <h2 class="mb-5"><?php echo $rejected; ?></h2>
                <h6 class="card-text">peserta</h6>
            </div>
        </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-warning card-img-holder text-white">
            <div class="card-body">
                <img src="<?php echo base_url() ?>assets/admin/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                <h4 class="font-weight-normal mb-3">Pendaftar Lolos Verifikasi <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                </h4><br>
                <h2 class="mb-5"><?php echo $total; ?></h2>
                <h6 class="card-text">peserta</h6>
            </div>
        </div>
    </div>
</div>