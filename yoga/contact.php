<?php require 'header.php'?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {

        // Error validation
        if (empty($name)) {
            $name_error = 'Name is required.';
        }

        if (empty($email)) {
            $email_error = 'Email is required.';
        }

        if (empty($message)) {
            $message_error = 'Message is required.';
        }

        $_SESSION['error'] = [
            'name' => $name_error,
            'email' => $email_error,
            'message' => $message_error,
        ];

        header('Location: contact.php');
        exit;
    }

    $insert_contact = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($insert_contact) === true) {
        $_SESSION['success'] = 'Your message has been sent successfully!';
    } else {
        $_SESSION['error'] = 'There was an error sending your message. Please try again.';
    }
}

?>


<body>
    <?php require 'nav.php'?>
    <main class="section__container">
        <h2>We'd Love to Hear From You!</h2>
        <p>Have questions or want to book a session? Reach out to us through the form below or connect with us on social media.</p>
        <p>Email: <a href="mailto:contact@serenityyoga.com">contact@serenityyoga.com</a></p>
        <p>Follow us on <a href="#">Instagram</a>, <a href="#">Facebook</a></p>

        <?php if (isset($_SESSION['success'])): ?>
            <p class="success-alert"><?=$_SESSION['success']?>
            <?php unset($_SESSION['success'])?>
        </p>
        <?php endif;?>


        <?php if (isset($_SESSION['error'])): ?>
        <div class="error-alert">
            <strong>These fields are required:</strong><br>

            <ul>
                <?php foreach ($_SESSION['error'] as $error): ?>
                    <?php
if (!$error) {
    continue;
}
?>
                    <li><?=$error?></li>
                <?php endforeach;?>
            </ul>
            <?php unset($_SESSION['error'])?>
        </div>
        <?php endif;?>

        <form id="contact-form" action="contact.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Fullname" >
                <span class="error-message" id="name-error"></span>
            </div><br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email Address" >
                <span class="error-message" id="email-error"></span>
            </div><br>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Your Messages" ></textarea>
                <span class="error-message" id="message-error"></span>
            </div><br>
            <button type="submit">Send</button>
            <p class="form-success" id="form-success"></p>
        </form>
    </main>
            <!-- footer -->
            <footer class="footer">
      <div class="container-footer">
        <div class="row">
          <div class="footer-col">
            <h4>Serenity Yoga Studio</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Yoga</h4>
            <ul>
              <li><a href="#">Australia</a></li>
              <li><a href="#">Serenity Yoga Studio.</a></li>
              <li><a href="#">Lifestyle</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Serenity Yoga Studio</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>YOGA</h4>
            <ul>
              <li><a href="#">Australia</a></li>
              <li><a href="#">Serenity Yoga Studio</a></li>
              <li><a href="#">Lifestyle</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bottom-bar">
        <p>
          &copy; 2024 Serenity Yoga Studio . All rights reserved by Serenity
          Yoga Studio.
        </p>
      </div>
    </footer>
    <!-- end footer -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuToggle = document.querySelector('.menu-toggle');
            const mainNav = document.querySelector('.main-nav');

            menuToggle.addEventListener('click', function() {
                if (mainNav.style.display === 'flex') {
                    mainNav.style.display = 'none';
                } else {
                    mainNav.style.display = 'flex';
                }
            });
        });
    </script>
</body>
</html>

