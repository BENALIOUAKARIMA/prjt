<?php
class Appoint
{

    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM appointement');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt = null;
    }

    static public function getMalade($data)
    {
        $id = $data['id'];
        try { // pour afficher error exact
            $query = 'SELECT * FROM appointement WHERE id=:id';
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
        $stmt = DB::connect()->prepare('INSERT INTO appointement(name, email, phone, service, date) VALUES (:name,:email,:phone,:service,:date)');
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':service', $data['service']);
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
        $stmt = DB::connect()->prepare('UPDATE appointement SET name=:name, email=:email, phone=:phone, service=:service, date=:date WHERE id=:id');
        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':service', $data['service']);
        $stmt->bindParam(':date', $data['date']);
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
            $query = 'SELECT * FROM appointement WHERE name LIKE ?';
            $stmt = DB::connect()->prepare($query); //preparer query
            $stmt->execute(array('%' . $search . '%'));
            $malades = $stmt->fetchAll();
            return $malades;
        } catch (PDOException $ex) { // le cas d'erreur
            echo 'error' . $ex->getMessage();
        }
    }
    static public function delete($data)
    {
        $id = $data['id'];
        try { // pour afficher error exact
            $query = 'DELETE FROM appointement WHERE id=:id';
            $stmt = DB::connect()->prepare($query); //preparer query
            $stmt->execute(array(":id" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) { // le cas d'erreur
            echo 'error' . $ex->getMessage();
        }
    }
}
