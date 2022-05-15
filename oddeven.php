<?php
///find odd and even number
/*$a=array(1,2,3,4,5,6,7,8,9,22,11,44);
for($i=0; $i<12;$i++){
	if($a[$i]%2!=0){
		print "<br>"."odd number =".$a[$i];
	}
}
//echo "<br>";
for($j=0;$j<12;$j++){
	if($a[$j]%2==0){
		print "<br>"."even number=".$a[$j];
	}
}
*////2nd method odd and even number
/*if(isset($_POST['submit'])){
	$n=$_POST['number'];
	for($i=0; $i<$n; $i++){
		if($n[$i]%2==0){
			echo "even number =".$i[$];
		}
		else{
			echo "odd number";
		}
	}
}*/
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>oddeven</title>
 </head>
 <body>
 <form method="post">
 	<td><input type="number" name="number" placeholder="plese enter number"></td>
 	<td><input type="submit" name="submit" value="check"></td>
 </form>
 </body>
 </html>