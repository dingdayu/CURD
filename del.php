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

if(empty($conent)){
    if($_GET['html'] == 1){
        echo_ret("未找到相关人员！", 'home');
    }else{
        echo json_encode(array('status'=>400,'msg'=>'未找到相关人员'));
        exit();
    }
}else{
    $sql = "DELETE FROM `student` WHERE (`no`='{$no}')";
    $arr = mysqli_query($conn, $sql);
    if(empty($arr)){
        echo json_encode(array('status'=>501,'msg'=>'删除失败'));
        exit();
    } else {
        if($_GET['html'] == 1){
            echo_ret("数据添加成功！", 'home');
        }else{
            echo json_encode(array('status'=>200,'msg'=>'删除成功'));
            exit();
        }
    }
}