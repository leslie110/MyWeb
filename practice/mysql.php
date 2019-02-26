<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mysql10";

// 创建连接

$db = new mysqli("{$servername}", "{$username}", "{$password}","{$dbname}");
// $db = new mysqli($servername,$username,$password,$dbname)


if ($db->connect_error ){
	echo "连接数据库失败".$db->connect_error;
	exit();
}
//$sql = "CREATE TABLE `test2` (`id`  int(255) NOT NULL ,`mess`  varchar(255) NOT NULL ,`user`  varchar(255) NOT NULL ,
//`time`  int(255) NOT NULL ,PRIMARY KEY (`id`));";
$time = time();
//插入语句
//$sql = "INSERT INTO test2 (id,mess, USER, time) VALUES (5,'sfdafdg', 'dgsdfgs', '{$time}');";
//查询语句
$sql = "select * from test2;";
$mysql_result = $db->query($sql);
//$row = $mysql_result->fetch_array();
if ($mysql_result){
	echo '执行成功';
	$row = [];
	while ($arr = $mysql_result->fetch_array(MYSQLI_ASSOC)){
		$row[] = $arr;
	}
	var_dump ($row);

}
else{
	echo $db->error;
}
?>