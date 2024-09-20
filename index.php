<?php session_start();?>

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
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/responsiveness.css" />
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
      <?php include 'shared/_nav.php';
      ?>
<!-- banner start -->
<div class="container-fluid main_banner img-fluid">
    <div class="row">
        <div class="col-lg-12 text-center" style="margin-top: 100px;">
<?php 
if(!isset($_SESSION['sign_name'])) {
?>
            <h1 class="welcome" data-aos="zoom-in"
            data-aos-duration="1200">WELCOME</h1>
            <?php } else{?>
              <h1 class="welcome" data-aos="zoom-in"
              data-aos-duration="1200">WELCOME <?php echo "<span class='welcome' style='text-transform: capitalize;'>".$_SESSION['sign_name']."</span>"?></h1>
              <?php } ?>
            <h3 class="slogan" data-aos="zoom-in"
            data-aos-duration="1200">Dream, Discover, Explore: Your Trip Starts Here.</h3>
        </div>
    </div>
</div>
<!-- banner end -->


<!-- cards start -->

    <h1 class="text-center mt-5" data-aos="fade-up" data-aos-duration="1200">Upcoming Tours</h1>
     <div class="card-container mt-5">
     <?php
    $conn = mysqli_connect("localhost", "root", "","techwiz")
    or die("Connection failed");
    $sql1 = "SELECT * FROM upcoming_tours";
    $run1 = mysqli_query($conn,$sql1);
    while($data = mysqli_fetch_assoc($run1))
    {
    ?>
      <div class="row">
    <div class="card" style="width: 18rem;" data-aos="fade-up"
    data-aos-delay="200" data-aos-duration="1200">

    <img src="Admin_Panel/<?php  echo $data['tour_image']   ?>" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data['tour_name']?></h5>
    <p class="card-text"><?php echo $data['tour_desc']?></p>
    <a href="pakistan_package.php" class="btn btn-primary">Explore More</a>
  </div>
  </div>
</div>
<?php } ?>
</div>

<!-- personal tour start -->
<div class="video-container mt-5">
  <video src="images/aviation.mp4" type="video/mp4" autoplay muted loop class="aviation"></video>
  <h1 class="aviation-head">Book Your Personal Trip Now!</h1>
  <div class="aviation-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Now</div>
</div>
<!-- personal tour end  -->

<!-- testimonials start -->
 <h1 class="text-center mt-5">What People Say About Us</h1>
<div id="carouselExampleControls" class="carousel align-items-center mt-5 slide " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card text-center card1">
  <div class="card-body test-body">
  <img src="images/test1.jpg" class="d-block test-img align-items-center" alt="...">

    <h5 class="card-title mt-2">Anna Deynah</h5>
    <p class="card-text">I never thought I'd find a tour that understood my needs
    but Expense Voyage was attentive and knowledgeable, making our trip unforgettable
    </p>
    <div class="stars">
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    </div>
  </div>
</div>
    </div>
    <div class="carousel-item">
    <div class="card text-center card1">
  <div class="card-body test-body">
  <img src="images/test2.jpg" class="d-block test-img" alt="...">

    <h5 class="card-title mt-2">Julia Amelia</h5>
    <p class="card-text">This trip change my life. Thankyou for this amazing trip.</p>
    <div class="stars">
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    </div>  </div>
</div>    </div>
    <div class="carousel-item">
    <div class="card text-center card1">
  <div class="card-body test-body">
  <img src="images/test3.webp" class="d-block test-img" alt="...">

    <h5 class="card-title mt-2">Jack Janson</h5>
    <p class="card-text">I've travelled many companies but Expense Voyage stand out for its professionalism.</p>
    <div class="stars">
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    </div>
  </div>
</div>    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="review-btn">
<button class="btn btn-lg bg-primary text-light" data-bs-toggle="modal" data-bs-target="#exampleModal1">Share Your Reviews</button>
</div>


<!-- modal book now-->
<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabe" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="fs-3">Reserve Your Spot Now!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex">
      <div class="container py-3 book_container" data-aos="fade-up"
      data-aos-duration="1200">
      <form action="book_trip.php" method="post">
    <div class="row">
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Trip Name</label>
            <input type="text" name="trip_name" id="name" class="form-control" placeholder="Enter trip name">
         
        </div>
        </div>
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Destination</label>
            <input type="email" name="trip_destination" id="email" class="form-control" placeholder="Enter destination">
            <p id="emailError"></p>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Trip Start Date</label>
            <input type="date" name="trip_start_date" id="date" class="form-control">
            <p id="dateErrors"></p>

        </div>
        </div>
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Trip End Date</label>
            <input type="date" name="trip_end_date" id="leaving" class="form-control">
            <p id="leavingErrors"></p>
        </div>
        </div>
</div>
        <div class="row">
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Total Budget</label>
            <input type="text" name="trip_budget" id="number" class="form-control" placeholder="Enter total budget">
            <p id="numberError"></p>
        </div>
        </div>
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Accomodation Expense</label>
            <input type="text" name="expense_acc" id="number" class="form-control" placeholder="Enter accomodation expense">
            <p id="numberError"></p>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Food Expense</label>
            <input type="text" name="expense_food" id="visit" class="form-control" placeholder="Enter food expense">
            <p id="visitError"></p>
        </div>
        </div>
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Transport Expense</label>
            <input type="text" name="expense_transport" id="address" class="form-control" placeholder="Enter transport expense">
            <p id="addressError"></p>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-12 mt-3">
        <div class="form-group">
            <label>Notes</label>
            <textarea name="trip_notes" id="guest" rows="4" cols="50" class="form-control" placeholder="Additional notes..."></textarea>
            <p id="guestError"></p>
        </div>
        </div>
        </div>

        <input type="submit" name="book_submit" value="Book Trip"
        class="btn btn-primary">
    </form> 
    </div>
</div>
    </div>
  </div>
</div>

<!-- modal Reviews -->
<div class="modal fade" id="exampleModal1" aria-labelledby="exampleModalLabe" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="fs-3">Send us Feedback!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex">
      <div class="container">
  <div class="form">
    <form action="review_trip.php" method="post">
    <div class="row">
      <div class="col-lg-6 my-3">
      <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="review_name" id="name" class="form-control" placeholder="Enter your name">
        </div>
      </div>
      <div class="col-lg-6 my-3">
      <div class="form-group">
            <label>Email</label>
            <input type="text" name="review_email" id="name" class="form-control" placeholder="Enter your name">
        </div>
      </div>
      <div class="row my-3">
        <div class="form-group">
          <label for="">Feedback</label>
        <textarea name="review_area" id="" class="form-control" placeholder="Enter your review"></textarea>
        </div>
      </div>
    </div>
  </div>
  <input type="submit" name="review_submit" value="Send"
  class="btn btn-primary">
  </form>
</div>
   
</div>
    </div>
  </div>
</div>

<?php include 'shared/_footer.php'?>







   