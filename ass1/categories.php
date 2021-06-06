<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../ass1/css/SideBar.css">
    <title>List category</title>

</head>
<body >
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ass2_php";

        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_errno){
            die("connect error...");
        }
        echo "Connect successfully";
        $sql_txt = "select * from categories";
        $rs = $conn->query($sql_txt);
        $dsl =[];

        if($rs->num_rows > 0){
            while($row = $rs->fetch_assoc()){
                $dsl[] = $row;
            }
        }
    ?>

    <div class="container" >
        <h3>List categories</h3>
        <div class="content">

            <button type="button" style="margin-bottom: 30px;margin-left: 125px" ><a href="addcategoryview.php">Add</a> </button>
            <button type="button" style="margin-bottom: 30px;margin-left: 10px"  ><a href="editcategory.php">Edit</a> </button>

            <table style="width: 70%;margin-left: 125px">
                <tr>
                    <th style="text-align: center">Id</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Description</th>

                </tr>
                <?php foreach ($dsl as $item){?>
                    <tr>
                        <td><?php echo $item["id"];?></td>
                        <td><a href="categorydetail.php?id=<?php echo $item["id"];?>"> <?php echo $item["name"];?></a></td>
                        <td><?php echo $item["description"];?></td>

                    </tr>
                <?php }?>
            </table>
        </div>

    </div>

</body>
</html>
