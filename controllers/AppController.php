<?php

class AppController
{
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
      $result = App::creatUser($data);
      if ($result === 'ok') {
        Session::set('success', 'the appointement has been created');
        Redirect::to('appointement');
      } else {
        echo $result;
      }
    }
 }

//  static public function logout()
//  {
//   session_destroy(); //vider la session
//  }
}
