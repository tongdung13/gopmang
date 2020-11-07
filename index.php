<?php


$mang = [1,2,3,4,5];
$mang1 = [6,7,8,9,0];
// duyệt hàm có sẵn.
$mang2 = array_merge($mang,$mang1);

echo "<pre>";
print_r($mang2);
echo "</pre>";

// duyệt bằng vòng lặp.
//$mang2 = [];;
//
//for ($i = 0; $i < count($mang); $i++) {
//    $mang2[$i] = $mang[$i];
//}
//echo count($mang)."<br>";
//echo count($mang1)."<br>";
//echo count($mang2)."<br>";
//
//$leng = count($mang2);
//
//for ($j = 0; $j < count($mang1); $j++){
//    $mang2[$j + $leng] = $mang1[$j];
//}
//print("<pre>". print_r($mang2,true)."</pre>" );




