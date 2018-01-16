<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/document/thinkphp/thinkphp/Public/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="/document/thinkphp/thinkphp/Public/home/css/commen.css">
    <script src="/document/thinkphp/thinkphp/Public/home/js/jquery.min.js"></script>
</head>
<body>

<div>
    <!--header-->
    <div id="my_header" class="my_header">
        <img src="/document/thinkphp/thinkphp/Public/home/images/c.jpg">
        <p>华晨宇</p>
    </div>

    <!--main-->
    <div class="my_main">
       <ul>
           <li><a href="/document/thinkphp/thinkphp/index.php/Home/Collection/collection">我的收藏</a></li>
           <li><a href="/document/thinkphp/thinkphp/index.php/Home/Address/address.html">我的地址</a></li>
           <li><a>设置</a></li>
       </ul>

        <!--退出当前账号-->
        <div class="my_block">
            <p>退出当前账号</p>
        </div>



    </div>

    <!--footer-->
    <div id="index_footer" >
        <div>
             <ul>
                <li><a href="/document/thinkphp/thinkphp/index.php/Home/IndexTwo/indextwo">首页</a></li>
                <li><a href="/document/thinkphp/thinkphp/index.php/Home/Life/life">生活</a></li>
                <li><a href="/document/thinkphp/thinkphp/index.php/Home/Order/order">订单</a></li>
                <li class="index_footer_active"><a href="/document/thinkphp/thinkphp/index.php/Home/My/my">我的</a></li>
            </ul>
        </div>

    </div>


</div>


<script src="/document/thinkphp/thinkphp/Public/home/js/commen.js"></script>
</body>
</html>