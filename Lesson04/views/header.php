

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> -->

      <li class="nav-item d-none d-sm-inline-block">
        <?php
            if(isset($_SESSION["login"]["email"]) && $_SESSION["login"]["email"] !== "" && isset($_SESSION["login"]["pass"]) && $_SESSION["login"]["pass"] !== ""){
        ?>        
                <a href="index.php?view=home" class="nav-link">Home</a>
        <?php
            }else{               
        ?>        
                <a href="index.php?view=login" class="nav-link">Home</a>
        <?php
            }
        ?>

  
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <?php
            if(isset($_SESSION["login"]["email"])  && isset($_SESSION["login"]["pass"])){
        ?>        
                <a href="index.php?view=about" class="nav-link">About</a>
        <?php
            }else{
        ?>        
                <a href="index.php?view=login" class="nav-link">About</a>
        <?php
            }
        ?>
        
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <?php
            if(isset($_SESSION["login"]["email"])  && isset($_SESSION["login"]["pass"])){
        ?>        
                <a href="index.php?view=products" class="nav-link">Products</a>
        <?php
            }else{
        ?>        
                <a href="index.php?view=login" class="nav-link">Products</a>
        <?php
            }
        ?>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <?php
            if(isset($_SESSION["login"]["email"])  && isset($_SESSION["login"]["pass"])){
        ?>        
                <a href="index.php?view=services" class="nav-link">Services</a>
        <?php
            }else{
        ?>        
                <a href="index.php?view=login" class="nav-link">Services</a>
        <?php
            }
        ?>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <?php
            if(isset($_SESSION["login"]["email"])  && isset($_SESSION["login"]["pass"])){
        ?>        
                <a href="index.php?view=contact" class="nav-link">Contact</a>
        <?php
            }else{
        ?>        
                <a href="index.php?view=login" class="nav-link">Contact</a>
        <?php
            }
        ?>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <?php
            if(isset($_SESSION["login"]["email"])  && isset($_SESSION["login"]["pass"])){
        ?>        
                <a href="index.php?view=logout" class="nav-link">Logout</a>
        <?php
            }else{
        ?>        
                <a href="index.php?view=login" class="nav-link">Login</a>
        <?php
            }
        ?>
        
      </li>
     
    </ul>



  </nav>