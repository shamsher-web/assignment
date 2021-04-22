<html>
<form action="" method="post">

<input type="text" name="num1" placeholder="Enter the First Number">
<input type="text" name="num2" placeholder="Enter the second Number">
<input type="submit" name="submit" value="Result">
</form>
<?php

	if(isset($_REQUEST['submit']))
	{
		
		$num1=$_REQUEST['num1'];
		$num2=$_REQUEST['num2'];
if($num1<$num2){
	
	echo "between the two number $num1 & $num2 the smallest number is = ".$num1;
	
}

else{
	
	echo "between the two number $num1 & $num2 the smallest number is =".$num2;
	
}
	}
?>

</html>