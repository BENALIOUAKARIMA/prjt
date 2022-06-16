<?php
//pour recuperer les maladies bach n2afichihom fe page
class ContactController{
     
    public function getAllContact() // recuperer ga3les malades
    {
        $malades = Contact::getAll();
        return $malades;
        
    }

    public function getOneContact(){
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']

            );
            $malade = Contact::getMalade($data);
            return $malade; 
        }
      
    }

    public function findContact(){
        if (isset($_POST['search'])) { //ila kant 3andi 9ima 3ad ndir recherche
            $data = array('search' => $_POST['search']);
        }
        $malades = Contact::searchMalade($data);
        return $malades;
    }


    //pour ajouter
    public function addMalade()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'first' => $_POST['first'],
                'last' => $_POST['last'],
                'doctor' => $_POST['doctor'],
                'service' => $_POST['service'],
                'message' => $_POST['message'],
            );
            //function de model
            $result = Contact::add($data);
            if ($result === 'ok') {
                Session::set('success','the patient has been added');
                Redirect::to('tablecontact');
            }else {
                echo $result;
            }
        }
    }
    public function deletemalade()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Contact::delete($data);
            if ($result === 'ok') {
                Session::set('success','the comment was deleted');
                Redirect::to('tablecontact');
            }else {
                echo $result;
            }
        }
    }

}

?>