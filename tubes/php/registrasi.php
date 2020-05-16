<?php
require 'function.php';

if (isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
               alert('Registrasi Berhasil');
               document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
    body {
        background-color: black;
    }
    .container {
        background-color: white;
        width: 350px;
        padding: 20px;
        margin: auto;
        margin-top: 100px;
        border: 2px solid salmon;
        font-size: 18px;
        border-radius: 5px;
    }
    h3 {
        background-color: red;
        text-align: center;
        color: white;
        padding: 10px;
        border-radius: 7px;
    }

    table {
        width: 200px;
        padding: 12px 10px;
        box-sizing: border-box;
        font-size: 18px;
    }
    button[type=submit] {
        background-color: dodgerblue;
        width: 100%;
        height: 40px;
        text-align: center;
        font-size: 20px;
        border-radius: 18px;
        color: white;

    }
    </style>
</head>
<body>
<div class="container">
    <h3>Form Registrasi</h3>
<form action="" method="post">
    <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text " name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
    </table>        
    <button type="submit" name="register">REGISTER</button>     
</form>
</div>    
</body>
</html>