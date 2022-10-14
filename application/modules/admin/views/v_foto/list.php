    <div class="page-header">
        <h3 class="page-title"> Foto Kegiatan </h3>
        <?php $this->load->view("_partials_admin/breadcrumb.php") ?>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin hoverable-card">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/photo/add') ?>"><i class="mdi mdi-plus"></i> Add New</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hoverable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Foto</th>
                                    <!-- <th>Nama Foto</th> -->
                                    <th>Deskripsi</th>
                                    <th>Waktu Upload</th>
                                    <th>Terakhir Diubah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($foto_kegiatan as $photos) : ?>
                                    <tr>
                                        <td>
                                            <?php echo $photos->id ?>
                                        </td>
                                        <td width="150">
                                            <a href="<?php echo base_url() . 'uploads/foto/' . $photos->nama_gambar ?>" data-lightbox="<?php echo $photos->nama_gambar ?>" data-title="<?php echo $photos->nama_gambar ?>">
                                                <img style="border-radius:0%;width:5rem;height:5rem;object-fit: cover;" class="listviewtable" src="<?php echo base_url('uploads/foto/' . $photos->nama_gambar) ?>" width="64" />
                                            </a>
                                        </td>
                                        <td class="small">
                                            <?php echo substr($photos->deskripsi, 0, 50) ?>
                                        </td>
                                        <td>
                                            <?php
                                            $datetime = date_create($photos->waktu_upload);
                                            echo date_format($datetime, "d-m-Y H:i") . " WIB";
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            $newtime = date_create($photos->terakhir_diubah);
                                            echo date_format($newtime, "d-m-Y H:i") . " WIB";
                                            ?>
                                        </td>

                                        <td width="250">
                                            <a href="<?php echo site_url('admin/photo/edit/' . $photos->id) ?>" class="btn btn-gradient-info btn-sm" type="button">Edit</a>
                                            <a href='#' class='btn btn-gradient-danger btn-sm hapus-gambar' data-id='<?php echo $photos->id ?>' role='button'>Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>