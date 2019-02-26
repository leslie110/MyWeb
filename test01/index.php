<?php
echo strpos('hello world!','world');
echo '<br>';
echo strlen('hello world');
echo '<br>';
$x = array("a" => "red", "b" => "green"); 
$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
echo '<br>';
var_dump($x == $y);
echo '<br>';
var_dump($x === $y);
echo '<br>';
var_dump($x != $y);
echo '<br>';
var_dump($x <> $y);
echo '<br>';
var_dump($x !== $y);
echo '<br>';
//判断变量是否存在
$test = '菜鸟教程';
$username = isset($test) ? $test : 'nobody';
echo $username;
echo '<br>';
//if。。elseif。。。else使用
$t = date("H");
//$t = '22';
if($t < '08' && $t >= '06'){
	echo 'have a good day!';
}
elseif ($t > '08' && $t < '18'){
	echo 'You have to work hard';
}
elseif ($t < '21') {
	echo 'You should get some sleep!';
}
else{
	echo 'have a good night!';
};
echo '<br>';
//switch语句
$clore = 'red';
switch ($clore){
	case 'red':
		echo '你喜欢的颜色红色！';
		break;
	case 'blue':
		echo '你喜欢的颜色蓝色！';
		break;
	case 'yellow':
		echo '你喜欢的颜色黄色！';
		break;
	default:
		echo '这里没有你喜欢的颜色!';
		}
//数组的使用
echo '<br>';
$car = [
'volvo','bmw','toyuta'
];
echo 'i like '.$car[0];
echo '<br>';
echo count($car);
echo '<br>';
foreach ($car as $key=>$vul){
	echo '第'.$key.'个值'.$vul;
	echo '<br>';
}
//数组排序
$car = [
'volvo','bmw','toyuta'
];
	//对数组进行升序排列
sort($car);
var_dump($car);
echo '<br>';
echo $car[0];
echo '<br>';
$number = [6,5,4,3,2,1];
sort($number);
var_dump($number);
echo '<br>';
echo $number[0];
echo '<br>';
	//对数字进行降序排列
rsort($car);
var_dump($car);
echo '<br>';
rsort($number);
var_dump($number);
echo '<br>';
	//对数字的值进行升序排列
$arrv=['a'=>7,'b'=>9,'c'=>2];
asort($arrv);
var_dump($arrv);
echo '<br>';
	//对数字的键进行升序排列
$arrv=['c'=>7,'b'=>9,'a'=>2];
ksort($arrv);
var_dump($arrv);
echo '<br>';
	//对数字的值进行降序排列
$arrv=['a'=>7,'b'=>9,'c'=>2];
arsort($arrv);
var_dump($arrv);
echo '<br>';
	//对数字的键进行降序排列
$arrv=['c'=>7,'b'=>9,'a'=>2];
krsort($arrv);
var_dump($arrv);
echo '<br>';
//超级全局变量
$x = 75;
$y = 25;
function addition()
{
	$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
echo '<br>';