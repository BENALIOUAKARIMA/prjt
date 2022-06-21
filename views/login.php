<?php
if (isset($_POST['submit'])) {
    $signinUser = new UsersController();
    $signinUser->role=$_POST['role'];
    $signinUser->log();
}
?>
<!-- background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("img/univ.jpg"); -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/test.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="margin-left: 30px;"><span style="color: #0c96f1;">H</span>ealth<span style="color:#0c96f1;">C</span>are</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse float-end" style="flex-direction: row-reverse;" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" style="margin-right:40px ;" href="<?php echo BASE_URL; ?>index">Reception</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="d-flex justify-content-center gap-3">
        <div class="col-md-3 d-sm-block d-none">
            <h1 class="text-center" style="margin-top:160px;">Email</h1>
            <h2 class="text-center">Password</h2>
        </div>
        <form method="POST" action="" class="col-md-4 px-4 h-auto" style="background-color: rgb(188, 223, 250,0.8); margin-top:50px;">
            <h3 class="text-center" style="margin-top: 55px;">Log in</h3>
            <?php include('./views/includes/alerts.php'); ?>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" style="background: transparent;">
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" style="background: transparent;">
            <select class="form-select mt-3" name="role" aria-label="Default select example" style="background: transparent;" required>
                <option selecte>Open this select menu</option>
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
            <input type="checkbox" class="mt-4"> <small class="fw-bold" style="font-size:17px; color:white;">Remember Me</small> <br>
            <button type="submit" name="submit" class="btn btn-info mt-4 w-100" style=" font: size 20px;" onClick="javascript:test();">Log in <i class="bi bi-box-arrow-in-right"></i></button>
            <hr>
            <div class="px-3">forget password!!<a href="<?php echo BASE_URL; ?>register" class="btn btn-link" style="color:white;">SignUp Here</a></div>
        </form>
    </div>
</body>

</html>
    <script>
        function test() {
            if (document.getElementById('email').value == "" || document.getElementById('password').value == "" || document.getElementById('confirm').value == "") {
                //    if input est vide
                alert("Remplire les chemps");
            }
            
        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>