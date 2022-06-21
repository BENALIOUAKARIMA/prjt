<?php
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';

$home = new HomeConroller(); 

$pages = ['index', 'register', 'login', 'poste', 'payment', 'home', 'add', 'addpay', 'appointement', 'tableappointement','deleteappointement',  'updatepay', 'updateapp', 'deletecomment', 'update', 'delete', 'deletepay', 'profile', 'tablecontact', 'contact', 'dashbord', 'logout'];

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) { 
    if (isset($_GET['page'])) { // function cherche array
        if (in_array($_GET['page'], $pages)) { 
            $page = $_GET['page'];
            $home->index($page);
        } else {
            include('views/includes/404.php');
        }
    } else {
        $home->index('index');
    }


} elseif (isset($_GET['page']) && $_GET['page'] === 'register') { 
    $home->index('register'); // afficher register
} elseif (isset($_GET['page']) && $_GET['page'] === 'login') { 
    $home->index('login'); 
} else {
    $home->index('index');

}
