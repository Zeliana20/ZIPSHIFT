<?php
if (isset($_FILES['uploaded_file'])) {
    $targetDir = "uploads/"; // Direktori penyimpanan
    $fileName = basename($_FILES["uploaded_file"]["name"]); // Nama file
    $targetFilePath = $targetDir . $fileName;

    // Periksa apakah direktori 'uploads' ada
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true); // Buat direktori jika belum ada
    }

    // Validasi jenis file
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array(strtolower($fileType), $allowedTypes)) {
        // Pindahkan file ke folder 'uploads'
        move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $targetFilePath);
    }
}
