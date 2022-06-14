<?php
// criptage des donner
class App{

    static public function creatUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO appointement(name, email, phone, service, date) VALUES (:name,:email,:phone,:service,:date)');
        //bind rabt m3a les valeur li jaw
        $stmt ->bindParam(':name', $data['name']);
        $stmt ->bindParam(':email', $data['email']);
        $stmt ->bindParam(':phone', $data['phone']);
        $stmt ->bindParam(':service', $data['service']);
        $stmt ->bindParam(':date', $data['date']);

if ($stmt->execute()) {
    return 'ok'; 
}else {
    return 'error';
}
$stmt = null;
    }


}
