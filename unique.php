<?php 
/*$arr=array(2,3,4,2,5,2,5,7,8);
$arr2=array();
foreach ($arr as $key => $value) {
	$arr2[$value]=$value;
}
echo "<pre>";
print_r($arr2);*/

$arr=array(2,3,4,2,5,2,5,7,8);
print_r(array_unique($arr));
?>