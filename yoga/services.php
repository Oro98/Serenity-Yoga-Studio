<?php require 'header.php'?>
<body>
    <?php require 'nav.php'?>
    <main>
    <section class="section__container stories__container" id="stories">
      <p class="section__subheader">SERVICES</p>
      <h2 class="section__header">What We Offer</h2>
      <div class="stories__grid">
        <div class="stories__card">
          <div class="stories__content">
            <span><i class="ri-double-quotes-l"></i></span>
            <p>
              Prenatal Yoga: Specially designed classes for expecting mothers to
              support during pregnancy. In addition, our classes, helps to
              practice and connect with like-minded individuals.
            </p>
          </div>
          <div class="stories__author">
            <img src="assets/yoga7.png" alt="author" />
            <div class="stories__author__details">
              <h4>Iril Tiu</h4>
              <h6>Our Instructors</h6>
            </div>
          </div>
        </div>
        <div class="stories__card">
          <div class="stories__content">
            <span><i class="ri-double-quotes-l"></i></span>
            <p>
              Vinyasa Flow: A dynamic sequence that link breath with movement.
              Hatha Yoga: A gentle introduction to help mandatorily the basics
              of yoga postures and breathing techniques.
            </p>
          </div>

          <div class="stories__author">
            <img src="assets/yoga8.png" alt="author" />
            <div class="stories__author__details">
              <h4>Charles Palanca</h4>
              <h6>Our Instructors</h6>
            </div>
          </div>
        </div>
        <div class="stories__card">
          <div class="stories__content">
            <span><i class="ri-double-quotes-l"></i></span>
            <p>
              Restorative Yoga: Slow, restful of that poses that focus on deep
              relaxation and relief. Meditation: Guided sessions to cultivate
              mindfulness, clarity, and inner calm.
            </p>
          </div>
          <div class="stories__author">
            <img src="assets/yoga9.png" alt="author" />
            <div class="stories__author__details">
              <h4>Anamul Hoque Robin</h4>
              <h6>Our Instructors</h6>
            </div>
          </div>
        </div>
      </div>
      <h1>Book your class <a href="contact.php">here.</a></h1>

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
