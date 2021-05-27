<?php
$x = 0;
$v = 0;

while ($x < 40) {
    $v++;
    $a = rand(1,6);
    echo $v. "回目＝" . $a . "\n";
    $x += $a;
    echo "<br>";
}

echo "合計". $v . "回目でゴールしました";

?>
<br>
<br>

<?php
date_default_timezone_set("Asia/Tokyo");
echo date('今H時台です');
?>
<br>
<?php
$time = intval(date("H"));

if (4 <= $time && $time <=12) {//4-12時
    echo "おはようございます";

} elseif (12 < $time && $time <=18) { //12-18時
    echo "こんにちは";

} else {//それ以外の時間帯
    echo "こんばんは";
}
?>







