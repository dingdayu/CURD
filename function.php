<?php
// +----------------------------------------------------------------------
// | DINGDAYU [ Rebellious boy ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( dingxiaoyu.com )
// +----------------------------------------------------------------------
// | Author: dingdayu <614422099@qq.com>
// +----------------------------------------------------------------------
// | DATE: 2015/12/25 9:40
// +----------------------------------------------------------------------
// | FILE: function.php
// +----------------------------------------------------------------------

function echo_error($msg, $url = -1){
    if ($url == -1) {
        //header("location:".getenv("HTTP_REFERER"));
        echo "<html><head>";
        echo "<meta http-equiv='refresh' content='3; url=".getenv("HTTP_REFERER")."'/>";
        echo "<title>页面跳转</title></head><body>";
    }
    if($url == "home"){
        //header("location:index.php");
        echo "<meta http-equiv='refresh' content='3; url=index.php'>";
    }
//    if(!empty($url)){
//        header("location:".$url);
//    }
    echo "<h3>" . $msg . "</h3>";
    echo "</body></html>";
    exit;
}

function echo_ret($msg, $url = -1){
    if ($url == -1) {
        //header("location:".getenv("HTTP_REFERER"));
        echo "<html><head>";
        echo "<meta http-equiv='refresh' content='3; url=".getenv("HTTP_REFERER")."'/>";
        echo "<title>页面跳转</title></head><body>";
    }
    if($url == "home"){
        //header("location:index.php");
        echo "<meta http-equiv='refresh' content='3; url=index.php'>";
    }
//    if(!empty($url)){
//        header("location:".$url);
//    }
    echo "<h3>" . $msg . "</h3>";
    echo "</body></html>";
    exit;
}

function check_phone($phone){
    return preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/",$phone);
}

function check_no($no){
    //return  preg_match("/^\d{12}$/", $no);
    return is_numeric($no) && ((strlen($no)) == 13 );
}