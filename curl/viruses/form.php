<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form action="#" method="post">
fields:<input type="text" name="fields" /><br />
<input type="submit" value="submit" />
</form>
</body>
<?php
//echo $_POST['fields'];
$mysqli = new MySQLi('localhost',"root","",'test');
$sql = "insert into test values('','".$_POST['fields']."');";
$mysqli->query($sql);
?>
</html>