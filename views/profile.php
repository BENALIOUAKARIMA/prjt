<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- cdn -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;600&family=Lobster&family=Oleo+Script&family=Oleo+Script+Swash+Caps:wght@400;700&family=PT+Sans:wght@700&family=Pacifico&family=Raleway:wght@300&family=Roboto:wght@400;700&family=Satisfy&family=Tapestry&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="back">
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#052149;">
      <div class="container-fluid">
        <a class="navbar-brand mx-3" href="#" style="color:white; font-size:30px;  font-family: 'rubik', sans-serif;"><span style="color: #71a7ed;">H</span>ealth<span style="color:#71a7ed;">C</span>are</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-end" style="flex-direction: row-reverse;" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?php echo BASE_URL; ?>index" class="nav-link" style="color: white; font-size:20px;  font-family: 'rubik', sans-serif;">Home</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo BASE_URL; ?>appointement" class="nav-link" style="color: white; font-size:20px;  font-family: 'rubik', sans-serif;">appointement</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo BASE_URL; ?>contact" class="nav-link" style="color: white; font-size:20px;  font-family: 'rubik', sans-serif;">Contact</a>
            </li>
            <li class="nav-item">
              <button class="nav-link me-3 rounded" href="#service" style="background-color:#71a7ed; color:white; font-size:20px;  font-family: 'rubik', sans-serif;">Profile</button>
            </li>

          </ul>
        </div>
      </div>
    </nav>
<!-- //////////////////// start section //////////////////////////////////////// -->
    <section>
      <div class="container mt-5" style="box-shadow: 0px 0px 25px black;">
          <div class="row d-flex justify-content-center pb-5">
           <div class="col-md-10 mt-5 pt-5">
           <div class="row z-depth-3">
             <div class="col-sm-4 rounded-left rounded" style="background-color:#052149;">
              <div class="card-block text-center text-white">
               <i class="fas fa-user-tie fa-7x mt-5"></i>
               <h2 class="fw-bold mt-4"><?php echo $_SESSION['name'];?></h2>
              </div>
             </div>
             <div class="col-sm-8 bg-white rounded-right">
               <h2 class="mt-3 text-center">Personal Information</h2>
               <hr class="badge-primary w-50 mx-auto">
               <div class="row">
                   <div class="col-sm-12">
                       <p class="fw-bold text-center">name:</p>
                       <h6 class="text-muted text-center"><?php echo $_SESSION['name'];?></h6>
                   </div>
                
               </div>
               <hr class="bg-primary">
               <div class="row">
               <div class="col-sm-12">
                       <p class="fw-bold text-center">Email:</p>
                       <h6 class="text-muted text-center"><?php echo $_SESSION['email'];?></h6>
                   </div>
                 
               </div>
               <hr class="bg-primary">
                <ul class="list-unstyled d-flex justify-content-center mt-4">
                    <li><a href=""><i class="fab fa-facebook px-3 h4" style="color:#052149;"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter px-3 h4"  style="color:#052149;"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram px-3 h4"  style="color:#052149;"></i></a></li>

                </ul>
             </div> 
           </div>
           </div>
          </div>
      </div>
    </section>
   

</body>


</html>
<!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
