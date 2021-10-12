<?php
require_once "config/connect.php";

$goods= mysqli_query($connect, "SELECT * FROM `goods`");
$goods = mysqli_fetch_all($goods);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link   rel="stylesheet" href="css/style.css">
    <title>Товары</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
    </tr>
    <?php
    foreach ($goods as $item){
?>
    <tr>
        <td><?php echo $item[0] ?></td>
        <td><?php echo $item[1] ?></td>
        <td><?php echo $item[2] ?></td>
        <td><?=  $item[3] //сокращенная форма?></td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>