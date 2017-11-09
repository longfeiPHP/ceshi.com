<?php
extension_loaded('ffmpeg');  //可不要
$ffmpegInstance = new ffmpeg_movie('D:/php/APMServ5.2.6/www/htdocs/ceshi.com/ceshi.mp4'); //这里要用绝对路径
$ff_frame = $ffmpegInstance->getFrame(1); //截取第一帧
$gd_image = $ff_frame->toGDImage();
imagejpeg($gd_image,'t.jpg');
imagedestroy($gd_image);
echo '<img src="t.jpg" />';
 echo $ffmpegInstance->getDuration();
?>

