<?php
$conn = mysqli_connect("localhost", "root", "","techwiz")
or die("Connection failed");

session_start();
if(isset($_POST['login_submit'])) {
    $login_email = $_POST['login_email'];
    $login_pass = $_POST['login_pass'];
  $sql = "SELECT* FROM tw_users WHERE user_email = '{$login_email}' AND user_password = '{$login_pass}'";
  $run = mysqli_query($conn,$sql) or die("Query Unsuccessful");
  $row = mysqli_fetch_assoc($run);
  if(mysqli_num_rows($run) > 0) {
    if($row['user_role_id'] == 1) {
        $_SESSION['sign_id'] = $row['user_id'];
      $_SESSION['sign_name'] = $row['user_name'];
      $_SESSION['sign_email'] = $row['user_email'];
      $_SESSION['sign_phone'] = $row['user_phone'];
      $_SESSION['sign_add'] = $row['user_add'];
      $_SESSION['sign_pass'] = $row['user_password'];
      $_SESSION['sign_role_id'] = $row['user_role_id'];
      header("Location:../Admin_Panel/html/index.php");
    } else {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
      $_SESSION['sign_id'] = $row['user_id'];
      $_SESSION['sign_name'] = $row['user_name'];
      $_SESSION['sign_email'] = $row['user_email'];
      $_SESSION['sign_phone'] = $row['user_phone'];
      $_SESSION['sign_add'] = $row['user_add'];
      $_SESSION['sign_pass'] = $row['user_password'];
      $_SESSION['sign_role_id'] = $row['user_role_id'];
      echo "<script>alert('You are logged in successfully.');
      window.location.href='index.php'</script>";
    }
  } else {
    echo "<script> alert ('Login Denied: Invalid Email or Password.') </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Expense Voyage</title>
    <link rel="shortcut icon" href="images/logo.png" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <!-- bootstrap css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
   
    <!-- css -->
    <link rel="stylesheet" href="css/user_auth.css">
    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
<?php include('shared/_nav.php')?>
<div class="container justify-content-center">
    <div class="row">
        <form action="" method="post">
        <div class="col-lg-6">
            <h1 class="text-center">Login</h1>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="login_email" class="form-control my-3" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="login_pass" class="form-control my-3" placeholder="Enter your password">
            </div>

            <input type="submit" name="login_submit" value="Login Now"
            class="btn btn-success">
            <p>Don't have an account? <a href="signup.php">Signup Now</a>
            </p>
        </div>
        </form>
    </div>
</div>
<?php include 'shared/_footer.php'?>
    