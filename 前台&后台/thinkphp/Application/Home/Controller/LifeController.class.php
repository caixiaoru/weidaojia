<?php
namespace Home\Controller;
use Think\Controller;
class LifeController extends Controller {
    public function life(){
          $index_foodModel=M('food');
          $index_food=$index_foodModel->select();
          $this->assign("index_food",$index_food);
        $this->display();
    }
    public function lifecontent(){

            $this->display();
        }

}