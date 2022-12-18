<?php
include("config.php");
$id_user = $_GET['id_user'];
$id_makanan = $_GET['id_makanan'];
$id_pesanan = $_GET['id_pesanan'];

$query_makanan = pg_query("SELECT * FROM makanan WHERE id = '$id_makanan'");
$makanan_edit = pg_fetch_array($query_makanan);

$query_pesanan = pg_query("SELECT * FROM pesanan WHERE id = '$id_pesanan'");
$pesanan_edit = pg_fetch_array($query_pesanan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th colspan="3">Pesan</th>
            </tr>
        </thead>
        <tbody>

            <?php
                    echo "<tr>";
                    echo "<td>".$makanan_edit['nama']."</td>";
                    echo "<td>".$makanan_edit['harga']."</td>";
            ?>

                <form action="<?php echo "prosesedit.php?id_user=".$id_user."&id_makanan=".$id_makanan."&id_pesanan=".$id_pesanan?>" method="POST">
                        <td>
                            <input type="number" name="kuantitas" value= "<?php echo $pesanan_edit['kuantitas'] ?>" min="1"/>
                        </td>
                        <td>
                            <input type="text" name="alamat_tujuan" value="<?php echo $pesanan_edit['alamat_tujuan'] ?>" required/>
                        </td>
                        <td>
                            <input type="submit" value="Konfirmasi" name="konfirmasi" />
                        </td>
                </form>

            <?php
                    echo "<tr>";
            ?>

        </tbody>
	</table>
</body>
</html>