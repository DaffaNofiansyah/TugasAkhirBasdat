<?php
include("config.php");
$id = $_GET['id'];
$orders_query = pg_query("SELECT * FROM pesanan WHERE id_users = '$id' ORDER BY id ASC");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <!-- navbar -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">BLISS.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href=" <?php echo "halamanutama.php?id=".$id ?>">HOME</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CATEGORY
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?php echo "main_menu.php?id=".$_GET['id']?>">MAIN DISH</a></li>
                                <li><a class="dropdown-item" href="<?php echo "side_menu.php?id=".$_GET['id']?>">SIDE DISH</a></li>
                                <li><a class="dropdown-item" href="<?php echo "drinks_menu.php?id=".$_GET['id']?>">DRINKS</a></li>
                                <li><a class="dropdown-item" href="<?php echo "beverages_menu.php?id=".$_GET['id']?>">BEVERAGES</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo "pesanan.php?id=".$_GET['id']?>">CART</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">LOG OUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    

    <section id="menu">
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-10">
                    <div class="rounded">
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Kuantitas</th>
                                        <th>Alamat Tujuan</th>
                                        <th colspan ="2">Edit</th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                <?php
                                while($pesanan = pg_fetch_array($orders_query))
                                {
                                    // $users_query = pg_query("SELECT * FROM users WHERE id = '$pesanan['id_users']'");
                                    // $users = pg_fetch_array($users_query);
                                    $foods_query = pg_query("SELECT * FROM makanan WHERE id = '$pesanan[id_makanan]'");
                                    $makanan = pg_fetch_array($foods_query);

                                    echo "<tr>";
                                    
                                    echo "<td>".$makanan['nama']."</td>";
                                    echo "<td>".$makanan['harga']."</td>";
                                    echo "<td>".$pesanan['kuantitas']."</td>";
                                    echo "<td>".$pesanan['alamat_tujuan']."</td>";
                            ?>
                            
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $makanan['id']?>">Edit</button>
                                        <div class="modal fade" id="exampleModal<?php echo $makanan['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $makanan['id']?>" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel<?php echo $makanan['id']?>">Edit Pesanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="<?php echo "prosesedit.php?id_user=".$id."&id_makanan=".$makanan['id']."&id_pesanan=".$pesanan['id']?>" method="POST">
                                                <div class="form-group">
                                                    <label for="kuantitas">Kuantitas</label>
                                                    <br>
                                                    <input type="text" name="kuantitas" value="<?php echo $pesanan['kuantitas']?>" inputmode="numeric" pattern="[0-9]*" required>
                                                </div>
                                                <br>    
                                                <div class="form-group">
                                                    <label for="alamat_tujuan">Alamat Tujuan</label>
                                                    <input type="text" name="alamat_tujuan" value="<?php echo $pesanan['alamat_tujuan']?>" class="form-control" placeholder="Alamat Tujuan" required>
                                                </div>
                                                <br>
                                                <input type="submit" name="konfirmasi" value="Konfirmasi" class="btn btn-primary"></input>
                                            </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                    <form action= "<?php echo "proseshapus.php?id_user=".$id."&id_makanan=".$makanan['id']."&id_pesanan=".$pesanan['id']?>" method="POST">
                                        <td>
                                            <input class="btn btn-danger" type="submit" value="Hapus" name="hapus" />
                                        </td>
                                    </form>
                            <?php
                                    echo "</tr>";
                                }
                            ?>      
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- footer -->
    <section id="footer">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-box">
                        <p><b>ABOUT US</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt minima obcaecati voluptate maiores, voluptatum sit consectetur error natus odit ipsa, ratione provident odio optio asperiores doloremque ad, doloribus eius beatae.</p>
                    </div>
                    <div class="col-md-4 footer-box">
                        <p><i class="fa fa-map-marker"></i><b> OUR ADDRESS</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt minima obcaecati voluptate maiores, voluptatum sit consectetur error natus odit ipsa, ratione provident odio optio asperiores doloremque ad, doloribus eius beatae.</p>
                    </div>
                    <div class="col-md-4 footer-box">
                        <p><b>CONTACT US</b></p>
                        <p><i class="fa fa-phone"></i> 08121234XXX</p>
                        <p><i class="fa fa-envelope-o"></i> blissbliss@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>