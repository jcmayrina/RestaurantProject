<?php
    include_once("css/connections/connections.php");

    connection();
    
    $con = connection();


?>
<nav class="top-nav">
      <div class="logo">
        <h1 class="header">PHoodie</h1>
      </div>
      <div class="search-cont">
        <form>
          <input type="text" name="search" placeholder="Search..." />
          <button type="submit" class="subbut">
            <i class="bx bx-search"></i>
          </button>
        </form>
      </div>
      <div class="navbutt">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="index.php">HOME</a>
            <div class="dropdown">
            <a href="#menu">MENU</a>
              <div class="dropdown-content">
                <a href="food-categories.php">Main Dish</a>
                <a href="food-categories.php">Side Dish</a>
                <a href="food-categories.php">Street Foods/Exotic</a>
                <a href="food-categories.php">Dessert</a>
                <a href="food-categories.php">Pasta/Noodles</a>
                <a href="food-categories.php">Soup</a>
              </div>
            </div>
            <a href="about_us.php">ABOUT US</a>
          </li>
        </ul>
      </div>
    
      <div class="icon-container">
        <button
              type="button"
              class="btnModal"
              data-toggle="modal"
              data-target="#modalfav"
            ><i class='bx bx-bookmark-heart bx-md' style='color:#e09721' ></i>
          </button>
        <button
              type="button"
              class="btnModal"
              data-toggle="modal"
              data-target="#modalupl"
            >
            <i class='bx bx-upload bx-md' style='color:#e09721; margin:0px 10px 0px 10px;' ></i>
            </button>
      </div>
      <div
              class="modal fade"
              id="modalupl"
              tabindex="-1"
              role="dialog"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                     
                  <div class="modal-header">
                    <button
                      type="button"
                      class="close"
                      data-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="" method="post" class="form">
                  <fieldset class="modal-body text-center">
                    <fieldset class="topupload">
                      
                      <fieldset
                        class="imageupload"
                        style="border: 1px solid black; padding: 15px"
                      > 
                        <label for="imageupl"
                          ><i
                            class="bx bx-image-add"
                            style="
                              color: #e09721;
                              cursor: pointer;
                              font-size: 96px;
                              border: 1px solid #e09721;
                              border-radius: 50%;
                              padding: 20px;
                            "
                          ></i
                        ></label>
                        <input
                          type="file"
                          name="imageupl"
                          id="imageupl"
                          style="display: none; visibility: none"
                          onchange="getImage(this.value);"
                        />

                        <fieldset id="display-image"></fieldset>
                        <p>Upload image</p>
                      </fieldset>
                      <fieldset class="mid">
                        <fieldset class="middleupload">
                          <label for="title">Title</label>
                          <input type="text" name="title" id="title" />
                        </fieldset>
                        <fieldset class="middleupload">
                          <label for="videolink">Video link</label>
                          <input type="text" name="videolink" id="videolink" />
                        </fieldset>
                      </fieldset>
                      <fieldset class="categoryupload">
                        <p>Category</p>
                        <ol>
                          <li>
                            <input
                              type="radio"
                              name="categ"
                              id="maindish"
                              value="Main Dish"
                            />
                            <label for="maindish">Main Dish</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              name="categ"
                              id="sidedish"
                              value="Side Dish"
                            />
                            <label for="sidedish">Side Dish</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              name="categ"
                              id="sfood"
                              value="Street Food"
                            />
                            <label for="sfood">Street Food/Exotic</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              name="categ"
                              id="dessert"
                              value="Dessert"
                            />
                            <label for="dessert">Dessert</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              name="categ"
                              id="pasta"
                              value="Pasta"
                            />
                            <label for="pasta">Pasta</label>
                          </li>
                          <li>
                            <input
                              type="radio"
                              name="categ"
                              id="soup"
                              value="Soup"
                            />
                            <label for="soup">Soup</label>
                          </li>
                        </ol>
                      </fieldset>
                    </fieldset>
                    <fieldset class="bot">
                      <fieldset class="botupload">
                        <label for="description">Description</label>
                        <textarea
                          name="description"
                          id="description"
                          cols="30"
                          rows="10"
                        ></textarea>
                      </fieldset>
                      <fieldset class="botupload">
                        <label for="recipe">Recipe</label>
                        <textarea
                          name="recipe"
                          id="recipe"
                          cols="30"
                          rows="10"
                        ></textarea>
                      </fieldset>
                      <fieldset class="botupload">
                        <label for="ingredients">Ingredients</label>
                        <textarea
                          name="ingredients"
                          id="ingredients"
                          cols="30"
                          rows="10"
                        ></textarea>
                      </fieldset>
                    </fieldset>
                  </fieldset>
                  <fieldset class="modal-footer justify-content-center">
                    <button type="submit" name="submit" class="btnModalupl">
                      Upload
                    </button>
                  </fieldset>
                  </form>
                  <?php 
                            
                    if(isset($_POST['submit'])){

                        if(!empty($_POST['title']) && !empty($_POST['videolink']) && !empty($_POST['categ']) && !empty($_POST['description']) && !empty($_POST['recipe']) && !empty($_POST['ingredients']) && !empty($_POST['imageupl'])){

                            $title = $_POST['title'];
                            $videolink = $_POST['videolink'];
                            $categ = $_POST['categ'];
                            $description = $_POST['description'];
                            $recipe = $_POST['recipe'];
                            $ingredients = $_POST['ingredients'];
                            $imageupl = $_POST['imageupl'];
                            $userID = $_SESSION['UserID'];

                            $sql="INSERT INTO `recipe`(`title`, `recipeID`, `videolink`, `category`, `description`, `procedures`, `ingredients`, `upload_date`, `image`, `userID`) VALUES ('$title',NULL,'$videolink','$categ','$description','$recipe','$ingredients',NOW(),'$imageupl','$userID')";
                            $con->query($sql) or die ($con->error);
                             echo "success";

                        }
                    };
                    ?>
                </div>
              </div>
            </div>
      
        <div class="dropdown-user">
          <img id="avatar" class="user_icon" src="<?php echo "./images/".$_SESSION['UserImg']?>" alt="">
            <div id="mydropdown" class="dropdown-user-content">
              <div class="user">
                <img class="user_icon" src="<?php echo "./images/".$_SESSION['UserImg']?>" alt="">
                  <div class="username-div">
                    <p id="username" style="font-size: 15px;">@<?php
                    echo $_SESSION['UserLogin'];?></a>
                    <a href="user_accountDetails.php" style="font-size: 10px; opacity: 0.5;">See your profile</a>
                  </div>
              </div>
              <a href="logout.php" style="padding: 15px;"><i class="fas fa-sign-out-alt"></i>Log-out</a>
            </div>
      </div>
    </nav>