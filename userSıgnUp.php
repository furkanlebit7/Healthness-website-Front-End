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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
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
      <div class="user-login-image user-signup">
        <div class="user-login-dark-opacity"></div>
      </div>
      <div class="user-login-container">
        <h3>USER<br />LOGIN</h3>
        <p class="user-signup-welcome">Welcome to the website</p>
        <form class="user-login-form" method="POST">
          <p class="login-error text-dark"></p>
          <div class="user-login-input-border">
            <i class="fas fa-user"></i>
            <input
              type="text"
              placeholder="USERNAME"
              id="username"
              name="user__name"
            />
          </div>
          <div class="user-login-input-border">
            <i class="fas fa-envelope"></i>
            <input
              type="text"
              placeholder="EMAIL"
              id="email"
              name="user__email"
            />
          </div>
          <div class="user-login-input-border">
            <i class="fas fa-lock"></i>
            <input
              type="text"
              placeholder="PASSWORD"
              id="password"
              name="user__password"
            />
          </div>
          <div class="user-login-input-border">
            <i class="fas fa-unlock"></i>
            <input type="text" placeholder="CONFIRM PASSWORD" id="password2" />
          </div>
          <div class="user-login-input-border">
            <i class="fas fa-mobile"></i>
            <input
              type="text"
              placeholder="PHONE"
              id="phone"
              name="user__phone"
            />
          </div>
          <input
            class="user-login-button user-signup-button"
            type="submit"
            value="SIGN UP"
            onclick="checkInputs()"
            name="formSubmit"
          />
        </form>
        <p class="user-login-not-a-member user-signup-not-a-member">
          Already Have an Account ? <a href="./userLogin.php">Log in</a>
        </p>
      </div>
      <?php
    include_once "db.php";

    if(isset($_POST["formSubmit"])){
        $username=$_POST["user__name"];
        $useremail=$_POST["user__email"];
        $userpassword=$_POST["user__password"];
        $userphone=$_POST["user__phone"];

         $res = mysqli_query($db,"SELECT * FROM proje WHERE user__name='$username'");  
         $res1=mysqli_num_rows($res);
         if($res1==1){
             ?>
             <script>
                 window.onload=function(){
                     alert("unSuccesfull");
                 }
             </script>
             <?php
         }else{
           ?>
             <script>
                 window.onload=function(){
                     alert("Succesfull");
                 }
             </script>
             <?php
            $insert = mysqli_query($db,"INSERT INTO proje (user__name,user__email,user__password,user__phone) VALUES('$username','$useremail','$userpassword','$userphone')");
         }
  
    }


?>
    </div>
    <script>
      function checkInputs() {
        const username = document.querySelector("#username");
        const email = document.querySelector("#email");
        const password = document.querySelector("#password");
        const password2 = document.querySelector("#password2");
        const phone = document.querySelector("#phone");
        const error = document.querySelector(".login-error");
        let errorInfo;
        let re = /\S+@\S+\.\S+/;
        let phoneRe = /^[2-9]\d{2}[2-9]\d{2}\d{4}$/;

        if (username.value.length < 6 || username.value.length >= 16) {
          errorInfo = "username length must be between 6 and 16 ";
        } else if (!re.test(email.value)) {
          errorInfo = "email is not valid";
        } else if (password.value.length < 6 || password.value.length >= 16) {
          errorInfo = "password length must be between 6 and 16 ";
        } else if (!(password2.value == password.value)) {
          errorInfo = "passwors are not same ";
        } else if (!phoneRe.test(phone.value)) {
          errorInfo = "Phone is not valid";
        } else {
          window.location = "index.html";
        }
        error.innerHTML = "*" + errorInfo;
      }
    </script>
    
    
  </body>
  
</html>
