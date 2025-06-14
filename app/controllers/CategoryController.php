<?php 
// Require SessionHelper and other necessary files 
require_once('app/config/database.php'); 
require_once('app/models/CategoryModel.php'); 
class CategoryController 
{ 
    private $categoryModel; 
    private $db; 
    public function __construct() 
    { 
        $this->db = (new Database())->getConnection(); 
        $this->categoryModel = new CategoryModel($this->db); 
    }

    public function list() 
    { 
        $categories = $this->categoryModel->getCategories(); 
        include 'app/views/category/list.php'; 
    }

    public function create()
{
    header('Content-Type: application/json');
    $data = json_decode(file_get_contents('php://input'), true);
    if (!isset($data['name']) || empty($data['name'])) {
        echo json_encode(['success' => false, 'message' => 'Tên danh mục không hợp lệ']);
        return;
    }

    $newCategory = $this->categoryModel->createCategory($data['name'], $data['description']);
    if ($newCategory) {
        echo json_encode(['success' => true, 'category' => $newCategory]);
    } else {
        echo json_encode(['success' => false]);
    }
}

} 
?>