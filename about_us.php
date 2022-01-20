<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
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
   <link rel="stylesheet" href="./css/about_us.css" />
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
    <div class="cover"></div>

    <div class = "container">
      <div class = "description">
        <p class = "content"> <span style = "font-size: 60px;">PHoodie</span>  is a Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class = "content"> PHoodie  is a Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>

    <br><br><br><br><br>
    <hr width = 70%>
    <br><br>

    <h1 style="background-color:  #e09721; padding: 10px; color: white;"> The Team </h1>

    <br>
    <div class="team-container">
      <div class="team-content-container">
        <img src = "./images/atienza.png"/> <h3 style="font-size: 20px;"> Atienza </h3> <p class = roles> Role </p></td>
      </div>
      <div class="team-content-container">
        <img src = "./images/cueto.png"/> <h3 style="font-size: 20px;"> Cueto </h3> <p class = roles> Role </p></td>
      </div>  
      <div class="team-content-container">
        <img src = "./images/gamayon.png"/> <h3 style="font-size: 20px;"> Gamayon </h3> <p class = roles> Role </p></td>
      </div>
      <div class="team-content-container">
        <img src = "./images/mayrina.png"/> <h3 style="font-size: 20px;"> Mayrina </h3> <p class = roles> Role </p></td>
      </div>
      <div class="team-content-container">
        <img src = "./images/sitjar.png"/> <h3 style="font-size: 20px;"> Quintans </h3> <p class = roles> Role </p> </td>
      </div>
      <div class="team-content-container">
        <img src = "./images/vedasto.png"/> <h3 style="font-size: 20px;"> Sitjar </h3> <p class = roles> Role </p></td>
      </div>
    </div>
    

    <footer>
      <div class="reachus">
                <p class="title"> <i class='bx bxs-map bx-md' style="color: white;"></i><b>REACH US</b> </p>
                <br>
                      
                <p class="instruction">  Please use the contact form on the right side if you have any questions or requests, concerning our website. We will respond to your message within 24 hours.</p>
                <p class="instruction">You may visit us at:</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2730.2893969058982!2d120.98378100029724!3d14.58697559741302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca21ac302015%3A0x92dcca0f915010d9!2sTechnological%20University%20of%20the%20Philippines%20-%20Manila!5e0!3m2!1sen!2sph!4v1637489703395!5m2!1sen!2sph" 
                 width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <p class="instruction" style="margin-top: 20px;">Follow us for more informations:</p>

                <a href="#fb"><i class='bx bxl-facebook-circle' style='color:#e09721;' ></i></a>
                <a href="#insta" ><i class='bx bxl-instagram-alt' style='color:#e09721;' ></i></a>
                <a href="#pinterest"><i class='bx bxl-pinterest' style='color:#e09721;' ></i></a>
                <a href="#telephone"><i class='bx bxs-phone' style='color:#e09721;' ></i></a>

                <br><br>
                <p class="credits">&copy; 2021 PHoodie All Rights Reserved.</p>
                   
          </div>

          <div class="emailus">
               <p class="title" style="margin-left: 70px; margin-top: 30px;">&nbsp;<i class="bx bxs-envelope-open bx-md" style="color: white;" ></i></i>&nbsp;&nbsp;<b>EMAIL US</b></p>
               <label>Name:</label><br>
               <input type="text" class="input" placeholder=" " required /><br>
               <label>Email:</label><br>
               <input type="text" class="input" placeholder=" " required /><br>
               <label>Message:</label><br>
               <input type="text" class = "message" placeholder=" " required style="height: 200px;"/><br>

               <br>
               <button type="submit">Send</button>
            </div>
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
