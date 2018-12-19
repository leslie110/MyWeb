<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2018/12/17
 * Time: 17:12
 */
$arr = array('苹果','香蕉','菠萝');
print_r($arr);
foreach($arr as $k=>$v){
    echo '第'.$k.'值是'.$v.'<br>';
}

$fruit = array(
    'apple'=>'苹果',
    'banana'=>'香蕉',
    'bl'=>'菠萝'
);
print_r($fruit);
foreach ($fruit as $k=>$v){
    echo $k.$v;
}
$fruit['taozi']='桃子';
$f0 = $fruit;
foreach($f0 as $k=>$v){
    echo $k.'='.$v;
}
$arr1 = array();
for($a = 0;$a < 10;++$a){
    $arr1[] = $a;
}
print_r($arr1);
?>