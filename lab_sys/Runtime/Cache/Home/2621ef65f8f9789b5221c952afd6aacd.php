<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>lab_sys</title>
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/nav.css">
    <link rel="stylesheet" href="/sysulab/Public/lab_sys/css/main_fbcre.css">
    <script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/init.js"></script>
    <script type="text/javascript" src="/sysulab/Public/lab_sys/js/ent.js"></script>
    <input type="hidden" name="uname" id="uname" value="<?php echo ($admin['nam']); ?>" />
    <input type="hidden" name="ip" id="ip" />
    <script>
        window.onbeforeunload = function() {
            return "确认退出？";
        }

        function onDestroy() {
            window.onbeforeunload = null;
        }
    </script>
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
            <div id="logo"><img src="/sysulab/Public/lab_sys/img/logo.jpg" alt="中山大学" /></div>
            <div id="welcome">欢迎！</div>
        </div>
    </div>
    <div id="navigation_wrapper">
        <div id="navigation">
            <div class="nav"><a href="main_m">主页</a></div>
            <div class="nav"><a href="excpsts">异常情况</a></div>
            <div class="nav"><a href="bd">故障统计</a></div>
            <div class="nav"><a href="fbman">问卷管理</a></div>
        </div>
    </div>
    <div id="main">
        <form id="form" action="fbcre_" method="POST" onsubmit="return onDestroy()">
            <fieldset>
                <legend>问卷创建：务必进行核对后再提交修改！</legend>
                <div id="qnr0" name="qnr0" class="q">
                    <br> 标题： <input id="q0" name="tit" type="text" placeholder="这里输入问卷标题">
                </div>
                <div id="qnr1" name="qnr1" class="q">
                    <br> 问题1： <input id="q1" name="q1" type="text" class="a" placeholder="这里输入问题1"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q1" name="a1_q1" type="text" class="a" placeholder="这里输入问题1的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q1" name="a2_q1" type="text" class="a" placeholder="这里输入问题1的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q1" name="a3_q1" type="text" class="a" placeholder="这里输入问题1的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q1" name="a4_q1" type="text" class="a" placeholder="这里输入问题1的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q1" name="a5_q1" type="text" class="a" placeholder="这里输入问题1的第五个选项">
                </div>
                <div id="qnr2" name="qnr1" class="q">
                    <br> 问题2： <input id="q2" name="q2" type="text" placeholder="这里输入第二个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q2" name="a1_q2" type="text" class="a" placeholder="这里输入问题2的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q2" name="a2_q2" type="text" class="a" placeholder="这里输入问题2的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q2" name="a3_q2" type="text" class="a" placeholder="这里输入问题2的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q2" name="a4_q2" type="text" class="a" placeholder="这里输入问题2的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q2" name="a5_q2" type="text" class="a" placeholder="这里输入问题2的第五个选项">
                </div>
                <div id="qnr3" name="qnr1" class="q">
                    <br> 问题3： <input id="q3" name="q3" type="text" placeholder="这里输入第三个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q3" name="a1_q3" type="text" class="a" placeholder="这里输入问题3的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q3" name="a2_q3" type="text" class="a" placeholder="这里输入问题3的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q3" name="a3_q3" type="text" class="a" placeholder="这里输入问题3的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q3" name="a4_q3" type="text" class="a" placeholder="这里输入问题3的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q3" name="a5_q3" type="text" class="a" placeholder="这里输入问题3的第五个选项">
                </div>
                <div id="qnr4" name="qnr1" class="q">
                    <br> 问题4： <input id="q4" name="q4" type="text" placeholder="这里输入第四个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q4" name="a1_q4" type="text" class="a" placeholder="这里输入问题4的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q4" name="a2_q4" type="text" class="a" placeholder="这里输入问题4的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q4" name="a3_q4" type="text" class="a" placeholder="这里输入问题4的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q4" name="a4_q4" type="text" class="a" placeholder="这里输入问题4的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q4" name="a5_q4" type="text" class="a" placeholder="这里输入问题4的第五个选项">
                </div>
                <div id="qnr5" name="qnr1" class="q">
                    <br> 问题5： <input id="q5" name="q5" type="text" placeholder="这里输入第五个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q5" name="a1_q5" type="text" class="a" placeholder="这里输入问题5的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q5" name="a2_q5" type="text" class="a" placeholder="这里输入问题5的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q5" name="a3_q5" type="text" class="a" placeholder="这里输入问题5的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q5" name="a4_q5" type="text" class="a" placeholder="这里输入问题5的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q5" name="a5_q5" type="text" class="a" placeholder="这里输入问题5的第五个选项">
                </div>
                <div id="qnr6" name="qnr1" class="q">
                    <br> 问题6： <input id="q6" name="q6" type="text" placeholder="这里输入第六个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q6" name="a1_q6" type="text" class="a" placeholder="这里输入问题6的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q6" name="a2_q6" type="text" class="a" placeholder="这里输入问题6的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q6" name="a3_q6" type="text" class="a" placeholder="这里输入问题6的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q6" name="a4_q6" type="text" class="a" placeholder="这里输入问题6的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q6" name="a5_q6" type="text" class="a" placeholder="这里输入问题6的第五个选项">
                </div>
                <div id="qnr7" name="qnr1" class="q">
                    <br> 问题7： <input id="q7" name="q7" type="text" placeholder="这里输入第七个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q7" name="a1_q7" type="text" class="a" placeholder="这里输入问题7的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q7" name="a2_q7" type="text" class="a" placeholder="这里输入问题7的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q7" name="a3_q7" type="text" class="a" placeholder="这里输入问题7的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q7" name="a4_q7" type="text" class="a" placeholder="这里输入问题7的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q7" name="a5_q7" type="text" class="a" placeholder="这里输入问题7的第五个选项">
                </div>
                <div id="qnr8" name="qnr1" class="q">
                    <br> 问题8： <input id="q8" name="q8" type="text" placeholder="这里输入第八个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q8" name="a1_q8" type="text" class="a" placeholder="这里输入问题8的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q8" name="a2_q8" type="text" class="a" placeholder="这里输入问题8的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q8" name="a3_q8" type="text" class="a" placeholder="这里输入问题8的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q8" name="a4_q8" type="text" class="a" placeholder="这里输入问题8的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q8" name="a5_q8" type="text" class="a" placeholder="这里输入问题8的第五个选项">
                </div>
                <div id="qnr9" name="qnr1" class="q">
                    <br> 问题9： <input id="q9" name="q9" type="text" placeholder="这里输入第九个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q9" name="a1_q9" type="text" class="a" placeholder="这里输入问题9的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q9" name="a2_q9" type="text" class="a" placeholder="这里输入问题9的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q9" name="a3_q9" type="text" class="a" placeholder="这里输入问题9的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q9" name="a4_q9" type="text" class="a" placeholder="这里输入问题9的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q9" name="a5_q9" type="text" class="a" placeholder="这里输入问题9的第五个选项">
                </div>
                <div id="qnr10" name="qnr1" class="q">
                    <br> 问题10： <input id="q10" name="q10" type="text" placeholder="这里输入第十个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="a1_q10" name="a1_q10" type="text" class="a" placeholder="这里输入问题10的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="a2_q10" name="a2_q10" type="text" class="a" placeholder="这里输入问题10的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="a3_q10" name="a3_q10" type="text" class="a" placeholder="这里输入问题10的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="a4_q10" name="a4_q10" type="text" class="a" placeholder="这里输入问题10的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="a5_q10" name="a5_q10" type="text" class="a" placeholder="这里输入问题10的第五个选项">
                </div>
                <div class="btn_group">
                    <button id="btn1" class="btn" type="submit" name="btn_fbcre">保存</button>
                    <button id="btn2" class="btn" type="reset">重置</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>