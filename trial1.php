<?php
$data=array(11,22,11,22,11,22); //fill this array with your data
$total=array_sum($data);
for($i=0;$i<count($data);$i++)
{
$arc[$i]=$data[$i]*360/$total;	
}
foreach($arc as $a) echo $a."<br>";die;
 
$image = imagecreatetruecolor(505,500) or die("Image can't be created");

$style=IMG_ARC_PIE;
// allocate some colors
$white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$gray     = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$navy     = imagecolorallocate($image, 0x00, 0x00, 0x80);
$red      = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$yellow      = imagecolorallocate($image, 255, 255, 0);
$orange      = imagecolorallocate($image, 255, 111, 0);
$green     = imagecolorallocate($image, 35, 175, 0);
$colors=array($red,$gray,$navy,$yellow,$orange,$green);
$start=0;
for($j=0;$j<count($data);$j++)
	{ 
imagefilledarc($image, 250, 250, 500, 250, $start, $start+$arc[$j], $colors[$j], $style);
$start=$start+$arc[$j];
	}
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
