
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
<link rel="stylesheet" href="css/user_profile.css">
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
       <div class="row d-flex mt-5 m-auto">
        <div class="container col-lg-5 col-md-5 border border-black w-25">
            <div class="container one ">
               <h2 class="text-center">WELCOME!</h2>
               <input class="ms-5 mb-3" type="text" name="" id="">
            </div>
 
            <div class="container two mt-5 ms-3">
                <img width="250px" src="images/page1.avif" alt="image here " class="img-1">
            </div>

            <div class="container three text-center mt-5 mb-4">
                <a href="" class="profileupdate" data-bs-toggle="modal" data-bs-target="#exampleModal">Profile Update</a><br><br>
                <a href="" class="pfpupdate" data-bs-toggle="modal" data-bs-target="#exampleModal1">Profile Image Update</a><br><br>
                <a href="" class="logout">Log out</a>
            </div>

        </div>
        <div class="container text-center col-lg-7 col-md-7 border border-black">
            <h2 class="mt-5 dash">Dashboard</h2>
          <div class="text-center display">
            <label for="">Username:</label><br><br>
            <input type="text" name="Name appears here" id=""><br><br>
            <label for="">Email:</label><br><br>
            <input type="email" name="Email appears here" id=""><br><br>
            <label for="">Address</label><br><br>
            <input type="address" name="Address appears here" id=""><br><br>
            <label for="">Package</label><br><br>
            <input type="texts" name="Package appears here" id=""><br><br>
          </div>
        </div>
    </div>





    <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-centered" style="width: 200%;">
          <div class="modal-content">
            <div class="modal-header">
              <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            
            <div class="modal-body ms-5">
              <div class="container">
                <h1 class="text-center">Profile Update</h1>
              </div>
               <form action="">
              <div class="container box">
                <div class="mt-3">
                    <label for="">Change Username</label>
                    <input type="text" name="" id="">
                </div>
  
                <div class="mt-3">
                    <label for="">Change Email</label>
                    <input type="email" name="" id="">
                </div>
  
                <div class="mt-3">
                    <label for="">Change Address</label>
                    <input type="address" name="" id="">
                </div>
                
                <div class="container mt-3 mb-2 text-center">
                    <input style="margin-left: -13px;" type="button" value="update">
                </div>

              </div>
            </form>
            </div>

            
          </div>
        </div>
      </div>



      <div class="modal fade" id="exampleModal1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-centered" style="width: 200%;">
          <div class="modal-content">
            <div class="modal-header">
              <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            
            <div class="modal-body ms-5">
              <div class="container">
                <h1 class="text-center">Profile Update</h1>
              </div>
               
              <div class="container mt-5 mb-5">
                <img style="margin-left: 220px" width="250px" src="images/page1.avif" alt="" class="img-1">
              </div>

            </div>

            
          </div>
        </div>
      </div> 

     
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php include 'shared/_footer.php'?>