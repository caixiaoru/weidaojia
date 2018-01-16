$(function(){
    //    返回我的收藏
    $(".my_back").click(function(){
        $(window).attr('location','./my.html');
    });
    $(".store_back").click(function(){
        $(window).attr('location','./index.html');
    });
    $(".activity_back").click(function(){
        $(window).attr('location','./index.html');
    });
    $(".style_back").click(function(){
        $(window).attr('location','./index.html');
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
    
//    搜索页返回首页
    $(".search_back").click(function(){
        
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
    
    if($(".life_main_list_content_two_a").height()>55){
        //如果文字超过三行，设置div高度为三行，并显示展开按钮
        $(".life_main_list_content_two_a").css("height",55);
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

//商家店铺store.html
    $(".store_main_food_left ul li").click(function(){
      
        $(this).addClass("store_main_food_left_active").siblings().removeClass("store_main_food_left_active");
        console.log(1234567890);
        $(".store_main_food_right ul li").eq($(this).index()).addClass("store_main_food_right_show").siblings().removeClass("store_main_food_right_show");
    });



//    点击收藏
    $(".store_collect").click(function(){


        if($(this).hasClass("fa-heart-o")){
            $(this).attr("class","fa fa-heart fa-2x store_collect");
        }
        else{
            $(this).attr("class","fa fa-heart-o fa-2x store_collect");
        }
    })


});
//$(window).scroll(function(){
//
//    //        console.log($(".store_food_style").offset().top);
//
//    ////获取分类据顶部的高度
//    var a=$("#store_header").height();
//    var b=$(".store_main").height();
//    var c=a+b+15;
//
//    if($(window).scrollTop()> c){
//        $(".store_food_style").css({"position":"fixed","top":0});
//    }
//    }
