<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?

if (isset($_POST['register'])) 
{
    // ambil data dari formulir
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // buat query
    $query = pg_query("INSERT INTO users (nama_lengkap, no_telp, email, username, password) VALUEs ('$nama_lengkap', '$no_telp', '$email', '$username', '$password')");

    // apakah query simpan berhasil?
    if ($query == TRUE) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} 

else 
{
    die("Akses dilarang...");
}