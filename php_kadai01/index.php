<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MIL ペット派閥　アンケート入力</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<h2><a href = "https://three-js-product-v891.vercel.app/">MIL ペット派閥　アンケートフォーム</a></h2>

<!-- partial:index.partial.html -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r74/three.min.js"></script>
<div class="wrapper"></div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
    <!-- <h1>MIL ペット派閥　アンケートフォーム</h1> -->


    <form method="post" action="write.php">
        <p>お名前：<input type="text" name="name" size="20" required></p>
        <p>ペットを飼うなら？：<select name="pet" type="text" required>
            <option value="">選択してください</option>
            <option value="dog">犬</option>
            <option value="cat">猫</option>
            <option value="fish">魚</option>
            <option value="bird">鳥</option>
        </select></p>
        <p>メールアドレス：<input type="text" name="email" size="20" required></p>
        <p><input type="submit" value="送信"></p>
    </form>

</body>
</html>