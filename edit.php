<?php

require_once"conn.php";
require_once"function.php";

    //���ﲻ��ʹ��intval��Ϊ�����������0
    $no = (addslashes($_GET['no']));
    if(empty($no)) echo_error("�����������");

$sql = "SELECT *  FROM `student` WHERE `no` = '{$no}'";
//echo $sql;echo "<br>";
$arr = mysqli_query($conn, $sql);
$conent = mysqli_fetch_assoc($arr);

    if(empty($conent)) echo_error("û���ҵ������Ŷ�������ʧ����");

if (empty($_POST['name'])) {
    include_once 'template/edit.php';
} else {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $sql = "UPDATE `student` SET `name`='{$name}', `phone`='{$phone}', `class`='{$class}' WHERE (`no`='{$no}')";

    include_once("conn.php");
    $arr = mysqli_query($conn, $sql);  //ִ��SQL���
    if ($arr) {
        header("location:index.php");
        echo "�����޸ĳɹ���";
    } else {
        echo $sql;echo "<br>";
        echo mysqli_error($conn);echo "<br>";
        echo_error("���ݿ����ʧ�ܣ��ڲ���������ϵ����Ա");
    }
}
