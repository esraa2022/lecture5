<?php  session_start();?>
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
  
    <table class="table table-primary table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Image</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>
  <tbody>
<?php $i=1;  foreach( $_SESSION['products'] as $product ):?>
    <tr>
     <th scope="row"><?php $i++;?></th>
                <td><?php echo  $product['product_name'] ;?></td>
                <td><?php echo  $product['product_description'] ;?></td>
                <td><?php echo  $product['product_price'];?></td>
                <td><?php echo  $product['product_discount']."%"; ?></td>
                <td>
                 <img style="width: 50px; height: 50px;" src="<?php echo 'img/'.$product['product_image']; ?>" alt="">
               </td>
     <td><?php echo  $product['created_at']; ?></td>
     </tr> 
     <?php endforeach;?>
  
  </tbody>
</table>

    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>