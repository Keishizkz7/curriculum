<?php
//count（要素の数を数える）
$count = ["one","two","three"];
    echo count($count);
    //3
?>
<br>
<br>

<?php
//sort（要素の並べ替え）
$sort = ["apple","melon","banana","plum","cherry"];
    sort($sort);
    var_dump($sort);

?>
<br>
<br>

<?php
//sort（数字）
$sortnumber = ["45","91","33","12","76"];
    sort($sortnumber);
    var_dump($sortnumber);

?>
<br>
<br>
<?php
//in_array（配列に中にある要素が存在しているか）
$fluit = ["apple","melon","banana","plum","cherry"];
    var_dump(in_array("orange",$fluit));

//in_array(調べたい文字もしくは数値, 対象の配列)
// 論理値が結果として返る => bool(true) or bool(false)
?>
<br>
<br>

<?php
//in_array+if
$fluit = ["apple","melon","banana","plum","cherry"];
    if (in_array("cherry",$fluit)) {
        echo "チェリーです";
    } else {
        echo "チェリーちゃう";
    }

?>
<br>
<br>

<?php
//implode（配列を結合して文字列に変換）
$fluit = ["apple","melon","banana","plum","cherry"];
$X = implode("*", $fluit);
var_dump($X);
?>
<br>
<br>

<?php
$fluit = ["apple","melon","banana","plum","cherry"];
$x= implode($fluit);
var_dump($x);
?>
<br>
<br>

<?php
//explode（文字列を指定の区切りで配列にする）
$fluit = ["apple","melon","banana","plum","cherry"];
$X = implode("*", $fluit);
var_dump($X);

$fluit = explode("*", $X);
var_dump($fluit);

?>
<br>
<br>
