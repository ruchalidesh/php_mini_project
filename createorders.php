<?php
session_start();
include('conn2.php');
if(!isset($_SESSION['name'])){
  header('location:login.php');
}
if(isset($_POST['submit'])){

  $product_name = $_POST['product_name'];
  $product_description = $_POST['product_description'];
  $product_price = $_POST['product_price'];
  $product_quantity = $_POST['product_quantity'];
  $payment_mode = $_POST['payment_mode'];
  $order_status = $_POST['order_status'];
  
  $q="INSERT INTO createorders (`product_name`, `product_description`, `product_price`, `product_quantity`, `payment_mode`, `order_status`) VALUES ('$product_name', '$product_description','$product_price','$product_quantity', '$payment_mode', '$order_status')";

  $query = mysqli_query($con,$q);

  header('location:showorders.php');
}
?>


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
    <div class="row">
      <div class="col-xs-6 mr-auto">
        <br><br>
        <h2 class="text-center bg-dark text-white"> welcome <?php echo $_SESSION['name'];?>
        </h2>
        <a href="logout.php">LOGOUT</a>
      </div>
      <div class="col-lg-6 ml-auto">
        <form method="post">
          <div class="card">
            <div class="card-header bg-dark">
              <h1 class="text-white text-center">give your order</h1>
            </div>
            <label>Product_Name:</label>
            <input type="text" name="product_name" class="form-control">
            <label>Product_description:</label>
            <input type="text" name="product_description" class="form-control">
            <label>Product_price:</label>
            <input type="text" name="product_price" class="form-control">
            <label>Product_quantity:</label>
            <input type="text" name="product_quantity" class="form-control">
            <label>Payment_mode:</label>
            <input type="text" name="payment_mode" class="form-control">
            <label>order_status:</label>
            <input type="text" name="order_status" class="form-control"><br>

            <button class="btn btn-success" type="submit" name="submit">submit</button>
          </div>
        </form>
      </div>
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