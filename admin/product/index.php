<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Details:</p>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Product Name :</label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter product name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Product Price:</label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Add product Image:</label>
                        <input type="file" name="Pimage" class="form-control">
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
                    <div class="mb-3">
                        <label  class="form-label">Select Page Categoty</label>
                        <select class="form-select" name="Pages">
                            <option value="Home">Home</option>
                            <option value="Album">Album</option>
                            <option value="LightStick">LightStick</option>
                            <option value="Food">Food</option>
                        </select>
                    </div>
                    <button name="submit" class="bg-dark fs-4 fw-bold my-3 form-control text-white">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- fetch data -->

    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <table class="table border border-black table-hover border my-5">

                <thead class="bg-dark text-white fs-5 font-monospace text-center">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Delete</th>
                    <th>Update</th>
                </thead>
                
                <tbody class="text-center">
                    <?php
                    include 'Config.php';
                    $Record=mysqli_query($conn,"SELECT * FROM `tblproduct`");
                    while($row=mysqli_fetch_array($Record))
                    
                    echo"
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[PName]</td>
                        <td>$row[PPrice]</td>
                        <td><img src='$row[PImage]' height='120px' width='200px' ></td>
                        <td>$row[PCategory]</td>
                        <td><a href='delete.php? ID=$row[id] ' class='btn btn-danger' >Delete</a></td>
                        <td><a href='update.php? ID=$row[id] ' class='btn btn-warning' >Update</a></td>
                    </tr>
                    ";
                    ?>
                </tbody>

                </table>

            </div>
        </div>
    </div>
    

</body>
</html>