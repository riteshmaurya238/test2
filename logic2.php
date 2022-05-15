<?php 
$n="";
$t=[];
$a=array(5,10,20,30,40,35,50);
$b=count($a);
for($i=0; $i<$b; $i++){
	if($a[$i]%10==0){
		$t.$a[$i];

	}
	else{
		$n++;
	}
}
// echo "$t";
print_r($t);
echo "<br>";
echo "$n";

?>