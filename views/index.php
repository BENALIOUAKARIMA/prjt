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

<body style="overflow-x:hidden ;">
  <div class="back" style="background-image: url(img/1.jpg);background-size: cover; height:100vh; " id="home">
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
        <a class="navbar-brand mx-3" href="#" style="color:white; font-size:30px;  font-family: 'rubik', sans-serif;"><span style="color: #71a7ed;">H</span>ealth<span style="color:#71a7ed;">C</span>are</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-end" style="flex-direction: row-reverse;" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="" class="nav-link" style="color: white; font-size:20px;  font-family: 'rubik', sans-serif;">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" style="color: white; font-size:20px;  font-family: 'rubik', sans-serif;">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="#service" style="color: white; font-size:20px;  font-family: 'rubik', sans-serif;">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="#poste" style="color: white; font-size:20px;  font-family: 'rubik', sans-serif;">Poste</a>
            </li>

            <li class="nav-item">
              <a class="nav-link me-3" href="#contact" style="color: white; font-size:20px;  font-family: 'rubik', sans-serif;">Contact</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- //////////////////// start section //////////////////////////////////////// -->
    <section class="login py-5 mx-3">
      <div class="container-fluid">
        <div class="row">
          <div class=" text-start " style="margin-top:160px;">

            <h1 style="color: #2c3e50 ; color:white; font-family: 'rubik', sans-serif;">Stay Safe, <span style="color: #71a7ed;">Stay</span> Healthly.</h1>
            <h1 style="color: #2c3e50;  color:white; font-family: 'rubik', sans-serif;">Caring For Your Life.</h1>
            <a href="<?php echo BASE_URL; ?>register"><button type="button" class="btn" style="background-color: #0882ea; color:white; margin-top:20px;  font-family: 'rubik', sans-serif;">Get Started</button></a>
          </div>
        </div>
      </div>
    </section>

  </div>


  <section id="about">
    <div class="text-center">
      <h1 class="pt-5" style="color:#009ec5; font-family: 'rubik', sans-serif;" id="about">About</h1>
    </div>
    <div class="container">
      <div class="row mx-5">
        <div class="row my-5">
          <div class="col-md-4 mt-3" id="one">
            <div class="card-body">
              <h5 class="card-title text-center"><i class="fa fa-ambulance"></i></h5>
              <p class="card-text fw-bold text-center" style="color: #003580;">Ambulace servises</p>
              <p class="card-text text-center">means a service in which the patient’s condition requires medical transportation where the use of specialized medical skills and/or equipment is medically necessary and crucial to the safe transportation of the patient</p>
            </div>
          </div>

          <div class="col-md-4 mt-3" style="background-color: #009ec5 ;border-radius: 10px;">

            <div class="card-body">
              <h5 class="card-title text-center"><i class="fa fa-heartbeat" style="color:white ; font-size:40px;"></i></h5>
              <p class="card-text fw-bold text-center" style="color: #003580;">Emergency room</p>
              <p class="card-text text-center" style="color: white;">who takes care of receiving the sick and wounded who present themselves,
                or who are brought by the rescue services, there is a whole network implemented to deal with medical emergencies</p>
            </div>
          </div>


          <div class="col-md-4 mt-3" id="one">
            <div class="card-body">
              <h5 class="card-title text-center"><i class="fa fa-stethoscope"></i></h5>
              <div class="card-text fw-bold text-center mb-3" style="color: #003580;">Free Checkups</div>
              <p class="card-text text-center">After a first crucial part of the interrogation, the doctor examines the patient, then formulates his conclusion. The clinical examination depends on the patient's complaint, as well as the abnormalities noted during the questionnaire</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /////////////////////// Service ///////////////////////////// -->
  <section style="background-color: #003580;">
    <h1 class="text-center pt-3" style="color: white;" id="service">SERVICES</h1>
    <h3 class="text-center m-3" style="font-family: 'rubik', sans-serif; color:#009ec5;">The Skill To Heal.The Spirit To Care</h3>
    <p class="text-center" style="color: #7e91a0;">Lorem ipsum dolor sit amet consectetur adipisicing elit Quae aperiam deserunt voluptatem ad hic distinctio eum laudantium et
      <br> porro unde velit obcaecati, ab quos, at non exercitationem magnam accusamus suscipit?
    </p>
    <div style="background-image: url(./img/k.jpg);height:70vh;" class="d-block mx-auto w-75">
      <h3 class="text-center py-5" style="color: white; font-family: 'rubik', sans-serif;">HOPE LIVES HERE</h3>
    </div>
    <div class="container">
      <div class="row">
        <div class="row py-5">
          <div class="col-sm-3 mt-2">
            <div class="card">
              <div class="card-body">
                <span class="fa fa-star-o sicon" aria-hidden="true" style="font-size: 40px; color:#009ec5;"></span>
                <p class="card-text fw-bold fs-5" style="color:#003580; font-family: 'rubik', sans-serif;"><span class="fw-bold" style="color:black;">01</span> SERVICE 1</p>
                <p class="card-text">Operating room</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mt-2">
            <div class="card">
              <div class="card-body">
                <span class="fa fa-plus-circle sicon" aria-hidden="true" style="font-size: 40px; color:#009ec5;"></span>
                <p class="card-text fw-bold fs-5" style="color:#003580; font-family: 'rubik', sans-serif;"><span class="fw-bold" style="color:black;">02</span> SERVICE 2</p>
                <p class="card-text">Dental surgery</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mt-2">
            <div class="card">
              <div class="card-body">
                <span class="fa fa-heartbeat sicon" aria-hidden="true" style="font-size: 40px; color:#009ec5;"></span>
                <p class="card-text fw-bold fs-5" style="color:#003580; font-family: 'rubik', sans-serif;"><span class="fw-bold" style="color:black;">03</span> SERVICE 3</p>
                <p class="card-text">Neurosurgery</p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 mt-2">
            <div class="card">
              <div class="card-body">
                <span class="fa fa-certificate sicon" aria-hidden="true" style="font-size: 40px; color:#009ec5;"></span>
                <p class="card-text fw-bold fs-5" style="color:#003580; font-family: 'rubik', sans-serif;"><span class="fw-bold" style="color:black;">04</span> SERVICE 4</p>
                <p class="card-text">Medical imaging</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ////////////////// Doctor ///////////////// -->
  <section style="background-color: #009ec5; display: none;" id="post_1">
    <h1 class="text-center pt-5" style="color:#fff;" id="poste">DOCTOR</h1>
    <div id="team">
      <div class="container" id="con">
        <div class="card">
          <div class="imgBx">
            <img src="img/81.jpg" alt="">
          </div>
          <div class="content">
            <h2>card one</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo cum accusamus unde officia quam,
              architecto atque nulla in sunt,
              expedita doloremque consequuntur veritatis nemo!
              Natus sapiente ipsam vitae eius doloremque? </p>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="img/ta2.jpg" alt="">
          </div>
          <div class="content">
            <h2>card one</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo cum accusamus unde officia quam,
              architecto atque nulla in sunt,
              expedita doloremque consequuntur veritatis nemo!
              Natus sapiente ipsam vitae eius doloremque? </p>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="img/ta3.jpg" alt="">
          </div>
          <div class="content">
            <h2>card one</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo cum accusamus unde officia quam,
              architecto atque nulla in sunt,
              expedita doloremque consequuntur veritatis nemo!
              Natus sapiente ipsam vitae eius doloremque? </p>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="img/assistante.jpg" alt="">
          </div>
          <div class="content">
            <h2>card one</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo cum accusamus unde officia quam,
              architecto atque nulla in sunt,
              expedita doloremque consequuntur veritatis nemo!
              Natus sapiente ipsam vitae eius doloremque? </p>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="img/big.jpg" alt="">
          </div>
          <div class="content">
            <h2>card one</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo cum accusamus unde officia quam,
              architecto atque nulla in sunt,
              expedita doloremque consequuntur veritatis nemo!
              Natus sapiente ipsam vitae eius doloremque? </p>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="img/doc.jpg" alt="">
          </div>
          <div class="content">
            <h2>card one</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo cum accusamus unde officia quam,
              architecto atque nulla in sunt,
              expedita doloremque consequuntur veritatis nemo!
              Natus sapiente ipsam vitae eius doloremque? </p>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="img/doctor4.jpg" alt="">
          </div>
          <div class="content">
            <h2>card one</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo cum accusamus unde officia quam,
              architecto atque nulla in sunt,
              expedita doloremque consequuntur veritatis nemo!
              Natus sapiente ipsam vitae eius doloremque? </p>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="img/doc3.jpg" alt="">
          </div>
          <div class="content">
            <h2>card one</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo cum accusamus unde officia quam,
              architecto atque nulla in sunt,
              expedita doloremque consequuntur veritatis nemo!
              Natus sapiente ipsam vitae eius doloremque? </p>

          </div>
        </div>
        <div class="card">
          <div class="imgBx">
            <img src="img/doctor-1.jpg" alt="">
          </div>
          <div class="content">
            <h2>card two</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo cum accusamus unde officia quam,
              architecto atque nulla in sunt,
              expedita doloremque consequuntur veritatis nemo!
              Natus sapiente ipsam vitae eius doloremque? </p>

          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- ///////////////////////// team admin //////////////////////// -->
  <section style=" background: linear-gradient(-100deg,white 50%, #009ec5 50%); height: 70vh; font-size: poppins; height: 90vh;" id="post_2">
    <!-- <h1 class="text-center" id="poste">Team</h1> -->

    <div class="container" id="poste">
      <div class="row">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
            <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-4">
                  <div class="single-box">
                    <div class="img-area"><img src="img/t1.jpg" alt="" srcset=""></div>
                    <div class="img-text">
                      <h2>person one</h2>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit quaerat ea magni eos aliquam? Odio quas facilis nisi blanditiis possimus nemo animi dolore cupiditate atque. Vero totam accusantium ab soluta.</p>
                    </div>
                  </div>

                </div>
                <div class="col-sm-4">
                  <div class="single-box">
                    <div class="img-area"><img src="img/t2.jpg" alt="" srcset=""></div>
                    <div class="img-text">
                      <h2>person two</h2>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit quaerat ea magni eos aliquam? Odio quas facilis nisi blanditiis possimus nemo animi dolore cupiditate atque. Vero totam accusantium ab soluta.</p>
                    </div>
                  </div>

                </div>
                <div class="col-sm-4">
                  <div class="single-box">
                    <div class="img-area"><img src="img/t3.jpg" alt="" srcset=""></div>
                    <div class="img-text">
                      <h2>person three</h2>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit quaerat ea magni eos aliquam? Odio quas facilis nisi blanditiis possimus nemo animi dolore cupiditate atque. Vero totam accusantium ab soluta.</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-sm-4">
                  <div class="single-box">
                    <div class="img-area"><img src="img/t4.jpg" alt="" srcset=""></div>
                    <div class="img-text">
                      <h2>person one</h2>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit quaerat ea magni eos aliquam? Odio quas facilis nisi blanditiis possimus nemo animi dolore cupiditate atque. Vero totam accusantium ab soluta.</p>
                    </div>
                  </div>

                </div>
                <div class="col-sm-4">
                  <div class="single-box">
                    <div class="img-area"><img src="img/t1.jpg" alt="" srcset=""></div>
                    <div class="img-text">
                      <h2>person two</h2>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit quaerat ea magni eos aliquam? Odio quas facilis nisi blanditiis possimus nemo animi dolore cupiditate atque. Vero totam accusantium ab soluta.</p>
                    </div>
                  </div>

                </div>
                <div class="col-sm-4">
                  <div class="single-box">
                    <div class="img-area"><img src="img/t2.jpg" alt="" srcset=""></div>
                    <div class="img-text">
                      <h2>person three</h2>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit quaerat ea magni eos aliquam? Odio quas facilis nisi blanditiis possimus nemo animi dolore cupiditate atque. Vero totam accusantium ab soluta.</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
  </section>
  <!-- /////////////////////contact///////////////////////////////// -->

  <section style="background-color:#003580;">
    <h1 class="text-center p-5" style="color:#009ec5;" id="contact">Get In Touch</h1>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <form>
            <div class="mb-5">
              <input type="text" id="first_input" name="fist" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" required>
            </div>
            <div class="mb-5">
              <input type="text" id="second_input" name="last" class="form-control" id="exampleInputPassword1" placeholder="last Name" required>
            </div>
            <div class="mb-5">
              <input type="text" id="three_input" name="doctor" class="form-control" id="exampleInputPassword1" placeholder="Doctor" required>
            </div>
            <div class="mb-5">
              <input type="text" id="four_input" name="service" class="form-control" id="exampleInputPassword1" placeholder="Service" required>
            </div>
            <div class="mb-5">
              <input type="text" id="five_input" name="message" class="form-control" id="exampleInputPassword1" placeholder="Your Message" required>
            </div>
            <button type="submit" class="btn btn" style="background-color:#009ec5; color:white; margin-bottom:60px;">SEND</button>
          </form>
        </div>
        <div class="col-1">
        </div>
        <div class="col-sm-5">
          <h2 class="text-center" style="color: white;">Contact Information</h2>
          <p class="mt-4" style="color:#7e91a0;">"Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industriescommon name dummy text often used in the design, printing, and type setting industries Lorem Ipsum"is the common name dummy text often used in the design, printing, and type setting industries Lorem Ipsum"is the common name dummy text often ,"</p>
          <div class="mt-5">
            <p style="color:#009ec5;"><i class="bi bi-geo-alt-fill" style="color: white;"></i> 756 Place, El Jadida.</p>
            <p style="color:#009ec5;"><i class="bi bi-envelope-fill" style="color: white;"></i> gmail@exemple.com</p>
            <p style="color:#009ec5;"><i class="bi bi-telephone-fill" style="color: white;"></i> +212 678959494</p>
          </div>
          <div class="mt-5">
            <i class="bi bi-facebook me-3" style="color:white;"></i>
            <i class="bi bi-twitter me-3" style="color:white;"></i>
            <i class="bi bi-instagram me-3" style="color:white;"></i>
            <i class="bi bi-linkedin me-3" style="color:white;"></i>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ///////////////////////////////////footer//////////////////////////////////// -->

  <footer style="background-color:#052149;">
    <h1 class="text-center py-3" style="color: white;"><span style="color:#71a7ed;">H</span>ealth<span style="color:#71a7ed;">C</span>are</h1>
    <p class="text-center mb-0" style="color: white; padding-bottom: 60px;">© 2022 healthcare. All rights reserved | Design by healthcare</p>
  </footer>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>


</html>
<!-- <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>