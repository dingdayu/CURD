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
// | DATE: 2015/12/24 9:55
// +----------------------------------------------------------------------
// | FILE: index.php
// +----------------------------------------------------------------------

require_once 'conn.php';

$sql = "SELECT * FROM `student`";
$arr = mysqli_query($conn, $sql);  //Ö´ÐÐSQLÓï¾ä

while($row = mysqli_fetch_row($arr))
{
    $data[] = $row;
}

$sql = "SELECT count(*) as count FROM `student`";
$count = mysqli_fetch_assoc(mysqli_query($conn, $sql)); 

//print_r($count);

$arr = mysqli_query($conn, $sql);  //Ö´ÐÐSQLÓï¾ä
include_once 'template/index.php';