<?php
class ProductModel {
    private $conn;
    private $table_name = "products"; // tên bảng trong cơ sở dữ liệu

    public function __construct($db) {
        $this->conn = $db;
    }

     public function getProducts() 
    { 
        $query = "SELECT p.id, p.name, p.description, p.price, p.image, c.name as category_name 
                  FROM " . $this->table_name . " p 
                  LEFT JOIN category c ON p.category_id = c.id"; 
        $stmt = $this->conn->prepare($query); 
        $stmt->execute(); 
        $result = $stmt->fetchAll(PDO::FETCH_OBJ); 
        return $result; 
    }

    public function getProductById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function addProduct($name, $description, $price, $category_id, $image) {
    // Kiểm tra dữ liệu cơ bản
    $errors = [];
    if (empty($name)) $errors[] = 'Tên sản phẩm không được để trống.';
    if (!is_numeric($price) || $price <= 0) $errors[] = 'Giá sản phẩm không hợp lệ.';
    if (empty($category_id)) $errors[] = 'Danh mục sản phẩm không được để trống.';
    
    if (!empty($errors)) return $errors;

    // Thêm sản phẩm
    $query = "INSERT INTO " . $this->table_name . " (name, description, price, category_id, image)
              VALUES (:name, :description, :price, :category_id, :image)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':image', $image);

    return $stmt->execute();
}


    public function updateProduct($id, $name, $description, $price, $category_id, $image) {
        $query = "UPDATE " . $this->table_name . " SET name = :name, description = :description, price = :price, category_id = :category_id WHERE id = :id, image = :image";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':image', $image);
        return $stmt->execute();
    }

    public function deleteProduct($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
