<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


  <div class="container">
    <div class="col-lg-12">
      <h1 class="text-warning text-center">Display data</h1>
      <table class="table table-striped table=hover table-bordered">
        <tr class="bg-dark text-white text-center">
          <th>order_id</th>
          <th>product_name</th>
          <th>product_description</th>
          <th>product_price</th>
          <th>product_quantity</th>
          <th>payment_mode</th>
          <th>order_status</th>
          <th>update</th>
          <th>delete</th>
        </tr>
        <?php
  include('conn2.php');
 
  $q="select * from createorders";
  $query = mysqli_query($con,$q);

  while($result = mysqli_fetch_array($query)){

  
?>
        <tr class="text-center">
          <td> <?php echo $result['order_id']?></td>
          <td><?php echo $result['product_name']?></th>
          <td><?php echo $result['product_description']?></td>
          <td><?php echo $result['product_price']?></td>
          <td><?php echo $result['product_quantity']?></td>
          <td><?php echo $result['payment_mode']?></td>
          <td><?php echo $result['order_status']?></td>
          <td><button class="btn-warning btn"><a href="update.php?order_id=<?php echo $result['order_id']; ?>"
                class="text-white">Update</a></button></td>
          <td><button class="btn-danger btn"><a href="delete.php?order_id=<?php echo $result['order_id']; ?>"
                class="text-white">Delete</a></button></td>

        </tr>

        <?php
}
?>

      </table>
    </div>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>