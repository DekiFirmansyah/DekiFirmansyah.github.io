<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mbolang.com</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<div class="container-fluid">
    <br>    
    <h2>Registrasi Baru</h2> <br>
    <form action="register_proses.php" method="post" id="register">
        <div class="form-group row">
            <label for="id karyawan" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="custom-control custom-radio">
                    <input type="radio" id="L" class="custom-control-input" name="jenisKelamin" value="L">
                    <label class="custom-control-label" for="L">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="P" class="custom-control-input" name="jenisKelamin" value="P">
                    <label class="custom-control-label" for="P">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username">
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="password">
            </div>
        </div>
        <div class="form-group row">
            <label for="spasi" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                <button type="button" class="btn btn-info" onclick="reset()">Reset</button>
                <a href="login.php" class="btn btn-success">Kembali</a>
            </div>
        </div>
    </form>
    </div>
    <script>
        function reset() {
            document.getElementById("register").reset();
        }
    </script>
</body>
</html>