<?php
include("config.php");

if(isset($_POST['login']))
{

	$id = $_GET['id'];
	$query = pg_query("SELECT * FROM users WHERE id = '$id'");
	$users = pg_fetch_array($query);

}
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
    <title>BLISS.</title>
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
    
    <!-- banner -->
    <section id="banner">   
        <div class="container">
            <div class="row">
                <div class="col-md-6"> 
                    <p class="promo-desc">Pesan makananmu pakai</p>
                    <p class="promo-title">BLISS.</p>

                </div>
            </div>
        </div>
        <img src="assets\images\wave1.png" class="bottom-img">
    </section>


    <!-- content -->
    <section id="menu">
        <div class="container text-center">
            <h1 class="title">CATEGORY</h1>
            <div class="row text-center">
                <div class="col-md-2 menu"> 
                    <a href="<?php echo "main_menu.php?id=".$_GET['id']?>"><img src="assets\images\main.png" class="menu-img"></a>
                    <h4>MAIN DISH</h4>
                </div>
                <div class="col-md-2 menu"> 
                    <a href="<?php echo "side_menu.php?id=".$_GET['id']?>"><img src="assets\images\side.png" class="menu-img"></a>
                    <h4>SIDE DISH</h4>
                </div>
                <div class="col-md-2 menu"> 
                    <a href="<?php echo "drinks_menu.php?id=".$_GET['id']?>"><img src="assets\images\drinks.png" class="menu-img"></a>
                    <h4>DRINKS</h4>
                </div>
                <div class="col-md-2 menu"> 
                    <a href="<?php echo "beverages_menu.php?id=".$_GET['id']?>"><img src="assets\images\beverages.png" class="menu-img"></a>
                    <h4>BEVERAGES</h4>
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
</html>