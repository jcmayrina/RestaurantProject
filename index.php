<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Andada+Pro:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Noto+Sans+Mono:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!-- Javascript -->
    <script src="./js/active_link.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/user_accountDetails.css" />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <?php 
    session_start();
    ob_start();
  if(!isset($_SESSION['UserLogin'])){
    include("nav-nuser.php");
  }
  else{
    include("nav-user.php");}
    ?>
    <section class="carousel-img">
      <div
        id="FoodCarousel"
        class="carousel slide"
        data-ride="carousel"
        data-interval="3500"
        data-pause="false"
      >
        <ol class="carousel-indicators">
          <li data-target="#FoodCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#FoodCarousel" data-slide-to="1"></li>
          <li data-target="#FoodCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="d-block w-100"
              src="images/salad.jpg"
              alt="First slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>
                Photo by
                <a
                  href="https://unsplash.com/@ellaolsson?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                  >Ella Olsson</a
                >
                on
                <a
                  href="https://unsplash.com/s/photos/cooking?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                  >Unsplash</a
                >
              </h5>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="images/beef.jpg"
              alt="Second slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>
                Photo by
                <a
                  href="https://unsplash.com/@lvnatikk?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                  >Lily Banse</a
                >
                on
                <a
                  href="https://unsplash.com/?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                  >Unsplash</a
                >
              </h5>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="images/condiments.jpg"
              alt="Third slide"
            />
            <div class="carousel-caption d-none d-md-block">
              <h5>
                Photo by
                <a
                  href="https://unsplash.com/@calumlewis?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                  >Calum Lewis</a
                >
                on
                <a
                  href="https://unsplash.com/s/photos/cooking?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText"
                  >Unsplash</a
                >
              </h5>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#FoodCarousel"
          role="button"
          data-slide="prev"
        >
          <i class="bx bx-chevron-left"></i>
        </a>
        <a
          class="carousel-control-next"
          href="#FoodCarousel"
          role="button"
          data-slide="next"
        >
          <i class="bx bx-chevron-right"></i>
        </a>
      </div>
    </section>
    <section class="popular">
      <h1 class="header">POPULAR FILIPINO DISH</h1>
      <div class="card-wrapper">
        <div class="cards">
          <img src="images/sinigang.jpg" alt="" />
          <p>
            Photo by
            <a
              href="https://www.yummy.ph/author/roselle-miranda?ref=article__author"
              >Roselle Miranda</a
            >
            on
            <a
              href="https://www.yummy.ph/lessons/cooking/different-sinigang-recipes-a00249-20190706-lfrm"
              >Yummy.ph</a
            >
          </p>
          <div class="overlay">
            <div class="title">
              <h1>Sinigang</h1>
            </div>
            <div class="content">
              <h4>
                <i class="bx bxs-quote-alt-left"></i> Lorem ipsum dolor sit
                amet, consectetur adipisicing elit. Non laborum soluta, maiores
                voluptates earum laboriosam minima rem sequi aliquam distinctio
                placeat, exercitationem natus reiciendis perspiciatis architecto
                id, labore numquam eligendi.
                <i class="bx bxs-quote-alt-right"></i>
              </h4>
            </div>
          </div>
        </div>
        <div class="cards">
          <img src="images/kare-kare.jpg" alt="" />
          <p>
            Photo by
            <a href="https://www.unileverfoodsolutions.com.ph/">UNF</a>
            on
            <a
              href="https://www.unileverfoodsolutions.com.ph/recipe/kare-kare-R0082351.html"
              >UnileverFoodSolutions</a
            >
          </p>
          <div class="overlay">
            <div class="title">
              <h1>Kare Kare</h1>
            </div>
            <div class="content">
              <h4>
                <i class="bx bxs-quote-alt-left"></i> Lorem ipsum dolor sit
                amet, consectetur adipisicing elit. Non laborum soluta, maiores
                voluptates earum laboriosam minima rem sequi aliquam distinctio
                placeat, exercitationem natus reiciendis perspiciatis architecto
                id, labore numquam eligendi.
                <i class="bx bxs-quote-alt-right"></i>
              </h4>
            </div>
          </div>
        </div>
        <div class="cards">
          <img src="images/tinola.jpg" alt="" />
          <p>
            Photo by
            <a href="https://www.angsarap.net/author/rsmacaalay/">Raymund</a>
            on
            <a href="https://www.angsarap.net/2014/07/11/chicken-tinola/"
              >Ang Sarap</a
            >
          </p>
          <div class="overlay">
            <div class="title">
              <h1>Tinola</h1>
            </div>
            <div class="content">
              <h4>
                <i class="bx bxs-quote-alt-left"></i> Lorem ipsum dolor sit
                amet, consectetur adipisicing elit. Non laborum soluta, maiores
                voluptates earum laboriosam minima rem sequi aliquam distinctio
                placeat, exercitationem natus reiciendis perspiciatis architecto
                id, labore numquam eligendi.
                <i class="bx bxs-quote-alt-right"></i>
              </h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="latest">
      <h1 class="header">LATEST POST</h1>
      <?php 
      include_once("css/connections/connections.php");
      $con = connection();

      $rec = "SELECT * FROM `recipe` ORDER BY recipeID DESC LIMIT 5;";
      $user = $con->query($rec) or die ($con->error);
      while($recipe = $user->fetch_assoc()){
      ?>
      <div class="post-wrapper">
        <div class="left">
          <img src="<?php echo "images/".$recipe['image']?>" alt="" />
        </div>
        <div class="right">
          <div class="date">
            <?php echo $recipe['upload_date'];?></div>
          <div class="post-title"><?php echo $recipe['title']?></div>
          <div class="post-cont">
          <?php echo $recipe['description']?>
          </div>
          <div class="post-link">
            <a href="#viewmore">VIEW MORE</a>
          </div>
        </div>
      </div>
      <?php 
      }
      ?>
    </section>
    <footer>
      <div class="soc-link">
        <a href="#fb"
          ><i class="bx bxl-facebook-circle bx-md" style="color: #fff"></i
        ></a>
        <a href="#insta"
          ><i class="bx bxl-instagram-alt bx-md" style="color: #fff"></i
        ></a>
        <a href="#pinterest"
          ><i class="bx bxl-pinterest bx-md" style="color: #fff"></i
        ></a>
      </div>
      <p>&copy; 2021 PHoodie All Rights Reserved.</p>
    </footer>
    <!-- Javascript -->
<script>
  var dropdown = document.getElementById('mydropdown');
  var avatar = document.getElementById('avatar'); 
  avatar.onclick = () => {
    dropdown.style.display = 'block';
  }
  
  window.onclick = (event) => {
    if(!event.target.matches('#avatar')){
      dropdown.style.display = 'none';
    }
  }
  </script>
  </body>
</html>