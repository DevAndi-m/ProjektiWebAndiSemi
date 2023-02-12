<?php 
include './classes/dbh.classes.php';
    class Product extends Dbh{
    public $title;
    public $description;
    public $price;

    public function __construct($title, $description, $price){
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

    public static function getAllProducts(){

        $dbh = new Dbh();
    $stmt = $dbh->connect()->prepare("SELECT * FROM product");
    $stmt->execute();
    $products = [];
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $product = new Product($row['title'], $row['description'], $row['price']);
        $products[] = $product;
    }
    return $products;

    }
}
?>