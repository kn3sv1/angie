<?php

class HobbyModel {
    //connect to mysql server
    private function connect() {
        //code to connect to Mysql server
        $connect = new PDO('mysql:host=localhost;dbname=crud_mvc_pdo;charset=utf8;','root','');
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $connect;
    }

    //get all hobbies assoc array
    public function getAll() {
        //This is command to Mysql program
        $SQL = "SELECT * FROM hobbies";
        $result = $this->connect()->prepare($SQL);
        $result->execute();
        //fetch all users form Mysql program and create from this php associative array
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data){
        //This is command to Mysql program and replaces ? with array $data by position

        //we need prepare data to replace values()
        $SQL = 'INSERT INTO hobbies (name) VALUES (?)';
        $result = $this->connect()->prepare($SQL);
        $result->execute(array(
                $data['name'],
            )
        );
    }

    public function update($data){
        //This is command to Mysql program and replaces ? with array $data by position
        $SQL = 'UPDATE hobbies SET name = ? WHERE id = ?';
        $result = $this->connect()->prepare($SQL);
        $result->execute(array(
                $data['name'],
            )
        );
    }

    public function getById($id) {
        //Here we dont replace ? at all we directly put value in variable
        $SQL = "SELECT * FROM hobbies where id = $id";
        //echo 'result will be sent to server:' . $SQL;
        $result = $this->connect()->prepare($SQL);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }


}

