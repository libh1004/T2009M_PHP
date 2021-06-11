<?php
    include_once "database.php";?>
<?php
    $product_id = $_POST["product_id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $category_id = $_POST["category_id"];

    $sql_txt = "update products set name='$name',price=$price,category_id=$category_id where product_id=$product_id";
    if(updateDB($sql_txt)){
        header ("Location: products.php?category_id=".$category_id);
    }else{
        echo "Update failed";
    }