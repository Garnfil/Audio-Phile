<?php 
session_start();
include 'config.php';
//if the user try to locate this server using url
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: index.html');
    exit;
}
$userid = $_SESSION['uniqueid'];

if (isset($_POST['sign_up'])) {
 $errors = array('email'=>"",'fullname'=>"");
  $user_name = mysqli_real_escape_string($conn,$_POST['fullname']);
  $user_email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $uniqueid = rand(10000,100000);
  $password = password_hash($password, PASSWORD_DEFAULT);

  if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email must be a valid email';
  }
  if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $user_name)) {
    $errors['fullname'] = 'Your name must be Letters only';
  }
  
  if (array_filter($errors)) {
    //No Errors
  } else {
    $sql = "INSERT INTO customers(unique_id,fullname,email,password) VALUES('$uniqueid','$user_name','$user_email','$password')";
      
      if (mysqli_query($conn,$sql)) {
        header('location: /signin.html');
      } else{
        echo 'Error Query: ' . mysqli_error($conn);
      }
  }
}

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $s = "SELECT * FROM customers WHERE email = '$email'";
  $query = mysqli_query($conn,$s);
  if (mysqli_num_rows($query) > 0) {
    while($row = mysqli_fetch_array($query)) {
      if (password_verify($password, $row['password'])) {
        $_SESSION['uniqueid'] = $row['unique_id'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION ['email'] = $row['email'];
        header('location: home.php');
      } else {
        echo '<script>alert("Wrong Password")</script>';
        header('location: ../signin.html');
      }
    }
  }
}


//if the user click the add to cart button
if (isset($_POST['add_cart'])) {
  if ($_SESSION['uniqueid'] == '') {
    header('location: /signin.html');
  } else{
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $product_image = mysqli_real_escape_string($conn, $_POST['product_image']);
    $total = $product_price * $quantity;
    
    $i = "INSERT INTO carts(user_id,product_name,price,quantity,product_image,total) VALUES('$userid','$product_name','$product_price','$quantity','$product_image','$total')";
    
    if (mysqli_query($conn,$i)) {
      header('location: cart.php');
    } else{
      echo 'Error Query: ' . mysqli_error($conn);
    }
  }
}


if (isset($_POST['delete'])) {
  $itemid = $_POST['id'];
  
  $d = "DELETE FROM carts WHERE cart_item_id = '$itemid'";
  $query = mysqli_query($conn,$d);
  
  if (!$query) {
    echo 'ERROR QUERY: ' . mysqli_error($conn);
  } else{
    header('location: cart.php');
  }
}

// fetch all cart where the selected id is same in url id and display in cart page
$select = "SELECT * FROM carts WHERE user_id = '$userid'";

$query = mysqli_query($conn,$select);
$carts = mysqli_fetch_all($query, MYSQLI_ASSOC);


//if the users logout their account 
 if($_GET['action'] == 'logout') {
  session_unset();
  session_destroy();
  header('location: /index.html');
}

?>