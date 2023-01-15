<?php

// POSTデータ取得
$name = $_POST["name"];
$pet = $_POST["pet"];
$email = $_POST["email"];

// 申込時間取得
$date = date("Y/m/d H:i:s");
// ↑なぜか日本時間に修正できない

// ファイルを読み込む
$file = fopen("./data/data.txt","a");
// ファイルに書き込む
fwrite($file,$date." ".$name." ".$pet." ".$email."\n");
// ファイルを閉じる
fclose($file);


// read.phpにリダイレクト
header("Location: result.php");
exit();




?>