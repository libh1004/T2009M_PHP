<?php
    include_once "database.php";?>
<?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];

    $sql_txt = "update categories set name ='$name',description = '$description' where id=$id";
    if(updateDB($sql_txt)){
        header ("Location: categories.php");
    }else{
        echo "Update failed";
    }
