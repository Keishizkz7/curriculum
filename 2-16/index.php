<?php

$text = "text.txt";
$word = "こんにちは！";

if(is_writable($text)) {

    $fp = fopen($text, "a");

    fwrite($fp, $word);

    fclose($fp);

    echo "OK";

} else {
    echo "NG";
    exit;
}

?>
<br>
<br>

<?php

$file = "text2.txt";

if (is_readable($file)) {

    $fp =fopen($file, "r");

// 開いたファイルから1行ずつ読み込む
    while ($line = fgets($fp)) {

        // 改行コード込みで1行ずつ出力
        echo $line. '<br>';
    }

    fclose($fp);

} else {
    echo "NGNG";
    exit;
}

?>

