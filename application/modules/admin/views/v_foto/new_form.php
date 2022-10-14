<div class="container-fluid">
    <div class="page-header">
        <h3 class="page-title"> Tambah Foto </h3>
        <?php $this->load->view("_partials_admin/breadcrumb.php") ?>
    </div>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12 grid-margin hoverable-card">
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/photo') ?>"><i class="mdi mdi-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">
                    <div class="alert alert-info" style="margin-top:-1rem; margin-bottom:1.5rem;" role="alert">
                        INFO : Anda dapat menginput lebih dari satu foto sekaligus. Pastikan tiap foto berukuran tidak lebih dari 1 MB dan hanya berformat jpg, jpeg, dan png.
                    </div>
                    <form id="foto-form" action="<?php echo site_url('admin/photo/add_photo') ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">Foto Kegiatan*</label>
                            <input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="gambar[]" multiple required />
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi*</label>
                            <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" type="text" name="deskripsi" placeholder="Deskripsi Foto" required></textarea>
                        </div>

                        <input class="btn btn-gradient-success upload-foto" type="submit" name="btn" value="Save" />
                    </form>

                </div>

                <div class="card-footer small text-muted">
                    * required fields
                </div>

            </div>
        </div>

    </div>
</div>