<?php
//recuperer et afficher les malades dans la page
class AppointementController{
     
    public function getAllAppointement() // recuperer les malades
    {
        $malades = Appoint::getAll();
        return $malades;
        
    }

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
        if (isset($_POST['search'])) { //if done valeur rechercher
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
            //functionmodel
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
            //function model 
            $result = Appoint::update($data);
            if ($result === 'ok') {
                Session::set('success','the patient has been modified');
                Redirect::to('tableappointement');
            }else {
                echo $result;
            }
        }
    }
    public function deletemalade()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Appoint::delete($data);
            if ($result === 'ok') {
                Session::set('success','the appointement was deleted');
                Redirect::to('tableappointement');
            }else {
                echo $result;
            }
        }
    }

    


    public function Appointement()
    {
      if (isset($_POST['submit'])) {
        // passer les info en db
        $data = array(
          'name' => $_POST['name'],
          'email' => $_POST['email'],
          'phone' => $_POST['phone'],
          'service' => $_POST['service'],
          'date' => $_POST['date'],
  
        );
        //function model
        $result = Appoint::creatUser($data);
        if ($result === 'ok') {
          Session::set('success', 'the appointement has been created');
          Redirect::to('appointement');
        } else {
          echo $result;
        }
      }
   }
  
}

?>