<?php
include 'connect_database.php';
include 'header_footer/header.php';

$conn->query("set names utf8");
$shop_id = $conn -> real_escape_string($_POST['shop_id']);
$name = $conn -> real_escape_string($_POST['name']);
$birthday = $conn -> real_escape_string($_POST['birthday']);
$phone = $conn -> real_escape_string($_POST['phone']);
$address = $conn -> real_escape_string($_POST['address']);

$sql = "
INSERT INTO Records (Shop_id, Name,Birthday, Phone, Address)
VALUES ('$shop_id', '$name', '$birthday', '$phone', '$address')
";

if ($conn->query($sql) === TRUE) {
    $cookie_time = 120;
    $last_id = $conn->insert_id;
    $cookie_name = "record_name";
    $cookie_value = $_POST['name'];
    setcookie($cookie_name, $cookie_value, time() + ($cookie_time), "/"); // 86400 = 1 day
    $cookie_name = "record_birthday";
    $cookie_value = $_POST['birthday'];
    setcookie($cookie_name, $cookie_value, time() + ($cookie_time), "/"); // 86400 = 1 day
    $cookie_name = "record_phone";
    $cookie_value = $_POST['phone'];
    setcookie($cookie_name, $cookie_value, time() + ($cookie_time), "/"); // 86400 = 1 day
    $cookie_name = "record_address";
    $cookie_value = $_POST['address'];
    setcookie($cookie_name, $cookie_value, time() + ($cookie_time), "/"); // 86400 = 1 day
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Something wrong, please contact wx:jasperruan";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>hello</title>
    <style>
        .succ_icon, .succ_text {
            text-align: center;
            margin-top: 15%;
            width: 70%;
            margin-left: 15%;
        }
        .succ_icon img {
            width: 80%;
        }
        .succ_text {
            font-size: 45px;
            font-weight: bold;
            color: #DF8332;
            margin-bottom: 20%;
        }

    </style>
</head>
<body>
<div class="succ_icon">
    <img src="hello_files/success.jpg">
</div>
<div class="succ_text">
    <div>
        Success! 登记成功!
    </div><br>
    <div>
        感谢您的配合!
    </div>
</div>
</body>
</html>





