<?php
// criptage
class Conn{

    static public function creatUser($data){
        $stmt = DB::connect()->prepare('INSERT INTO contacts(first, last, doctor, service, message) VALUES (:first,:last,:doctor,:service,:message)');
        //bind rabt m3a les valeur li jaw
        $stmt ->bindParam(':first', $data['first']);
        $stmt ->bindParam(':last', $data['last']);
        $stmt ->bindParam(':doctor', $data['doctor']);
        $stmt ->bindParam(':service', $data['service']);
        $stmt ->bindParam(':message', $data['message']);

if ($stmt->execute()) {
    return 'ok'; 
}else {
    return 'error';
}
$stmt = null;
    }


}
