<?php include_once "database.php";?>
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
<?php
    $id = $_GET["id"];
    $conn = connectDB();
    $sql_txt = "select * from categories where id = $id";
    $rs = $conn->query($sql_txt);
    $loai = null;
    if($rs->num_rows>0){
        while($row = $rs->fetch_assoc()){
            $loai=$row;
        }
    }
    if($loai == null)
        header ("Location: categories.php");

?>
<div class="container">
    <div class="content">
        <h3>Edit category</h3>
        <button type="button" style="margin-bottom:30px"><a href="categories.php" ><< Back</a></button>
        <form action="updatecategory.php" method="post">
            <input name="id" value="<?php echo $loai["id"];?>" type="hidden"/>
            <input name="name" type="text" value="<?php echo $loai["name"];?>"/>
            <input name="description" type="text" value="<?php echo $loai["description"];?>"/>
            <?php echo "</br>"?>
            <button type="submit" style="float: right;margin-right: 45px">Submit</button>
        </form>

    </div>

</div>

</body>
</html>
<?php
