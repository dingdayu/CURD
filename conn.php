<?php

    require_once "config.php";
    $conn = mysqli_connect($host, $username, $password, $dbname) or die('Unale to connect');//����MySQL������
    mysqli_query($conn, 'set names ' . $charset); //�������ݿ�����ʽ
    //print_r($conn);