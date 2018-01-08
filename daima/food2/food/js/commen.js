$(function(){
    //    返回我的收藏
    $(".my_back").click(function(){
        $(window).attr('location','./my.html');
    });
    //首页搜索
    $(".index_search").focus(function(){
    $(window).attr('location','./search.html');
});
//    首页热门推荐切换
    $(".index_recommend_tab p").click(function(){
        $(this).addClass("index_recommend_active").siblings().removeClass("index_recommend_active");
        $('.index_recommend_content>div').eq($(this).index()).addClass('index_recommend_show').siblings().removeClass('index_recommend_show');
    });
    console.log(111);
//    搜索页返回首页
    $(".search_back").click(function(){
        console.log("搜索页面");
        $(window).attr('location','./index.html');
    });
//    搜索页面分类切换
    $(".search_tab div").click(function(){
        $(this).addClass("search_tab_active").siblings().removeClass("search_tab_active");
    });
//食物美食和商家切换
    $(".store_food_style>div").click(function(){
        $(this).addClass("store_food_style_active").siblings().removeClass("store_food_style_active");
        $(".store_food_style_content>div").eq($(this).index()).addClass('store_main_content_show').siblings().removeClass('store_main_content_show');
    });
//健康生活展开收起
    console.log(333);
    if($(".life_main_list_content_two_a").height()>52){
        //如果文字超过三行，设置div高度为三行，并显示展开按钮
        $(".life_main_list_content_two_a").css("height",52);
        //显示展开按钮
        $(".life_main_list_content_two p:nth-of-type(2)").css("display","block");
        //点击展开按钮，显示内容全部
        if($(".life_main_list_content_two p:nth-of-type(2)").html() == "展开"){
            $(this).click(function(){
                var p_height=$(".life_main_list_content_two_a p").height();
                $(".life_main_list_content_two_a").css("height",p_height);
                $(".life_main_list_content_two p:nth-of-type(2)").html("收起");
            })
        }
        if($(".life_main_list_content_two p:nth-of-type(2)").html() == "收起"){
            $(".life_main_list_content_two p:nth-of-type(2)").click(function(){
                $(".life_main_list_content_two_a").css("height",52);
                $(".life_main_list_content_two p:nth-of-type(2)").css("display","none");
            })
        }


    }



});