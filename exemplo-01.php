<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256); // não precisa por px

$black = imagecolorallocate($image, 0, 0, 0); //máximo 255, mínimo 0
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

imagepng($image);

imagedestroy($image);

?>