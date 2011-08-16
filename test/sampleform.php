<?php
$a = $_POST['username']+5;
$var ="string";
$str= "String";
if(strcmp($var,$str))
echo "yes";
else 
echo "no";
echo "this is last line";

?>
<html><head></head>
<body>
<form method="post" action="sampleform.php">
<input type="text" name="username" id="username">
<br/>
<input type="text" name="email" id="email"/>
<br/>
<input type="submit" name="submit" value="submit"> 
</form>
</body>


</html>
