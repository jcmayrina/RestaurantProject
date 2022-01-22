<?php 
session_start();
ob_start();

include_once("css/connections/connections.php");
$con = connection();

if(isset($_POST['submitnewtUser']))
{
    $id = (int) $_SESSION['UserID'];
    $username = $_POST['username'];
    $query = "UPDATE `user` SET `username`='$username' WHERE userID='$id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
      echo '<script> alert("DATA UPDATED"); </script>';

        //$_SESSION['status'] = "Data Updated Successfully";
        $sql = "SELECT * FROM `user` WHERE username = '$username'";
        $user = $con->query($sql) or die ($con->error);
        $row = $user->fetch_assoc();
        $total = $user->num_rows;

    if ($total > 0){
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['UserEmail'] = $row['email'];
        $_SESSION['UserPass'] = $row['password'];
        $_SESSION['UserID'] = $row['userID'];
        $_SESSION['UserImg'] = $row['profilepic'];
       // header("Location: index.php");
    } 
    }
    else
    {
      echo '<script> alert("DATA NOT UPDATED"); </script>';
       // $_SESSION['status'] = "Not Updated";
    }
}

if(isset($_POST['submitnewEmail']))
{
 
    $id = (int) $_SESSION['UserID'];
    $email = $_POST['email'];
    $query = "UPDATE `user` SET `email`='$email' WHERE userID='$id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
      echo '<script> alert("DATA UPDATED"); </script>';

        //$_SESSION['status'] = "Data Updated Successfully";
        $sql = "SELECT * FROM `user` WHERE email = '$email'";
        $user = $con->query($sql) or die ($con->error);
        $row = $user->fetch_assoc();
        $total = $user->num_rows;

    if ($total > 0){
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['UserEmail'] = $row['email'];
        $_SESSION['UserPass'] = $row['password'];
        $_SESSION['UserID'] = $row['userID'];
        $_SESSION['UserImg'] = $row['profilepic'];
       // header("Location: index.php");
    } 
    }
    else
    {
      echo '<script> alert("DATA NOT UPDATED"); </script>';
       // $_SESSION['status'] = "Not Updated";
       // header("Location: index.php");
    }

  }

  if(isset($_POST['submitnewPass']))
{
 
    $id = (int) $_SESSION['UserID'];
    $password = $_POST['password'];
    $query = "UPDATE `user` SET `password`='$password' WHERE userID='$id' ";

    
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
      echo '<script> alert("DATA UPDATED"); </script>';

        //$_SESSION['status'] = "Data Updated Successfully";
        $sql = "SELECT * FROM `user` WHERE password = '$password'";
        $user = $con->query($sql) or die ($con->error);
        $row = $user->fetch_assoc();
        $total = $user->num_rows;

    if ($total > 0){
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['UserEmail'] = $row['email'];
        $_SESSION['UserPass'] = $row['password'];
        $_SESSION['UserID'] = $row['userID'];
        $_SESSION['UserImg'] = $row['profilepic'];
       // header("Location: index.php");
    } 
    }
    else
    {
      echo '<script> alert("DATA NOT UPDATED"); </script>';
       // $_SESSION['status'] = "Not Updated";
       // header("Location: index.php");
    }

  }

  if(isset($_POST['uploadImage']))
{
 
    $id = (int) $_SESSION['UserID'];
    $image = $_FILES['fileUpload']['name'];
    $query = "UPDATE `user` SET `profilepic`='$image' WHERE userID='$id' ";
    
    $upload_folder = "images/";
    $file_location = $upload_folder . basename($_FILES["fileUpload"]["name"]);
    if(isset($_FILES['fileUpload'])){ 
      move_uploaded_file($_FILES['fileUpload']['tmp_name'], $file_location);
   } 
    
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
      echo '<script> alert("DATA UPDATED"); </script>';

        //$_SESSION['status'] = "Data Updated Successfully";
        $sql = "SELECT * FROM `user` WHERE profilepic = '$image'";
        $user = $con->query($sql) or die ($con->error);
        $row = $user->fetch_assoc();
        $total = $user->num_rows;

    if ($total > 0){
        $_SESSION['UserLogin'] = $row['username'];
        $_SESSION['UserEmail'] = $row['email'];
        $_SESSION['UserPass'] = $row['password'];
        $_SESSION['UserID'] = $row['userID'];
        $_SESSION['UserImg'] = $row['profilepic'];
       // header("Location: index.php");
    } 
    }
    else
    {
      echo '<script> alert("DATA NOT UPDATED"); </script>';
       // $_SESSION['status'] = "Not Updated";
       // header("Location: index.php");
    }

  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Noto+Sans+Mono:wght@100;200;300;400;500;600;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"/>
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
    <link rel="stylesheet" href="./css/my_posts.css" />
  </head>

  <body>
      <?php 
      include_once("nav-user.php");
      ?>
    <div class="container-head">
      <div class="header-content">
        <img class="icon" src="<?php echo "/images/".$_SESSION['UserImg'];?>" alt="">
        <h1 id="username">@<?php echo $_SESSION['UserLogin'];?></h1>
      </div>
    </div>
  
  

    
    <section>
    <div class="user_nav">
      <div id="myDiv" class="user_nav_butt">
        <button class="btn active">My Posts</button>
        <button class="btn">My Favorites</button>
        <button class="btn" >My Account Details</button>
      </div>
    </div>
    </section>
    
    <!-- Ito yung design kapag walang post. tanggalin mo nalang 
        para makita muee. Same with favorites. Lagay mo nalang 
        "You don't have any favorites yet."
    <section style="margin-top: 50px;">
    <div id="MyPosts" class="container">
      <h1>You don't have any posts yet.</h1>
    </div>
    </section>-->

    <section  style="margin-top: 50px;">
      <div id="MyPosts" class="container">
        <div class="content-container">
          <img id="image" src="/images/A.png" alt="">
          <div class="content">
            <h1 id="date">January 17, 2020</h1>
            <h1 id="food_title">CHICKEN SPICY ADOBO</h1>
            <p id="food_content">Chicken Adobo is a Filipino dish made by braising chicken legs 
             (thighs and/or drumsticks) in a sauce made up of vinegar, soy sauce, garlic, and black pepper. It’s tangy, salty, garlicy, slightly sweet, and spicy. The chicken is slowly simmered in the sauce making it flavorful and incredibly tender.</p> 
          </div>
          <div class="settings_dropdown">
            <i id="setIcon" class="fas fa-ellipsis-v"><a href="#"></a></i>
            <div id="setDropdown"class="settings_dropdown_content">
              <a href="#">Edit</a>
              <a href="#">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section  style="margin-top: 50px;">
      <div id="MyFaves" class="container">
        <div class="content-container">
          <img id="image" src="/images/F1.png" alt="">
          <div class="content">
            <h1 id="date">January 17, 2020</h1>
            <h1 id="food_title">CHICKEN SPICY ADOBO</h1>
            <p id="food_content">Chicken Adobo is a Filipino dish made by braising chicken legs 
             (thighs and/or drumsticks) in a sauce made up of vinegar, soy sauce, garlic, and black pepper. It’s tangy, salty, garlicy, slightly sweet, and spicy. The chicken is slowly simmered in the sauce making it flavorful and incredibly tender.</p> 
          </div>
          <div class="settings_dropdown">
            <i id="setIcon" class="fas fa-heart" style="color: #e09721;"><a href="#"></a></i>
          </div>
        </div>
      </div>
    </section>

    <section  class="account-container">
      <div id="MyAcc" class="prof_container" >
          <div class="profile_section">
              <div class="img-section">
                <img src="<?php echo "images/".$_SESSION['UserImg'];?>">
                <form method="post" enctype="multipart/form-data">
                <input type="file" name="fileUpload" id="fileImg"  >
                <span>
                <button name="uploadImage"><i class='bx bxs-image-add'></i></button>                                
                </span>
                </form>
              </div>
            

            <div class="input-section">
              <table class="input-content">
                <tr>
                  <form method="post">
                   <td class="col-1"><label>Username:</label></td>
                   <td class="col-2"><input class="input-textbox" type="text" name="username" id="username" value="<?php echo $_SESSION['UserLogin'];?>"  /></td>
                   <td class="col-3"><button name="submitnewtUser"><i class='bx bxs-edit-alt edit_username'></i></td>
                  </form>
                </tr>
               
                <tr>
                  <form method="post">
                    <td class="col-1"><label>Email:</label></td>
                    <td class="col-2"><input class="input-textbox" type="email" name="email" id="email" value="<?php echo $_SESSION['UserEmail']; ?>"  /></td>
                    <td class="col-3"><button name="submitnewEmail"><i class='bx bxs-edit-alt edit_email'></i></button></td>
                  </form>
                </tr>

                <tr>
                  <form method="post">
                  <td class="col-1"><label>Password:</label></td>
                  <td class="col-2"><input class="input-textbox" type="text" name="password" id="password" value="<?php echo $_SESSION['UserPass'];?>" /></td>
                  <td class="col-3"><button name="submitnewPass"><i class='bx bxs-edit-alt edit_pass'></i></td>
                  </form>
                </tr>
              </table>
            </div>

          </div>
      </div>
    </section>

    

    
</body>
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
  // Add active class to the current button (highlight it)
  var header = document.getElementById("myDiv");
      var btns = header.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
      }

      var settingsdropdown = document.getElementById('setDropdown');
      var setIcon = document.getElementById('setIcon'); 
      setIcon.onclick = () => {
        settingsdropdown.style.display = 'block';
      }
      
      window.onclick = (event) => {
        if(!event.target.matches('#setIcon')){
          settingsdropdown.style.display = 'none';
        }
      }
    
      $('.btn').click(function() {
            $('#MyPosts, #MyFaves, #MyAcc').hide();

            if ($(this).text() == "My Posts"){
                $('#MyPosts').show();
            }
            
            else if ($(this).text() == "My Favorites"){
                $('#MyFaves').show();
            }

            else if ($(this).text() == "My Account Details"){
                $('#MyAcc').show();
            }

        })
  </script>
</html>
