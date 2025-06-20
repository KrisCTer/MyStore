<?php 
class CategoryModel 
{ 
    private $conn; 
    private $table_name = "category"; 

    public function __construct($db) 
    { 
        $this->conn = $db; 
    } 

    public function getCategories() 
    { 
        $query = "SELECT id, name, description FROM " . $this->table_name; 
        $stmt = $this->conn->prepare($query); 
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_OBJ); 
    } 

    public function createCategory($name, $description)
    {
        $query = "INSERT INTO " . $this->table_name . " (name, description) VALUES (:name, :description)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        if ($stmt->execute()) {
            $id = $this->conn->lastInsertId();
            return (object)[
                'id' => $id,
                'name' => $name,
                'description' => $description
            ];
        }
        return false;
    }
}
?>