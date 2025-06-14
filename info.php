<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=my_store", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->query("SHOW TABLES");
    $tables = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($tables);
    echo "</pre>";
} catch (PDOException $e) {
    echo "Lỗi kết nối: " . $e->getMessage();
}
