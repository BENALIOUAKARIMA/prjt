<?php

class HomeConroller{

    public function index($page) // pour afficher page home
    {
        include('views/'.$page.'.php');
    }
}
// pour afficher page add and delete ... khassni nb9a n3awed nafs function o nb9a nt2aked mn url o n3ayet lnafs les function fe page index ya3ni ghada n3amer controller pour eviter ghadi nkhadmo be variable $page bach fina kant chi page t2aficha automatique bla hadchi



?>