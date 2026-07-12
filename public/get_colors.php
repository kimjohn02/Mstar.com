<?php
$im = imagecreatefromjpeg(__DIR__ . '/Morningstar.logo.jpg');
$width = imagesx($im);
$height = imagesy($im);
$colors = [];
for($x=0;$x<$width;$x+=10){
    for($y=0;$y<$height;$y+=10){
        $rgb = imagecolorat($im, $x, $y);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;
        $hex = sprintf('#%02x%02x%02x', $r, $g, $b);
        if(!isset($colors[$hex])) $colors[$hex] = 0;
        $colors[$hex]++;
    }
}
arsort($colors);
print_r(array_slice($colors, 0, 15));
