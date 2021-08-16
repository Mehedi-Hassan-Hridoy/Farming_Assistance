<?php



function read() {
$fileName = "transiction.txt";

$fileSize = filesize($fileName);
$fr = "";
if($fileSize > 0) {
$resource = fopen($fileName, "r");
$fr = fread($resource, $fileSize);
fclose($resource);
return $fr;
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body style="background-color:#B38CB6;">
	<fieldset  style=" background-color:#D60A1C;height:150px;width:" >
		<h1>E-Farming</h1>
		
		<h3 style="text-align:right; ">Welcome,Admin Profile</h3>
		<h4 style="text-align:right; ">A Smart Farming Assistance</h4>
	</fieldset>

	 <fieldset style="background-color:#02000A; height:15px; width:100%">
           <b style="color: white ">Profile=>></b>
           <button>
		 	<a href="profile.php">Home Profile</a> </button>
           <button>
		 	
</fieldset>
<fieldset style="height:300px; width:40%">
	<h1>Transactions</h1>

	
<?php
$file=read();
$arr=explode("\n", $file);
echo "<ol>";
for($i=0;$i< count($arr); $i++){
	echo "<li>"."<h3>".$arr[$i]."</h3>"."</li>";
} 
echo "</ol>";
?>
	

</fieldset>
	
</body>
</html> 