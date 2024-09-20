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
      <?php include 'shared/_nav.php'?>
<!-- banner start -->
<div class="container-fluid main_banner img-fluid">
    <div class="row">
        <div class="col-lg-12 text-center" style="margin-top: 200px;">
            <h1 class="welcome" data-aos="zoom-in"
            data-aos-duration="1200">WELCOME USERNAME</h1>
            <h3 class="slogan" data-aos="zoom-in"
            data-aos-duration="1200">Dream, Discover, Explore: Your Trip Starts Here.</h3>
        </div>
    </div>
</div>
<!-- banner end -->


<!-- cards start -->

    <h1 class="text-center mt-5" data-aos="fade-up" data-aos-duration="1200">Upcoming Tours</h1>
     <div class="card-container mt-5">
    <div class="card" style="width: 18rem;" data-aos="fade-up"
    data-aos-delay="200" data-aos-duration="1200">
  <img src="images/card-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Pakistan</h5>
    <p class="card-text">A Nature's Love Paradise</p>
    <a href="pakistan_package.php" class="btn btn-primary">Explore  More</a>
  </div>
</div>

<div class="card" style="width: 18rem;" data-aos="fade-up"
data-aos-delay="200" data-aos-duration="1200">
  <img src="images/italy.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Italy</h5>
    <p class="card-text">Explore Italy's Hidden Coastlines</p>
    <a href="#" class="btn btn-primary">Explore  More</a>
  </div>
</div>

<div class="card" style="width: 18rem;" data-aos="fade-up"
data-aos-delay="200" data-aos-duration="1200">
  <img src="images/India.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">India</h5>
    <p class="card-text">Discover the Land of Diversity</p>
    <a href="#" class="btn btn-primary">Explore  More</a>
  </div>
</div>
</div>
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
      <form>
    <div class="row align-items-center">
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="book_name" id="name" class="form-control" placeholder="Enter your name">
         
        </div>
        <p id="nameError"></p>
        </div>
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="book_email" id="email" class="form-control" placeholder="Enter your email">
            <p id="emailError"></p>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="book_phone" id="number" class="form-control" placeholder="Enter your number">
            <p id="numberError"></p>
        </div>
        </div>
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="book_address" id="address" class="form-control" placeholder="Enter your address">
            <p id="addressError"></p>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Where To</label>
            <input type="text" name="book_where" id="visit" class="form-control" placeholder="Place you want to visit">
            <p id="visitError"></p>
        </div>
        </div>
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Number of guests</label>
            <input type="text" name="book_guests" id="guest" class="form-control" placeholder="Number of Guests">
            <p id="guestError"></p>
        </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Arrivals</label>
            <input type="date" name="book_arrivals" id="date" class="form-control">
            <p id="dateErrors"></p>

        </div>
        </div>
        <div class="col-lg-6 mt-3">
        <div class="form-group">
            <label>Leaving</label>
            <input type="date" name="book_leaving" id="leaving" class="form-control">
            <p id="leavingErrors"></p>
        </div>
        </div>
        </div>
        <input type='submit' value="Book Now" name="book_submit" class="btn btn-primary mt-3" id="tripBookBtn">
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
        <textarea name="review_area" id="" class="form-control">Send us your feedback</textarea>
        </div>
      </div>
    </div>
  </div>
  <input type='submit' value="Send Now" name="review_submit" class="btn btn-primary mt-3" id="tripBookBtn">

</div>
   
</div>
    </div>
  </div>
</div>



  <!-- script for animation -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 2,
      });
    </script>

<?php include 'shared/_footer.php'?>







   