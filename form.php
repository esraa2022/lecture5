<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container w-50 mt-5">
        <h1>Product information</h1>

        <form enctype="multipart/form-data" action="validation.php" method="POST">
            <div class="mb-3">
                <label for="productName" class="form-label">Name</label>
                <input type="text" name='name' class="form-control" id="productName" placeholder="Enter product name" >
                
                <?php if (isset($_SESSION['errors']['error_name'])) : ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['errors']['error_name'];
                        unset($_SESSION['errors']['error_name']);
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="productDescription" class="form-label">Description</label>
                <textarea class="form-control" id="productDescription" name='description' rows="3" placeholder="Enter product description"></textarea>
                
                <?php if (isset($_SESSION['errors']['error_description'])) : ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['errors']['error_description'];
                        unset($_SESSION['errors']['error_description']);
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="productPrice" class="form-label">Price</label>
                <input type="number" class="form-control" name='price' id="productPrice" placeholder="Enter product price" >
                
                <?php if (isset($_SESSION['errors']['error_price'])) : ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['errors']['error_price'];
                        unset($_SESSION['errors']['error_price']);
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="productDiscount" class="form-label">Discount</label>
                <input type="number" class="form-control" name='discount' id="productDiscount" placeholder="Enter product discount" >
                
                <?php if (isset($_SESSION['errors']['error_discount'])) : ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['errors']['error_discount'];
                        unset($_SESSION['errors']['error_discount']);
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="productImage" class="form-label">Image</label>
                <input class="form-control" type="file" name='image' id="productImage">
                
                <?php if (isset($_SESSION['errors']['error_image'])) : ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $_SESSION['errors']['error_image'];
                        unset($_SESSION['errors']['error_image']);
                        ?>
                    </div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>


</html>