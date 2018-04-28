<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_fbsts.css">
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <input id="uname" name="uname" type="hidden" value="<?php echo ($admin['nam']); ?>">
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
            <div class="nav"><a href="/lab_sys/index.php/Home/Main/main_m">主页</a></div>
            <div class="nav"><a href="/lab_sys/index.php/Home/exception/excpsts">异常情况</a></div>
            <div class="nav"><a href="/lab_sys/index.php/Home/exception/excpsta">故障统计</a></div>
            <div class="nav"><a href="/lab_sys/index.php/Home/feedback/fbman">原始问卷管理</a></div>
            <div class="nav"><a href="/lab_sys/index.php/Home/feedback/fbman2">已发布问卷管理</a></div>
        </div>
    </div>

    <div id="main">
        <table id="stat_data" border="1">
            <caption>统计数据</caption>
            <?php echo ($rls['q1']!=null)?"
            <tr>
                <td>问题</td>
                <td>".$rls['a1_q1']."</td>
                <td>".$rls['a2_q1']."</td>
                <td>".$rls['a3_q1']."</td>
                <td>".$rls['a4_q1']."</td>
                <td>".$rls['a5_q1']."</td>
                <td>正确率</td>
            </tr>
            <tr>
                <td>".$rls['q1']."</td>
                <td>".$rls['a1_q1_num']."</td>
                <td>".$rls['a2_q1_num']."</td>
                <td>".$rls['a3_q1_num']."</td>
                <td>".$rls['a4_q1_num']."</td>
                <td>".$rls['a5_q1_num']."</td>
                <td>".$rls["q1_accuracy"]."</td>
            </tr>":"";?>
            <?php echo ($rls['q2']!=null)?"
            <tr>
                <td>问题</td>
                <td>".$rls['a1_q2']."</td>
                <td>".$rls['a2_q2']."</td>
                <td>".$rls['a3_q2']."</td>
                <td>".$rls['a4_q2']."</td>
                <td>".$rls['a5_q2']."</td>
                <td>正确率</td>
            </tr>
            <tr>
                <td>".$rls['q2']."</td>
                <td>".$rls['a1_q2_num']."</td>
                <td>".$rls['a2_q2_num']."</td>
                <td>".$rls['a3_q2_num']."</td>
                <td>".$rls['a4_q2_num']."</td>
                <td>".$rls['a5_q2_num']."</td>
                <td>".$rls["q2_accuracy"]."</td>
            </tr>":"";?>
            <?php echo ($rls['q3']!=null)?"
            <tr>
                <td>问题</td>
                <td>".$rls['a1_q3']."</td>
                <td>".$rls['a2_q3']."</td>
                <td>".$rls['a3_q3']."</td>
                <td>".$rls['a4_q3']."</td>
                <td>".$rls['a5_q3']."</td>
                <td>正确率</td>
            </tr>
            <tr>
                <td>".$rls['q3']."</td>
                <td>".$rls['a1_q3_num']."</td>
                <td>".$rls['a2_q3_num']."</td>
                <td>".$rls['a3_q3_num']."</td>
                <td>".$rls['a4_q3_num']."</td>
                <td>".$rls['a5_q3_num']."</td>
                <td>".$rls["q3_accuracy"]."</td>
            </tr>":"";?>
            <?php echo ($rls['q4']!=null)?"
            <tr>
                <td>问题</td>
                <td>".$rls['a1_q4']."</td>
                <td>".$rls['a2_q4']."</td>
                <td>".$rls['a3_q4']."</td>
                <td>".$rls['a4_q4']."</td>
                <td>".$rls['a5_q4']."</td>
                <td>正确率</td>
            </tr>
            <tr>
                <td>".$rls['q4']."</td>
                <td>".$rls['a1_q4_num']."</td>
                <td>".$rls['a2_q4_num']."</td>
                <td>".$rls['a3_q4_num']."</td>
                <td>".$rls['a4_q4_num']."</td>
                <td>".$rls['a5_q4_num']."</td>
                <td>".$rls["q4_accuracy"]."</td>
            </tr>":"";?>
            <?php echo ($rls['q5']!=null)?"
            <tr>
                <td>问题</td>
                <td>".$rls['a1_q5']."</td>
                <td>".$rls['a2_q5']."</td>
                <td>".$rls['a3_q5']."</td>
                <td>".$rls['a4_q5']."</td>
                <td>".$rls['a5_q5']."</td>
                <td>正确率</td>
            </tr>
            <tr>
                <td>".$rls['q5']."</td>
                <td>".$rls['a1_q5_num']."</td>
                <td>".$rls['a2_q5_num']."</td>
                <td>".$rls['a3_q5_num']."</td>
                <td>".$rls['a4_q5_num']."</td>
                <td>".$rls['a5_q5_num']."</td>
                <td>".$rls["q5_accuracy"]."</td>
            </tr>":"";?>
            <?php echo ($rls['q6']!=null)?"
            <tr>
                <td>问题</td>
                <td>".$rls['a1_q6']."</td>
                <td>".$rls['a2_q6']."</td>
                <td>".$rls['a3_q6']."</td>
                <td>".$rls['a4_q6']."</td>
                <td>".$rls['a5_q6']."</td>
                <td>正确率</td>
            </tr>
            <tr>
                <td>".$rls['q6']."</td>
                <td>".$rls['a1_q6_num']."</td>
                <td>".$rls['a2_q6_num']."</td>
                <td>".$rls['a3_q6_num']."</td>
                <td>".$rls['a4_q6_num']."</td>
                <td>".$rls['a5_q6_num']."</td>
                <td>".$rls["q6_accuracy"]."</td>
            </tr>":"";?>
            <?php echo ($rls['q7']!=null)?"
            <tr>
                <td>问题</td>
                <td>".$rls['a1_q7']."</td>
                <td>".$rls['a2_q7']."</td>
                <td>".$rls['a3_q7']."</td>
                <td>".$rls['a4_q7']."</td>
                <td>".$rls['a5_q7']."</td>
                <td>正确率</td>
            </tr>
            <tr>
                <td>".$rls['q7']."</td>
                <td>".$rls['a1_q7_num']."</td>
                <td>".$rls['a2_q7_num']."</td>
                <td>".$rls['a3_q7_num']."</td>
                <td>".$rls['a4_q7_num']."</td>
                <td>".$rls['a5_q7_num']."</td>
                <td>".$rls["q7_accuracy"]."</td>
            </tr>":"";?>
            <?php echo ($rls['q8']!=null)?"
            <tr>
                <td>问题</td>
                <td>".$rls['a1_q8']."</td>
                <td>".$rls['a2_q8']."</td>
                <td>".$rls['a3_q8']."</td>
                <td>".$rls['a4_q8']."</td>
                <td>".$rls['a5_q8']."</td>
                <td>正确率</td>
            </tr>
            <tr>
                <td>".$rls['q8']."</td>
                <td>".$rls['a1_q8_num']."</td>
                <td>".$rls['a2_q8_num']."</td>
                <td>".$rls['a3_q8_num']."</td>
                <td>".$rls['a4_q8_num']."</td>
                <td>".$rls['a5_q8_num']."</td>
                <td>".$rls["q8_accuracy"]."</td>
            </tr>":"";?>
            <?php echo ($rls['q9']!=null)?"
            <tr>
                <td>问题</td>
                <td>".$rls['a1_q9']."</td>
                <td>".$rls['a2_q9']."</td>
                <td>".$rls['a3_q9']."</td>
                <td>".$rls['a4_q9']."</td>
                <td>".$rls['a5_q9']."</td>
                <td>正确率</td>
            </tr>
            <tr>
                <td>".$rls['q9']."</td>
                <td>".$rls['a1_q9_num']."</td>
                <td>".$rls['a2_q9_num']."</td>
                <td>".$rls['a3_q9_num']."</td>
                <td>".$rls['a4_q9_num']."</td>
                <td>".$rls['a5_q9_num']."</td>
                <td>".$rls["q9_accuracy"]."</td>
            </tr>":"";?>
            <?php echo ($rls['q10']!=null)?"
            <tr>
                <td>问题</td>
                <td>".$rls['a1_q10']."</td>
                <td>".$rls['a2_q10']."</td>
                <td>".$rls['a3_q10']."</td>
                <td>".$rls['a4_q10']."</td>
                <td>".$rls['a5_q10']."</td>
                <td>正确率</td>
            </tr>
            <tr>
                <td>".$rls['q10']."</td>
                <td>".$rls['a1_q10_num']."</td>
                <td>".$rls['a2_q10_num']."</td>
                <td>".$rls['a3_q10_num']."</td>
                <td>".$rls['a4_q10_num']."</td>
                <td>".$rls['a5_q10_num']."</td>
                <td>".$rls["q10_accuracy"]."</td>
            </tr>":"";?>
        </table>
        <table id="unsubmit_list" border="1">
            <caption>未上交名单</caption>
            <tr>
                <td>学号</td>
                <td>姓名</td>
                <td>上课时段</td>
            </tr>
            <?php if(is_array($data_fill_state)): $i = 0; $__LIST__ = $data_fill_state;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["id"]); ?></td>
                    <td><?php echo ($vo["nam"]); ?></td>
                    <td><?php echo ($vo["schtim"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <table id="notpass_list" border="1">
                <caption>不及格名单</caption>
                <tr>
                    <td>学号</td>
                    <td>姓名</td>
                    <td>位置</td>
                    <td>上课时段</td>
                    <td>分数</td>
                </tr>
                <?php if(is_array($data_fill_notpass)): $i = 0; $__LIST__ = $data_fill_notpass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["nam"]); ?></td>
                        <td><?php echo ($vo["cla"]); ?>：<?php echo ($vo["num"]); ?></td>
                        <td><?php echo ($vo["schtim"]); ?></td>
                        <td><?php echo ($vo["scr"]); ?></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>

        <table id="score_list" border="1">
            <caption>已提交名单</caption>
            <tr>
                <td>学号</td>
                <td>姓名</td>
                <td>位置</td>
                <td>上课时段</td>
                <td>分数</td>
            </tr>
            <?php if(is_array($data_fill_score)): $i = 0; $__LIST__ = $data_fill_score;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["id"]); ?></td>
                    <td><?php echo ($vo["nam"]); ?></td>
                    <td><?php echo ($vo["cla"]); ?>：<?php echo ($vo["num"]); ?></td>
                    <td><?php echo ($vo["schtim"]); ?></td>
                    <td><?php echo ($vo["scr"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
    </div>
</body>

</html>