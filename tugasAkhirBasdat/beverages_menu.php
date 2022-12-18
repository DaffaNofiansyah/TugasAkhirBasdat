<?php
include("config.php");
$id = $_GET['id'];
$query = pg_query("SELECT * FROM users WHERE id = '$id'");
$users = pg_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style_menu_item.css">
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


    <!-- content -->
    <main>
        <div id="menu">
            <div class="container">
                <h1 class="title">Pesan makananmu di sini</h1>
                <div class="row text-center">
                    <div class="col-lg-9 menu">
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid rounded" src="assets\images\chocolate.jpg" alt="" style="width: 80px;">
                            <div class="w-100 d-flex flex-column text-start ps-4">
                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                    <span>Hot Chocolate</span>
                                    <span class="text-primary">15.000</span>
                                </h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal15">Pesan</button>
                                <div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel15" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel15">Pesan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?php echo "prosespesanan.php?id_user=".$users['id']."&id_makanan=15"?>" method="POST">
                                        <div class="form-group">
                                            <label for="kuantitas">Kuantitas</label>
                                            <br>
                                            <input type="text" name="kuantitas" inputmode="numeric" pattern="[0-9]*" required>
                                        </div>
                                        <br>    
                                        <div class="form-group">
                                            <label for="alamat_tujuan">Alamat Tujuan</label>
                                            <input type="text" name="alamat_tujuan" class="form-control" placeholder="Alamat Tujuan" required>
                                        </div>
                                        <br>
                                        <input type="submit" name="pesan" value="Pesan" class="btn btn-primary"></input>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 menu">
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid rounded" src="assets\images\lait.jpg" alt="" style="width: 80px;">
                            <div class="w-100 d-flex flex-column text-start ps-4">
                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                    <span>Cafe Au Lait</span>
                                    <span class="text-primary">14.000</span>
                                </h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal16">Pesan</button>
                                <div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel16" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel16">Pesan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?php echo "prosespesanan.php?id_user=".$users['id']."&id_makanan=16"?>" method="POST">
                                        <div class="form-group">
                                            <label for="kuantitas">Kuantitas</label>
                                            <br>
                                            <input type="text" name="kuantitas" inputmode="numeric" pattern="[0-9]*" required>
                                        </div>
                                        <br>    
                                        <div class="form-group">
                                            <label for="alamat_tujuan">Alamat Tujuan</label>
                                            <input type="text" name="alamat_tujuan" class="form-control" placeholder="Alamat Tujuan" required>
                                        </div>
                                        <br>
                                        <input type="submit" name="pesan" value="Pesan" class="btn btn-primary"></input>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 menu">
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid rounded" src="assets\images\ginger.jpg" alt="" style="width: 80px;">
                            <div class="w-100 d-flex flex-column text-start ps-4">
                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                    <span>Ginger Tea</span>
                                    <span class="text-primary">12.000</span>
                                </h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal17">Pesan</button>
                                <div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel17" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel17">Pesan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?php echo "prosespesanan.php?id_user=".$users['id']."&id_makanan=17"?>" method="POST">
                                        <div class="form-group">
                                            <label for="kuantitas">Kuantitas</label>
                                            <br>
                                            <input type="text" name="kuantitas" inputmode="numeric" pattern="[0-9]*" required>
                                        </div>
                                        <br>    
                                        <div class="form-group">
                                            <label for="alamat_tujuan">Alamat Tujuan</label>
                                            <input type="text" name="alamat_tujuan" class="form-control" placeholder="Alamat Tujuan" required>
                                        </div>
                                        <br>
                                        <input type="submit" name="pesan" value="Pesan" class="btn btn-primary"></input>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 menu">
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid rounded" src="assets\images\mint.jpg" alt="" style="width: 80px;">
                            <div class="w-100 d-flex flex-column text-start ps-4">
                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                    <span>Fresh Mint Tea</span>
                                    <span class="text-primary">10.000</span>
                                </h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal18">Pesan</button>
                                <div class="modal fade" id="exampleModal18" tabindex="-1" aria-labelledby="exampleModalLabel18" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel18">Pesan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="<?php echo "prosespesanan.php?id_user=".$users['id']."&id_makanan=18"?>" method="POST">
                                        <div class="form-group">
                                            <label for="kuantitas">Kuantitas</label>
                                            <br>
                                            <input type="text" name="kuantitas" inputmode="numeric" pattern="[0-9]*" required>
                                        </div>
                                        <br>    
                                        <div class="form-group">
                                            <label for="alamat_tujuan">Alamat Tujuan</label>
                                            <input type="text" name="alamat_tujuan" class="form-control" placeholder="Alamat Tujuan" required>
                                        </div>
                                        <br>
                                        <input type="submit" name="pesan" value="Pesan" class="btn btn-primary"></input>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
</html>