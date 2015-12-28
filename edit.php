<?php

require_once"conn.php";
require_once"function.php";

    //这里不能使用intval因为数字里面包含0
    $no = (addslashes($_GET['no']));
    if(empty($no)) echo_error("请求参数错误");

$sql = "SELECT *  FROM `student` WHERE `no` = '{$no}'";
//echo $sql;echo "<br>";
$arr = mysqli_query($conn, $sql);
$conent = mysqli_fetch_assoc($arr);

    if(empty($conent)) echo_error("没有找到这个人哦！大概是失踪了");

if (empty($_POST['name'])) {
    include_once 'template/edit.php';
} else {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $sql = "UPDATE `student` SET `name`='{$name}', `phone`='{$phone}', `class`='{$class}' WHERE (`no`='{$no}')";

    include_once("conn.php");
    $arr = mysqli_query($conn, $sql);  //执行SQL语句
    if ($arr) {
        header("location:index.php");
        echo "数据修改成功！";
    } else {
        echo $sql;echo "<br>";
        echo mysqli_error($conn);echo "<br>";
        echo_error("数据库添加失败，内部错误！请联系管理员");
    }
}
