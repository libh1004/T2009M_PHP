<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint"
          content="width=device-width", user-scalable=no, initial-scale="1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List product</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../ass1/css/SideBar.css">
</head>
<body>
    <?php
        $list = [];
        $list[] = [
            "id" => 1,
            "name" => "Sản phẩm 1",
            "price" => "1200"
        ];
        $list[] = [
            "id" => 2,
            "name" => "Sản phẩm 2",
            "price" => "1300"
        ];
    $list[] = [
        "id" => 3,
        "name" => "Sản phẩm 3",
        "price" => "1700"
    ];
    $list[] = [
        "id" => 4,
        "name" => "Sản phẩm 4",
        "price" => "2200"
    ];
    $list[] = [
        "id" => 5,
        "name" => "Sản phẩm 5",
        "price" => "1900"
    ];
        ?>

    <div class="container">

        <div class="content">
            <h3>List product</h3>
            <button type="button" style="margin-top: -21px"><a href="category.php" ><< Back</a></button>
<!--            <ul style="list-style-type: none;margin: 0;padding: 0;float: right;margin-bottom: 30px">-->
<!--                <li style="display: inline;margin-right: 130px"><button type="button" ><a href="addproduct.php">Add</a> </button></li>-->
<!--                <li style="display: inline;margin-right: 124px"><button type="button" ><a href="editproduct.php">Edit</a> </button></li>-->
<!--            </ul>-->
            <div class="table-product" style="margin-top: 8px">
                <button type="button" style="margin-bottom: 30px;margin-left: 125px" ><a href="addproduct.php">Add</a> </button>
                <button type="button" style="margin-bottom: 30px;margin-left: 10px"  ><a href="editproduct.php">Edit</a> </button>
                <table style="width:70%;margin-left: 125px">
                    <tr>
                        <th style="text-align: center">Id</th>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Price</th>
                    </tr>
                    <?php foreach ($list as $item){ ?>
                        <tr>
                            <td><?php echo $item["id"]."<br/>";?></td>
                            <td><?php echo $item["name"]."<br/>";?></td>
                            <td><?php echo $item["price"]."<br/>";?></td>

                        </tr>
                    <?php }?>
                </table>
            </div>

        </div>

    </div>
</body>
</html>
