<?php
session_start();

?>
<?php
include "koneksi.php";
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    // return var_dump($username);
    $password = md5($_POST["password"]);
  
    $cek_user = mysqli_query($conn, "SELECT * FROM register WHERE username ='$username' AND password ='$password'");
    // return var_dump($cek_user);
    $row      = mysqli_num_rows($cek_user);

    if ($row == 1) {
    $fetch_pass = mysqli_fetch_assoc($cek_user);
    //var_dump($fetch_pass);
    //return false;
    $cek_pass = $fetch_pass['password'];
    if ($cek_pass != $password) {
      echo "<script>alert('password salah');</script>";
      } else {
        $_SESSION['log'] =  $fetch_pass ;
        $_SESSION['username'] = $username ;
        echo "<script>alert('login Berhasil');document.location.href='home.php';</script>";
      }
    } else {
      echo "<script>alert('email/password salah');</script>";
    }
  }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>LOGIN</title>
</head>

<body>
  <div class="container">
    <div class="card login-form">
      <div class="card-body">
        <h1 class="card-title text-center">LOGIN</h1>

        <form method="post">
          <div class="form-group mt-4">
            <label for="name">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
          </div>
          <div class="form-group mt-4">
            <label for="name">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
          </div>

          <div class="d-grid mt-3">
            <button name="submit" type="submit" class="btn btn-primary btn-login">LOGIN</button>
          </div>

          <div class="mt-3 text-center" style="font-size: 15px;">
            <label class="forgot">Don't have account ? <a href="register.php" class="link" style="color: blue;">Register Now</a></label>
          </div>
          <div class="mt-1 text-center" style="font-size: 15px;">
            <label>Forgot Password ? <a href="reset.php" class="link" style="color: blue;">Reset Password</a></label>
          </div>

        </form>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>