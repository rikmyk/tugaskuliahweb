<?php
session_start();
if (isset($_SESSION["login"])) {
     header("Location: core/main.php");
     exit;
}

require 'core/function.php';

if (isset($_POST["login"])) {
     $username = $_POST["username"];
     $password = $_POST["password"];

     $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

     if (mysqli_num_rows($result) === 1) {
          $row = mysqli_fetch_assoc($result);
          if (password_verify($password, $row["password"])) {
               $_SESSION["login"] = true;


               header("Location:core/main.php");
               exit;
          }
     }
}

if (isset($_POST["register"])) {
     if (register($_POST) > 0) {
          echo "<script>
         alert('user baru berhasil di tambahkan'); 
         </script>";
     } else {
          echo mysqli_error($conn);
     }
}

$error =  true;

?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style/logreg.css" />
     <title>BEAR BRAND</title>
</head>

<body>
     <div class="container">
          <div class="forms-container">
               <div class="signin-signup">
                    <form action="#" method="post" class="sign-in-form">
                         <h2 class="title">Login</h2>
                         <div class="input-field">
                              <i class="fas fa-user"></i>
                              <input type="text" placeholder="Username" name="username" id="username" required="" />
                         </div>
                         <div class="input-field">
                              <i class="fas fa-lock"></i>
                              <input type="password" placeholder="Password" name="password" id="password" required="" />
                         </div>

                         <input type="submit" value="Login" class="btn solid" name="login" />
                    </form>
                    <form action="#" method="post" class="sign-up-form">
                         <h2 class="title">Register</h2>
                         <div class="input-field">
                              <i class="fas fa-user"></i>
                              <input type="text" placeholder="Username" name="username" id="username" required="" />
                         </div>
                         <div class="input-field">
                              <i class="fas fa-lock"></i>
                              <input type="password" placeholder="Password" name="password" id="password" required="" />
                         </div>
                         <div class="input-field">
                              <i class="fas fa-lock"></i>
                              <input type="password" placeholder="Confirm Password" name="password2" id="password2" required="" />
                         </div>
                         <input type="submit" value="Register" class="btn solid" name="register" />
                    </form>
               </div>
          </div>

          <div class="panels-container">
               <div class="panel left-panel">
                    <div class="content">
                         <h3>Belum punya akun ?</h3>
                         <p>
                              Daftar di sini !
                         </p>
                         <button class="btn transparent" id="sign-up-btn">
                              Register
                         </button>
                    </div>
                    <img src="images/log.svg" class="image" alt="" />
               </div>
               <div class="panel right-panel">
                    <div class="content">
                         <h3>Sudah punya akun ?</h3>
                         <p>
                              Login di sini !
                         </p>
                         <button class="btn transparent" id="sign-in-btn">
                              Sign in
                         </button>
                    </div>
                    <img src="images/log.svg" class="image" alt="" />
               </div>
          </div>
     </div>

     <script src="js/app.js"></script>
</body>

</html>