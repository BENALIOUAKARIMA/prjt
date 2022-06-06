<?php
class Payment
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM payment');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

    static public function getPay($data)
    {
        $id = $data['id'];
        try { // pour afficher error exact
            $query = 'SELECT * FROM payment WHERE id=:id';
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
        $stmt = DB::connect()->prepare('INSERT INTO payment(name, email, phone, montant, date) VALUES (:name,:email,:phone,:montant,:date)');
        //bind rabt m3a les valeur li jaw
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':montant', $data['montant']);
        $stmt->bindParam(':date', $data['date']);
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
        $stmt = DB::connect()->prepare('UPDATE payment SET name=:name, email=:email, phone=:phone, montant=:montant, date=:date WHERE id=:id');
        //bind rabt m3a les valeur li jaw
        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':montant', $data['montant']);
        $stmt->bindParam(':date', $data['date']);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt = null;
    }

    //delete::
    static public function delete($data)
    {
        $id = $data['id'];
        try { // pour afficher error exact
            $query = 'DELETE FROM payment WHERE id=:id';
            $stmt = DB::connect()->prepare($query); //preparer query
            $stmt->execute(array(":id" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) { // le cas d'erreur
            echo 'error' . $ex->getMessage();
        }
    }

    static public function searchPay($data)
    {
        $search = $data['search'];
        try { // pour afficher error exact
            $query = 'SELECT * FROM payment WHERE name LIKE ?';
            $stmt = DB::connect()->prepare($query); //preparer query
            $stmt->execute(array('%' . $search . '%'));
            $malades = $stmt->fetchAll();
            return $malades;
        } catch (PDOException $ex) { // le cas d'erreur
            echo 'error' . $ex->getMessage();
        }
    }
}
