<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>xml测试demo</title>
</head>

<body>
<?php
$doc = new DOMDocument();//创建DOMDocument对象
$doc->load("exsample.xml");//加载XML文件
$bookDom = $doc->getElementsByTagName("book");
foreach($bookDom as $k=>$v){
	$title = $v->getElementsByTagName('title')->item(0)->nodeValue;
	$author = $v->getElementsByTagName('author')->item(0)->nodeValue;
	$year = $v->getElementsByTagName('year')->item(0)->nodeValue;
	$price = $v->getElementsByTagName('price')->item(0)->nodeValue;
	echo $title.'<br />';
	echo $author.'<br />';
	echo $year.'<br />';
	echo $price.'<br />';	
}
?>
</body>
</html>