<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <link rel="stylesheet" href="{{ asset('resources/css/index.css') }}">
</head>

<body>
  <div class="wrapper">
    <div class="nav">
      <div class="logo">
        <a href="">
          <p>PRODUKSI JAM TANGAN</p>
        </a>
      </div>
      <ul>
        <li>Home</li>
        <li>About</li>
        <li>Contact Us</li>
        <!-- Ini link ke login sama register belum kamu ganti ke PHP -->
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
    </div>
    <div class="header">
      <h1> <span>TWATCH</span></h1>
    </div>
    <div class="content-header">
      <p>Selamat datang di toko kami semoga pengalaman ada menjadi pengalaman terbaik </p>
      <br>
      <button type="button">Get Started</button>
    </div>
    <div class="col-img">
      <!-- <img src="pngegg.png" alt="">-->
    </div>
  </div>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="watch1.png">
    </div>

    <div class="mySlides fade">
      <img src="pngegg.png">
    </div>

    <!-- Tombol navigasi -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>

  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
    }

  </script>
</body>
</html>