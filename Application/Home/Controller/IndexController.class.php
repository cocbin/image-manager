<?php

namespace Home\Controller;
use Think\Controller;


class IndexController extends Controller {
    public function index($id=0){

//        $user = M('user');
//        $result = $user->where('id = 1')->find();

        $arr = Array(
            "a" =>1,
            "b" =>3,
            "c" =>3
        );
        $this->ajaxReturn($arr);
    }
    public function test() {
        echo "hhh";
    }
}