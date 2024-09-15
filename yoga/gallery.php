<?php require 'header.php'?>
<body>
    <?php require 'nav.php'?>
    <main class="section__container">
        <h2>Yoga Class</h2>
        <h3>Class session conducted last 10 August 2024</h3>
        <figure class="thumbnail-group" style="display:flex; gap: 1rem;flex-wrap: wrap;">
            <a href="assets/yoga3.jpg" class="thumbnail-link">
            <img src="assets/yoga3s.jpg" alt="Yoga Class" class="thumbnail"  style="max-width: 150px; width: 100%"/>
            </a>
            <a href="assets/yoga4.jpg" class="thumbnail-link">
            <img src="assets/yoga4s.jpg" alt="Yoga Class"  class="thumbnail" style="max-width: 150px; width: 100%" />
            </a>
            <a href="assets/yoga5.jpeg" class="thumbnail-link">
            <img src="assets/yoga5s.jpg" alt="Yoga Class"  class="thumbnail" style="max-width: 150px; width: 100%"/>
            </a>
            <a href="assets/yoga6.jpg" class="thumbnail-link">
            <img src="assets/yoga6s.jpg" alt="Yoga Class"  class="thumbnail" style="max-width: 150px; width: 100%" />
            </a>
        </figure>
        <h3>Class session conducted last 17 August 2024</h3>
        <figure class="thumbnail-group" style="display:flex; gap: 1rem;flex-wrap: wrap;>
            <a href="assets/yoga7.png" class="thumbnail-link">
                <img src="assets/yoga7s.jpg" alt="Yoga Class" style="max-width: 150px; width: 100%" class="thumbnail"  />
            </a>
            <a href="assets/yoga8.jpg" class="thumbnail-link">
            <img src="assets/yoga8s.jpg" alt="Yoga Class" style="max-width: 150px; width: 100%" class="thumbnail" />
            </a>
            <a href="assets/yoga9.jpg" class="thumbnail-link">
            <img src="assets/yoga9s.jpg" alt="Yoga Class" style="max-width: 150px; width: 100%" class="thumbnail" />
            </a>
            <a href="assets/yoga10.jpg" class="thumbnail-link">
            <img src="assets/yoga10s.jpg" alt="Yoga Class" style="max-width: 150px; width: 100%" class="thumbnail" />
            </a>
        </figure>
        <h2>Yoga Class Videos</h2>
        <h3>Class sessions conducted last 3,10, and 17 August 2024</h3>
        <div>
        <video id="video" poster="assets/preview.png" controls width="480" height="360" class="img-fluid">
            <source src="assets/yogaclass.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            <source src="assets/yogaclass.webm" type='video/webm; codecs="vp8, vorbis"'>
            <source src="assets/yogaclass.ogg" type='video/ogg; codecs="theora, vorbis"'>
        </video>
        <video id="video2" poster="images/preview2.png" controls width="480" height="360" class="img-fluid">
            <source src="assets/yogaclass2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            <source src="assets/yogaclass2.webm" type='video/webm; codecs="vp8, vorbis"'>
            <source src="assets/yogaclass2.ogg" type='video/ogg; codecs="theora, vorbis"'>
        </video>
        <video id="video3" poster="images/preview3.png" controls width="480" height="360" class="img-fluid">
            <source src="assets/yogaclass3.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            <source src="assets/yogaclass3.webm" type='video/webm; codecs="vp8, vorbis"'>
            <source src="assets/yogaclass3.ogg" type='video/ogg; codecs="theora, vorbis"'>
        </video>
        <br><br>
        <h2>Relaxing Yoga Music</h2>
        <h3>Meditation music to relax </h3>
        <p class="track-name">Track 1: 15 minute - Relaxing Yoga Music</p>
        <audio id="yoga" controls preload="auto">
            <source src="assets/yogamusic.mp3" type="assets/mp3">
            <source src="assets/yogamusic.webm" type="audio/mp3">
            <source src="assets/yogamusic.ogg" type="audio/mp3">
            <p>Browser doesn't support the assets control</p>
        </assets>
        <p class="track-name">Track 2: 15 minute - Yoga Music</p>
        <assets id="yoga2" controls preload="auto">
            <source src="assets/yogamusic2.mp3" type="audio/mp3">
            <source src="assets/yogamusic2.webm" type="audio/mp3">
            <source src="assets/yogamusic2.ogg" type="audio/mp3">
            <p>Browser doesn't support the assets control</p>
        </assets>
        <p class="track-name">Track 3: 30 minute - Meditation Music</p>
        <assets id="yoga3" controls preload="auto">
            <source src="assets/yogamusic3.mp3" type="audio/mp3">
            <source src="assets/yogamusic3.webm" type="audio/mp3">
            <source src="assets/yogamusic3.ogg" type="audio/mp3">
            <p>Browser doesn't support the audio control</p>
        </audio>
        <br><br>
        </div>
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
