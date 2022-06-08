<?php
// $data = new MaladeController();

// // cree objt mn class maladecontroller 

// $malades = $data->getAllMalades(); // recuperer les malades

if (isset($_POST['find'])) {
    $data = new AppointementController();
    $malades = $data->findAppointement();
}else {
    $data = new AppointementController();
    $malades = $data->getAllAppointement();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-image:url(img/jiu.jpg); background-size: cover; background-attachment: fixed;">

<nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
      <div class="container-fluid">
        <a class="navbar-brand mx-3" href="#" style="font-family: 'rubik', sans-serif;"><span style="color: #71a7ed;">H</span>ealth<span style="color:#71a7ed;">C</span>are</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-end" style="flex-direction: row-reverse;" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="" class="nav-link" style=" font-family: 'rubik', sans-serif;">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link" style="font-family: 'rubik', sans-serif;">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="#service" style="font-family: 'rubik', sans-serif;">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="#poste" style="font-family: 'rubik', sans-serif;">Poste</a>
            </li>

            <li class="nav-item">
              <a class="nav-link me-3" href="#contact" style="font-family: 'rubik', sans-serif;">Contact</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    

    <!-- ///////////////////////// start body ///////////////////// -->
    <h1 class="text-center my-3"><span style="color:#0c96f1">'</span>List Appointment<span style="color:#0c96f1">'</span></h1>
   
<!-- pour retour lhome -->

<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mx-2"><i class="fas fa-home"></i></a>

<?php
include ('./views/includes/alerts.php');
?>
 <a href="<?php echo BASE_URL;?>logout" title="deconnexion" class="btn btn-sm btn-link mx-2"> <i class="fas fa-user mr-2"> <?php echo $_SESSION['name'];?></i></a>

<form class="d-flex flex-row" style="float: right;" method="POST">
    <input type="text" class="form-control" name="search" placeholder="recherche">
    <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
</form>

<table class="table my-5">
    <thead style="color:gray;">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Service</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

    <?php
    foreach ($malades as $malade){
    ?>
     <tr>
                <th scope="row"><?php echo $malade['name'];?></th>
                <td><?php echo $malade['email'];?></td>
                <td><?php echo $malade['phone'];?></td>
                <td><?php echo $malade['service'];?></td >
                <td><?php echo $malade['date'];?></td>
                <td class="d-flex flex-row">
                    <form method="POST" action="updateapp">
                        <!-- envoyer id de malade pour modifier et envoyer dans la page de modification -->
                        <input type="hidden" name="id" value="<?php echo $malade['id'];?>"> 
                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                    </form>
                   
                </td>
            </tr>
<?php
}
?>
   
<!-- pour afficher fe page wa7da include fe home
o bach it2aficha fe ga3 les pages include fe index -->

    </tbody>
</table>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>