<?php
class Contact
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM contacts');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

    static public function getMalade($data)
    {
        $id = $data['id'];
        try { // pour afficher error exact
            $query = 'SELECT * FROM contacts WHERE id=:id';
            $stmt = DB::connect()->prepare($query); //preparer query
            $stmt->execute(array(":id" => $id));
            $malade = $stmt->fetch(PDO::FETCH_OBJ); //recuperer sous forme d'un obj
            return $malade;
        } catch (PDOException $ex) { // le cas d'erreur
            echo 'error' . $ex->getMessage();
        }
    }


    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO contacts(first, last, doctor, service, message) VALUES (:first,:last,:doctor,:service,:message)');
        //bind rabt m3a les valeur li jaw
        $stmt->bindParam(':first', $data['first']);
        $stmt->bindParam(':last', $data['last']);
        $stmt->bindParam(':doctor', $data['doctor']);
        $stmt->bindParam(':service', $data['service']);
        $stmt->bindParam(':message', $data['message']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }

    //update::
    static public function update($data)
    {
        $stmt = DB::connect()->prepare('UPDATE contacts SET first=:first, last=:last, doctor=:doctor, service=:service, message=:message WHERE id=:id');
        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':first', $data['first']);
        $stmt->bindParam(':last', $data['last']);
        $stmt->bindParam(':doctor', $data['doctor']);
        $stmt->bindParam(':service', $data['service']);
        $stmt->bindParam(':message', $data['message']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }

  

    static public function searchMalade($data)
    {
        $search = $data['search'];
        try { // pour afficher error exact
            $query = 'SELECT * FROM contacts WHERE name LIKE ?';
            $stmt = DB::connect()->prepare($query); //preparer query
            $stmt->execute(array('%' . $search . '%'));
            $malades = $stmt->fetchAll();
            return $malades;
        } catch (PDOException $ex) { // le cas d'erreur
            echo 'error' . $ex->getMessage();
        }
    }
}
