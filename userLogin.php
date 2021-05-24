<?php
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rancho&display=swap"
      rel="stylesheet"
    />

    <!-- FontAwesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>HealthNess</title>
  </head>
  <body>
    <div class="user-login-page">
      <div class="user-login-image">
        <div class="user-login-dark-opacity"></div>
      </div>
      <div class="user-login-container">
        <h3>USER<br />LOGIN</h3>
        <p class="user-login-welcome">Welcome to the website</p>
        <form class="user-login-form" method="POST" action="operations.php">
          <p class="login-error text-dark"></p>
          <div class="user-login-input-border">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="USERNAME" id="username" name="username" />
          </div>
          <div class="user-login-input-border">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="PASSWORD" id="password" name="userpassword"/>
          </div>
          <div class="user-login-check-div">
            <input
              type="checkbox"
              id="rememberMe"
              name="rememberMe"
              value="rememberMe"
            />
            <label for="rememberMe"> Remember </label>
            <a onclick="forgetPassword()" href="#">Forget Password ?</a>
          </div>
          <input
            class="user-login-button"
            type="submit"
            onclick="checkUserInfo()"
            value="LOGIN"
            name="login"
          />
        </form>
        <p class="user-login-not-a-member">
          Not a Member ? <a href="./userSıgnUp.php">Sign Up</a>
        </p>
      </div>
    </div>

    <script>
      const error = document.querySelector(".login-error");
      function checkUserInfo() {
        let errorInfo;
        const username = document.querySelector("#username");
        const password = document.querySelector("#password");
        if (username.value.length < 6 || username.value.length > 16) {
          errorInfo = "Username length must be between 6 and 16 character";
        } else if (password.value.length < 6 || password.value.length > 16) {
          errorInfo = "Password length must be between 6 and 16 character";
        } else {
          error.innerHTML = "başarılı";
        }
        error.innerHTML = "*" + errorInfo;
      }
      function forgetPassword() {
        error.innerHTML = "Unutmasaydın knk";
      }
    </script>
  </body>

  <?php

      if(isset($_GET["durum"])){
        if($_GET["durum"]=="no"){
          ?>
             <script>
                 window.onload=function(){
                     alert("Kullanıcı adı veya şifre yanlış");
                 }
             </script>
             <?php
        }
      }

?>
  
</html>
