
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data konsumen</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_konsumen/proses_tambah_data'); ?>" method="POST">
                            <table class="table">
                      
                                
                                <tr>
                                    <td>nama depan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_depan" id="nama_depan"></td>
                                </tr>
                                <tr>
                                    <td>nama tengah</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_tengah" id="nama_tengah"></td>
                                </tr>   </tr>
                                <tr>
                                    <td>nama belakang</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_belakang" id="nama_belakang"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>alamat</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="alamat" id="alamat"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>kota</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="kota" id="kota"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>provinsi</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="provinsi" id="provinsi"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>negara</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="negara" id="negara"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>no identitas</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_identitas" id="no_identitas"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>no telp</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_telp" id="no_telp"></td>
                                </tr>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="email" id="email"></td>
                                </tr>
                         
                                <tr>
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
