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
      <link rel='stylesheet' type='text/css' href='style.css'>
      

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
              <a class="nav-link" href="index.php">Home</a>
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
    <button type="button" class="btn text-light btn-dark user-button" onclick="myFunction()"><?php echo $_SESSION["user"]; ?></button>
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
      <main class="container">
        <h3 class="foods-page-h3">BLOG</h3>
        <form action="blogs.php" method="GET">
        <div class="blog-page-search-border container">
          <input name="blogName" type="text" placeholder="Search..." />
          <button name="searchBlog" type="submit" ><i class="fas fa-search"></i></button>
        </div>
        </form>
        <section class="blog container">
          <div class="blog-cards">
<?php
  if(isset($_GET["searchBlog"])){
      $blogName=$_GET["blogName"];
      $Sorgu=mysqli_query($db,"SELECT * FROM blogs WHERE blogs_title LIKE '%$blogName%'");
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
  }else{
    $Sorgu=mysqli_query($db,"SELECT * FROM blogs");
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
}
?>
          </div>


        </section>
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
