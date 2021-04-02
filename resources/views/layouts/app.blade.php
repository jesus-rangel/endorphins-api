<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogger Layout</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('css/owl.carousel.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('css/owl.theme.default.min.css')}}"
    />
  </head>
  <body>
    <!-- **** NAVBAR **** -->

    <nav class="nav">
      <div class="nav-menu flex-row">
        <div class="nav-brand">
          <a href="#" class="text-gray">Blogger</a>
        </div>
        <div class="toggle-collapse">
          <div class="toggle-icons">
            <i class="fas fa-bars"></i>
          </div>
        </div>
        <div>
          <ul class="nav-item">
            <li class="nav-link">
              <a href="#">Home</a>
            </li>
            <li class="nav-link">
              <a href="#">Category</a>
            </li>
            <li class="nav-link">
              <a href="#">Archive</a>
            </li>
            <li class="nav-link">
              <a href="#">Pages</a>
            </li>
            <li class="nav-link">
              <a href="#">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="nav-account text-gray">
          <a href="#">Login</a>
          <a href="#"><button class="btn nav-btn">Register</button></a>
        </div>
      </div>
    </nav>

    <!-- **** END OF NAVBAR **** -->

    <!-- **** MAIN SECTION ****  -->
    <main>
    @yield('content')

  </main>
  <!-- **** END OF MAIN SECTION **** -->

  <!-- **** FOOTER **** -->

  <footer>
    <div class="custom-container">
      <div class="about-us" data-aos="fade-right" data-aos-delay="200">
        <h2>About Us</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe qui facilis animi iste quis cumque doloribus optio est itaque sed!</p>
      </div>
      <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
        <h2>Newsletter</h2>
        <p>Stay up to date with us</p>
        <div class="form-element">
          <input type="text" name="" id="" placeholder="Email">
          <span><i class="fas fa-chevron-right"></i></span>
        </div>
      </div>
      <div class="instagram" data-aos="fade-left" data-aos-delay="200">
        <h2>Instagram</h2>
        <div class="flex-row">
          <img src="assets/instagram/thumb-card3.png" alt="">
          <img src="assets/instagram/thumb-card4.png" alt="">
          <img src="assets/instagram/thumb-card5.png" alt="">
        </div>
        <div class="flex-row">
          <img src="assets/instagram/thumb-card6.png" alt="">
          <img src="assets/instagram/thumb-card7.png" alt="">
          <img src="assets/instagram/thumb-card8.png" alt="">
        </div>
      </div>
      <div class="follow-us" data-aos="fade-left" data-aos-delay="200">
        <h2>Follow Us</h2>
        <p>Let us be Social</p>
        <div>
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-youtube"></i>
        </div>
      </div>
    </div>
    <div class="copyright flex-row">
      <h4 class="text-gray">
        Copyright &copy;: Layout tutorial provided by the <a href="https://www.youtube.com/channel/UCrG2Z0usOCCdUTAr4D1A8mw" target="_blank">Daily Tuition <i class="fab fa-youtube"></i> Channel</a>.
      </h4>
    </div>
    <div class="move-up">
      <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
    </div>
  </footer>

  <!-- **** END OF FOOTER **** -->

  <!-- Third party Javascript Files -->
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
    