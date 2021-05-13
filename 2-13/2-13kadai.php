<?php
//ceil（切り上げ）
    $x = 7.1;
    echo ceil($x);
?>
<br>

<?php
// floor（切り捨て）
    $x = 9.8;
    echo floor($x);
?>    
<br>

<?php
// round（四捨五入）
     $x = 2.5;
     echo round($x);
?>
<br>

<?php
//pi（円周率）
    echo pi();
    
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    // 半径が4の円の面積の計算
    circleArea(4);
    ?>
<br>

<?php
//mt_rand（乱数）
    echo mt_rand(10,50);
?>
<br>

<?php
//strlen（文字列の長さ）
    $str = " happened ";
    echo strlen($str);
?>
<br>

<?php
//strpos（検索）
    $str = "konnichiwa";
    echo strpos($str, "w");
//8番目に出てくる
?>
<br>

<?php
//substr（文字列の切り取り）
    $str = "abcdefg";
    echo substr($str, -4, 3);
    // defと出力される
?>
<br>

<?php
//str_replace（置換）
$str = "abcdefg";
echo str_replace("bcd", "BCD", $str);
?>
<br>

<?php
//str_replace(置き換える前の文字列, 置き換えた後の文字列, 対象の文字列)
    $str = "こん　にちわ";
    echo str_replace("　", "", $str);
?>
<br>


<?php
//printf（フォーマット化した文字列を出力）
    $moji = "テスト";
    $day = 100;
    echo $moji."まで".$day."日です";
?>
<br>

<?php
//printf（フォーマット化した文字列を出力）
    $man = "人";
    $color = "色";
    $ten = 10;
    printf("%d%s%d%sの意見があります", $ten, $man,$ten,$color);

//%s…文字列
//%d…数値

?>
<br>

<?php
    $name = "カウントダウン"; $day= 100; $time = 18; printf("%sまであと%d日と%d時間です。", $name, $day, $time);

?>
<br>

<?php
    $hour = 3;
    $minute = 45;
    printf("あと%02d時間%02d分です", $hour, $minute);
?>
<br>

<?php
    $hour = 54;
    $minute = 30;
    printf("%02d時間%02d分が経過しました", $hour, $minute);
?>
<br>

<?php
//sprintf（変数に代入できるprintf）
    $minute = 16;
    $seconds = 40;
    printf("残り%02d分%02d秒", $minute, $seconds);
?>
<br>

<?php
    // sprintfだけでは出力までできない
    $limit_time = sprintf("残り%02d分%02d秒",$minute, $seconds);
    echo $limit_time;
?>
<br>





