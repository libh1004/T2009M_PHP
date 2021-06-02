<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint"
          content="width=device-width", user-scalable=no, initial-scale="1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../ass1/css/SideBar.css">
    <title>List category</title>

</head>
<body >
    <?php include ("category.php");
        $category = [];
        $category[] = [
            "id" => 1,
            "name" => "Giày Adidas",
            "price" => 1500
        ];
        $category[] = [
            "id" => 2,
            "name" => "Đồng hồ Apple watch",
            "price" => 500
        ];

    ?>
    <div class="container" >
        <h3>List category</h3>
        <div class="content">
            <button type="button" style="margin-bottom: 30px;margin-left: 125px" ><a href="addcategory.php">Add</a> </button>
            <button type="button" style="margin-bottom: 30px;margin-left: 10px"  ><a href="editcategory.php">Edit</a> </button>
            <table style="width: 70%;margin-left: 125px">
                <tr>
                    <th style="text-align: center">Id</th>
                    <th style="text-align: center">Name</th>
                    <th style="text-align: center">Price</th>
                </tr>
                <?php foreach ($category as $item){?>
                    <tr>
                        <td><?php echo $item["id"];?></td>
                        <td><a href="listproduct.php" ><?php echo $item["name"];?></a></td>
                        <td><?php echo $item["price"];?></td>
                    </tr> <?php }?>
            </table>
        </div>

    </div>

</body>
</html>
