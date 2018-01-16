<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/document/thinkphp/thinkphp/Public/home/dist/jquery.vidbacking.css" type="text/css">
<link rel="stylesheet" href="/document/thinkphp/thinkphp/Public/home/dist/style.css" type="text/css">
<link href="/document/thinkphp/thinkphp/Public/home/dist/css.css" rel="stylesheet">
<link href="/document/thinkphp/thinkphp/Public/home/css/commen.css" rel="stylesheet">
<title>首页的首页</title>

</head>
<body>
    <video poster="/document/thinkphp/thinkphp/Public/home/assets/a.png" autoplay muted loop class="vidbacking">

        <source src="/document/thinkphp/thinkphp/Public/home/assets/a.mp4" type="video/mp4">
    </video>
    <div class="video-content">
        <!--点击跳过-->
        <a href="/document/thinkphp/thinkphp/index.php/Home/IndexTwo/indextwo" class="index_jump">点击跳过<span>5</span></a>

        <div class="index_title"><p id="strin"></p></div>
        <div class="clearfix"></div>
    </div>



    <script src="/document/thinkphp/thinkphp/Public/home/js/jquery.min.js"></script>
    <script src="/document/thinkphp/thinkphp/Public/home/dist/jquery.vidbacking.js" type="text/javascript"></script>
    <script type="text/javascript">
//        首页视频
        $(function(){
            $('body').vidbacking({
                'masked': true
            });
        });

//        首页的首页标题动画
        var str="味到家";
        var len=str.length;
        var i=1;
        function showword(){
            document.getElementById("strin").innerHTML=str.substr(0,i);
            i++;
            if(i>len){
                clearInterval("done");
            }
        }
        var done=setInterval("showword()",180);

//        首页的首页倒计时

    </script>
</body>
</html>