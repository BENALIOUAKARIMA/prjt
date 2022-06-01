<!-- afficher les messages et recuperer session o ntester chno kayn fiha -->
<?php
if (isset($_COOKIE['success'])) {
    echo '<div class="text-success text-center">'.$_COOKIE['success'].'</div>';
}

if (isset($_COOKIE['error'])) {
    echo '<div class="alert alert-danger">'.$_COOKIE['error'].'</div>';
}


if (isset($_COOKIE['info'])) {
    echo '<div class="alert alert-info">'.$_COOKIE['info'].'</div>';
}



?>