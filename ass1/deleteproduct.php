<?php include_once "database.php";?>
<?php

     $category_id = $_GET["category_id"];
    $sql_txt = "delete from products where category_id =$category_id";
    if(updateDB($sql_txt)){
        header ("Location: products.php?category_id=".$category_id);
    }else{
        echo "Delete failed";
    }
