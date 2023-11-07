<?php
session_start();
if (isset($_SESSION['user_name'])) {
    header("Location: ../mystore.php");
}


if (isset($_POST['login'])) {
    include "../product/Config.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql) or die("Query failed");

    if (mysqli_num_rows($result) > 0) {
        session_start();
        // Fetch the user data from the query result
        $row = mysqli_fetch_assoc($result);

        // Store user ID and username in session variables
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['username'];

        header("Location: ../mystore.php");
        
    } else {
        echo "Login failed. Please check your username and password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow m-auto bg-white font-monospace p-3 border border-primary mt-3">

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Login:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Name :</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>

                    <button type="submit" name="login" class="bg-dark fs-4 fw-bold my-3 form-control text-white">Login</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>