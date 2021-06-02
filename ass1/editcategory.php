<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../ass1/css/SideBar.css">
    <title>Edit category</title>
</head>
<body>
<div class="container">
    <div class="content"">
        <?php
        $category[] = [
            "id" => 2,
            "name" => "Đồng hồ Apple watch",
            "price" => 500
        ];
        ?>
        <h3>Edit category</h3>
        <button type="button" style="margin-bottom:30px"><a href="category.php" ><< Back</a></button>
        <div class="edit-infocategory" style="padding: 40px;margin-left: 90px;display: flex">
            <p style="border: 1px solid black;width: 45%;height: 45px;padding: 9px"><?php foreach ($category as $item){
                    echo $item["name"];
                }?></p>
            <p style="border: 1px solid black;width: 45%;height: 45px;margin-left: 30px;padding: 9px"><?php foreach ($category as $item){
                    echo $item["price"];
                }?></p>
        </div>

        <button type="button" style="float: right;margin-right: 45px">Update</button>
    </div>

</div>

</body>
</html>
<?php
