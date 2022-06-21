<?php
if (isset($_POST['submit'])) {
    $creatUser = new AppointementController();
    $creatUser->Appointement();
}
?>
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
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/home.css">
</head>

<body style="background-image:url(img/89.jpg); background-size: cover; overflow:hidden;">
  <!-- ///////// navbar//////////// -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand mx-3" href="#" style="font-family: 'rubik', sans-serif;"><span style="color: #71a7ed;">H</span>ealth<span style="color:#71a7ed;">C</span>are</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-end" style="flex-direction: row-reverse;" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a  href="<?php echo BASE_URL; ?>index" class="nav-link" style="font-family: 'rubik', sans-serif;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3"  href="<?php echo BASE_URL; ?>profile" style="font-family: 'rubik', sans-serif;">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3"  href="<?php echo BASE_URL; ?>contact" style="font-family: 'rubik', sans-serif;">Contact</a>
            </li>
            <li class="nav-item">
              <button class="nav-link rounded" style="color: white; background-color:#71a7ed;font-family: 'rubik', sans-serif;">Appointement</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <!-- ///////////////// start section ///////////////// -->
  <section>
    <h1 class="text-center p-3" style="color:#009ec5;" id="contact">Make an appointment</h1>
    <?php include('./views/includes/alerts.php'); ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <form method="POST">
            <div class="mb-5">
              <input type="text" id="first_input" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First and Last Name" required style="color: white;">
            </div>
            <div class="mb-5">
              <input type="email" id="second_input" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" required style="color: white;">
            </div>
            <div class="mb-5">
              <input type="number" id="three_input" name="phone" class="form-control" id="exampleInputPassword1" placeholder="phone" required style="color: white;">
            </div>
            <div class="mb-5">
              <input type="text" id="four_input" name="service" class="form-control" id="exampleInputPassword1" placeholder="Service" required style="color: white;">
            </div>
            <div class="mb-5">
              <input type="date" id="five_input" name="date" class="form-control" id="exampleInputPassword1" placeholder="MM/DD/YYYY" required style="color: white;">
            </div>
            <button type="submit" name="submit" class="btn btn" style="background-color:#009ec5; color:white; margin-bottom:60px;">SEND</button>
          </form>
        </div>
        <div class="col-1">
        </div>
        <div class="col-sm-5">
          <h2 class="text-center" style="color: #003580;">Better health Care</h2>
          <p class="mt-4" style="color:#7e91a0;">"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type setting industries Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industries Lorem Ipsum"is the common name dummy text often ,"</p>
          <div class="mt-5">
            <p style="color:#003580;"> <i class="bi bi-geo-alt-fill" style="color: white;"></i> 756 Place, El Jadida.</p>
            <p style="color:#003580;"> <i class="bi bi-envelope-fill" style="color: white;"></i> gmail@exemple.com</p>
            <p style="color:#003580;"> <i class="bi bi-telephone-fill" style="color: white;"></i> +212 666378292</p>
          </div>
          <div class="mt-5 mb-5">
            <i class="bi bi-facebook me-3" style="color:white;"></i>
            <i class="bi bi-twitter me-3" style="color:white;"></i>
            <i class="bi bi-instagram me-3" style="color:white;"></i>
            <i class="bi bi-linkedin me-3" style="color:white;"></i>
          </div>
        </div>
      </div>

    </div>
  </section>

  <script src="js/bootstrap.bundle.min.js"></script>

</body>


</html>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>