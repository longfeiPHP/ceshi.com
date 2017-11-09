<?php
echo '<pre>';
echo urldecode(file_get_contents("php://input"));
echo '</pre>';
?>