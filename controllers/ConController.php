<?php

class ConController
{
  public function Contact()
  {
    if (isset($_POST['submit'])) {
      //passer les parametres dans db
      $data = array(
        'first' => $_POST['first'],
        'last' => $_POST['last'],
        'doctor' => $_POST['doctor'],
        'service' => $_POST['service'],
        'message' => $_POST['message'],

      );
      //function de model
      $result = Conn::creatUser($data);
      if ($result === 'ok') {
        Session::set('success', 'the touch has been created');
        Redirect::to('contact');
      } else {
        echo $result;
      }
    }
 }

 static public function logout()
 {
  session_destroy(); //vider la session
 }
}
