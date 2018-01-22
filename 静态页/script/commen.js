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
    if($(".life_main_list_content_two_a").height()>58){
        //如果文字超过三行，设置div高度为三行，并显示展开按钮
        $(".life_main_list_content_two_a").css("height",58);
        //显示展开按钮
        $(".life_main_list_content_two p:nth-of-type(2)").css("display","block");        
         };            
         
         var p_height=$(".life_main_list_content_two_a p").height();       
         $(".life_main_open").click(function(){            
            if($(this).html() == "展开"){
                $(this).html("收起");
                $(this).prev().css("height",p_height);
            }
            else{
                $(this).html("展开");
                $(this).prev().css("height",58);
            }
        })      
        
//商家店铺store.html
    $(".store_main_food_left ul li").click(function(){
        console.log("左侧");
        $(this).addClass("store_main_food_left_active").siblings().removeClass("store_main_food_left_active");
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
    // 点击设置
    $(".my_main_three").click(function(){
        $(".my_block").css("display","block");
    })
    $(".my_block .fa-close").click(function(){
        $(".my_block").css("display","none");
    })

    // 加入购物车    
    // $(".store_car").click(function(){        
    //     var money=$(".store_eveymoney").html();       
    //     $(".store_allmoney").html(money);
    // })


    // 左边减号的颜色
    if(parseInt($("input").val()) <1){
            $(".trans_cir_one").css("color","gray");
         } 
         else{
            $(".trans_cir_one").css("color","mediumseagreen");
         } 
    
    // 加号与加减号的切换
    $(".store_carone").click(function(){
        $(this).removeClass("store_car_show");
        $(this).next().addClass("store_car_show");
    })
    // 点击事件
    $(".trans_cir_two_1").click(function(){
        var num = parseInt($("input").val()); 
          $("input").val(num+1);
    })
     $(".trans_cir_two_2").click(function(){
        var num = parseInt($("input").val()); 
          $(this).prev().val(num+1);
    })
    $(".trans_cir_one").click(function(){
        var num = parseInt($("input").val()); 
         $(this).next().val(num-1); 
        if(parseInt($("input").val()) <1){
            $(".trans_cir_one").css("pointer-events","none");
         } 
         else{
            $(".trans_cir_one").css("pointer-events","auto");
         }
            
    })

    // 修改收货地址--性别
    $(".address_edit_sex span").click(function(){
        console.log("09756789");
        $(this).css("background","mediumseagreen");
        $(this).siblings().css("background","white");
    })
    // zhifu
    $(".footer_pay").click(function(){
        $(".pay_succ").fadeIn();
    })

});
