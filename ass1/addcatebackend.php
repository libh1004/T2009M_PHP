<?php
    $name = $_POST["name"];
    $description = $_POST["description"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ass2_php";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_errno){
        die("connect error...");
    }

    $sql_txt = "insert into categories (name,description) values('$name','$description')";

    if($conn->query($sql_txt) === true){
        header("Location: categories.php");
    }else{
        echo "Them that bai";

    }