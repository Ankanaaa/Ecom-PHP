<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php

    $id=$_GET['ID'];
    include'Config.php';
    $Record =mysqli_query($conn,"SELECT * FROM `tblproduct` WHERE id=$id");
    $data=mysqli_fetch_array($Record);

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Update:</p>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Product Name :</label>
                        <input type="text" value="<?php echo $data['PName']?>" name="Pname" class="form-control" placeholder="Enter product name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Product Price:</label>
                        <input type="text" value="<?php echo $data['PPrice']?>" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Add product Image:</label>
                        <input type="file" name="Pimage" class="form-control"><br>
                        <img src="<?php echo $data['PImage'] ?>" alt="" style="height: 120px; width: 200px;">

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Select Page Categoty</label>
                        <select class="form-select" name="Pages">
                            <option value="Home">Home</option>
                            <option value="Album">Album</option>
                            <option value="LightStick">LightStick</option>
                            <option value="Food">Food</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <button name="update" class="bg-dark fs-4 fw-bold my-3 form-control text-white">Update</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- update -->

    <?php
    
    if(isset($_POST['update'])){
            $id=$_POST['id'];
            $product_name=$_POST['Pname'];
            $product_price=$_POST['Pprice'];
            $product_image=$_FILES['Pimage'];
            $image_loc=$_FILES['Pimage']['tmp_name'];
            $image_name=$_FILES['Pimage']['name'];
            $image_des="Uploadimage/".$image_name;
        
            move_uploaded_file($image_loc,"Uploadimage/".$image_name);
            $product_category=$_POST['Pages'];

            include 'Config.php';
            mysqli_query($conn,"UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',`PImage`='$image_des',`PCategory`='$product_category' WHERE id=$id");

            header("location:index.php");
    }
    
    ?>

    


</body>
</html>

