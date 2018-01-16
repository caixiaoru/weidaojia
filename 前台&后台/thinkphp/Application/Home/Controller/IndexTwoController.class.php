<?php
namespace Home\Controller;
use Think\Controller;
class IndexTwoController extends Controller {
    public function indextwo(){

    //首页美食列表
        $index_foodModel=M('food');
        $index_food=$index_foodModel->select();
        $this->assign("index_food",$index_food);

    //首页商家列表
       $index_storeModel=M('store');
       $index_store=$index_storeModel->select();
       $this->assign("index_store",$index_store);



        $this->display();
    }
}