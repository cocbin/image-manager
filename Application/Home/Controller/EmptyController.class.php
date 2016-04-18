<?php
/**
 * Created by PhpStorm.
 * User: Cocbin
 * Date: 16/4/18
 * Time: 下午7:44
 */
namespace Home\Controller;
use Think\Controller;

class EmptyController extends Controller{
    public function index(){
        $this->display('./Theme/index.html');
    }
}

