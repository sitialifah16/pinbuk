<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">PENDAFTAR<a style="float:right;" href="<?php echo site_url("admin/registered_user/export"); ?>">
                        <p>Download</p>
                    </a></h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Nama </th>
                                <th> Kelas </th>                            
                                <th> Bukti Pembayaran </th>                               
                                <th> Status </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($list as $l) {
                            ?>
                                <tr>
                                    <td> <?php echo $l->id_daftar ?> </td>
                                    <td>
                                        <a href="<?php echo '#identitas-'.$l->id_daftar ?>" data-toggle="modal" data-target="<?php echo '#identitas-'.$l->id_daftar ?>">
                                            <?php echo $l->namauser ?>
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="<?php echo 'identitas-'.$l->id_daftar ?>" tabindex="-1" role="dialog" aria-labelledby="identitasLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ModalLabel"><?php echo strtoupper($l->namauser) ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="email">Email :</label>
                                                                <input type="email" class="form-control" value="<?php echo $l->email ?>" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="no_hp">No HP :</label>
                                                                <input type="text" class="form-control" value="<?php echo $l->no_hp ?>" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alamat">Alamat :</label>
                                                                <input type="text" class="form-control" value="<?php echo $l->alamat ?>" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="waktu">Waktu Register :</label>
                                                                <input type="text" class="form-control" value="<?php echo $l->jam_daftar ?> WIB" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tanggal">Tanggal Register :</label>
                                                                <input type="text" class="form-control" value="<?php echo $l->tanggal_daftar ?>" readonly>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td> <?php echo $l->namaworkshop ?> </td>   
                                    <!-- <td> <img src="" class="mb-2 mw-100 w-50 rounded" alt="image"></td> -->
                                    <td> <a class="btn btn-info btn-xs btn-tabl" href="<?php echo base_url() . 'uploads/payment/' . $l->bukti_pembayaran ?>" data-lightbox="<?php echo $l->bukti_pembayaran ?>" data-title="Bukti Pembayaran <?php echo $l->namauser ?>">PREVIEW</a></td>
                                                                     
                                    <td>
                                        <?php
                                        if ($l->status == 0) {
                                            echo "<a href='#' class='btn btn-success btn-xs action-menu' data-id='$l->id_daftar' data-val='1' data-pesan='memverifikasi' role='button'>ACCEPT</a> <a href='#' class='btn btn-danger btn-xs action-menu' data-id='$l->id_daftar' data-val='2' data-pesan='menolak' role='button'>REJECT</a>";
                                        } else if ($l->status == 1) {
                                            echo  "<label class='badge badge-gradient-success'>ACCEPTED</label>";
                                        } else {
                                            echo  "<label class='badge badge-gradient-danger'>REJECTED</label>";
                                        }
                                        ?>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>