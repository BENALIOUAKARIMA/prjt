<?php
//pour recuperer les maladies bach n2afichihom fe page
class AppointementController{
     
    public function getAllAppointement() // recuperer ga3les malades
    {
        $malades = Appoint::getAll();
        return $malades;
        
    }

    //pour update vid 9

    public function getOneAppointement(){
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']

            );
            $malade = Appoint::getMalade($data);
            return $malade; 
        }
      
    }

    public function findAppointement(){
        if (isset($_POST['search'])) { //ila kant 3andi 9ima 3ad ndir recherche
            $data = array('search' => $_POST['search']);
        }
        $malades = Appoint::searchMalade($data);
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
                'service' => $_POST['service'],
                'date' => $_POST['date'],
            );
            //function de model
            $result = Appoint::add($data);
            if ($result === 'ok') {
                Session::set('success','the patient has been added');
                Redirect::to('tableappointement');
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
                'service' => $_POST['service'],
                'date' => $_POST['date'],
            );
            //function de model 
            $result = Appoint::update($data);
            if ($result === 'ok') {
                Session::set('success','the patient has been modified');
                Redirect::to('tableappointement');
            }else {
                echo $result;
            }
        }
    }

}

?>