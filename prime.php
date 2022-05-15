<?php
// find the prime number.
$prime="";
if(isset($_POST['submit'])){
	$n=$_POST['number'];
	for($i=2; $i<$n; $i++){
		if($n%$i==0){
			$prime=1;
			break;
		}
	}
	if($prime==1){
		echo "not prime number";
	}
	else{
		echo "prime number";
	}
}


/*for($i=1; $i<=10; $i++){
	echo $i*13;
	echo "<br>";
}
*/

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prime no</title>
</head>
<body>
	<form method="post" action="" >
		<td><input type="text" name="number"></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</form>

</body>
</html>