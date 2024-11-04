<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="image/2.jpg">
  <title>Lembaga Penjaminan Mutu STMIK Catur Sakti Kendari</title>
   <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap Core CSS -->
    <link href="_assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="_assets/css/simple-sidebar.css" rel="stylesheet">

    <style type="text/css">
      /* CSS untuk kelas "text" */
.text {
  font-size: 24px;
  color: #333;
  margin-bottom: 20px;
}

 .home-section {
        overflow-y: auto;
        
       }
/* CSS untuk kelas "upload-form" */
.upload-form {
  margin-top: 20px;
  text-align: center;
}

.upload-form form {
  margin-top: 10px;
}

.upload-form input[type="file"] {
  display: block;
  margin: 0 auto;
}

.upload-form input[type="submit"] {
  margin-top: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

.footer {
        background-color: #91209215;
        color: black;
        text-align: center;
        padding: 5px;
        width: 100%;
        position: absolute;
        bottom: 0;
       }

/* CSS untuk kelas "table" */
table {
  width: 100%;
  border-collapse: collapse;
}

table th, table td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: left;
}
    </style>
</head>
<body>
  <div class="sidebar close">
    <center>
    <div>
     <img src="image/2.jpg" width="50 px" height="50px">
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
  </ul>
</div>
<section class="home-section">
  <div class="home-content">
    <i class='bx bx-menu' ></i>  
    <center><span class="text">DOKUMEN PERKULIAHAN</span></center>



  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>Dokumen</th>
        <th>Tipe File</th>
        <th>Ukuran File</th>
        <th>Tanggal Unggah</th>
      </tr>
    </thead>
    <?php
        
          include "koneksi.php";

            // Retrieve files from the database
            $sql = "SELECT * FROM files";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $counter = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $counter . "</td>";
                    echo "<td><a href='uploads/" . $row['file_name'] . "' target='_blank'>" . $row['file_name'] . "</a></td>";
                    echo "<td>" . $row['file_type'] . "</td>";
                    echo "<td>" . $row['file_size'] . " bytes</td>";
                    echo "<td>" . $row['upload_date'] . "</td>";
                    echo "</tr>";
                    $counter++;
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada file yang diunggah.</td></tr>";
            }

            $conn->close();
            ?>
  </table>
  </div>
  <br>
  <br>
    <div class="upload-form">
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload PDF" name="submit">
    </form>
  </div>

<div class="footer">
    <p>&copy;LPM Catur Sakti Kendari 2023</p>
  </div>
 
</section>
  <script src="script.js"></script>

</body>
</html>