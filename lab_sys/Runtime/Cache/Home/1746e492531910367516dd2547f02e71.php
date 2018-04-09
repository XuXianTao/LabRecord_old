<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/del.js"></script>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_fbman.css" />
    <input type="hidden" name="uname" id="uname" value="<?php echo ($admin['nam']); ?>" />
    <input type="hidden" name="ip" id="ip" />
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
</head>

<body onload="init()">
    <div id="header_wrapper">
        <div id="header">
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="navigation_wrapper">
        <div id="navigation">
            <div class="nav"><a href="main_m">主页</a></div>
            <div class="nav"><a href="excpsts">异常情况</a></div>
            <div class="nav"><a href="excpsta">故障统计</a></div>
            <div class="nav"><a href="fbman">原始问卷管理</a></div>
            <div class="nav"><a href="fbman2">已发布问卷管理</a></div>
        </div>
    </div>
    <div id="main">
        <form>
            <div class="btn_group">
                <button id="btn1" class="btn" type="submit" name="btn_fbcre" value="true">创建问卷</button>
                <button id="btn2" class="btn" type="submit" name="btn_fbori" value="true">查看原始问卷</button>
                <div clear="both"></div>
            </div>
            
            <table>
                <caption>已经制定的问卷原型</caption>
                <tr>
                    <th>发布时间</th>
                    <th>问卷标题</th>
                    <th>发布人</th>
                    <th>对应上课时段</th>
                    <th></th>
                </tr>
                <?php if(is_array($new)): $i = 0; $__LIST__ = $new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["rlstim"]); ?></td>
                        <td><a href="?update=<?php echo ($vo["id"]); ?>"><?php echo ($vo["tit"]); ?></a></td>
                        <td><?php echo ($vo["teaname"]); ?>(<?php echo ($vo["teaid"]); ?>)</td>
                        <td>周<?php echo ($vo["wday"]); ?>&nbsp;<?php echo ($vo["clatim"]); ?></td>
                        <td>
                            <button id="btn3" class="btn" type="submit" name="btn_fbsts" value="<?php echo ($vo["id"]); ?>">查看反馈情况</button>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </form>
    </div>
</body>

</html>