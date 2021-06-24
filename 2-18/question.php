<?php
//POST送信で送られてきた名前を受け取って変数を作成
    $name = $_POST["name"];

    //①画像を参考に問題文の選択肢の配列を作成してください。
    $number = ["80","22","20","21"];
    $lang   = ["PHP","Python","JAVA","HTML"];
    $com    = ["join","select","insert","update"];

    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $answer1 = $number[1];
    $answer2 = $lang[0];
    $answer3 = $com[3];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <p>お疲れ様です<?php echo $name; ?><!--POST通信で送られてきた名前を出力-->さん</p>
    <!--フォームの作成 通信はPOST通信で-->

    <form action="answer.php" method="post">

        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach($number as $question) : ?>
            <input type="radio" name="number" value="<?php echo $question;?>"> <?php echo $question;?>
        <?php endforeach;?>

        <h2>②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach($lang as $question) : ?>
            <input type="radio" name="lang" value="<?php echo $question;?>"> <?php echo $question;?>
        <?php endforeach;?>

        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php foreach($com as $question) :?>
            <input type="radio" name="com" value="<?php echo $question;?>"> <?php echo $question;?>
        <?php endforeach;?>

        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type="hidden" name="name" value="<?php echo $name;?>">
        <input type="hidden" name="answer1" value="<?php echo $answer1;?>">
        <input type="hidden" name="answer2" value="<?php echo $answer2;?>">
        <input type="hidden" name="answer3" value="<?php echo $answer3;?>">
        <br>
        <input type="submit" value="回答する">
    </form>
</body>
</html>
