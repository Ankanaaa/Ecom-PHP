<?php
session_start();
if (empty($_SESSION['user_name'])) {
    header("location:form/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>



<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white">
                <h1>MyStore</h1>
            </a>
            <span>
                <i class="fas fa-user-shield"></i>
                Hello, <?php echo $_SESSION['user_name']  ?> |
                <i class="fas fa-sign-out-alt"></i>
                <a href="form/logout.php" class="text-decoration-none text-white">Logout</a> |
                <a href="../user/index.php" class="text-decoration-none text-white">Userpanel</a>
            </span>
        </div>
    </nav>

    <div>
        <h2 class="text-center">DashBoard</h2>
    </div>
    <div class="col-md-6 bg-dark text-center m-auto">
        <a href="product/index.php" class="text-decoration-none text-white fs-4 fw-bold px-5">Add Post</a>
        <a href="user.php" class="text-decoration-none text-white fs-4 fw-bold px-5">User</a>
    </div>
</body>

</html>