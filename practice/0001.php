<?php
/**
 * Created by PhpStorm.
 * User: my
 * Date: 2018/12/25
 * Time: 17:35
 */
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// 注意这里使用的是 ===。简单的 == 不能像我们期待的那样工作，
// 因为 'a' 是第 0 位置上的（第一个）字符。
//if ($pos === false) {
//    echo "The string '$findme' was not found in the string '$mystring'";
//} else {
//    echo "The string '$findme' was found in the string '$mystring'";
//};


$three = 5.334+7.434+7.35+7.86765+10.96515+10.84125+7.7875+10.84125+10.81875;
//echo $three;
$a = 157.357164;
$b = 77.775157;
$four = $a+$b+$three;
$jiajiang = $four * 0.045;
$result = $four + $jiajiang;
echo '    '.$four.'     '.$jiajiang.'     '.$result.'    ';
echo 1.81*1.77*1.27;
?>