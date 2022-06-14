<?php
// criptage
class User{
    // function de login ::
    static public function signin($data)
    {
        $email = $data['email'];
        try { // pour afficher error exact
            $query = 'SELECT * FROM comptes WHERE email=:email';
            $stmt = DB::connect()->prepare($query); //preparer query
            $stmt->execute(array(":email" => $email));
            $clt = $stmt->fetch(PDO::FETCH_OBJ);
            return $clt;
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) { // le cas d'erreur
            echo 'error' . $ex->getMessage();
        }
    }


    static public function creatUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO comptes(name, email, password) VALUES (:name,:email,:password)');
        $stmt ->bindParam(':name', $data['name']);
        $stmt ->bindParam(':email', $data['email']);
        $stmt ->bindParam(':password', $data['password']);

if ($stmt->execute()) {
    return 'ok'; 
}else {
    return 'error';
}
$stmt = null;
    }


}
