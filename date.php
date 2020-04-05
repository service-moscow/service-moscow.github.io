<?php

$date=explode(".", date("d.m"));

switch ($date[0]){
case 1: $d='1'; break;
case 2: $d='2'; break;
case 3: $d='3'; break;
case 4: $d='4'; break;
case 5: $d='5'; break;
case 6: $d='6'; break;
case 7: $d='7'; break;
case 8: $d='8'; break;
case 9: $d='9'; break;
case 10: $d='10'; break;
case 11: $d='11'; break;
case 12: $d='12'; break;
case 13: $d='13'; break;
case 14: $d='14'; break;
case 15: $d='15'; break;
case 16: $d='16'; break;
case 17: $d='17'; break;
case 18: $d='18'; break;
case 19: $d='19'; break;
case 20: $d='20'; break;
case 21: $d='21'; break;
case 22: $d='22'; break;
case 23: $d='23'; break;
case 24: $d='24'; break;
case 25: $d='25'; break;
case 26: $d='26'; break;
case 27: $d='27'; break;
case 28: $d='28'; break;
case 29: $d='29'; break;
case 30: $d='30'; break;
case 31: $d='31'; break;
}

switch ($date[1]){
case 1: $m='января'; break;
case 2: $m='февраля'; break;
case 3: $m='марта'; break;
case 4: $m='апреля'; break;
case 5: $m='мая'; break;
case 6: $m='июня'; break;
case 7: $m='июля'; break;
case 8: $m='августа'; break;
case 9: $m='сентября'; break;
case 10: $m='октября'; break;
case 11: $m='ноября'; break;
case 12: $m='декабря'; break;
}

echo $d.'&nbsp;'.$m.'';
#echo $date[0].'&nbsp;'.$m.'&nbsp;'.$date[2];

?>

<!--  $convertedText = mb_convert_encoding($text, 'utf-8', mb_detect_encoding($text)); -->
<!-- $m = mb_convert_encoding($m, 'utf-8', mb_detect_encoding($m)); -->
