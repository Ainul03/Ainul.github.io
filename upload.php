<?php
if (isset($_POST["submit"])) {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  $allowedExtensions = array("pdf", "doc", "docx");

  // Check if file extension is allowed
  if (!in_array($fileType, $allowedExtensions)) {
    echo "Hanya file PDF, DOC, dan DOCX yang diperbolehkan.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Maaf, ukuran file terlalu besar.";
    $uploadOk = 0;
  }

  // Upload the file and save information to the database
  if ($uploadOk == 1) {
    // Connection to database (you need to replace 'your_database_name', 'your_username', 'your_password' with actual database credentials)
     include "koneksi.php";

    $file_name = $_FILES["fileToUpload"]["name"];
    $file_type = $_FILES["fileToUpload"]["type"];
    $file_size = $_FILES["fileToUpload"]["size"];

    // Check if file already exists in the database
    $sql_check = "SELECT * FROM files WHERE file_name = '$file_name'";
    $result_check = $conn->query($sql_check);
    if ($result_check->num_rows > 0) {
      echo "Maaf, file sudah diunggah sebelumnya.";
      $uploadOk = 0;
    }

    // Upload the file and save information to the database
    if ($uploadOk == 1) {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // Insert information into the database
        $sql = "INSERT INTO files (file_name, file_type, file_size) VALUES ('$file_name', '$file_type', $file_size)";
        if ($conn->query($sql) === TRUE) {
          echo "File " . basename($_FILES["fileToUpload"]["name"]) . " telah berhasil diunggah.";
        } else {
          echo "Terjadi kesalahan saat menyimpan informasi file ke database: " . $conn->error;
        }
      } else {
        echo "Maaf, terjadi kesalahan saat mengunggah file.";
      }
    }

    $conn->close();
  }
}
?>