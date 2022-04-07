<?php

class DB {
    private function connect() {
        //code to connect to Mysql server
        try {
            $connect = new PDO('mysql:host=localhost;dbname=crud_mvc_pdo;charset=utf8;','root','');
            $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch (Exception $e) {
            die('Error db(connect) '.$e->getMessage());
        }
    }

    public function getUsers() {
        //This is command to Mysql program
        $SQL = "SELECT * FROM users";
        $result = $this->connect()->prepare($SQL);
        $result->execute();
        //fetch all users form Mysql program and create from this php associative array
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($data){
        try {
            //This is command to Mysql program and replaces ? with array $data by position
            $SQL = 'INSERT INTO users (name_user,last_name_user,email_user) VALUES (?,?,?)';
            $result = $this->connect()->prepare($SQL);
            $result->execute(array(
                    $data['name_user'],
                    $data['last_name_user'],
                    $data['email_user']
                )
            );
        } catch (Exception $e) {
            die('Error Administrator(register_users) '.$e->getMessage());
        }
    }

    public function updateUser($data){
        try {
            //This is command to Mysql program and replaces ? with array $data by position
            $SQL = 'UPDATE users SET name_user = ?, last_name_user = ?, email_user = ? WHERE id_user = ?';
            $result = $this->connect()->prepare($SQL);
            $result->execute(array(
                    $data['name_user'],
                    $data['last_name_user'],
                    $data['email_user'],
                    $data['id_user']
                )
            );
        } catch (Exception $e) {
            die('Error Administrator(update_user) '.$e->getMessage());
        }
    }
    public function deleteUser($id){
        try {
            //This is command to Mysql program and replaces ? with first element in array
            $SQL = 'DELETE FROM users WHERE id_user = ?';
            $result = $this->connect()->prepare($SQL);
            $result->execute(array($id));
        } catch (Exception $e) {
            die('Error Administrator(delete_user) '.$e->getMessage());
        }
    }

    public function getUserbyId($id) {
        //Here we dont replace ? at all we directly put value in variable
        $SQL = "SELECT * FROM users where id_user = $id";
        echo 'result will be sent to server:' . $SQL;
        $result = $this->connect()->prepare($SQL);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}

$db = new DB();

echo '<pre>';

$users = $db->getUsers();
print_r($users);

//http://html5.local/angie/lesson34_mysql/index2.php?command=add_user
if (!empty($_GET['command']) && $_GET['command'] == 'add_user') {
    $rand = rand(10000,20000);
    $newUser = ['name' => 'test'. $rand, 'last_name' => 'last_name11'. $rand, 'email' => 'satreg@mail.ru'. $rand];
    $db->createUser($newUser);
}

//http://html5.local/angie/lesson34_mysql/index2.php?command=update&id=7&new_name=999999
if (!empty($_GET['command']) && $_GET['command'] == 'update' && !empty($_GET['id']) && !empty($_GET['new_name'])) {
    $user = $db->getUserbyId($_GET['id']);
    if (empty($user)) {
        die('<p>USER DOES NOT EXISTS!</p>');
    }
    $user['name_user'] = $_GET['new_name'];
    $db->updateUser($user);
    echo '<p>SUCCESS</p>';
}

