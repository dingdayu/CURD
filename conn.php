<?php

    require_once "config.php";
    $conn = mysqli_connect($host, $username, $password, $dbname) or die('Unale to connect');//连接MySQL服务器
    mysqli_query($conn, 'set names ' . $charset); //设置数据库编码格式
    //print_r($conn);