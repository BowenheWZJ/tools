<?php
include 'header_footer/header.php';
include 'connect_database.php';
$conn->query("set names utf8");
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$address = $conn->real_escape_string($_POST['address']);
$password = $conn->real_escape_string($_POST['pass2']);

$error = 0;

$sql = "
SELECT Shop_id
FROM Shops
WHERE Email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $error = 1;
}
else {
    $sql = "
        INSERT INTO Shops (Name,Email, Phone,Address, Password)
        VALUES ('$name', '$email', '$phone', '$address', '$password')
       ";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "Something wrong, please contact wx:jasperruan";
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Successul</title>
    <style>
        .register_succ, .register_fail {
            text-align: center;
            width: 100%;
            margin-top: 20%;
        }
        .register_succ .qrcode, .register_fail .register_fail_icon {
            width: 70%;
            margin-left: 15%;
        }
        .register_succ .qrcode img, .register_fail .register_fail_icon img {
            width: 100%;
        }
        .text {
            width: 70%;
            margin: 20% 0 20% 15%;
            font-size: 50px;
            font-weight: bold;
            text-align: center;
            color: #DD8C58;
        }

    </style>
</head>
<body>
<div class="register_succ" style="display: <?php if($error==1) echo 'none'; ?>">
    <div class="qrcode" id="qr_code_container" style=""></div>
    <div class="text">
        <div>Success!</div><br>
        <div>注册成功, 请保存二维码</div>
    </div>
</div>
<div class="register_fail" style="display: <?php if($error==0) echo 'none'; ?>">
    <div class="register_fail_icon">
        <img src="hello_files/register_fail.jpg">
    </div>
    <div class="text">
        <div>Email Exists!</div><br>
        <div>此Email已注册, 点这<a href="">登录</a></div>
    </div>
</div>
</body>
<script src="qrcode.min.js"></script>
<script>
    let qrcode = new QRCode(document.getElementById('qr_code_container'));
    qrcode.makeCode("https://webzilla.co.nz/covid/record.php?shop_id=" + <?php echo $last_id ?>);
</script>

</html>