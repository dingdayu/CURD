<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>学生名单</title>
    <meta name="description" content="学生名单">
    <meta name="keywords" content="table">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body style="    background: #f3f3f3;">
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器暂不提供支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">

</header>

<div class="am-cf admin-main">


    <!-- content start -->
    <div class="admin-content am-u-sm-centered">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">学生名单</strong> / <small>Class member</small></div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <a type="button" class="am-btn am-btn-default" href="add.php"><span class="am-icon-plus"></span> 新增</a>

<!--                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>-->
<!--                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>-->
                        <button type="button" id="delect" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </div>
<!--            <div class="am-u-sm-12 am-u-md-3">-->
<!--                <div class="am-form-group">-->
<!--                    <select data-am-selected="{btnSize: 'sm'}">-->
<!--                        <option value="option1">一班</option>-->
<!--                        <option value="option2">二班</option>-->
<!--                    </select>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="am-u-sm-12 am-u-md-3">-->
<!--                <div class="am-input-group am-input-group-sm">-->
<!--                    <input type="text" class="am-form-field">-->
<!--                  <span class="am-input-group-btn">-->
<!--                    <button class="am-btn am-btn-default" type="button">搜索</button>-->
<!--                  </span>-->
<!--                </div>-->
<!--            </div>-->
        </div>

        <div class="am-g">
            <div class="am-u-sm-12">
                <form class="am-form">
                    <table class="am-table am-table-striped am-table-hover table-main">
                        <thead>
                        <tr>
                            <th class="table-check"><input type="checkbox" /></th><th class="table-id">学号</th><th class="table-title">姓名</th><th class="table-type">手机号</th><th class="table-author am-hide-sm-only">班级</th><th class="table-date am-hide-sm-only">注册日期</th><th class="table-set">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($data as $key => $value){
                                echo<<<HTML
                        <tr id="tr-{$value[0]}">
                            <td><input type="checkbox" name="no" value="{$value[0]}"/></td>
                            <td>{$value[0]}</td>
                            <td><a href="#">{$value[1]}</a></td>
                            <td>{$value[2]}</td>
                            <td class="am-hide-sm-only">{$value[3]}</td>
HTML;
                                if(!empty($value[4])){
                                    echo "<td class=\"am-hide-sm-only\">".date('Y-m-d',$value[4])."</td>";
                                } else {
                                    echo "<td class=\"am-hide-sm-only\"></td>";
                                }
                                echo <<<D
                            <td>
                                <div class="am-btn-toolbar">
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a class="am-btn am-btn-default am-btn-xs am-text-secondary" href="edit.php?no={$value[0]}"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        <a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" href="del.php?no={$value[0]}&html=1"><span class="am-icon-trash-o"></span> 删除</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
D;
                            }
                        ?>


                        </tbody>
                    </table>
                    <div class="am-cf">
                        共 <?php echo $count['count']; ?> 条记录
                    </div>
                    <hr />
                    <p>注：添加和删除以及修改暂不需要管理员登陆</p>
                </form>
            </div>
            <footer>
                <hr>
                <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
            </footer>
        </div>
    </div>
    <!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>



<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
    $(function(){
        $("#delect").click(function() {
            $("input:checkbox:checked").each(function() {
                var tr = this;
                $.get("del.php",{no:$(this).val()},function(data){
                    console.log(data);
                    var dt = $.parseJSON(data);
                    //console.log(this);
                    if(dt.status == 200){
                        alert(dt.msg);
                        $(tr).parent().parent().remove();
                        $(tr).remove();
                    }else{
                        alert(dt.msg)
                    }
                });

            });
        });
    })
</script>
</body>
</html>
