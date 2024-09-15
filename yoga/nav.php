<header>
    <!--<button class="menu-toggle">&#9776;</button>-->
    <nav>
      <div class="nav__logo">
        <img src="assets/yoga1.png" alt="Serenity Yoga Studio Logo" />
        <span>Serenity Yoga Studio</span>
      </div>
      <ul class="nav__links">
        <li class="link"><a href="index.php">Home</a></li>
        <li class="link"><a href="about.php">About</a></li>
        <li class="link"><a href="services.php">Services</a></li>
        <li class="link"><a href="gallery.php">Gallery</a></li>
        <li class="link"><a href="contact.php">Contact</a></li>
      </ul>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif;?>
    </nav>
    <?php if (isset($_SESSION['logout-success'])): ?>
        <p class="success-alert"><?php echo $_SESSION['logout-success']; ?></p>
        <?php unset($_SESSION['logout-success']);?>
    <?php endif;?>
</header>