<?php
session_start();
$num 	= array(1,2,3,4,5,6,7,8,9);
$words 	= array("[1]","[2]","[3]","[4]","[5]","[6]","[7]","[8]","[9]");
$plus 	= "+";
 
mt_srand((double)microtime()*1000000);
$first  = mt_rand(0,8);
$second = mt_rand(0,8);


$ergebnis = $num[$first] + $num[$second]; 
$showcode = $words[$first] . " + " . $words[$second] . " = ";
 
$_SESSION['mmmath'] = $ergebnis;
 
#echo $showcode; 
#echo $ergebnis;
 
$height = 20;
#$width 	= 225;
$width = strlen($showcode)*8+10;
header('Content-type: image/jpeg');
$image = @imagecreate($width,$height);
imagecolorallocate($image, 238, 238, 238);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 4, 2, 2, $showcode, $text_color);
 
#$bordercolor = imagecolorallocate($image, 80, 80, 80);
#imagerectangle($image,0,0,$width-1,$height-1,$bordercolor);
 
imagejpeg($image);
 
?>
