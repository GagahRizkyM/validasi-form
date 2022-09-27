<?php
session_start();
if (!isset($_SESSION['log'])){
  echo "<script>alert('Anda Harus Konfirmasi Akun Dahulu');document.location.href='konfirmasi.php';</script>";
    exit;
    // return var_dump($_SESSION);
}

?>
<?php             
include "koneksi.php";


if (isset($_POST['submit'])) {

	$password = md5($_POST["password"]);
	mysqli_query($conn, "UPDATE user SET password ='$password' WHERE username='$username'");
	echo "<script> alert('Password Berhasil diganti');document.location.href='login.php';</script>";	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Ganti Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <div class="container">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center">Ganti Password</h1>

        <form method="post">
          
          <div class="form-group mt-4">
            <label for="name">Masukkan Password Baru</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
          </div>

          <div class="d-grid mt-3">
            <button name="submit" type="submit" class="btn btn-primary btn-login">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>