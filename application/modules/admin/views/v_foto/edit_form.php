    <div class="container-fluid">
        <div class="page-header">
            <h3 class="page-title"> Edit Foto </h3>
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

                        <form id="edit-foto-form" action="<?php echo site_url('admin/photo/edit_photo') ?>" method="post" enctype="multipart/form-data">

                            <input class="id" type="hidden" name="id" value="<?php echo $foto_kegiatan->id ?>" />

                            <div class="form-group">
                                <label for="gambar"><i>Click photo below to change the photo.</i></label>
                                <input type="file" id="image-source" name="image-edit" onchange="previewImage();" style="display:none;" />
                                <img id="listview" style="border-radius:0%;border: 2px solid;object-fit: cover;" class="listview" src="<?php echo base_url('uploads/foto/' . $foto_kegiatan->nama_gambar) ?>" title="Change Picture" />      
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Gambar*</label>
                                <input class="form-control <?php echo form_error('description') ? 'is-invalid' : '' ?>" type="text" name="deskripsi" placeholder="Deskripsi Foto" value="<?php echo $foto_kegiatan->deskripsi ?>" required></input>
                            </div>

                            <input class="btn btn-gradient-success edit-foto" type="submit" name="btn" value="Save" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
                    </div>

                </div>
            </div>

        </div>
    </div>