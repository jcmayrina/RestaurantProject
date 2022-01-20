<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Details</title>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./css/food-details.css" />
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
    <hr />
    <!-- DESSERT SECTION-->
    <a href="food-categories.html"><i class="bx bx bx-chevron-left"></i></a>
    <section class="dessert-img-info" alt="Sweet Taho">
      <div class="dessert-img">
        <img src="./images/taho.jpg" />
      </div>
      <div class="dessert-info">
        <h1>Sweet Taho</h1>
        <span class="ratings">Ratings:</span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="num-rate">5.0</span>
        <span class="made-by">Made by: @itssandracueto</span>
        <br />
        <p class="par1">
          Taho is a sweet Filipino dessert which consists of fresh soft tofu
          doused in arnibal syrup and sprinkled with plump sago pearls. Similar
          desserts can be found in numerous Asian countries, and most of them
          call for the usage of the softest tofu variety, known as silky tofu,
          which has a tender and creamy texture and an incredibly soft
          consistency.
        </p>
        <p class="par2">
          Shortly heated or steamed, it is covered in sweet arnibal syrup (made
          with melted brown sugar) and enriched with mild vanilla flavors.
          Usually, the dessert is topped with chewy sago pearls which are
          similar in appearance and texture to tapioca. Taho is usually sold by
          street vendors who sell this traditional delicacy in the early morning
          as a sweet, protein-packed breakfast.
        </p>
        <a href="#" class="view-tutorial">VIEW TUTORIAL</a>
      </div>
      <br />
    </section>
    <!-- RECIPE & INGREDIENTS -->
    <h1 class="recipe-ingred-header">RECIPES & INGREDIENTS</h1>
    <section class="recipe-ingred">
      <div class="ingredients">
        <p>
          1 package silken tofu or extra soft tofu <br /><br />
          <span>Tapioca Pearl Sago</span>
          <br />
          1/2 cup Sago
          <br />
          3 cups water
          <br /><br />
          <span>Arnibal/Brown Sugar Syrup</span>
          <br />
          1 cup brown sugar
          <br />
          1 cup water
        </p>
      </div>
      <div class="recipe">
        <h5>Procedure:</h5>
        <ol>
          <li>Cook sago by boiling water in a saucepan.</li>
          <li>Add sago. Stir to prevent from sticking.</li>
          <li>
            Cook until transparent. About 15 minutes or more depending on the
            brand or size of sago.
          </li>
          <li>Drain and rinse in cold water.</li>
          <li>Add some honey or agave to prevent from sticking.</li>
        </ol>
        <br />
        <h5>Prepare the syrup:</h5>
        <ol>
          <li>Boil water in sauce pan.</li>
          <li>Add brown sugar.</li>
          <li>Continue cooking until the sugar is completely dissolved.</li>
        </ol>
        <br />
        <h5>Prepare the taho:</h5>
        <ol>
          <li>Transfer the tofu in glass, cup or bowl.</li>
          <li>Microwave the extra soft tofu for 1 - 1 1/2 minutes</li>
          <li>Remove from the microwave.</li>
          <li>Add enough aribal to sweeten. Add sago and lightly stir</li>
          <li>Enjoy!</li>
        </ol>
      </div>
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
