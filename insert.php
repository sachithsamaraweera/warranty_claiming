<?php
include_once('connection.php');

$item = $_POST['item'];
$shop = $_POST['shop'];
$description = $_POST['description'];
$purch_date = $_POST['purchased_date'];
$w_month = $_POST['warranty_month'];

$conn = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    die("Database Connection Failed");
}
$sql = "INSERT INTO warranty (item_name,purchased_shop,description,purchased_date,warranty_coverage) 
VALUES('$item','$shop','$description','$purch_date','$w_month')";
$result = mysqli_query($conn, $sql);
echo "{$item} added successfully to the database with {$w_month} remaining warranty";




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>