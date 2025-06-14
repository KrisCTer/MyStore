<?php 
class AccountModel 
{ 
private $conn; 
private $table_name = "users"; 
public function __construct($db) 
{ 
$this->conn = $db;

} 
  public function getAccountByUsername($username) 
    { 
        $query = "SELECT * FROM users WHERE username = :username"; 
        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(':username', $username, PDO::PARAM_STR); 
        $stmt->execute(); 
        $result = $stmt->fetch(PDO::FETCH_OBJ); 
        return $result; 
    } 
 
    function save($username, $name, $password, $role="user"){ 
 
        $query = "INSERT INTO " . $this->table_name . "(username, password, role) 
VALUES (:username,:password, :role)"; 
         
        $stmt = $this->conn->prepare($query); 
 
        // Làm sạch dữ liệu 
        $name = htmlspecialchars(strip_tags($name)); 
        $username = htmlspecialchars(strip_tags($username)); 
 
        // Gán dữ liệu vào câu lệnh 
      
        $stmt->bindParam(':username', $username); 
        $stmt->bindParam(':password', $password); 
        $stmt->bindParam(':role', $role); 
 
        // Thực thi câu lệnh 
        if ($stmt->execute()) { 
            return true; 
        } 
 
        return false; 
    } 
    public function emailExists($email) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->rowCount() > 0;
    }

    public function insertPasswordReset($email, $key, $expDate) {
        $stmt = $this->conn->prepare("INSERT INTO password_reset_temp (email, `key`, expDate) VALUES (?, ?, ?)");
        return $stmt->execute([$email, $key, $expDate]);
    }
} 
