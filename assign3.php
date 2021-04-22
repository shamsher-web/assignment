<html>
<head>
<title>PHP Program to count the number of vowels, Consonants</title>
</head>
<body>
<form action="" method="post">
<input type ="text" name="input" placeholder="Enter a String"> 
<input type ="submit" name="submit" value="submit" >
</form>
<?php
	if(isset($_REQUEST['submit']))
	{
			$str=$_REQUEST['input']; 
			$str1=$str; 
			echo "Given input:".$str1."<br>";
			
			$vCount=0;
			$cCount=0;
			
			$str=strtolower($str);
			for($i =0; $i<strlen($str);$i++){
				
				if($str[$i]=='a'|| $str[$i]=='e'|| $str[$i]=='i' || $str[$i]=='o' || $str[$i]=='u'){
					
					
					$vCount++;
					
				}
				
				else if($str[$i]>='a' && $str[$i]<='z')
				{
				$cCount++; 
				
				}
			} 
			
			//$str="this is some<b>bold</b>text.";
			echo "number of vowels:",$vCount."</br>";
			echo  "number of constant:",$cCount."</br>";
			$new= htmlspecialchars("Special Character is: $,#,&<>,%",ENT_QUOTES);
			echo $new;	
	}


?>
</body>
</html>
