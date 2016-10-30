<?php

header("Content-Type:text/html;charset=utf8");
 $username = $_GET['username'];
 $password = $_GET['password'];

 echo '�û���'.$username.'|����:'.$password;
 header('location:third.html?flag=1');
?>