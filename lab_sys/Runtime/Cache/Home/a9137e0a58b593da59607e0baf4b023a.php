<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>lab_sys</title>
<input type="hidden" name="uname" id="uname" value="<?php echo ($user['nam']); ?>" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/init.js"></script>
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/nav.css">
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/table.css" />
<style type="text/css">
    html,
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }
    
    * {
        font-family: Arial, sans-serif, "微软雅黑";
        font-size: large;
    }
    
    p {
        display: inline-block;
    }
    
    a {
        color: black;
        text-decoration: none;
    }
</style>

<body>
    <div id="main">
        <table border="1">
            <caption>实验室异常情况</caption>
            <tr>
                <th>序号</th>
                <th>提交时间</th>
                <th>提交人</th>
                <th>位置</th>
                <th>异常描述</th>
                <th>处理状态</th>
                <th></th>
            </tr>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <th><?php echo ($vo["id"]); ?></th>
                    <th><?php echo ($vo["dat"]); ?></th>
                    <th><?php echo ($vo["sts"]); ?></th>
                    <th><?php echo ($vo["pc"]); ?></th>
                    <th><?php echo ($vo["wire"]); ?></th>
                    <th><?php echo ($vo["box"]); ?></th>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
</body>

</html>