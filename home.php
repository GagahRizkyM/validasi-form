<?php
session_start();

include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(blueteam.jpg);
            background-size: cover;
        }
        .welcome {
            text-align: center;
            margin-top: 300px;
            color: white;
            font-size: 55px;
        }
        .date {
            text-align: center;
            color: white;
            font-size: 15px;
            margin-top: -30px;
        }
        button{
            margin: 0;
            position: absolute;
            top: 65%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            background-color: #0096FF ;
            color: white;
            border-color
            : aqua;
            width: 70px;
        }

    </style>
</head>
<body>
   
   
    <div class="date">
        <?php 

        if(!isset($_SESSION['log'])) {
            echo '
            <h1 class="welcome">Selamat Datang, Silahkan Login terlebih dahulu </h1>
            <a href="login.php"><button class="d-grid mt-3">Login</button></a>
            ';
        } else {
            
           
echo '

        <h1 class="welcome">Selamat Datang, ' . $_SESSION["username"],' </h1>
         <a href="logout.php"><button class="d-grid mt-3">Logout</button></a>
';
            };
           
        
            
        ?>
    </div> 
</body>
</html>