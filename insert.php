<?php
include_once('connection.php');
if (isset($_POST['add'])) {
    session_start();

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $item = validate($_POST['item']);
    $shop = validate($_POST['shop']);
    $description = validate($_POST['description']);
    $purch_date = validate($_POST['purchased_date']);
    $w_month = validate($_POST['warranty_month']);

    if (empty($item)) {
        header("location:index.php?error=item name is not provided");
        die;
    } elseif (empty($shop)) {
        header("location:index.php?error=shop name field is not provided");
        die;
    } elseif ($purch_date == 000 - 00 - 00) {

        header("location:index.php?error=date field is not provided");
        die;
    }


    if (mysqli_connect_errno()) {
        die("Database Connection Failed");
    }
    $sql = "INSERT INTO warranty (item_name,purchased_shop,description,purchased_date,warranty_coverage) 
VALUES('$item','$shop','$description','$purch_date','$w_month')";
    $result = mysqli_query($conn, $sql);
    header("location:index.php?success={$item} successfully added to the database with warranty {$w_month} months");
} else {
    echo "Invalid URL chosen <a href='http://localhost/warranty_claim/index.php'>Click Here to go back</a>";
}




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