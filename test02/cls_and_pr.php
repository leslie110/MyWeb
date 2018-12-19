<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2018/12/17
 * Time: 18:10
 */
class Car{
    //定义公共属性
    public $name = '汽车';
    //定义受保护的属性
    protected $corlor = '白色';
    //定义私有属性
    private $price = '100000';

    function getName(){
        $arr = array($this->name,$this->corlor,$this->price);
        $arr0 = array();
        //print_r($arr);
        //循环写入数组中
        foreach ($arr as $k=>$v){
            $arr0[$k] = $v;
        }
        return $arr0;
    }
}
$car = new Car();
//$car->name = '奥迪';
print_r($car->getName());
//echo $car->corlor;
//echo $car->price;
