<?php 
  function NavBar() {
    return '
      <nav class="navbar sticky">
          <div class="max-width">
              <div class="logo"><a href="./index.php"><span>My</span>Portfolio</a></div>
              <ul class="menu">
                  <li><a href="./index.php" class="menuBtn">Home</a></li>
                  <li><a href="./about.php" class="menuBtn">About</a></li>
                  <li><a href="./services.php" class="menuBtn">Services</a></li>
                  <li><a href="./gallery.php" class="menuBtn">Gallery</a></li>
                  <li><a href="./team.php" class="menuBtn">Team</a></li>
                  <li><a href="./project.php" class="menuBtn">Projects</a></li>
                  <li><a href="./contact.php" class="menuBtn">Contact</a></li>
              </ul>
              <div class="menuBtn">
                  <i class="fas fa-bars" id="menu-btn"></i>
              </div>
          </div>
      </nav>
    ';
  }
?>