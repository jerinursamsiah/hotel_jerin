<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA USER</title>
</head>
<body>
    <br>
    <br>
    <br>
    <h3 align="center">FORMULIR INPUT USER</h3>
    
        <form action="<?= base_url('jenis/save')?>" method="POST">
                <table align="center" >
                    <tr>
                        <td><label>Nama Kamar</label></td>
                        <td><input type="text" name="kamar"></td>
                    </tr>
                    <tr>
                        <td><label>Keterangan</label></td>
                        <td><input type="text" name="keterangan" id="" cols="30" rows="10"></td>
                    </tr>
                    <tr>
                        <td><label>Harga</label></td>
                        <td><input type="text" name="harga"></td>
                    </tr>
                    <tr>
                        <td><label>Foto</label></td>
                        <td><input type="text" name="foto"></td>
                    </tr>
    
                    <tr>
                        <td>
                        <td><button name="simpan" class="btn btn-dark">SAVE</button></td>
                        </td>
                    </tr>
                </table>
                
        </form>
    
</body>
</html>