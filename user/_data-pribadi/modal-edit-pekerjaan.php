<!--modal-->
<div class="modal fade" id="ModalEditPekerjaan<?php echo $a_bag['id']; ?>" tabindex="-1" role="modal" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pekerjaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="config_config_cs/edit-pekerjaan.php?n=file" method="post" enctype="multipart/form-data" id="tambah">
                    <input type="hidden" name="id" value="<?php echo $a_bag['id']; ?>">
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label">NIP</label>
                            <input maxlength="100" name="nip" type="text" required="required" class="form-control" placeholder="Nomer Induk Pegawai" required="" readonly="" value="<?php echo $p_nip; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nama Instansi</label>
                            <input maxlength="100" name="nama_instansi" type="text" required="required" class="form-control" placeholder="Nama Instansi" value="<?php echo $a_bag['nama_instansi']; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Jabatan</label>
                            <input maxlength="100" name="jabatan" type="text" required="required" class="form-control" placeholder="Jabatan" value="<?php echo $a_bag['jabatan']; ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Lama Kerja</label>
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <input maxlength="100" name="lama_kerja" type="text" required="required" class="form-control" placeholder="Lama Kerja" value="<?php echo $a_bag['lama_kerja']; ?>"/>
                                </div>
                                <div class="col-md-6">
                                    <select name="masa" class="form-control">
                                        <option>Selama</option>
                                        <?php
                                            $q = mysqli_query($connect, "SELECT * FROM tbl_masa"); 

                                            while ($a = mysqli_fetch_array($q)){
                                                if ($a[0] == $a_bag['ket']) {
                                                    echo "<option value='$a[0]' selected>$a[0]</option>";
                                                } else {
                                                    echo "<option value='$a[0]'>$a[0]</option>";
                                                }                
                                            }
                                        ?>
                                    </select>    
                                </div>
                            </div>
                            <div class="row"></div><br>
                            <div class="row mb-6">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="dari" class="form-control" id="datepicker-autoclose" placeholder="Dari" value="<?php echo $a_bag['dari']; ?>" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="sampai" class="form-control" id="datepicker-autoclose2" placeholder="Sampai" value="<?php echo $a_bag['sampai']; ?>" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" required="" placeholder="Deskripsi Pekerjaan"><?php echo $a_bag['deskripsi']; ?></textarea>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="submit" name="tambah" class="btn btn-primary" id="submit" value="SIMPAN">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>