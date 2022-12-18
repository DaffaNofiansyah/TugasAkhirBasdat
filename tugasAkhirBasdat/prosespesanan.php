<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['pesan']))
{

	// ambil data dari formulir
	$id_user = $_GET['id_user'];
	$id_makanan = $_GET['id_makanan'];

	// $users_query = pg_query("SELECT id FROM users WHERE id = '$id_user'");
	// $user = pg_fetch_array($users_query);
	// $foods_query = pg_query("SELECT id FROM makanan WHERE id = '$id_makanan'");
	// $makanan = pg_fetch_array($foods_query);

	$alamat_tujuan = $_POST['alamat_tujuan'];
	$kuantitas = $_POST['kuantitas'];

	// settype($id_user, "integer");
	// settype($id_makanan, "integer");
	// settype($kuantitas, "integer");


	// print ($id_user);
	// print ($id_makanan);
	// print ($alamat_tujuan);
	// print ($kuantitas);

	// buat query
  	$query = pg_query("INSERT INTO pesanan (id_users, id_makanan, alamat_tujuan, kuantitas) VALUEs ('$id_user', '$id_makanan', '$alamat_tujuan', '$kuantitas')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) 
	{
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: halamanutama.php?id='.$id_user.'&status=sukses');
	} 
	else 
	{
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: halamanutama.php?id='.$id_user.'&status=gagal');
	}

} 

else 
{
	die("Akses dilarang...");
}



?>
