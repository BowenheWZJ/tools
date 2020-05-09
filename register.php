<?php
include 'header_footer/header.php'
?>
<!DOCTYPE html>
<!-- saved from url=(0048)https://webzilla.co.nz/covid/customer_record.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Register</title>
    <style>
        body {
            background-image: url('hello_files/bg3.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }
    </style>
</head>
<body data-gr-c-s-loaded="true">

<div class="main_container">
    <div class="logo_conainer">
        <img src="./hello_files/logo_trans.jpg">
    </div>
    <form class="main_form" name="reg" action="register_succ.php" method="post">
        <div class="form_item">
            <div class="form_item_icon">
                <img src="./hello_files/商店.png">
            </div>
            <div class="form_item_input">
                <input type="text" placeholder="Shop Name/店名" name="name">
            </div>
        </div>
        <div class="form_item">
            <div class="form_item_icon">
                <img src="./hello_files/地址.png">
            </div>
            <div class="form_item_input">
                <input type="text" placeholder="Shop Address/地址" name="address">
            </div>
        </div>
        <div class="form_item">
            <div class="form_item_icon">
                <img src="./hello_files/邮箱.png">
            </div>
            <div class="form_item_input">
                <input type="text" placeholder="Email/邮箱" name="email">
            </div>
        </div>
        <div class="form_item">
            <div class="form_item_icon">
                <img src="./hello_files/电话.png">
            </div>
            <div class="form_item_input">
                <input type="text" placeholder="Phone/电话" name="phone">
            </div>
        </div>
        <div class="form_item">
            <div class="form_item_icon">
                <img src="./hello_files/密码.png">
            </div>
            <div class="form_item_input">
                <input name ="pass1" type="password" placeholder="Password/密码" onblur="checkValue()">
            </div>
        </div>
        <div class="form_item">
            <div class="form_item_icon">
                <img id="namevalidation" class="psw_image" src="hello_files/wrong_psw.jpg">
            </div>
            <div class="form_item_input">
                <input name="pass2" type="password" placeholder="Re-Enter Password/确认密码" onkeyup="checkValue()">
            </div>
        </div>


        <input type="submit" class="submit_btn" value="Submit" >
    </form>
</div>

<script>
    function checkValue() {
        let name1 = document.forms["reg"]["pass1"].value;
        let name2 = document.forms["reg"]["pass2"].value;
        if (name1 == name2) {
            document.getElementById('namevalidation').src = 'hello_files/right_psw.jpg';
        } else {
            document.getElementById('namevalidation').src = 'hello_files/wrong_psw.jpg';
        }


    }
</script>
</body>
</html>
