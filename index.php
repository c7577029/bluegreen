<?php
$im = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);
$blue = imagecolorallocate($im, 0, 0, 255);
$green = imagecolorallocate($im, 0, 255, 0);

//Draw a white rectangle
imagefilledrectangle($im, 0, 0, 249, 249, $white);
//imagefilledrectangle($im, 0, 0, 249, 249, $blue);
//imagefilledrectangle($im, 0, 0, 199, 199, $green);

//Save the image
header('Content-Type: image/png');
imagePNG($im, './imagefilledrectangle.png');
imagedestroy($im);

$im2 = imagecreatefromjpeg('two.jpg');
imagePNG($im2, './hello.png');
imagedestroy($im2);

echo "<a href="./Gary.png">Click here</a>";
echo "<a href="./Edited/Gary.png">Click here</a>";

?>
