<?php
include 'header_footer/header.php';
$shop_id = 1;
if (isset($_GET['shop_id'])) {
    $shop_id = $_GET['shop_id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Record Data</title>
    <style>
        body {
            background-image: url('hello_files/bg3.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .logo_conainer {
            width: 40%;
            margin-left: 30%;
            margin-top: 10%;
        }
        .logo_conainer img {
            width: 100%;
        }
        .main_form {
            margin-top: 15%;
            width: 80%;
            margin-left: 10%;
        }
        .main_form .form_item {
            width: 100%;
            display: flex;
        }
        .form_item .form_item_icon {
            width: 10%;
        }
        .form_item .form_item_icon img {
            width: 60%;
            padding-top: 20%;
            vertical-align: center;
        }
        .form_item .form_item_input {
            width: 90%;
        }
        .form_item .form_item_input input {
            width: 88%;
            margin-bottom: 15%;
            font-size: 25px;
            padding: 4% 6%;
            border-radius: 15px;
            border: 1px solid #AAAAAA;
        }
        .form_check {
            text-align: center;
            font-size: 35px;
        }
        .submit_btn {
            margin-top: 5%;
            width: 90%;
            margin-left: 5%;
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            background: #72AAE9;
            color: white;
            border-radius: 15px;
            padding: 5% 0;
            margin-bottom: 10%;
        }
    </style>
</head>

<div class="main_container">
    <div class="logo_conainer">
        <img src="./hello_files/logo_trans.jpg">
    </div>
    <form class="main_form" method="post" action="record_succ.php">
        <div class="form_item">
            <div class="form_item_icon">
                <img src="./hello_files/person.jpg">
            </div>
            <div class="form_item_input">
                <input type="text" placeholder="Full Name / 姓名" name="name" required>
            </div>
        </div>
        <div class="form_item">
            <div class="form_item_icon">
                <img src="./hello_files/calander.jpg">
            </div>
            <div class="form_item_input">
                <input type="text" placeholder="Birthday / 生日 eg. DD/MM/YYYY" name="birthday" required>
            </div>
        </div>
        <div class="form_item">
            <div class="form_item_icon">
                <img src="./hello_files/phone.jpg">
            </div>
            <div class="form_item_input">
                <input type="number" placeholder="Phone / 电话" name="phone" required>
            </div>
        </div>
        <div class="form_item">
            <div class="form_item_icon">
                <img src="./hello_files/home.jpg">
            </div>
            <div class="form_item_input">
                <input type="text" placeholder="Home Address / 地址" name="address" required>
            </div>
        </div>
        <div class="form_check">
            <input type="checkbox" name="remember_info_check" value="remember_info_check" checked="">
            <label for="remember_info_check"> Remember me</label><br>
        </div>
        <input type="submit" class="submit_btn" value="Submit">
        <input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>">
    </form>
</div>
</body>
</html>
