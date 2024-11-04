<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/2.png">
    <title> Lembaga Penjaminan Mutu STMIK Catur Sakti Kendari </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <style type="text/css">
       .home-section {
        overflow-y: auto;
        
       }
       .footer {
        background-color: #91209215;
        color: black;
        text-align: center;
         padding: 5px;
        width: 100%;
        position: absolute;
       }
       .selamat {
        background-color: darkgreen;
        color: black;
        text-align: center;
        padding: 50px;
        width: auto;
       }
       .slideshow-container {
            position: relative;
            height: 550px;
            margin: auto;
            overflow: hidden;
        }

        .slide {
            display: none;
            position: absolute;
            width: 100%;
            height: auto;
        }

        .slide img {
            width: 100%;
           
        }

        .slide-text {
            position: absolute;
            top: 60%;
            left: 52%;
            transform: translate(-50%, -50%);
            color: white;
            padding: 10px 20px;
            text-align: center;
            max-width: 80%;
            font-size: 40px;
            color: green;
        }

         /* Gaya umum */
    body {
        transition: background-color 0.3s, color 0.3s;
    }

    /* Gaya dalam mode gelap */
    .dark-mode {
        background-color: #202020;
        color: #ffffff;
    }
     </style>
   </head>
<body>
  <div class="sidebar close">
    <center>


    <div>
     <img src="image/2.png" width="50 px" height="50px">
    </div>
    </center>
    <div class="logo-details">  
      <center><span class="logo_name">STMIK CATUR SAKTI KENDARI</span></center>
    </div>
    <ul class="nav-links">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">HOME</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="index.php">HOME</a></li>
        </ul>
      </li>
      <li>
        <a href="profile.php">
          <i class='bx bx-compass' ></i>
          <span class="link_name">PROFILE</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="profile.php">PROFILE</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">LAYANAN</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">LAYANAN</a></li>
          <li><a href="akademik.php">Akademik</a></li>
          <li><a href="pelayanan.php">Pelayanan</a></li>
          <li><a href="wisuda.php">Wisuda</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">UNDUHAN DOKUMEN</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">UNDUHAN DOKUMEN</a></li>
          <li><a href="dokumen_akademik.php">Dokumen Akademik</a></li>
          <li><a href="dokumen_wisuda.php">Dokumen Wisuda</a></li>
          <li><a href="dokumen_perkuliahan.php">Dokumen Perkuliahan</a></li>
        </ul>
      </li>
      <li>
        <a href="survey.php">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">SURVEY KEPUASAN</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="survey.php">SURVEY KEPUASAN</a></li>
        </ul>
      </li>
      <li>
        <a href="hubungi.php">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">HUBUNGI KAMI</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="hubungi.php">HUBUNGI KAMI</a></li>
        </ul>
      </li>
      <br>
      <button id="dark-mode-toggle">Toggle Mode</button>
  </ul>
</div>
<section class="home-section">
  <div class="home-content">
    <i class='bx bx-menu' ></i>  
    <center><span class="text">Lembaga Penjaminan Mutu STMIK Catur Sakti Kendari</span></center>
  </div>
  <br>
  <br>
<div class="slideshow-container">
    <div class="slide">
        <img src="image/1.8.JPG" width="1255px" height="750px">
        <div class="slide-text">
            
        </div>
    </div>
    <div class="slide">
        <img src="image/1.7.JPG" width="1255px" height="750px">
        <div class="slide-text">
            
        </div>
    </div>
</div>
  <div class="selamat">
    <h2>SELAMAT DATANG DI WEBSITE LPM STMIK CATUR SAKTI KENDARI</h2>
  </div>
  <br>
   <div class="col-md-3 col-sm-6 fbox">
        <center>
        <h4>Informasi Lebih Lanjut</h4>
        <p class="text">STMIK Catur Sakti Kendari Sekolah Tinggi Manajemen Informatika dan Komputer. Kampus IT terbaik di Sulawesi.</p><br>
        <p><img src="image/cs.png" width="25px"><a href="tel:+6282193135557 "><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +6282193135557 </a></p>
        <p><img src="image/web.png" width="25px"><a href="http://catursakti.ac.id.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  http://catursakti.ac.id</a></p>
      </center>
      <br>
    </div>
  <div class="footer">
    <p>&copy;LPM Catur Sakti Kendari 2023</p>
  </div>
</section>
  <script type="text/javascript">
     let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.getElementsByClassName("slide");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }

        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change slide every 2 seconds
    }

  </script>
<script>
  const darkModeToggle = document.getElementById('dark-mode-toggle');
  const body = document.body;

  darkModeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
  });
</script>

  <script src="script.js"></script>

</body>
</html>
