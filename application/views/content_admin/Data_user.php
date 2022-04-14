<!-- begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data user
                <a href="<?= base_url('index.php/data_user/tambah_data'); ?>">
                    <button class="btn btn-dark">Tambah data</button>
                </a>
            </6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
                <thead>
                </tr>
                <th>id user</th>
                <th>email</th>
                <th>password</th>
                <th>nama lengkap</th>
                <th>no hp</th>
                <th>hak akses</th>
                <th>aksi</th>
             </tr>
        </thead>
        <tfoot>    
                <th>id user</th>
                <th>email</th>
                <th>password</th>
                <th>nama lengkap</th>
                <th>no hp</th>
                <th>hak akses</th>
                <th>aksi</th>

            </tr>
            </thead>
            </tfoot>
            <tbody>
                <?php
        $no = 1;

foreach ($tbl_user as $tu) :
?>
    
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $tu["email"] ?></td>
        <td><?php echo $tu["password"] ?></td>
        <td><?php echo $tu["nama_lengkap"] ?></td>
        <td><?php echo $tu["no_hp"] ?></td>
        <td><?php echo $tu["hak_akses"] ?></td>
        <td>
            <a href="<?= base_url('index.php/data_user/update_data/') ?><?php echo $tu['id_user']?>" class="btn btn-dark btn-circle">
                 <i class="fas fa-edit"></i>

           </a>

            <a href="<?= base_url('index.php/data_user/hapus_data/') ?><?php echo $tu['id_user'] ?>" class="btn btn-danger btn-circle">
                  <i class="fas fa-trash"></i>
                  
          </a>
      </td>
</tr>
<?php endforeach; ?>
      
        

</tbody>
           

        </table>
      </div>
      </div>
     </div>

                  </table>
                </div>
                </div>
                </div>