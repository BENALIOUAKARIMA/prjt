<?php
//pour recuperer les maladies bach n2afichihom fe page
class MaladeController{
     
    public function getAllMalades() // recuperer ga3les malades
    {
        $malades = Malade::getAll();
        return $malades;
        
    }

    //pour update vid 9

    public function getOneMalade(){
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']

            );
            $malade = Malade::getMalade($data);
            return $malade; 
        }
      
    }

    public function findMalades(){
        if (isset($_POST['search'])) { //ila kant 3andi 9ima 3ad ndir recherche
            $data = array('search' => $_POST['search']);
        }
        $malades = Malade::searchMalade($data);
        return $malades;
    }


    //pour ajouter
    public function addMalade()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'type' => $_POST['type'],
                'date' => $_POST['date'],
            );
            //function de model
            $result = Malade::add($data);
            if ($result === 'ok') {
                Session::set('success','the patient has been added');
                Redirect::to('home');
            }else {
                echo $result;
            }
        }
    }
    public function updateMalade()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'type' => $_POST['type'],
                'date' => $_POST['date'],
            );
            //function de model 
            $result = Malade::update($data);
            if ($result === 'ok') {
                Session::set('success','the patient has been modified');
                Redirect::to('home');
            }else {
                echo $result;
            }
        }
    }

    //delete:: vid 11
    public function deletemalade()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Malade::delete($data);
            if ($result === 'ok') {
                Session::set('success','the patient was deleted');
                Redirect::to('home');
            }else {
                echo $result;
            }
        }
    }
} 

?>