<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>添加成员</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <style>
        .header {
            text-align: center;
        }
        .header h1 {
            font-size: 200%;
            color: #333;
            margin-top: 30px;
        }
        .header p {
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="am-g">
        <h1>添加成员</h1>
        <p>添加新成员</p>
    </div>
    <hr />
</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
        <h3>填写基本资料：</h3>
        <hr>
        <br>
        <form method="post" class="am-form" action="add.php">
            <label for="no">学号:</label>
            <input type="text" name="no" id="no" value="">
            <br>
			<label for="name">姓名:</label>
            <input type="text" name="name" id="name" value="">
            <br>
            <label for="phone">手机号:</label>
            <input type="text" name="phone" id="phone" value="">
            <br>
			<label for="class">班级:</label>
			<select data-am-selected name="class" id="class">
			  <option value="一班">一班</option>
			  <option value="二班" selected>二班</option>
			  <option value="三班">三班</option>
			</select>
            <br>
            <div class="am-cf">
                <input type="submit" name="" value="添 加" class="am-btn am-btn-primary am-btn-sm am-fl">
            </div>
        </form>
        <hr>
        <p>@ 2015 lixiaolong, Inc.</p>
    </div>
</div>
</body>
</html>