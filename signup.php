<?php
$conn = mysqli_connect("localhost", "root", "","techwiz")
or die("Connection failed");
if(isset($_POST['sign_submit'])) {
    $sign_name = $_POST['sign_name'];
    $sign_email = $_POST['sign_email'];
    $sign_phone = $_POST['sign_phone'];
    $sign_add = $_POST['sign_add'];
    $sign_pass = $_POST['sign_pass'];
    $sign_conf_pass= $_POST['sign_conf_pass'];
    if($sign_pass != $sign_conf_pass) {
        echo "<script>alert('Passwords are not matched');</script>";
        } else {
        $sql = "INSERT INTO tw_users(user_name, user_email, user_phone, 
        user_add,  user_password, user_role_id) VALUES('$sign_name', '$sign_email', '$sign_phone',
        '$sign_add', '$sign_pass', 2)";
        $run = mysqli_query($conn, $sql);
        header("Location: login.php");
    }
    // if ($run) {
    //     echo "<script>alert('You are registered successfully.');
    //     window.location.href='login.php'</script>";
    //   }
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
<div class="signup-container justify-content-center">
    <div class="row">
        <form action="signup.php" method="post">
        <div class="col-lg-6">
            <h1 class="text-center">Sign up</h1>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="sign_name" class="form-control my-3" placeholder="Enter your username">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="sign_email" class="form-control my-3" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="sign_phone" class="form-control my-3" placeholder="Enter your phone">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" name="sign_add" class="form-control my-3" placeholder="Enter your address">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="sign_pass" class="form-control my-3" placeholder="Enter your password">
            </div>

            
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="sign_conf_pass" class="form-control my-3" placeholder="Re-enter your password">
            </div>

            <input type="submit" name="sign_submit" value="Register Now"
            class="btn btn-success">
            <p>Already have an account? <a href="login.php">Login Now</a>
            </p>
        </div>
        </form>
    </div>
</div>
<?php include 'shared/_footer.php'?>
    