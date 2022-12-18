<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?

if (isset($_POST['login'])) 
{
    // ambil data dari formulir
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = pg_query("SELECT * FROM users");

    while($users = pg_fetch_array($query))
    {   
        if ($username == $users['username'] and $email == $users['email'] and $password == $users['password']) 
        {
            header('Location: halamanutama.php?id='.$users['id']);
        }
    }
}