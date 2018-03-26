<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>lab_sys</title>
<input type="hidden" name="uname" id="uname" value="<?php echo ($user['nam']); ?>" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/init.js"></script>
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/nav.css">
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/tb_excp.css" />
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
        <div id="header_wrapper">
            <div id="header">
                <div id="logo"><img src="/sysulab/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
                <div id="welcome">欢迎！</div>
            </div>
        </div>
        <div id="navigation_wrapper">
            <div id="navigation">
                <div class="nav"><a href="main">主页</a></div>
                <div class="nav"><a href="fb">课堂反馈</a></div>
                <div class="nav"><a href="excp">异常情况</a></div>
            </div>
        </div>
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
                    <td>1234递增</td>
                    <td><?php echo ($vo["dat"]); ?></td>
                    <td><?php echo ($vo["id"]); ?></td>
                    <td>实验室号+机号</td>
                    <td>直接塞异常仪器</td>
                    <td><?php echo ($vo["sts"]); ?></td>
                    <td><a href="deal_"><button>处理完毕</button></a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
</body>

</html>