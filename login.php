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
            background-image: url('https://webzilla.co.nz/wp-content/uploads/2020/05/微信图片_20200507130626.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }

    </style>
</head>
<body>

<div class="main_container">
    <div class="logo_conainer">
        <img src="./hello_files/Hi.png">
    </div>
    <form class="main_form" action="login_succ.php" method="post">

        <div class="form_item">
            <div class="form_item_icon">

            </div>
            <div class="form_item_input">
                <input type="text" placeholder="Email/邮箱" name="email">
            </div>
        </div>

        <div class="form_item">
            <div class="form_item_icon">

            </div>
            <div class="form_item_input">
                <input type="text" placeholder="Password/密码" name="password">
            </div>
        </div>


        <div class="redir_container">
            <input type="submit" class="submit_btn" value="Submit">
        </div>
    </form>
    <div class="redir_container">
        <button class="redirect_btn"><a href="register.html">Register</a></button>
    </div>
</div>

</body>
</html>
