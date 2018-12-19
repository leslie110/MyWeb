<?php
class He{
    var $apple = '';

	function getName(){
		return $this->apple;

	}
}
$furite = new He();
$furite->apple = "hello world!";
//$furite->apple = 'ffffff';
echo $furite->getName();
?>