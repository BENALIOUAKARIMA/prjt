<?php

class UsersController
{
public $role;

  public function log()
  {
    if (isset($_POST['submit'])) {
      $data['email'] = $_POST['email'];
      $result = User::signin($data);
      if ($result->email === $_POST['email'] && $result->password === $_POST['password']) {
        $_SESSION['logged'] = true;
        $_SESSION['name'] = $result->name;
        $_SESSION['email'] = $result->email;
        if ($this->role=='admin') {
          header('location:dashbord');
      }
      if ($this->role=='user') {
        header('location:appointement');
    }
      } else {
        Session::set('error', 'email or password incorect');
        Redirect::to('login');
      }
    }
  }


  public function register()
  {
    if (isset($_POST['submit'])) {
      $data = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],

      );
      //function de model
      $result = User::creatUser($data);
      if ($result === 'ok') {
        Session::set('success', 'the account has been created');
        
        Redirect::to('login');
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
