<?php

    $name = $_POST["name"];
    $price = $_POST["price"];
    $category_id = $_POST["category_id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ass2_php";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_errno){
        die("connect error...");
    }

    $sql_txt = "insert into products (name,price,category_id) values('$name', $price,$category_id)";

    if($conn->query($sql_txt) === true){
        header("Location: products.php?category_id=".$category_id);

    }else{
        echo "Them that bai";
    }