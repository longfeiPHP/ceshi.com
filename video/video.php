<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>


<video id="video" width="500" controls="controls" preload="auto" style="background:#333" webkit-playsinline x-webkit-airplay>
    <source src='http://200019322.vod.myqcloud.com/200019322_214f385a27c011e6ae9d0906852f21b1.f0.mp4' type="video/mp4" -webkit-playsinline="true"></source>';
    您的浏览器不支持video标签
</video>
<input type="button" onclick="pose()" value="暂停" />
<script>
var video = document.getElementById("video");
//暂停方法
function pose(){
	video.pause();
}
</script>
</body>
</html>