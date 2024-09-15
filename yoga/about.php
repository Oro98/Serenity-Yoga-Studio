<?php require 'header.php'?>
<body>
    <?php require 'nav.php'?>
    <main class="section__container" style="line-height: 2rem">
        <h2>About Us</h2>
        <p>Welcome to <strong>Serenity Yoga Studio</strong>, where tranquility meets transformation. At Serenity, we believe that yoga is more than just a physical practice—it's a path to inner peace, self-discovery, and holistic well-being.</p>

        <p>Our studio was founded on the principles of mindfulness, balance, and community. Whether you're a seasoned yogi or just beginning your journey, Serenity Yoga Studio offers a welcoming space for everyone to explore the benefits of yoga.</p>

        <h2>Mission</h2>
        <p> Our mission is to create a serene and supportive environment where individuals can deepen their connection with themselves and the world around them. We strive to make yoga accessible to all, offering a variety of classes that cater to different skill levels, interests, and goals.</p>

        <h2> We Offer</h2>
        <p> Serenity Yoga Studio, we offer a diverse range of classes, including:</p>
        <ul>
        <li><strong>Vinyasa Flow:</strong> A dynamic sequence of poses that link breath with movement.</li>
        <li><strong>Hatha Yoga:</strong> A gentle introduction to the basics of yoga postures and breathing techniques.</li>
        <li><strong>Restorative Yoga:</strong> Slow, restful poses that focus on deep relaxation and stress relief.</li>
        <li><strong>Meditation:</strong> Guided sessions to cultivate mindfulness, clarity, and inner calm.</li>
        <li><strong>Prenatal Yoga:</strong> Specially designed classes for expecting mothers to support their body and mind during pregnancy.</li>
        </ul>
        <p>In addition to our classes, we host regular workshops, wellness retreats, and community events to help you expand your practice and connect with like-minded individuals.</p>

        <h2> Instructors</h2>
        <p>Our team of experienced instructors is passionate about sharing the transformative power of yoga. They bring a wealth of knowledge, compassion, and creativity to every class, ensuring that each session is safe, enjoyable, and tailored to your needs.</p>

        <p>At Serenity Yoga Studio, we are committed to your well-being. Join us today, and discover the many ways that yoga can enhance your life—physically, mentally, and spiritually.</p>

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
