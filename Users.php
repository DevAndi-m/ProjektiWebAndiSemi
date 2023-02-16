<?php 
include "./classes/dbh.classes.php";
class Users extends Dbh {
    
    public function createUser($name, $email, $password) {
        $conn = $this->connect();
        $stmt = $conn->prepare("INSERT INTO users (users_username, users_email, users_psw) VALUES (:name, :email, :password)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }
    
    public function getUser($id) {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM users WHERE users_id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    public function getAllUsers(){
        $conn = $this-> connect();
        $stmt = $conn -> prepare("SELECT * FROM users");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;

    }
    public function updateUser($id, $name, $email, $password) {
        $conn = $this->connect();
        $stmt = $conn->prepare("UPDATE users SET users_username=:name, users_email=:email, users_psw=:password WHERE users_id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    }
    
    public function deleteUser($id) {
    $conn = $this->connect();
    $stmt = $conn->prepare("DELETE FROM users WHERE users_id=:id AND isAdmin = 'false'");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
}

?>