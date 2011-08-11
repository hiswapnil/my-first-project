<?php
$a = $_POST['username']+2;
$var ="string";
$str= "String";
if(strcmp($var,$str))
echo "yes";
else 
echo "no";

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