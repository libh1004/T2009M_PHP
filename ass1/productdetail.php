<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint"
          content="width=device-width", user-scalable=no, initial-scale="1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product detail</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../ass1/css/SideBar.css">
</head>
<body>
    <?php
        $category_id = $_GET["category_id"];
       $conn = connectDB();

        $sql_txt = "select * from products where category_id = $category_id";
        $listproduct = queryDB($sql_txt);
        if(count($listproduct)==0) header("Location: products.php");
        $sp = $listproduct[0];
    ?>

<div class="container">
    <div class="content">
        <h3>Product detail</h3>
        <table style="width: 70%;margin-left: 125px">
            <tr>
                <th style="text-align: center">Id</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Price</th>
                <th style="text-align: center">CategoryID</th>
            </tr>
            <tr>
                <td><?php echo $sp["product_id"]; ?></td>
                <td><?php echo $sp["name"];?> </td>
                <td><?php echo $sp["price"];?></td>
                <td><?php echo $sp["category_id"];?></td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>
