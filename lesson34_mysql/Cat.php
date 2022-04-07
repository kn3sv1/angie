<?php

class Cat {
    private function connect() {
        //code to connect to Mysql server
        $connect = new PDO('mysql:host=localhost;dbname=crud_mvc_pdo;charset=utf8;','root','');
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $connect;
    }

    public function getAll() {
        //This is command to Mysql program
        $SQL = "SELECT * FROM cats";
        $result = $this->connect()->prepare($SQL);
        $result->execute();
        //fetch all users form Mysql program and create from this php associative array
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data){
        //This is command to Mysql program and replaces ? with array $data by position
        $SQL = 'INSERT INTO cats (name,color,city,photo) VALUES (?,?,?,?)';
        $result = $this->connect()->prepare($SQL);
        $result->execute(array(
                $data['name'],
                $data['color'],
                $data['city'],
                $data['photo'],
            )
        );
    }

    public function update($data){
        //This is command to Mysql program and replaces ? with array $data by position
        $SQL = 'UPDATE cats SET name = ?, color = ?, city = ?, photo = ? WHERE id = ?';
        $result = $this->connect()->prepare($SQL);
        $result->execute(array(
                $data['name'],
                $data['color'],
                $data['city'],
                $data['photo'],
                $data['id'],
            )
        );
    }
    public function delete($id){
        //This is command to Mysql program and replaces ? with first element in array
        $SQL = 'DELETE FROM cats WHERE id = ?';
        $result = $this->connect()->prepare($SQL);
        $result->execute(array($id));
    }

    public function getById($id) {
        //Here we dont replace ? at all we directly put value in variable
        $SQL = "SELECT * FROM cats where id = $id";
        echo 'result will be sent to server:' . $SQL;
        $result = $this->connect()->prepare($SQL);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}

//$db = new Cat();
//
//echo '<pre>';
//$cats = $db->getAll();
//print_r($cats);
