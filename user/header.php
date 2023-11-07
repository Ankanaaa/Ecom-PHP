<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php
session_start();
$count=0;
if(isset($_SESSION['cart'])){
    $count=count($_SESSION['cart']);
}

?>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid font-monospace">
        <a class="navbar-brand pb-2" style="color: black;"><img src="logo.jpeg" alt="" height="40px" width="60px" ></a>

        <div class="d-flex" style="color: black;">
            <a href="index.php" class="text-decoration-none pe-2" style="color: black;"><i class="fas fa-home"></i>Home</a>
            <a href="viewCart.php" class="text-decoration-none pe-2" style="color: black;"><i class="fas fa-shopping-cart"></i>Cart(<?php echo $count ?>) |</a>

            <span style="color: black;">
                <i class="fas fa-user-shield" style="color: black;"></i>Hello,
                <?php
                
                if(isset($_SESSION['user'])){
                    echo $_SESSION['user'];
                    echo "
                    |<a href='form/logout.php' class='text-decoration-none pe-2' style='color: black;'><i class='fas fa-sign-in-alt'></i>Logout </a>
                    ";
                }
                else{
                    echo "
                    <a href='form/login.php' class='text-decoration-none pe-2' style='color: black;'><i class='fas fa-sign-in-alt'></i>Login </a>
                    ";
                }
                
                ?>
                
                
                <a href="../admin/mystore.php" class="text-decoration-none pe-2" style="color: black;">| Admin</a>
            </span>
        </div>
    </div>
</nav>

    <div class="bg-dark sticky-top font-monospace">
        <ul class="list-unstyled d-flex justify-content-center">
            <li><a href="Album.php" class="text-decoration-none text-white fw-bold fs-4 px-5">ALBUM</a></li>
            <li><a href="LightStick.php" class="text-decoration-none text-white fw-bold fs-4 px-5">LIGHT-STICK</a></li>
            <li><a href="Food.php" class="text-decoration-none text-white fw-bold fs-4 px-5">FOODS</a></li>
        </ul>
    </div>
</body>
</html>