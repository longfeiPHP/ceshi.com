<?php
header("Content-type:text/html;charset=utf-8");
var_dump($_FILES);
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="article_media_images" />
<input type="submit" value="tij"  />
</form>

