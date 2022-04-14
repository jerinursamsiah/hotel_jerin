
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data Kamar</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_kamar/proses_update_data'); ?>" method="POST">
                            <input type="hidden" name="id_kamar" id="id_kamar" value="<?php echo $tbl_kamar['id_kamar']?>">
                            <table class="table">
                                <tr>
                                    <td>Nomor Kamar</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nomor_kamar" id="nomor_kamar" value="<?php echo $tbl_kamar['nomor_kamar']?>"></td>
                                </tr>
                    
                                    <td>Id jenis</td>
                                    <td>:</td>
                                    <td><textarea class="form-control" name="id_jenis" id="id_jenis" cols="10" rows="6"><?php echo  $tbl_kamar['id_jenis']?></textarea></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="keterangan" id="keterangan" value="<?php echo $tbl_kamar['keterangan']?>"></td>
                                </tr>
                            
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-dark" value="Update">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>