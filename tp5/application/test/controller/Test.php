<?php
namespace app\test\controller;
use \think\Config;
class Test{
    public function test(){
        dump(Config::get());
    }
}
?>