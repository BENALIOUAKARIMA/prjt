<?php
if (isset($_POST['find'])) {
    $data = new MaladeController();
    $malades = $data->findMalades();
} else {
    $data = new MaladeController();
    $malades = $data->getAllMalades();
}
$data = new PaymentController();
$pay = $data->getAllpay();
$payments=count($pay);

$data = new MaladeController();
$pat = $data->getAllMalades();
$patients=count($pat);

$data = new AppointementController();
$App = $data->getAllAppointement();
$appointements=count($App);

$data = new ContactController();
$Con = $data->getAllContact();
$contacts=count($Con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/dashbord.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-user-secret me-2"></i>Welcome <?php echo $_SESSION['name']; ?></div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active text-center"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="<?php echo BASE_URL; ?>home" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center"><i class="fas fa-project-diagram me-2"></i>Patients</a>
                <a href="<?php echo BASE_URL; ?>payment" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center"><i class="fas fa-chart-line me-2"></i>Payments</a>
                <a href="<?php echo BASE_URL; ?>tableappointement" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center"><i class="fas fa-comment-dots me-2"></i>Appointement</a>
                <a href="<?php echo BASE_URL; ?>tablecontact" class="list-group-item list-group-item-action bg-transparent second-text fw-bold text-center"><i class="fas fa-map-marker-alt me-2"></i>Contact</a>
                <a href="<?php echo BASE_URL; ?>logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold text-center"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- /#sidebar-wrapper -->
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>
            <div class="row mx-3 mt-3">
                <div class="col-md-3">
                    <div class="card mb-2 px-2" style="background-color: white ;">
                        <div><i class="fa fa-ambulance h2 mt-3" style="color: #71a7ed;"></i></div>
                        <div class="mt-3">Patients</div>
                        <p style="text-align: right;" class="px-2 mt-2 fw-bold text-secondary"><?php echo $patients;?></p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-2" style="background-color: white; ">
                        <div><i class="bi bi-coin ms-2 h1 mt-3" style="color: #71a7ed;"></i></div>
                        <div class="ms-2 mt-4">Payments</div>
                        <p style="text-align: right;" class="px-2 mt-2 fw-bold text-secondary"><?php echo $payments;?></p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card mb-2" style="background-color:white;">
                        <div><i class="fa fa-heartbeat ms-1 h1 my-3" style="color:#71a7ed;"></i></div>
                        <div class="ms-2">Appointements</div>
                        <p style="text-align: right;" class="px-2 mt-2 fw-bold text-secondary"><?php echo $appointements;?></p>
                    </div>
                </div>

                <div class="col-md-3 mr-5">
                    <div class="card">
                        <div><i class="fas fa-comment-dots ms-1 h2 my-3" style="color:#71a7ed;"></i></div>
                        <div class="ms-2 mt-2 mr-3">Contacts</div>
                        <p style="text-align: right;" class="px-2 mt-2 fw-bold text-secondary"><?php echo $contacts;?></p>
                    </div>
                </div>
            </div>

            <div class="row my-5 mx-2">
                <h3 class="fs-4 mb-3">Recent Patients</h3>
                <div class="col" style="width: 100%; overflow-x: auto;">
                    <table class="table bg-white rounded shadow-sm  table-hover" style="width: 100%; min-width: 500px;">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Type</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($malades as $malade) {
                            ?>
                                <tr>
                                    <th><?php echo $malade['name']; ?></th>
                                    <td><?php echo $malade['email']; ?></td>
                                    <td><?php echo $malade['phone']; ?></td>
                                    <td><?php echo $malade['type']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>

    <script>
        var sidbar = document.getElementById("wrapper"); // sidbar
        var toggleButton = document.getElementById("menu-toggle"); // button de sidbar

        toggleButton.onclick = function() {
            sidbar.classList.toggle("toggled"); // supprimer or afficher sidebar
        };
    </script>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
