﻿
<?php
$conn=new mysqli("localhost","root","root","test");//链接数据库
if(mysqli_connect_error()){
    echo mysqli_connect_error();
}
$conn->set_charset("utf8");
 

