<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Password</title>
</head>

<body>
    <h5 align="center">FORMULIR UBAH PASSWORD</h5>
    <form action="<?= base_url('Ubah/proses_gantipassword')?>" method ="POST">
        <table align="center">
            <tr>
                <td>Username</td>
                <td>
                    <input type="username" name="username" class="form-control">
                </td>
            </tr>
            <tr>
                <td> Password Baru</td>
                <td>
                    <input type="password" name="password1" class="form-control" >
                </td>
            </tr>
            <tr>
                <td>konfirmasi password </td>
                <td>
                    <input type="password" name="password2" class="form-control">
                </td>
            </tr>
            
            <tr>
                <td><button name="simpan" class="btn btn-primary">SIMPAN</button></td>
            </tr>
        </table>
    </form>
    <br>
    <br>
</body>
</html>