<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/assets/bootstrap.css">
    <!--  -->
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_excpsta.css">
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/page_change.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <input id="num_list" name="num_list" type="hidden" value="<?php echo ($num_list); ?>" />
    <input id="uname" name="uname" type="hidden" value="<?php echo ($admin['nam']); ?>" />
    <style>
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
            <div id="logo"><img src="/lab_sys/Public/lab_sys/img/logo.jpg" alt="中山大学"></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="nav_wrapper">
        <div id="nav">
            <div class="nav"><a href="main_m">主页</a></div>
            <div class="nav"><a href="excpsts">异常情况</a></div>
            <div class="nav"><a href="excpsta">故障统计</a></div>
            <?php if(($admin['typ'] == 1)): ?><div class="nav"><a href="fbman">原始问卷管理</a></div>
                <div class="nav"><a href="fbman2">已发布问卷管理</a></div><?php endif; ?>
        </div>
    </div>
    <div id="main">
        <div>
            <ul class="nav nav-tabs" id="excpsta-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#type1" role="tab" data-toggle="tab">课室+桌号</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#type2" role="tab" data-toggle="tab">学号</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#type3" role="tab" data-toggle="tab">时间段</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#type4" role="tab" data-toggle="tab">设备序列号</a>
                </li>
            </ul>
             <!-- <form action = "excpsta" method="POST" >
                <p>筛选方式：</p>
                <input type="radio" name="typ" value = "1" checked>课室+桌号筛选
                <input type="radio" name="typ" value = "2">学号筛选
                <input type="radio" name="typ" value = "3">时间段筛选
                <input type="radio" name="typ" value = "4">设备序列号筛选
                <button type="submit" name="selectType" value="true">提交查询</button>
            </form>  -->
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="type1">
                <table class="table table-striped table-bordered table-hover">
                <thead class="thead-inverse">
                <tr>
                    <th>课室</th>
                    <th>桌号</th>
                    <th>电脑故障数</th>
                    <th>导线故障数</th>
                    <th>电路箱故障数</th>
                    <th>示波器故障数</th>
                    <th>函数发生器故障数</th>
                    <th>其他故障数</th>
                </tr>
                </thead>
                <?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td name="cla"><?php echo ($vo['cla']); ?></td>
                        <td name="num"><?php echo ($vo['num']); ?></td>
                        <td><?php echo ($vo['pc']); ?></td>
                        <td><?php echo ($vo['wire']); ?></td>
                        <td><?php echo ($vo['box']); ?></td>
                        <td><?php echo ($vo['oscp']); ?></td>
                        <td><?php echo ($vo['gen']); ?></td>
                        <td><?php echo ($vo['oth']); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>

            <div role="tabpanel" class="tab-pane" id="type2">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-inverse">
                    <tr>
                        <th>学号</th>
                        <th>姓名</th>
                        <th>电脑故障数</th>
                        <th>导线故障数</th>
                        <th>电路箱故障数</th>
                        <th>示波器故障数</th>
                        <th>函数发生器故障数</th>
                        <th>其他故障数</th>
                    </tr>
                    </thead>
                    <?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td name="cla"><?php echo ($vo['id']); ?></td>
                            <td name="num"><?php echo ($vo['nam']); ?></td>
                            <td><?php echo ($vo['pc']); ?></td>
                            <td><?php echo ($vo['wire']); ?></td>
                            <td><?php echo ($vo['box']); ?></td>
                            <td><?php echo ($vo['oscp']); ?></td>
                            <td><?php echo ($vo['gen']); ?></td>
                            <td><?php echo ($vo['oth']); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>

            <div role="tabpanel" class="tab-pane" id="type3">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-inverse">
                    <tr>
                        <th>上课日</th>
                        <th>时间段</th>
                        <th>电脑故障数</th>
                        <th>导线故障数</th>
                        <th>电路箱故障数</th>
                        <th>示波器故障数</th>
                        <th>函数发生器故障数</th>
                        <th>其他故障数</th>
                    </tr>
                    </thead>
                    <?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td name="cla"><?php echo ($vo['schday']); ?></td>
                            <td name="num"><?php echo ($vo['schtim']); ?></td>
                            <td><?php echo ($vo['pc']); ?></td>
                            <td><?php echo ($vo['wire']); ?></td>
                            <td><?php echo ($vo['box']); ?></td>
                            <td><?php echo ($vo['oscp']); ?></td>
                            <td><?php echo ($vo['gen']); ?></td>
                            <td><?php echo ($vo['oth']); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>

            <div role="tabpanel" class="tab-pane" id="type4">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-inverse">
                    <tr>
                        <th>设备号</th>
                        <th>课室</th>
                        <th>桌号</th>
                        <th>类型</th>
                        <th>数量</th>
                    </tr>
                    </thead>
                    <?php if(is_array($list4)): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td name="cla"><?php echo ($vo['sn']); ?></td>
                            <td name="num"><?php echo ($vo['cla']); ?></td>
                            <td><?php echo ($vo['num']); ?></td>
                            <td><?php echo ($vo['typ']); ?></td>
                            <td><?php echo ($vo['cnt']); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
            </div>
        </div>

    </div>

<!-- jQuery first, then Bootstrap JS. -->
    <script src="/lab_sys/Public/lab_sys/assets/bootstrap.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/bootstrap-excpsta.js"></script>
</body>

</html>