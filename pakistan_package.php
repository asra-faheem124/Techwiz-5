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
     <link rel="stylesheet" href="css/pak.css">
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

<!-- <div class="pak-main">
  <img src="images/pak-1.jpg" class="back-image"> 

    <div class="text-overlay">
        <h1>A Trip To Pakistan</h1>
        <h3 class="mt-3 fw-5">The Land of Unparalled Beauty</h3>
    </div>
</div> -->

<div class="video-container mt-5">
  <video src="images/pak.mp4" type="video/mp4" autoplay muted loop class="aviation"></video>
  <h1 class="aviation-head">Explore Pakistan</h1>
  <div class="aviation-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Book Now</div>
</div>

<section class="tour-details">
    <div class="container">
        <h2>Pakistan Tour Overview</h2>
        <p>Pakistan is home to breath taking Landscape, rich culture, and historical landmarks. From the stunning valleys of Hunza and Skardu, this tour offers a perfect blend of tour adventure and relaxation.</p>
    </div>
</section>


<section class="overview">
    <div class="container">
        <!-- <h2>Tour OverView</h2> -->
        <p class="text-center">Tour Package: Northern Pakistan Adventure (7 Days, 6 Nights)</p>
<?php
$conn = mysqli_connect("localhost", "root", "","techwiz")
or die("Connection failed");
$sql = "SELECT * FROM pak_package";
    $run = mysqli_query($conn,$sql);
    while($data = mysqli_fetch_assoc($run))
    {
?>
        <div class="overview-grid">
            <div class="overview-item" style="height: 150px">
            <img src="../Admin_Panel/images/<?php echo $data['pak_image']?>"  class="card-img-top">
            <h3><?php echo $data['pak_name']?></h3>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<section>
<h1 class="text-center">Day by Day Itinerary</h1>
    <div class="container plan mt-5">
     <div class="row justify-content-evenly">
        <div class="card tour-card col-lg-3 ms-5">
            <div class="card-body">
                <h5 class="text-center">DAY 1</h5>
                <div class="card-title">
                    <p><b>Arrival :Islamabad International Airport</b></p>
                    <p><b>Travel:</b>Private transport form Islamabad to Naran</p>
                    <b>Highlights:</b>
                    <ul>
                             <li>Stop at Abbottabad for a short tea break</li>
                             <li>Visit the scenic Balakot Valley</li>
                             <li>Check-in at Naran Hotel</li>
                             <li>Evening stroll along the Kunhar River</li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="card tour-card col-lg-3 ms-5">
            <div class="card-body">
                <h5 class="text-center">DAY 2</h5>
                <div class="card-title">
                    <p><b>Naran To Saiful Mulook</b></p>
                    <b>Highlights:</b>
                    <ul>
                             <li>Enjoying boating and photography at the lake with snow-capped mountains</li>
                             <li>Return To Naran by afternoon</li>
                             <li>Visit Babusar Pass for stunning panoramic views</li>
                             <li>Evening leisure time in naran</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card tour-card col-lg-3 ms-5 ">
            <div class="card-body">
                <h5 class="text-center">DAY 3</h5>
                <div class="card-title">
                    <p><b>Naran to Shogran (via Kaghan Valley)</b></p>
                    <b>Highlights:</b>
                    <ul>
                             <li>Drive through Kaghan valley through mountain views</li>
                             <li>Jeep ride to Siri Pie meadows in Shogran for Hiking and panoramic views of the valley</li>
                             <li>Enjoy a picnin lunch amidst alpine meadows</li>                    </ul>
                </div>
            </div>
        </div>
     </div>

     <div class="row justify-content-evenly">
        <div class="card tour-card col-lg-3 ms-5">
            <div class="card-body">
                <h5 class="text-center">DAY 4</h5>
                <div class="card-title">
                    <p><b>Shogran to Nathiagali (-3.5hours) </b></p>
                    
                    <b>Highlights:</b>
                    <ul>
                             <li>Scenic drive through Ayubia National Park</li>
                             <li>Visit the famous Mushkpuri Top, a 2-hour hike with stunning views</li>
                             <li>Check-in at Nathiagali hotel and explore the local bazaar</li>
                             <li>Evening Walk along the Nathiagali pine forest </li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="card tour-card col-lg-3 ms-5">
            <div class="card-body">
                <h5 class="text-center">DAY 5</h5>
                <div class="card-title">
                    <p><b>Nathiagali to Murree (-1hour)</b></p>
                    <b>Highlights:</b>
                    <ul>
                             <li>Visit Patriata (new Murree) for chairlift and cable car rides offering aesthetic views of hill</li>
                             <li>Exploring Mall Road Murree, one of the famous Murree place</li>
                             <li>Short Visit for Kashmir Point for a panoramic view</li>
                            
                    </ul>
                </div>
            </div>
        </div>

        <div class="card tour-card col-lg-3 ms-5 ">
            <div class="card-body">
                <h5 class="text-center">DAY 6</h5>
                <div class="card-title">
                    <p><b>Murree to Islamabad</b></p>
                    <b>Highlights:</b>
                    <ul>
                             <li>Visit the Daman-e-Koh, a picnic spot and lookout in the Margalla Hills</li>
                             <li>Explore the Pakistan Monument & Museum </li>
                             <li>VIsit to the world largest mosque<b> "Shah Faisal Mosque"</b></li>             
                          </ul>
                </div>
            </div>
        </div>
     </div>
    </div>
 </section>

<section>
    <div class="container inc-exc mt-5">
        <div class="row justify-content-evenly">
            <div class="col-lg-4 mt-3">
                <h2 class="text-center mt-3">Inclusions</h2>
                <ul>
                    <li>5 nights accomodation in 3-4 star-hotels(based on twin sharing)</li>
                    <li>Private transport (air-conditioned) with a driver</li>
                    <li>Daily meals (breakfast, lunch and dinner)</li>
                    <li>Local guide for all sight seeing</li>
                    <li>Jeep ride to Lake Saiful Mulook and Siri Paye Meadows</li>
                    <li>Chairlift/cable car tickets at Patriata</li>
                    <li>Entry fees for all parks and mornuments</li>
                </ul>
            </div>

            <div class="col-lg-4">
                <h2 class="text-center">Exclusions</h2>
                <ul>
                    <li>Airfare to/from Islamabad</li>
                    <li>Personal expenses(souvenirs, extra snacks)</li>
                    <li>Travel insurance (recommended)</li>
                    <li>Tips for guides and drivers</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5">
       <h3><b>Total Cost:</b></h3>   
       <p>Starting from PKR 120,000/- per person</p> 
    </div>
</section>

<section class="tour-details">
    <div class="container-fluid">
        <h2>Avail this amazing trip before it expires</h2>
<a href="" data-bs-toggle="modal" data-bs-target="#exampleModal1"><button class="btn btn-primary">Book Now!</button></a>    </div>
</section>
<!-- modal Reviews -->
<div class="modal fade" id="exampleModal1" aria-labelledby="exampleModalLabe" aria-hidden="true">
  <div class="modal-dialog modal-lg  modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
      <h1 class="fs-3">Book Now</h1>
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
            <input type="text" name="availbook_name" id="name" class="form-control" placeholder="Enter your name">
        </div>
      </div>
      <div class="col-lg-6 my-3">
      <div class="form-group">
            <label>Email</label>
            <input type="text" name="availbook_email" id="name" class="form-control" placeholder="Enter your email">
        </div>
      </div>
      <div class="col-lg-6 my-3">
      <div class="form-group">
            <label>Phone</label>
            <input type="text" name="availbook_phone" id="name" class="form-control" placeholder="Enter your phone">
        </div>
      </div>
      <div class="col-lg-6 my-3">
      <div class="form-group">
            <label>Country Name</label>
            <input type="text" name="availbook_country" id="name" class="form-control" placeholder="Enter country name you're booking for">
        </div>
      </div>
      <div class="row my-3">
        <div class="form-group">
          <label for="">Additional Message</label>
        <textarea name="availbook_addi" id="" class="form-control" placeholder="Enter additional instructions"></textarea>
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