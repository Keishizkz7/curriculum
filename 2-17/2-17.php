<?php
define("GOAL",40);
$total = 0;

for ($x = 1; $x <= GOAL; $x++) {
    $a = rand(1,6);
    $total += $a;

    echo "{$x}回目= {$a}\n";

    echo "<br>";

    if ($total >= GOAL) {
        echo "合計{$x}回でゴールしました";
        break;
    }

}

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

} elseif (12 <= $time && $time <=18) { //12-18時
    echo "こんにちは";

} else {//それ以外の時間帯
    echo "こんにちは";
}
?>







