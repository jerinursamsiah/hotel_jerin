
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Tambah Data User</h4>
                        <br>
                        <form action="<?= base_url('index.php/data_user/proses_tambah_data'); ?>" method="POST">
                            <table class="table">
                      
                                
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="email" id="email"></td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="password" id="password"></td>
                                </tr>
                                <tr>
                                    <td>nama lengkap</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="nama_lengkap" id="nama_lengkap"></td>
                                </tr>
                                <tr>
                                    <td>no hp</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="no_hp" id="no_hp"></td>
                                </tr>
                                <tr>
                                    <td>hak akses</td>
                                    <td>:</td>
                                    <td><select name="hak_akses" id="hak_akses" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select></td>
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
