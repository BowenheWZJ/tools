<?php

session_start();
//连接数据库
$con = mysqli_connect("","","");

mysqli_select_db($con,"tool");

//拿取用户输入数据
$email = $_POST["email"];
$pass = $_POST["password"];

$s = "select * from usertable where name ='$name'";

$result =mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num ==1){
    echo "Username Already taken";
}else{
    $reg = "insert into usertable(name,password) values('$name','$pass')";
    mysqli_query($con,$reg);
    echo "Registration Successful"
}

?>