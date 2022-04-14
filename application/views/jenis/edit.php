<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <br>
    <br>
    <br>
    <h5 align="center">FORMULIR EDIT USER</h5>
    <form action="<?= base_url('jenis/editsimpan')?>" method ="POST">
        <table align="center">
            <tr>
                <td>Nama Kamar</td>
                <td>
                    <input type="hidden" name="id" value="<?= $jenis['id']?>">
                    <input type="text" name="kamar" class="form-control" value="<?= $jenis['kamar']?>">
                </td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>
                    <input type="text" name="keterangan" class="form-control" value="<?= $jenis['keterangan']?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="text" name="harga" class="form-control" value="<?= $jenis['harga']?>">
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>
                        <img class="card-img-top" src="" alt="Card image cap">
                </td>
            </tr>
            
            
            <tr>
                <td><button name="simpan" class="btn btn-dark">SAVE</button></td>
            </tr>
        </table>
    </form>
</body>
</html>