<?php 
  session_start();
include_once "db.php"
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">

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
    <header class="header">
      <nav class="container scNav">
          <a href="#">
        <img class="logo-img" src="./images/logo.png" alt="HealthNess" />
        </a>
        <ul class="nav-items">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="./blogs.php">Blog</a></li>
          <li class="nav-item"><a class="nav-link" href="./dieticians.php">Dieticians</a></li>
          <li class="nav-item"><a class="nav-link" href="./foods.php">Foods</a></li>
          <li class="nav-item"><a class="nav-link" href="./contactPage.php">Contact</a></li>
        </ul>
<?php
  if(isset($_SESSION["user"])){?>
    <button type="submit" class="btn text-light btn-dark user-button" onclick="myFunction()"><?php echo $_SESSION["user"] ?></button>
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
      <div class="delivery">DELIVERY</div>
      <div class="main-all">
        <div class="main-description">
            <div class="main-text">
                <h6>WELCOME TO OUR </h6>
                <h1>Healthy Food <br> Collection !</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  Quisquam <br> minima veritatis natus fuga repudiandae in! <br> Accusantium totam!</p>
                <a href="./foods.php">SHOP NOW</a>
            </div>
        <img class="main-Minitabak" src="./images/mainMiniTabak.png" alt="">
        </div>
        <img  class="main-tabak" src="./images/mainTabak.jpg" alt="">
      </div>
      

      </div>
    </header>
    <main>
      <section class="deal-of-the-week">
        <div class="darkbg">
          <div class="image-part">
          <h3>HURRY UP !</h3>
          <h2>DEAL OF THE WEEK</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
        
        <div class="weekly-menu container">
          <ul class="date">
             <li class="weekly-date-day">6 <br>Days </li>
             <li class="weekly-date-hour">4 <br>Hours </li>
             <li class="weekly-date-minute">38 <br>Minute </li>
            <li class="weekly-date-second">52 <br>Second </li>
          </ul>
          <div class="weekly-meals">
            <div class="weekly-meal-card">
              <img src="./images/weeklysalad.png" alt="">
              <p>Green Salad</p>
            </div>
            <div class="weekly-meal-card">
              <img src="./images/weeklyhamburger.png" alt="">
              <p>Beef Hamburger</p>
            </div>
            <div class="weekly-meal-card">
              <img src="./images/weeklyfruits.png" alt="">
              <p>Roast Paprika</p>
            </div>
            <div class="weekly-meal-card">
              <img src="./images/weeklymakaroni.png" alt="">
              <p>Fried Noodle</p>
            </div>
          </div>
        </div>
      </section>
      <section class="about container" id="about">
        <img src="./images/about-image.jpg" alt="">
        <div class="about-all">
          <h4>ABOUT US</h4>
          <h2>Why we are the best</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis <br> consequatur veniam est sit br error atque voluptas et itaque ipsum. Magnam.</p>
          <div class="about-items">
            <div class="about-item">
               <i class="fas fa-leaf"></i>
                <div class="about-item-title">
                <h3>Fresh</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa,  rerum quaerat?</p>
                </div>           
            </div>
            <div class="about-item">
                  <i class="fas fa-heart"></i>
                  <div class="about-item-title">
                   <h3>Healthy</h3>
                   <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa,   rerum quaerat?</p>
               </div>           
              </div>
             <div class="about-item">
            <i class="fas fa-thumbs-up"></i>
            <div class="about-item-title">
              <h3>Good Quality</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa,  rerum quaerat?</p>
            </div>           
              </div>
          </div>
        </div>
      </section>
      <section class="blog container" id="blog">
        <h1>Blog</h1>
        <div class="blog-cards">
                      <?php
      $Sorgu=mysqli_query($db,"SELECT * FROM blogs LIMIT 4");
      while($blogs=mysqli_fetch_assoc($Sorgu)){?>
        <a href="./blogDetails.php?blogId=<?php echo$blogs["blogs_id"] ?>" class="blog-card blog-card-shadow">
              <img src="<?php echo $blogs["blog_img"] ?>"  alt="" />
              <div class="blog-details">
                <h2><?php echo $blogs["blogs_title"] ?></h2>
                <p><?php echo substr($blogs["blogs_main"],0,120)."..." ?> </p>
                <div class="blog-date">
                  <i class="far fa-calendar-alt"></i>
                  <p><?php echo $blogs["blogs_date"] ?></p>
                </div>
              </div>
            </a>
<?php
      }
  
?>
        </div>
        <a class="view-more" href="./blogs.php">
          <p>View More</p>
        </a>
      </section>
      <section class="dieticians" id="dieticians">
        <h1>OUR PERSONAL <span>DIETITIANS</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        <div class="dietician-cards">
<?php
      $Sorgu=mysqli_query($db,"SELECT * FROM dieticians LIMIT 4");
      while($dieticians=mysqli_fetch_assoc($Sorgu)){?>
        <div class="dieticians-card">
            <img src="<?php echo $dieticians["dietician_img"]?>" alt="">
            <h3><?php echo $dieticians["dietician_name"]?></h3>
            <p>Personal Dietitian</p>
            <div class="dietitian-socials">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"> <i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
<?php
      }
  
?>
        </div>


    
          
        <a class="view-more" href="./dieticians.php">
          <p>View More</p>
        </a>
      </section>
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
          <img src="./images/logo.png" alt="HealthNess">
          <div class="right-side-footer side-footer">
            <div class="left-side-footer-card">
              <h3>Food</h3>
              <p>It is our passion and it is at the center of everything we do.</p>
            </div>
            <div class="left-side-footer-card">
              <h3>Global</h3>
              <p>A truly international brand with an established distribution network.</p>
            </div>
          </div>
        </div>
        <div class="down-footer">
          <div class="location footer-block">
            <h3>LOCATION</h3>
            <p>2215 John Daniel Drive<br>Clark, MO 65243</p>
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
              <p>Yes, I want to receive the newsletter and information from MasterChef by e-mail.</p>
            <form class="keep-in-touch-form">
              <input type="text" placeholder="Your Email" class="footer-input-email">
              <input type="submit" class="footer-input-button">
            </form>
          </div>
            
          </div>
        </div>
      </footer>
    </main>
    <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="./scrolReveal.js"></script>
        <script src="./script.js"></script>
        <script>
          function myFunction() {
            if (confirm("<?php echo $_SESSION["user"]; ?> Are you sure to Log out!")) {
              window.location.replace("userLogin.php");
            }
          }
      </script>
  </body>
</html>
