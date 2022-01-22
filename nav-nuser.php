
<nav class="top-nav">
      <div class="logo">
        <h1 class="header">PHoodie</h1>
      </div>
      <div class="menu-small" id="menu-small">
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><div class="dropdown">
              <a href="#MENU" onclick="menumenuToggle()">MENU</a>
              <div class="drop-content" id="menu-menu">
                <div class="top"><p class="header"><i class='bx bx-arrow-back' style='color:#ffff; position:absolute; top:35px; left:20px;' onclick="menumenuToggle()"></i> MENU</p></div>
                <div class="bot">
                <a href="food-categories.php">Main Dish</a>
                <a href="food-categories.php">Side Dish</a>
                <a href="food-categories.php">Street Foods/Exotic</a>
                <a href="food-categories.php">Dessert</a>
                <a href="food-categories.php">Pasta/Noodles</a>
                <a href="food-categories.php">Soup</a></div>
              </div>
            </div></li>
          <li><a href="about_us.php">ABOUT US</a></li>
          <div class="bot">
          <li><a href="login.php">LOG-IN</a></li>
          <li><a href="register.php">REGISTER</a></li>
          </div>
        </ul>
      </div>
      <div class="toggleIcon" id="toggleIcon" onclick="menuToggle()"><i class='bx bx-menu'></i></div>
      <div class="menu-overlay">
      <div class="navbutt">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="index.php">HOME</a>
            <div class="dropdown">
              <a href="#MENU">MENU</a>
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
      <div class="user-but">
        <a href="login.php">Log-in</a>
        <a href="register.php">Register</a>
      </div>
    </div>
    </nav>