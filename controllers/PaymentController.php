<?php
//pour recuperer les maladies pour afficher dans lab page
class PaymentController{
     
    public function getAllPay() // recuperer tout les malades
    {
        $malades = Payment::getAll();
        return $malades;
        
    }

    public function getOnePay(){
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']

            );
            $malade = Payment::getPay($data);
            return $malade; 
        }
      
    }

    public function findPay(){
        if (isset($_POST['search'])) { //if done valeur rechercher
            $data = array('search' => $_POST['search']);
        }
        $malades = Payment::searchPay($data);
        return $malades;
    }


    //pour ajouter
    public function addPay()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'montant' => $_POST['montant'],
                'date' => $_POST['date'],
            );
            //function de model
            $result = Payment::add($data);
            if ($result === 'ok') {
                Session::set('success','the payement of the patient has been added');
                Redirect::to('payment');
            }else {
                echo $result;
            }
        }
    }
    public function updatePay()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'montant' => $_POST['montant'],
                'date' => $_POST['date'],
            );
            //function de model 
            $result = Payment::update($data);
            if ($result === 'ok') {
                Session::set('success','the patient has been modified');
                Redirect::to('payment');
            }else {
                echo $result;
            }
        }
    }

    
    public function deletepay()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Payment::delete($data);
            if ($result === 'ok') {
                Session::set('success','the payment of patient was deleted');
                Redirect::to('payment');
            }else {
                echo $result;
            }
        }
    }
} 

?>