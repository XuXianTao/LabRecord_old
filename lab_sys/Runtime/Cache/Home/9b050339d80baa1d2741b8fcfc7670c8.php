<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>lab_sys</title>
<script src="http://pv.sohu.com/cityjson?ie=utf-8"></script>
<script src="/sysulab/Public/lab_sys/js/jquery-1.11.1.min.js"></script>
<script src="/sysulab/Public/lab_sys/js/init.js"></script>
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/header.css">
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/nav.css">
<link rel="stylesheet" href="/sysulab/Public/lab_sys/css/main_fbupdt.css" />
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
        <form id="form" action="fbupdt_" method="POST" onsubmit="return onDestroy()">
            <fieldset>
                <legend>问卷修改：务必进行核对后再提交修改！</legend>
                <div id="qnr0" name="qnr0" class="qu">
                    <br> 标题：<input id="qu0" name="qu0" type="text" placeholder="这里输入问卷标题">
                </div>
                <div id="qnr1" name="qnr1" class="qu">
                    <br> 问题1： <input id="qu1" name="qu1" type="text" placeholder="这里输入问题1"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="ans1_qu1" name="ans" type="text" placeholder="这里输入问题1的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="ans2_qu1" name="ans" type="text" placeholder="这里输入问题1的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="ans3_qu1" name="ans" type="text" placeholder="这里输入问题1的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="ans4_qu1" name="ans" type="text" placeholder="这里输入问题1的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="ans5_qu1" name="ans" type="text" placeholder="这里输入问题1的第五个选项">
                </div>
                <div id="qnr2" name="qnr1" class="qu">
                    <br> 问题2： <input id="qu2" name="qu2" type="text" placeholder="这里输入第二个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="ans1_qu2" name="ans" type="text" placeholder="这里输入问题2的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="ans2_qu2" name="ans" type="text" placeholder="这里输入问题2的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="ans3_qu2" name="ans" type="text" placeholder="这里输入问题2的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="ans4_qu2" name="ans" type="text" placeholder="这里输入问题2的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="ans5_qu2" name="ans" type="text" placeholder="这里输入问题2的第五个选项">
                </div>
                <div id="qnr3" name="qnr1" class="qu">
                    <br> 问题3： <input id="qu3" name="qu3" type="text" placeholder="这里输入第三个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="ans1_qu3" name="ans" type="text" placeholder="这里输入问题3的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="ans2_qu3" name="ans" type="text" placeholder="这里输入问题3的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="ans3_qu3" name="ans" type="text" placeholder="这里输入问题3的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="ans4_qu3" name="ans" type="text" placeholder="这里输入问题3的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="ans5_qu3" name="ans" type="text" placeholder="这里输入问题3的第五个选项">
                </div>
                <div id="qnr4" name="qnr1" class="qu">
                    <br> 问题4： <input id="qu4" name="qu4" type="text" placeholder="这里输入第四个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="ans1_qu4" name="ans" type="text" placeholder="这里输入问题4的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="ans2_qu4" name="ans" type="text" placeholder="这里输入问题4的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="ans3_qu4" name="ans" type="text" placeholder="这里输入问题4的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="ans4_qu4" name="ans" type="text" placeholder="这里输入问题4的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="ans5_qu4" name="ans" type="text" placeholder="这里输入问题4的第五个选项">
                </div>
                <div id="qnr5" name="qnr1" class="qu">
                    <br> 问题5： <input id="qu5" name="qu5" type="text" placeholder="这里输入第五个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="ans1_qu5" name="ans" type="text" placeholder="这里输入问题5的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="ans2_qu5" name="ans" type="text" placeholder="这里输入问题5的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="ans3_qu5" name="ans" type="text" placeholder="这里输入问题5的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="ans4_qu5" name="ans" type="text" placeholder="这里输入问题5的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="ans5_qu5" name="ans" type="text" placeholder="这里输入问题5的第五个选项">
                </div>
                <div id="qnr6" name="qnr1" class="qu">
                    <br> 问题6： <input id="qu6" name="qu6" type="text" placeholder="这里输入第六个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="ans1_qu6" name="ans" type="text" placeholder="这里输入问题6的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="ans2_qu6" name="ans" type="text" placeholder="这里输入问题6的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="ans3_qu6" name="ans" type="text" placeholder="这里输入问题6的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="ans4_qu6" name="ans" type="text" placeholder="这里输入问题6的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="ans5_qu6" name="ans" type="text" placeholder="这里输入问题6的第五个选项">
                </div>
                <div id="qnr7" name="qnr1" class="qu">
                    <br> 问题7： <input id="qu7" name="qu7" type="text" placeholder="这里输入第七个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="ans1_qu7" name="ans" type="text" placeholder="这里输入问题7的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="ans2_qu7" name="ans" type="text" placeholder="这里输入问题7的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="ans3_qu7" name="ans" type="text" placeholder="这里输入问题7的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="ans4_qu7" name="ans" type="text" placeholder="这里输入问题7的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="ans5_qu7" name="ans" type="text" placeholder="这里输入问题7的第五个选项">
                </div>
                <div id="qnr8" name="qnr1" class="qu">
                    <br> 问题8： <input id="qu8" name="qu8" type="text" placeholder="这里输入第八个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="ans1_qu8" name="ans" type="text" placeholder="这里输入问题8的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="ans2_qu8" name="ans" type="text" placeholder="这里输入问题8的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="ans3_qu8" name="ans" type="text" placeholder="这里输入问题8的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="ans4_qu8" name="ans" type="text" placeholder="这里输入问题8的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="ans5_qu8" name="ans" type="text" placeholder="这里输入问题8的第五个选项">
                </div>
                <div id="qnr9" name="qnr1" class="qu">
                    <br> 问题9： <input id="qu9" name="qu9" type="text" placeholder="这里输入第九个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="ans1_qu9" name="ans" type="text" placeholder="这里输入问题9的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="ans2_qu9" name="ans" type="text" placeholder="这里输入问题9的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="ans3_qu9" name="ans" type="text" placeholder="这里输入问题9的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="ans4_qu9" name="ans" type="text" placeholder="这里输入问题9的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="ans5_qu9" name="ans" type="text" placeholder="这里输入问题9的第五个选项">
                </div>
                <div id="qnr10" name="qnr1" class="qu">
                    <br> 问题10： <input id="qu10" name="qu10" type="text" placeholder="这里输入第十个问题"> <br><br> &emsp;&emsp;第一个选项：
                    <input id="ans1_qu10" name="ans" type="text" placeholder="这里输入问题10的第一个选项"> <br><br> &emsp;&emsp;第二个选项：
                    <input id="ans2_qu10" name="ans" type="text" placeholder="这里输入问题10的第二个选项"> <br><br> &emsp;&emsp;第三个选项：
                    <input id="ans3_qu10" name="ans" type="text" placeholder="这里输入问题10的第三个选项"> <br><br> &emsp;&emsp;第四个选项：
                    <input id="ans4_qu10" name="ans" type="text" placeholder="这里输入问题10的第四个选项"> <br><br> &emsp;&emsp;第五个选项：
                    <input id="ans5_qu10" name="ans" type="text" placeholder="这里输入问题10的第五个选项">
                </div>
                <div class="btn_group">
                    <button id="btn1" class="btn" type="submit" name="btn_fbupdt">修改</button>
                    <button id="btn2" class="btn" type="reset">重置</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>