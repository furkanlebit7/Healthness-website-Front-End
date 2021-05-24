<?php 
session_start();
include_once "db.php"
?>
<!DOCTYPE html>
<html lang="en">
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      

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
      </header>
      <!-- İşlem sonucu döndürme -->
<?php
if(isset($_GET["islem"])){
  if($_GET["islem"]=="noName"){?>
        <div class="mt-5 container alert alert-danger alert-dismissible fade show" role="alert">İşlem gerçekleştirilemedi
              <strong>İsim Alanı Boş Olamaz.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
<?php
  }
  if($_GET["islem"]=="noCVV"){?>
        <div class="mt-5 container alert alert-danger alert-dismissible fade show" role="alert">İşlem gerçekleştirilemedi
              <strong>Geçersiz CVV.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
<?php
  }
  if($_GET["islem"]=="noCard"){?>
        <div class="mt-5 container alert alert-danger alert-dismissible fade show" role="alert">İşlem gerçekleştirilemedi
              <strong>Geçersiz Kart Numarası</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
<?php
  }
  if($_GET["islem"]=="ok"){?>
        <div class="mt-5 container alert alert-success alert-dismissible fade show" role="alert">İşlem başarılı bir şekilde gerçekleştirildi işlem numaranız 
              <strong><?php echo rand(10000000, 99999999); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
<?php
  }
}
?>
      <main class="container payment-container">
<!-- Satın alınan ürün -->
      <?php
      if(isset($_GET["foodId"])){
        $foodId=$_GET["foodId"];
        $Sorgu=mysqli_query($db,"SELECT * FROM foods WHERE food_id='$foodId'");
        $ürün=mysqli_fetch_assoc($Sorgu);?>
        <div class="food-card mt-5">
            <div class="food-card-img">
              <img src="<?php echo $ürün["food_img"]; ?>" alt="Food" />
            </div>
            <div class="food-card-price"><span>$</span><?php echo $ürün["food_price"]; ?></div>
            <div class="food-card-info">
              <h5 class="food-card-name"><?php echo $ürün["food_name"]; ?></h5>
              <p class="food-card-explanation">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                in pariatur atque aliquid voluptatum eaque quasi vero velit
                suscipit. Est.
              </p>
            </div>
          </div>
        <?php
      } 
      ?>
      <!-- Progrmaı satın alınan diyetisyen -->
      <?php
      if(isset($_GET["dieticianId"])){
        $dieticianId=$_GET["dieticianId"];
        $Sorgu=mysqli_query($db,"SELECT * FROM dieticians WHERE dietician_id='$dieticianId'");
        $dietician=mysqli_fetch_assoc($Sorgu);?>
        <div class="dietician-card">
            <img src="<?php echo $dietician["dietician_img"] ?>" alt="" />
            <div class="dietician-card-informations">
              <ul class="dietician-card-information-social-media">
                <li>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"> <i class="fab fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
              </ul>
              <div class="dietician-card-information-others">
                <h5><?php echo $dietician["dietician_name"] ?></h5>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Debitis voluptates architecto vero ab rerum sed.
                </p>
              </div>
            </div>
          </div>
        <?php
      } 
      ?>

<!-- Kart kontrol formu -->
        <form class="payment-card" method="POST" action="operations.php">
          <div class="payment-card-input">
            <i class="fas fa-user-alt"></i>
            <input autocomplete="off" type="text" 
            name="paymentName" placeholder="Full Name" />
          </div>
          <div class="payment-card-input">
            <i class="fas fa-credit-card"></i>
            <input autocomplete="off" type="text" placeholder="Card Number" name="cardNumber"/>
          </div>
          <div class="payment-card-dates">
            <div>
              <label for="months">MM</label>
              <select name="months" id="months">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
            </div>
            <div>
              <label for="months">YY</label>
              <select name="years" id="years" placeholder="asf">
                <option value="2021">2031</option>
                <option value="2020">2030</option>
                <option value="2019">2029</option>
                <option value="2018">2028</option>
                <option value="2017">2027</option>
                <option value="2016">2026</option>
                <option value="2015">2025</option>
                <option value="2014">2024</option>
                <option value="2013">2023</option>
                <option value="2012">2022</option>
                <option value="2011">2021</option>
                <option value="2010">2020</option>
              </select>
            </div>
            
            <input type="hidden" name="dieticianId" value="<?php echo $_GET["dieticianId"];?>" >
            <input type="text" placeholder="CVV" name="cvv" />
          </div>
          <input type="submit" name="payment" class="payment-card-confirm" value="CONFIRM" />
        </form>
      </main>
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
                  type="text"
                  placeholder="Your Email"
                  class="footer-input-email"
                />
                <input type="submit" class="footer-input-button" />
              </form>
            </div>
          </div>
        </div>
      </footer>
      
 
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script>
       $(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 2000);
});
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
</html>
