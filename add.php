<?php

if ($_POST['no']) {
    include_once('function.php');
    //初步防注入 : 利用添加反斜杠的形式防止注入
    $name = addslashes($_POST['name']);
    $phone = addslashes($_POST['phone']);
    $no = addslashes($_POST['no']);
    $class = addslashes($_POST['class']);

    //检查必填项和数据是否正确
    if(empty($name)) echo_error("请输入姓名！");
    if(check_phone($phone)) echo_error("手机号码错误！");
    if(check_no($no)) echo_error("学号格式错误！");

    //往数据库添加数据
    $time = time();
    $sql = "INSERT INTO `student` (`no`, `name`, `phone`, `class`, `add_time`) VALUES ('{$no}', '{$name}', '{$phone}', '{$class}', '{$time}')";

    include_once("conn.php");
    $arr = mysqli_query($conn, $sql);  //执行SQL语句
    if ($arr) {
        header("location:index.php");
        echo "数据添加成功！";
        exit;
    } else {
        echo $sql;echo "<br>";
        echo mysqli_error($conn);echo "<br>";
        echo_error("数据库添加失败，内部错误！请联系管理员");
    }
} else {
    include_once 'template/add.php';
}