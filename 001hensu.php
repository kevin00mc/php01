<html>
    <head>
        <meta charset="utf-8">
        <title>変数</title>
    </head>
<body>

<!-- 以下にPHPを記述 -->

<?php

echo "好きな文字をここに入力";
echo "<br>";

// 変数
$name = '中野';
$last_name = '憲一';

// echo $name + $last_name;
echo $name . $last_name;
echo "<br>";

$sato_age = 30;
$yamada_age = "25";

$total_age = $sato_age + $yamada_age;

// var_dump($total_age);
echo $total_age;
// echo "<br>";
// //結合演算子
// $total_age = $sato_age . $yamada_age;

// 条件分岐　おみくじアプリ

// rand(min,max)
$num = rand(1,2);

// おみくじ
if ( $num == 1 ) {
    echo "アタリ";
}else{
    echo "ハズレ";
}


?>


<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>