<?php include_once "database.php";
    $id = $_GET["id"];
    $conn = connectDB();
    $sql_txt = "delete from categories where id=$id";

    if(updateDB($sql_txt)){
        header ("Location: categories.php");
    }else{
        echo "Delete failed";
    }
