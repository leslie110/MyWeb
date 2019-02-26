<?php
include 'test_html.php';


$aa = new Name();//实例化name类
$arr11 = ['小黑','二狗子','小王八'];
$a2 = $_POST['body'];
$a3 = $_POST['user'];
$aa->subit($a2,$a3,$arr11);

$stime = time();
$b = $aa->ride_mysql("select * from test2;");
$c = $aa->write_mysql("INSERT INTO test2 (mess, USER, time) VALUES ('{$a2}','{$a3}','{$stime}');");


?>