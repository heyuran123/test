<?php
$__random_alphabet =array(
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        'g',
        'h',
        'i',
        'j',
        'k',
        'm',
        'n',
        'p',
        'q',
        'r',
        's',
        't',
        'u',
        'v',
        'w',
        'x',
        'y',
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9'
    );
$num = "";
$long = mt_rand(4, 5);
for ($i = 0; $i < $long; $i ++) {
    $num .=$__random_alphabet[mt_rand(0, 32)];
}
/*$cache = Cache_Memcached::getInstance();
$cache->set("onenet_reg_uni{$user}", $num, $cache_time);*/
Header("Content-type: image/PNG");
$im = imagecreatetruecolor(100, 44);
$white = ImageColorAllocate($im, 255, 255, 255);
$black = ImageColorAllocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 99, 43, $white);      
$y1 = rand(0, 40);
$y2 = rand(0, 40);
$y3 = rand(0, 40);
$y4 = rand(0, 40);
imageline($im, 0, $y1, 100, $y3, $black);
imageline($im, 0, $y2, 100, $y4, $black);
for ($i = 0; $i < 256; $i ++) {
    imagesetpixel($im, rand(0, 100), rand(0, 40), $black);
}
$font = realpath("ARIAL.TTF");
$strx = rand(5, 12);
for ($i = 0; $i < $long; $i ++) {
    $strpos = rand(20, 35);
    $angle = rand(- 20, 20);
    imagettftext($im, 20, $angle, $strx, $strpos, $black, $font, substr($num, $i, 1));
    $strx += rand(15, 18);
}

ImagePNG($im);
ImageDestroy($im);