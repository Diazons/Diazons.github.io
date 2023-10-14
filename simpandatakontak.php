<?php
// Pastikan Anda memiliki koneksi ke database
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$database = "portouts"; // Ganti dengan nama database Anda

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi database
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$keterangan = $_POST['keterangan'];
$pesanmu = $_POST['pesanmu'];

// Query untuk menyimpan data ke tabel "tbkontak"
$sql = "INSERT INTO tbkontak (nama, email, keterangan, pesanmu) VALUES ('$nama', '$email', '$keterangan', '$pesanmu')";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan ke dalam database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi ke database
$conn->close();
?>
