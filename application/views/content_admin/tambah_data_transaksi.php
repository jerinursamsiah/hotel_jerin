
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data transaksi</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_transaksi/proses_tambah_data'); ?>" method="POST">
                            <table class="table">
                      
                                
                                <tr>
                                    <td>jenis id</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="jenis id" id="jenis_id"></td>
                                </tr>
                                <tr>
                                    <td>atas nama</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="atas nama" id="atas_nama"></td>
                                </tr>   </tr>
                                <tr>
                                    <td>tanggal</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="tanggal" id="tanggal"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>waktu sewa</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="waktu sewa" id="waktu_sewa"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>kamar id</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="kamar id" id="kamar_id"></td>
                                </tr>
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
                                        <input type="submit" class="btn btn-dark" value="Simpan">
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
