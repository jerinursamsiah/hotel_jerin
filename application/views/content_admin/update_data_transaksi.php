<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit Data transaksi</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_transaksi/proses_update_data'); ?>" method="POST">
                            <input type="hidden" name="id_transaksi" id="id_transaksi" value="<?php echo $tbl_transaksi['id_transaksi']?>">
                            <table class="table">
                                <tr>
                                    <td>jenis id</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="jenis_id" id="jenis_id" value="<?php echo $tbl_transaksi['jenis_id']?>"></td>
                                </tr>
                                <tr>
                                    <td>atas nama</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="atas_nama" id="atas_nama" value="<?php echo $tbl_transaksi['atas_nama']?>"></td>
                                </tr>
                                <tr>
                                    <td>tanggal</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="tanggal" id="tanggal"></td>
                                </tr>
                                 <tr>
                                     <td>waktu sewa</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="waktu_sewa" id="waktu_sewa" value="<?php echo $tbl_transaksi['waktu_sewa']?>"></td>
                                </tr>
                                <tr>
                                    <td>kamar id</td>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="kamar_id" id="kamar_id" value="<?php echo $tbl_transaksi['kamar_id']?>"></td>
                                </tr>  
                                <tr>
                                    <td>jenis pembayaran</td>
                                    <td>:</td>
                                    <td><select name="jenis_pembayaran" id="jenis_pembayaran" class="form-control">
                                        <option value="cash">cash</option> 
                                        <option value="debit">debit</option>
                                    </select></td>
                                </tr>
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
                                    
                                    

                                   
                                   
                                    