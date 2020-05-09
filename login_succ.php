<?php
include 'connect_database.php';
$conn->query("set names utf8");
$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

$error = 0;

$sql = "
SELECT Shop_id, Name, Password
FROM Shops
WHERE Email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $real_psw = $row["Password"];
    }
    if ($real_psw == $password) {
        $error = 0;
    }
    else {
        $error = 1;
    }
}
else {
    $error = 2;
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
<div class="register_succ" style="display: <?php if($error==1 || $error == 2) echo 'none'; ?>">
    <div class="qrcode">
        <img src="hello_files/success.jpg">
    </div>
    <div class="text">
        <div>Success!</div><br>
        <div>登录成功</div>
    </div>
</div>
<div class="register_fail" style="display: <?php if($error==1 || $error == 0) echo 'none'; ?>">
    <div class="register_fail_icon">
        <img src="hello_files/register_fail.jpg">
    </div>
    <div class="text">
        <div>Email Dosen't Exists!</div><br>
        <div>此用户不存在 点此<a href="register.php">注册</a></div>
    </div>
</div>
<div class="register_fail" style="display: <?php if($error==0 || $error == 2) echo 'none'; ?>">
    <div class="register_fail_icon">
        <img src="hello_files/register_fail.jpg">
    </div>
    <div class="text">
        <div>Wrong Password</div><br>
        <div>密码错误 请重试</div>
    </div>
</div>
</body>

</html>
