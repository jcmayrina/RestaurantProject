<?php
session_start();
ob_start();

if(!isset($_SESSION)){
    session_start();
}

include_once("css/connections/connections.php");
$con = connection();

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password =$_POST['password'];
    $filename = 'A';

    $sql = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";
    $user = $con->query($sql) or die ($con->error);
    $row = $user->fetch_assoc();
    $total = $user->num_rows;

    if ($total > 0){
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['UserEmail'] = $row['email'];
        $_SESSION['UserPass'] = $row['password'];
        $_SESSION['UserID'] = $row['userID'];
        $_SESSION['UserImg'] = $row['profilepic'];
        header("Location: index.php");
    } 
    
}

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
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
    <!-- CSS -->
    <link rel="stylesheet" href="./css/login.css" />
  </head>

  <body>
    <div id="logincontainer">
        
        <div id="firstpart">
            <h2 id="hello"> HELLO! </h2>
            <br>
            
            <p class="p1">Create your account by entering your personal details</p>
            <br>
            <br><a href="register.php">
            <button id="signup">Sign Up</button></a> 
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
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
              <p id="copyrights">&copy; 2021 PHoodie All Rights Reserved.</p>
            
        </div>

        <div id="secondpart">
            <a href="index.php" class="linktitle"><h2 id="phoodie"> PHOODIE </h2></a>
            <p id="logintext">LOG IN</p>
            <img id="dummylogo" src="images/dummylogo.jpg">
            <br>
            <br>

            <form action="" method="post" class="form">
                <div class="forms">
                <i id="icon" class='bx bxs-user'></i>
                <input class="textbox <?php
                if(isset($_POST['login']))
                if ($total <= 0){
                  echo "errorinp";
                }
                ?>" type="text" name="username" id="username" placeholder="Username" required /><br>
                <br>
                <i id="icon" class='bx bxs-lock' ></i>
                <input class="textbox <?php
                if(isset($_POST['login']))
                if ($total <= 0){
                  echo "errorinp";
                }
                ?>" type="password" name="password" id="password" placeholder="Password" required /><br>
                </div>
            
            <br>
            <br>
            <br>
            
            <div class="buttondiv">
                <button name = "login" class="loginbutton">Login</button><br>
            </div>
            </form>
            <?php 
            if(isset($_POST['login']))
            if($total<=0){
      echo "<div class='error'><p>Incorrect username or password!</p></div>";
            };
            ?>
            </div>	
        </div>
    </div>
</body>
</html>