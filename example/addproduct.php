<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../ass1/css/SideBar.css">
    <title>Add product</title>

</head>
<body>
<div class="container">
    <div class="content">
        <h3>Add new product</h3>
        <button type="button" style="margin-bottom:30px"><a href="products.php" ><< Back</a></button>
        <form action="luusp.php" method="post">
            <div class="input-info" style="width: 70%;padding: 40px;margin-left: 90px">
                <input name="name" type="text" placeholder="Name" style="width: 45%;height: 45px"/>
                <input name="price" type="number" placeholder="Price" style="width: 45%;height: 45px;margin-left: 30px"/><br>
            </div>
            <button type="submit" style="float: right;margin-right: 45px">Submit</button>
        </form>
        <?php echo "<br/>"?>

    </div>
</div>

</body>
</html>

