<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/document/thinkphp/thinkphp/Public/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="/document/thinkphp/thinkphp/Public/home/css/commen.css">


</head>
<body>

<div id="pageone">
    <!--header-->
    <div id="index_header">
        <!--搜索框-->
            <form method="post" action="" class="index_search_top">
                    <label for="search"></label>
                    <input type="search" name="search" id="search" placeholder="搜索内容..." class="index_search">

            </form>
    </div>

   <!--main-->
    <div id="index_main">

        <!--分类-->
        <div class="index_style">
            <div>
                <a href="/document/thinkphp/thinkphp/index.php/Home/Style/style">
                    <img src="/document/thinkphp/thinkphp/Public/home/images/style_6.png">
                    <p>早餐</p>
                </a>
            </div>
            <div>
                <a href="/document/thinkphp/thinkphp/index.php/Home/Style/style">
                    <img src="/document/thinkphp/thinkphp/Public/home/images/style_2.png">
                    <p>午餐</p>
                </a>
            </div>
            <div>
                <a href="/document/thinkphp/thinkphp/index.php/Home/Style/style">
                    <img src="/document/thinkphp/thinkphp/Public/home/images/style_5.png">
                    <p>晚餐</p>
                </a>
            </div>

            <div>
                <a href="/document/thinkphp/thinkphp/index.php/Home/Style/style">
                    <img src="/document/thinkphp/thinkphp/Public/home/images/style_7.png">
                    <p>麻辣烫</p>
                </a>
            </div>
            <div>
                <a href="/document/thinkphp/thinkphp/index.php/Home/Style/style">
                    <img src="/document/thinkphp/thinkphp/Public/home/images/style_1.png">
                    <p>肯德基</p>
                </a>
            </div>

            <div>
                <a href="/document/thinkphp/thinkphp/index.php/Home/Style/style">
                    <img src="/document/thinkphp/thinkphp/Public/home/images/style_3.png">
                    <p>水果</p>
                </a>
            </div>
            <div>
                <a href="/document/thinkphp/thinkphp/index.php/Home/Style/style">
                     <img src="/document/thinkphp/thinkphp/Public/home/images/style_4.png">
                     <p>饮品</p>
                </a>
            </div>
            <div>
                <a href="/document/thinkphp/thinkphp/index.php/Home/Style/style">
                    <img src="/document/thinkphp/thinkphp/Public/home/images/style_8.png">
                    <p>甜品</p>
                </a>
            </div>

        </div>
        <!--活动中心-->
        <div class="index_active">
            <span>活动中心</span>
            <div class="index_active_content">
                <div class="index_active_one">
                     <a href="/document/thinkphp/thinkphp/index.php/Home/ActiveOne/activity_one"><p>一元秒杀</p>
                     <img src="/document/thinkphp/thinkphp/Public/home/images/c.jpg"></a>
                </div>
                <div class="index_active_two">
                    <a href="/document/thinkphp/thinkphp/index.php/Home/ActiveTwo/activity_two"><p>全场五折</p>
                    <img src="/document/thinkphp/thinkphp/Public/home/images/c.jpg"></a>
                </div>
                <div class="index_active_three">
                    <a href="/document/thinkphp/thinkphp/index.php/Home/ActiveThree/activity_three"><p>周末福利</p>
                    <img src="/document/thinkphp/thinkphp/Public/home/images/c.jpg"></a>
                </div>              

            </div>
        </div>

        <!--热门推荐-->
        <div class="index_recommend">
            <span>热门推荐</span>
            <div class="index_recommend_tab">
                <p class="index_recommend_active">美食</p>
                <p class=" ">商家</p>
             </div>
            <!--热门推荐内容-->
            <div class="index_recommend_content">
                <!--美食-->
                <div class="index_recommend_content_food index_recommend_show">
                  <?php if(is_array($index_food)): $i = 0; $__LIST__ = $index_food;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index_food): $mod = ($i % 2 );++$i;?><a href="/document/thinkphp/thinkphp/index.php/Home/Store/store">
                        <div class="recommend_food_list">
                        <div class="recommend_store_name">
                            <!--<p class="ui-btn ui-corner-all ui-icon-audio ui-btn-icon-notext"></p>-->
                            <p>桃李阁</p>
                            <p>配送费<span>0</span></p>
                        </div>
                        <div class="recommend_food_list_name">
                            <div><img src="/document/thinkphp/thinkphp/Public/<?php echo ($index_food["food_img"]); ?>"></div>
                            <div>
                                <p><?php echo ($index_food["food_name"]); ?></p>
                                <p>月售<span><?php echo ($index_food["food_sold"]); ?></span>份</p>
                                <p>评分：<span><?php echo ($index_food["food_score"]); ?></span></p>
                                <p><span><?php echo ($index_food["food_price"]); ?></span>元</p>
                            </div>
                        </div>
                        </div>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <!--商家-->
                <div class="index_recommend_content_store">
                    <?php if(is_array($index_store)): $i = 0; $__LIST__ = $index_store;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index_store): $mod = ($i % 2 );++$i;?><div class="recommend_store_list">
                            <div>
                                <div class="recommend_store_img"><img src="/document/thinkphp/thinkphp/Public/<?php echo ($index_store["store_logoimg"]); ?>"></div>
                                <div class="recommend_store_list_content">
                                    <p><?php echo ($index_store["store_name"]); ?></p>
                                    <p>月售<span><?php echo ($index_store["store_sold"]); ?></span>份</p>
                                    <p>配送费：<span><?php echo ($index_store["store_shippingfee"]); ?></span>元</p>
                                    <p><span><?php echo ($index_store["store_beginfee"]); ?></span>元起送</p>
                                    <p>评分:<span><?php echo ($index_store["store_score"]); ?></span></p>
                                    <a href="/document/thinkphp/thinkphp/index.php/Home/Store/store/id/<?php echo ($index_store["store_id"]); ?>">进店逛逛</a>
                                </div>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    <!--<div class="recommend_store_list">-->
                        <!--<div>-->
                            <!--<div class="recommend_store_img"><img src="/document/thinkphp/thinkphp/Public/home/images/c.jpg"></div>-->
                            <!--<div class="recommend_store_list_content">-->
                                <!--<p>大拇指米线</p>-->
                                <!--<p>月售<span>1000</span>份</p>-->
                                <!--<p>配送费：<span>5</span>元</p>-->
                                <!--<p><span>10</span>元起送</p>-->
                                <!--<p>评分:</p>-->
                                <!--<a href="/document/thinkphp/thinkphp/index.php/Home/Store/store">进店逛逛</a>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="recommend_store_list">-->
                        <!--<div>-->
                            <!--<div class="recommend_store_img"><img src="/document/thinkphp/thinkphp/Public/home/images/c.jpg"></div>-->
                            <!--<div class="recommend_store_list_content">-->
                                <!--<p>大拇指米线</p>-->
                                <!--<p>月售<span>1000</span>份</p>-->
                                <!--<p>配送费：<span>5</span>元</p>-->
                                <!--<p><span>10</span>元起送</p>-->
                                <!--<p>评分:</p>-->
                                <!--<a href="/document/thinkphp/thinkphp/index.php/Home/Store/store">进店逛逛</a>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="recommend_store_list">-->
                        <!--<div>-->
                            <!--<div class="recommend_store_img"><img src="/document/thinkphp/thinkphp/Public/home/images/c.jpg"></div>-->
                            <!--<div class="recommend_store_list_content">-->
                                <!--<p>大拇指米线</p>-->
                                <!--<p>月售<span>1000</span>份</p>-->
                                <!--<p>配送费：<span>5</span>元</p>-->
                                <!--<p><span>10</span>元起送</p>-->
                                <!--<p>评分:</p>-->
                                <!--<a href="/document/thinkphp/thinkphp/index.php/Home/Store/store">进店逛逛</a>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="recommend_store_list">-->
                        <!--<div>-->
                            <!--<div class="recommend_store_img"><img src="/document/thinkphp/thinkphp/Public/home/images/c.jpg"></div>-->
                            <!--<div class="recommend_store_list_content">-->
                                <!--<p>大拇指米线</p>-->
                                <!--<p>月售<span>1000</span>份</p>-->
                                <!--<p>配送费：<span>5</span>元</p>-->
                                <!--<p><span>10</span>元起送</p>-->
                                <!--<p>评分:</p>-->
                                <!--<a href="/document/thinkphp/thinkphp/index.php/Home/Store/store">进店逛逛</a>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>


    </div>

    <!--footer-->
    <div id="index_footer" >
        <div>
            <ul>
                <li class="index_footer_active"><a href="/document/thinkphp/thinkphp/index.php/Home/IndexTwo/indextwo">首页</a></li>
                <li><a href="/document/thinkphp/thinkphp/index.php/Home/Life/life">生活</a></li>
                <li><a href="/document/thinkphp/thinkphp/index.php/Home/Order/order">订单</a></li>
                <li><a href="/document/thinkphp/thinkphp/index.php/Home/My/my">我的</a></li>
            </ul>
        </div>

    </div>

</div>

<script src="/document/thinkphp/thinkphp/Public/home/js/jquery.min.js"></script>
<script src="/document/thinkphp/thinkphp/Public/home/js/commen.js"></script>
</body>
</html>