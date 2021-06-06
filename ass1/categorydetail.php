<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint"
          content="width=device-width", user-scalable=no, initial-scale="1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category detail</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../ass1/css/SideBar.css">
</head>
<body>
    <?php
        $id = $_GET["id"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ass2_php";

        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_errno){
            die("connect error...");
        }

        echo "Connect successfully";
        $sql_txt = "select * from categories where id = $id";
        $rs = $conn->query($sql_txt);
        $loai = null;
        if($rs->num_rows > 0){
            while($row = $rs->fetch_assoc()){
                $loai = $row;
            }
        }
        if($loai == null) header("Location: categories.php");
    ?>

    <div class="container" >

        <div class="content">
            <h3>Category detail</h3>
            <table style="width: 70%;margin-left: 125px">
                <tr>
                    <th style="text-align: center">Id</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Description</th>
                </tr>
                <tr>
                    <td><?php echo $loai["id"];?></td>
                    <td><a href="products.php?category_id=<?php echo $loai["id"];?>"><?php echo $loai["name"];?></a></td>
                    <td><?php echo $loai["description"];?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
