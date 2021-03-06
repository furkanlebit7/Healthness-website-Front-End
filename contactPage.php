<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />

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
    <header>
      <nav class="container">
        <a href="./index.php">
          <img class="logo-img" src="./images/logo.png" alt="HealthNess" />
        </a>
        <ul class="nav-items">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./blogs.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./dieticians.php">Dieticians</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./foods.php">Foods</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./contactPage.php">Contact</a>
          </li>
        </ul>
        <?php
  if(isset($_SESSION["user"])){?>
    <button type="button" class="btn text-light btn-dark user-button" onclick="myFunction()"><?php echo $_SESSION["user"] ?></button>
    <?php
  }else{?>
<a class="logo-button" href="./userLogin.php">
          Log in
          <i class="fas fa-sign-in-alt"></i>
        </a>    
<?php
  }    
?>
      </nav>
      <div class="contact-page container">
        <h3>GET IN TOUCH</h3>
        <div class="contact-page-informations">
          <div class="contact-page-information-info">
            <i class="fas fa-phone-alt fa-lg"></i>
            <p>+90 553 224 20 55</p>
          </div>
          <div class="contact-page-information-info">
            <i class="fas fa-envelope fa-lg"></i>
            <p>e-healthness@gmail.com</p>
          </div>
          <div class="contact-page-information-info">
            <i class="fas fa-map-marker-alt fa-lg"></i>
            <p>2215 John Daniel Drive Clark, MO 65243</p>
          </div>
        </div>
        <i class="fas fa-chevron-down"></i>
        <p class="error-contact"></p>
        <form id="contact-page-form">
          <div class="contact-page-input-left">
            <input
              type="text"
              name="fullName"
              placeholder="Full Name"
              class="contact-name"
            />
            <input
              type="text"
              name="email"
              placeholder="E-mail"
              class="contact-email"
            />
            <input
              type="text"
              name="phone"
              placeholder="Phone"
              class="contact-phone"
            />
          </div>
          <div class="contact-page-input-right">
            <textarea
              name="message"
              form="contact-page-form"
              placeholder="Message..."
              class="contact-message"
            ></textarea>
          </div>
          <input
            class="contact-page-input-button"
            type="button"
            value="SUBMIT"
            name="sendContact"
            onclick="checkContact()"
          />
        </form>
      </div>
    </header>
    <footer>
      <div class="up-footer">
        <div class="left-side-footer side-footer">
          <div class="left-side-footer-card">
            <h3>Iconic</h3>
            <p>A globally recognized brand with an iconic sign.</p>
          </div>
          <div class="left-side-footer-card">
            <h3>Experience</h3>
            <p>Over 25 years of brand heritage and expertise.</p>
          </div>
        </div>
        <img src="./images/logo.png" alt="HealthNess" />
        <div class="right-side-footer side-footer">
          <div class="left-side-footer-card">
            <h3>Food</h3>
            <p>
              It is our passion and it is at the center of everything we do.
            </p>
          </div>
          <div class="left-side-footer-card">
            <h3>Global</h3>
            <p>
              A truly international brand with an established distribution
              network.
            </p>
          </div>
        </div>
      </div>
      <div class="down-footer">
        <div class="location footer-block">
          <h3>LOCATION</h3>
          <p>2215 John Daniel Drive<br />Clark, MO 65243</p>
        </div>
        <div class="social footer-block">
          <h3>SOCIAL</h3>
          <div class="footer-socials">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="keep-in-touch footer-block">
          <h3>KEEP IN TOUCH</h3>
          <div class="keep-form-part">
            <p>
              Yes, I want to receive the newsletter and information from
              MasterChef by e-mail.
            </p>
            <form class="keep-in-touch-form">
              <input
                type="button"
                placeholder="Your Email"
                class="footer-input-email"
              />
              <input type="submit" class="footer-input-button" />
            </form>
          </div>
        </div>
      </div>
    </footer>
    <script>
      function checkContact() {
        const name = document.querySelector(".contact-name");
        const email = document.querySelector(".contact-email");
        const phone = document.querySelector(".contact-phone");
        const message = document.querySelector(".contact-message");
        const error = document.querySelector(".error-contact");

        let errorInfo;
        let re = /\S+@\S+\.\S+/;
        let phoneRe = /^[2-9]\d{2}[2-9]\d{2}\d{4}$/;

        if (name.value == "") {
          errorInfo = "Please enter the Full Name ";
        } else if (!re.test(email.value)) {
          errorInfo = "email is not valid";
        } else if (!phoneRe.test(phone.value)) {
          errorInfo = "Phone is not valid";
        } else if (message.value == "") {
          errorInfo = "Please enter the message";
        } else {
          errorInfo= "Mesaj??n??z G??nderildi";
        }
        error.innerHTML = "*" + errorInfo;
          name.value="";
          email.value="";
          phone.value="";
          message.value="";
      }
    </script>
     <script>
          function myFunction() {
            if (confirm("<?php echo $_SESSION["user"]; ?> Are you sure to Log out!")) {
              window.location.replace("userLogin.php");
            }
          }
      </script>
  </body>
</html>
