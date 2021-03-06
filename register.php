<?php
    include_once("css/connections/connections.php");

    connection();
    
    $con = connection();


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
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
    <link rel="stylesheet" href="css/register.css" />
  </head>

  <body>
    <div id="signincontainer">
        
        <div id="firstpart">
            <h2 id="hello"> WELCOME </h2>
            <br>
            
            <p class="p1">To keep connected to us please log in with your personal information </p>
            <br>
            <br>
            <a href="login.php">
            <button id="signup">Sign In</button></a>
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
                <a href="#phone"
                  ><i class="bx bx-phone bx-md" style="color: #fff"></i
                ></a>
              </div>
              <p id="copyrights">&copy; 2021 PHoodie All Rights Reserved.</p>
        </div>

        <div id="secondpart">
            <a href="index.php" class="linktitle"><h2 id="phoodie"> PHOODIE </h2></a>
            <p id="signintext">SIGN UP</p>
            <img id="dummylogo" src="images/dummylogo.jpg">
            <br>
            <?php 
            if(isset($_POST['submit'])){
              if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['re-enterpassword'])){
                
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $repassword = $_POST['re-enterpassword'];

        
                $checkUsername = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `user` WHERE `username` = '$username'"));
                $checkEmail = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `user` WHERE `email` = '$email'"));
              }
            };
            ?>
            <form action="" method="post" class="form">
                <div class="forms">
                <i id="icon" class='bx bxs-user'></i>
                <input class="textbox <?php
                if(isset($_POST['submit']))
                if ($checkUsername > 0){
                  echo "errorinp";
                }
                ?>" type="text" name="username" id="username" placeholder="Username" required /><br>
                <br>
                <i id="icon" class='bx bxs-envelope' ></i>
                <input class="textbox <?php
                if(isset($_POST['submit']))
                if ($checkEmail > 0){
                  echo "errorinp";
                }
                ?>" type="email" name="email" id="email" placeholder="Email" required /><br>
                <br>
                <i id="icon" class='bx bxs-lock' ></i>
                <input class="textbox <?php
                if(isset($_POST['submit']))
                if ($password!=$repassword){
                  echo "errorinp";
                }
                ?>" type="password" name="password" id="password" placeholder="Password" required /><br>
                <br>
                <i id="icon" class='bx bxs-lock' ></i>
                <input class="textbox <?php
                if(isset($_POST['submit']))
                if ($password!=$repassword){
                  echo "errorinp";
                }
                ?>" type="password" name="re-enterpassword" id="re-enterpassword" placeholder="Re-enter password" required /><br>
                </div>
            
            <br>
            
            <div class="buttondiv">
                <button type="submit" name="submit" class="signinbutton">Sign Up</button><br>
            </div>
            </form>
            <?php 
                    
            if(isset($_POST['submit'])){

                if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['re-enterpassword'])){

                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $repassword = $_POST['re-enterpassword'];

            
                    $checkUsername = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `user` WHERE `username` = '$username'"));
                    $checkEmail = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `user` WHERE `email` = '$email'"));

                    if($checkUsername > 0 || $checkEmail > 0){
                      //echo
                      if ($checkEmail == 1 && $checkUsername == 1){
                        echo "<div class='error'><p>Username and Email are already taken!</p></div>";
                        //"Username and Email are already takem";
                      } elseif ($checkUsername == 1 && $checkEmail == 0){
                        echo "<div class='error'><p>Username is already taken!</p></div>";
                        //"Username is already taken";
                      } else {
                        echo "<div class='error'><p>Email is already taken!</p></div>";
                        // "Email is already taken";
                      }
                    
                    }else{
                      if($password==$repassword){
                        $sql="INSERT INTO `user`(`userID`, `username`, `email`, `password`, `profilepic`) VALUES (NULL,'$username','$email','$password','A.png')";
                        $con->query($sql) or die ($con->error);
                    
                        echo header("Location: login.php");}
                        else{
                          echo "<div class='error'><p>Password mismatch!</p></div>";
                        }
                    }

                  

                }
            };
            ?>
            </div>	
        </div>
    </div>
</body>
</html>