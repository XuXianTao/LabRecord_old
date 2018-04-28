<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/lab_sys/Public/lab_sys/css/main_fb.css">
    <script src="/lab_sys/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/init.js"></script>
    <script src="/lab_sys/Public/lab_sys/js/dis_btn.js"></script>
    <input id="uname" name="uname" type="hidden" value="<?php echo ($user['nam']); ?>">
    <script>
        window.onbeforeunload = function() {
            return "确认退出？";
        }

        function onDestroy() {
            window.onbeforeunload = null;
        }
    </script>
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
            <div class="nav"><a href="main">主页</a></div>
            <div class="nav"><a href="fbstu">课堂反馈</a></div>
            <div class="nav"><a href="excp">异常反馈</a></div>
        </div>
    </div>
    <div id="main">
        <form id="form" action="fb_" method="POST" onsubmit="return onDestroy()">
            <input id="id" name="id" type="hidden" value="<?php echo ($data_fbrls['id']); ?>">
            <fieldset>
                <legend><?php echo ($data_fbrls['tit']); ?></legend>
                <table border="1">
                    <?php echo (($data_fbrls['q1']!=null)?"
                    <tr>
                        <td colspan=\"5\">1、".$data_fbrls['q1']."</td>
                    </tr>
                    <tr>
                        <td>".$data_fbrls['a1_q1']."</td>
                        <td>".$data_fbrls['a2_q1']."</td>
                        <td>".$data_fbrls['a3_q1']."</td>
                        <td>".$data_fbrls['a4_q1']."</td>
                        <td>".$data_fbrls['a5_q1']."</td>
                    </tr>
                    <tr>
                        ".(($data_fbrls['a1_q1']!=null)?"
                        <td><input name=\"q1_Radio\" type=\"radio\" value=\"1\" checked></td>
                        ":"
                        <td></td>") .(($data_fbrls['a2_q1']!=null)?"
                        <td><input name=\"q1_Radio\" type=\"radio\" value=\"2\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a3_q1']!=null)?"
                        <td><input name=\"q1_Radio\" type=\"radio\" value=\"3\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a4_q1']!=null)?"
                        <td><input name=\"q1_Radio\" type=\"radio\" value=\"4\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a5_q1']!=null)?"
                        <td><input name=\"q1_Radio\" type=\"radio\" value=\"5\"></td>
                        ":"
                        <td></td>"):"")."
                    </tr> ";?> <?php echo (($data_fbrls['q2']!=null)?"
                    <tr>
                        <td colspan=\"5\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\">2、".$data_fbrls['q2']."</td>
                    </tr>
                    <tr>
                        <td>".$data_fbrls['a1_q2']."</td>
                        <td>".$data_fbrls['a2_q2']."</td>
                        <td>".$data_fbrls['a3_q2']."</td>
                        <td>".$data_fbrls['a4_q2']."</td>
                        <td>".$data_fbrls['a5_q2']."</td>
                    </tr>
                    <tr>
                        ".(($data_fbrls['a1_q2']!=null)?"
                        <td><input name=\"q2_Radio\" type=\"radio\" value=\"1\" checked></td>
                        ":"
                        <td></td>") .(($data_fbrls['a2_q2']!=null)?"
                        <td><input name=\"q2_Radio\" type=\"radio\" value=\"2\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a3_q2']!=null)?"
                        <td><input name=\"q2_Radio\" type=\"radio\" value=\"3\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a4_q2']!=null)?"
                        <td><input name=\"q2_Radio\" type=\"radio\" value=\"4\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a5_q2']!=null)?"
                        <td><input name=\"q2_Radio\" type=\"radio\" value=\"5\"></td>
                        ":"
                        <td></td>"):"")."
                    </tr> ";?> <?php echo (($data_fbrls['q3']!=null)?"
                    <tr>
                        <td colspan=\"5\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\">3、".$data_fbrls['q3']."</td>
                    </tr>
                    <tr>
                        <td>".$data_fbrls['a1_q3']."</td>
                        <td>".$data_fbrls['a2_q3']."</td>
                        <td>".$data_fbrls['a3_q3']."</td>
                        <td>".$data_fbrls['a4_q3']."</td>
                        <td>".$data_fbrls['a5_q3']."</td>
                    </tr>
                    <tr>
                        ".(($data_fbrls['a1_q3']!=null)?"
                        <td><input name=\"q3_Radio\" type=\"radio\" value=\"1\" checked></td>
                        ":"
                        <td></td>") .(($data_fbrls['a2_q3']!=null)?"
                        <td><input name=\"q3_Radio\" type=\"radio\" value=\"2\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a3_q3']!=null)?"
                        <td><input name=\"q3_Radio\" type=\"radio\" value=\"3\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a4_q3']!=null)?"
                        <td><input name=\"q3_Radio\" type=\"radio\" value=\"4\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a5_q3']!=null)?"
                        <td><input name=\"q3_Radio\" type=\"radio\" value=\"5\"></td>
                        ":"
                        <td></td>"):"")."
                    </tr>";?> <?php echo (($data_fbrls['q4']!=null)?"
                    <tr>
                        <td colspan=\"5\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\">4、".$data_fbrls['q4']."</td>
                    </tr>
                    <tr>
                        <td>".$data_fbrls['a1_q4']."</td>
                        <td>".$data_fbrls['a2_q4']."</td>
                        <td>".$data_fbrls['a3_q4']."</td>
                        <td>".$data_fbrls['a4_q4']."</td>
                        <td>".$data_fbrls['a5_q4']."</td>
                    </tr>
                    <tr>
                        ".(($data_fbrls['a1_q4']!=null)?"
                        <td><input name=\"q4_Radio\" type=\"radio\"value=\"1\" checked></td>
                        ":"
                        <td></td>") .(($data_fbrls['a2_q4']!=null)?"
                        <td><input name=\"q4_Radio\" type=\"radio\" value=\"2\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a3_q4']!=null)?"
                        <td><input name=\"q4_Radio\" type=\"radio\" value=\"3\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a4_q4']!=null)?"
                        <td><input name=\"q4_Radio\" type=\"radio\" value=\"4\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a5_q4']!=null)?"
                        <td><input name=\"q4_Radio\" type=\"radio\" value=\"5\"></td>
                        ":"
                        <td></td>"):"")."
                    </tr> ";?> <?php echo (($data_fbrls['q5']!=null)?"
                    <tr>
                        <td colspan=\"5\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\">5、".$data_fbrls['q5']."</td>
                    </tr>
                    <tr>
                        <td>".$data_fbrls['a1_q5']."</td>
                        <td>".$data_fbrls['a2_q5']."</td>
                        <td>".$data_fbrls['a3_q5']."</td>
                        <td>".$data_fbrls['a4_q5']."</td>
                        <td>".$data_fbrls['a5_q5']."</td>
                    </tr>
                    <tr>
                        ".(($data_fbrls['a1_q5']!=null)?"
                        <td><input name=\"q5_Radio\" type=\"radio\" value=\"1\" checked></td>
                        ":"
                        <td></td>") .(($data_fbrls['a2_q5']!=null)?"
                        <td><input name=\"q5_Radio\" type=\"radio\" value=\"2\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a3_q5']!=null)?"
                        <td><input name=\"q5_Radio\" type=\"radio\" value=\"3\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a4_q5']!=null)?"
                        <td><input name=\"q5_Radio\" type=\"radio\" value=\"4\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a5_q5']!=null)?"
                        <td><input name=\"q5_Radio\" type=\"radio\" value=\"5\"></td>
                        ":"
                        <td></td>"):"")."
                    </tr> ";?> <?php echo (($data_fbrls['q6']!=null)?"
                    <tr>
                        <td colspan=\"5\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\">6、".$data_fbrls['q6']."</td>
                    </tr>
                    <tr>
                        <td>".$data_fbrls['a1_q6']."</td>
                        <td>".$data_fbrls['a2_q6']."</td>
                        <td>".$data_fbrls['a3_q6']."</td>
                        <td>".$data_fbrls['a4_q6']."</td>
                        <td>".$data_fbrls['a5_q6']."</td>
                    </tr>
                    <tr>
                        ".(($data_fbrls['a1_q6']!=null)?"
                        <td><input name=\"q6_Radio\" type=\"radio\" value=\"1\" checked></td>
                        ":"
                        <td></td>") .(($data_fbrls['a2_q6']!=null)?"
                        <td><input name=\"q6_Radio\" type=\"radio\" value=\"2\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a3_q6']!=null)?"
                        <td><input name=\"q6_Radio\" type=\"radio\" value=\"3\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a4_q6']!=null)?"
                        <td><input name=\"q6_Radio\" type=\"radio\" value=\"4\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a5_q6']!=null)?"
                        <td><input name=\"q6_Radio\" type=\"radio\" value=\"5\"></td>
                        ":"
                        <td></td>"):"")."
                    </tr> ";?> <?php echo (($data_fbrls['q7']!=null)?"
                    <tr>
                        <td colspan=\"5\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\">7、".$data_fbrls['q7']."</td>
                    </tr>
                    <tr>
                        <td>".$data_fbrls['a1_q7']."</td>
                        <td>".$data_fbrls['a2_q7']."</td>
                        <td>".$data_fbrls['a3_q7']."</td>
                        <td>".$data_fbrls['a4_q7']."</td>
                        <td>".$data_fbrls['a5_q7']."</td>
                    </tr>
                    <tr>
                        ".(($data_fbrls['a1_q7']!=null)?"
                        <td><input name=\"q7_Radio\" type=\"radio\" value=\"1\" checked></td>
                        ":"
                        <td></td>") .(($data_fbrls['a2_q7']!=null)?"
                        <td><input name=\"q7_Radio\" type=\"radio\" value=\"2\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a3_q7']!=null)?"
                        <td><input name=\"q7_Radio\" type=\"radio\" value=\"3\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a4_q7']!=null)?"
                        <td><input name=\"q7_Radio\" type=\"radio\" value=\"4\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a5_q7']!=null)?"
                        <td><input name=\"q7_Radio\" type=\"radio\" value=\"5\"></td>
                        ":"
                        <td></td>"):"")."
                    </tr> ";?> <?php echo (($data_fbrls['q8']!=null)?"
                    <tr>
                        <td colspan=\"5\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\">8、".$data_fbrls['q8']."</td>
                    </tr>
                    <tr>
                        <td>".$data_fbrls['a1_q8']."</td>
                        <td>".$data_fbrls['a2_q8']."</td>
                        <td>".$data_fbrls['a3_q8']."</td>
                        <td>".$data_fbrls['a4_q8']."</td>
                        <td>".$data_fbrls['a5_q8']."</td>
                    </tr>
                    <tr>
                        ".(($data_fbrls['a1_q8']!=null)?"
                        <td><input name=\"q8_Radio\" type=\"radio\" value=\"1\" checked></td>
                        ":"
                        <td></td>") .(($data_fbrls['a2_q8']!=null)?"
                        <td><input name=\"q8_Radio\" type=\"radio\" value=\"2\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a3_q8']!=null)?"
                        <td><input name=\"q8_Radio\" type=\"radio\" value=\"3\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a4_q8']!=null)?"
                        <td><input name=\"q8_Radio\" type=\"radio\" value=\"4\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a5_q8']!=null)?"
                        <td><input name=\"q8_Radio\" type=\"radio\" value=\"5\"></td>
                        ":"
                        <td></td>"):"")."
                    </tr> ";?> <?php echo (($data_fbrls['q9']!=null)?"
                    <tr>
                        <td colspan=\"5\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\">9、".$data_fbrls['q9']."</td>
                    </tr>
                    <tr>
                        <td>".$data_fbrls['a1_q9']."</td>
                        <td>".$data_fbrls['a2_q9']."</td>
                        <td>".$data_fbrls['a3_q9']."</td>
                        <td>".$data_fbrls['a4_q9']."</td>
                        <td>".$data_fbrls['a5_q9']."</td>
                    </tr>
                    <tr>
                        ".(($data_fbrls['a1_q9']!=null)?"
                        <td><input name=\"q9_Radio\" type=\"radio\" value=\"1\" checked></td>
                        ":"
                        <td></td>") .(($data_fbrls['a2_q9']!=null)?"
                        <td><input name=\"q9_Radio\" type=\"radio\" value=\"2\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a3_q9']!=null)?"
                        <td><input name=\"q9_Radio\" type=\"radio\" value=\"3\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a4_q9']!=null)?"
                        <td><input name=\"q9_Radio\" type=\"radio\" value=\"4\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a5_q9']!=null)?"
                        <td><input name=\"q9_Radio\" type=\"radio\" value=\"5\"></td>
                        ":"
                        <td></td>"):"")."
                    </tr> ";?> <?php echo (($data_fbrls['q10']!=null)?"
                    <tr>
                        <td colspan=\"5\"></td>
                    </tr>
                    <tr>
                        <td colspan=\"5\">10、".$data_fbrls['q10']."</td>
                    </tr>
                    <tr>
                        <td>".$data_fbrls['a1_q10']."</td>
                        <td>".$data_fbrls['a2_q10']."</td>
                        <td>".$data_fbrls['a3_q10']."</td>
                        <td>".$data_fbrls['a4_q10']."</td>
                        <td>".$data_fbrls['a5_q10']."</td>
                    </tr>
                    <tr>
                        ".(($data_fbrls['a1_q10']!=null)?"
                        <td><input name=\"q10_Radio\" type=\"radio\" value=\"1\" checked></td>
                        ":"
                        <td></td>") .(($data_fbrls['a2_q10']!=null)?"
                        <td><input name=\"q10_Radio\" type=\"radio\" value=\"2\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a3_q10']!=null)?"
                        <td><input name=\"q10_Radio\" type=\"radio\" value=\"3\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a4_q10']!=null)?"
                        <td><input name=\"q10_Radio\" type=\"radio\" value=\"4\"></td>
                        ":"
                        <td></td>") .(($data_fbrls['a5_q10']!=null)?"
                        <td><input name=\"q10_Radio\" type=\"radio\" value=\"5\"></td>
                        ":"
                        <td></td>"):"")."
                    </tr> ";?>
                </table>
                <div class="btn_wrapper">
                    <button class="btn" id="btn1" name="btn_fb" type="submit" value="true">提交</button>
                    <button class="btn" id="btn2" name="btn_back" type="submit" value="true">返回</button>
                    <button class="btn" id="btn3" type="reset">重置</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>