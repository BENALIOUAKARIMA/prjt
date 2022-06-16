<?php
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php'; //jbed liya homecontroller

// 1 er crrer obj mn class homecontroller

$home = new HomeConroller();  //instensi obj mn class homecontroller et appeler function index

// pour afficher les pages 3la 7ssab url li 3andi ghada ndir variable 3ibara 3la array li fih les pages dyali

$pages = ['index', 'register', 'login', 'poste', 'payment', 'home', 'add', 'addpay', 'appointement', 'tableappointement','deleteappointement',  'updatepay', 'updateapp', 'deletecomment', 'update', 'delete', 'deletepay', 'profile', 'tablecontact', 'contact', 'dashbord', 'logout'];

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) { // ila kan mlogi 3ad dir liya hadchi //3ad dkhol
    //pour tester les page ghadi nkhadmo be variable li 3andna fe function li fe controller
    if (isset($_GET['page'])) { // function in_array kat9aleb 3la array
        if (in_array($_GET['page'], $pages)) { //if (in_array($_GET['age'],$pages)) 9aleb liya 3la age wach kayna fe array $pages
            $page = $_GET['page'];
            $home->index($page);
        } else {
            include('views/includes/404.php');
        }
    } else {
        $home->index('index'); //ila ma kant hta haja mn hadchi rj3ni lpage home
    }

    // htaccess bach nt7Akmo fe url
    // fe blast ma nktbo haka http://localhost/hosmvc/index.php/?page=delete*
    // kanktbo haka http://localhost/hosmvc/index.php/delete
    // RewriteRule ^([-a-zA-Z0-9]+)$ index.php?page=$1  hado -a-zA-Z0-9 kitsmaw regulaire expressions $1 ya3ni parametre li ghadi ikon mn be3d = ya3ni ?page=delet fe blast delet kitkhad $1




    // require_once './views/includes/footer.php';

    //vid 14


} elseif (isset($_GET['page']) && $_GET['page'] === 'register') { // user non connecter tester page bach n2afichi page iscription
    $home->index('register'); // affichi register
} elseif (isset($_GET['page']) && $_GET['page'] === 'login') { 
    $home->index('login'); 
} else {
    $home->index('index'); //sir mobachara index

}
