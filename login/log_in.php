<?php
    $con = mysqli_connect("localhost","123","123456","users");
    if (!$con){
        die('Could not connect: ' . mysqli_error($con));
    }
    $result = mysqli_query($con,"SELECT (*) FROM _users WHERE _username='$_POST[name]'");
    $row = mysqli_fetch_array($result);
    /*if(!$result||$row["_password"]!=$_POST["password"]){
        header("用户名或密码错误！");
    }
    else{
        header($_POST["name"]."已登录");
    }*/
    mysqli_free_result($result);
    mysqli_close($con);
?>
    
