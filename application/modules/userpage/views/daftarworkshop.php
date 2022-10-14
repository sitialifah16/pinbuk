<!--Price section-->
<section class="pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                Daftar Workshop
            </h3>
        </div>

        <div class="col-12 align-items-center">
            <div class="row">
                <div class="col-10">
                    <div class="tab-content vertical-center" id="v-pills-tabContent">
                        <div id="upload" role="tabpanel" class="card tab-pane fade show active">
                            <div class="card-header">
                                <ul class="nav nav-tabs" id="" role="tablist">
                                    <li class="nav-item" id="0">
                                        <a class="nav-link active" style="pointer-events: none;" data-toggle="tab" href="#tabs-0" role="tab" aria-controls="data-mahasiswa" aria-selected="true">Identitas</a>
                                    </li>
                                    <li class="nav-item disabled" id="1">
                                        <a class="nav-link" style="pointer-events: none;" data-toggle="tab" href="#tabs-1" role="tab" aria-controls="data-program" aria-selected="false">Berkas</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="card-body">
                                <?php
                                if ($registered == TRUE) {
                                    echo "<div class='alert alert-success' role='alert'><p>Anda telah mendaftar workshop. Pantau terus status verifikasi dari admin di menu aktivitas.</p></div>";
                                } else {
                                ?>
                                    <form id="form1" method="post" enctype="multipart/form-data" action="<?php echo base_url('index.php/Userpage/input'); ?>">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tabs-0" role="tabpanel" aria-labelledby="data-mahasiswa">
                                                <div class="tab-content" id="v-pills-tabContent">                    
                                                    <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="email" name="email" value="<?php echo $this->session->userdata('email_user'); ?>" class="form-control" id="email" readonly="readonly">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat:</label>
                                                        <input type="text" name="alamat" class="formdaftar form-control" id="alamat" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_hp">No HP:</label>
                                                        <input type="text" name="no_hp" class="formdaftar form-control" id="no_hp" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="workshop">Workshop:</label>
                                                        <select id="jenis_workshop" name="jenis_workshop" class="formdaftar form-control" required>
                                                            <option value="" selected>Pilih workshop</option>
                                                            <?php
                                                            foreach ($namaworkshop as $w) {
                                                            ?>
                                                                <option value="<?php echo $w->id_workshop ?>">
                                                                    <?php
                                                                    $str = $w->nama;
                                                                    echo $str;
                                                                    // $splitted = explode(" ", $str); 
                                                                    // if(count($splitted) > 3){
                                                                    //     echo $splitted[0]." ".$splitted[1]." ".$splitted[2]." ...";
                                                                    // }else{
                                                                    //     echo $str;
                                                                    // };
                                                                    ?>
                                                                </option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <a onclick="nextTab('1')" href="#" class="btn btn-primary">next</a>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="tabs-1" role="tabpanel" aria-labelledby="data-dokumen">
                                                <!-- <div class="form-group">
                                                <label for="file">Masukkan Scan KTP :</label>
                                                <input type="file" name="dokumen0" class="form-control" required>
                                            </div> -->
                                                <div class="form-group">
                                                    <label for="file">Masukkan Scan Bukti Pembayaran :</label>
                                                    <input type="file" name="dokumen0" class="form-control" required>
                                                </div>
                                                <div class="alert alert-danger" role="alert" id="#alert2" style="display:none; width:100%;">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <div id="#msg">
                                                    </div>
                                                </div>
                                                <a onclick="prevTab('0')" href="#" class="btn btn-primary">prev</a>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<script type="text/javascript">
    <?php
    include(APPPATH . "/modules/userpage/ajax/userpage.js");
    ?>
</script>