<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>
        <?php
        // 連想配列に値を代入する
        $vegetables = ['name' => 'onion', 'price' => 200, 'weight' => 160];

        // 連想配列を出力する
        print_r($vegetables);
        ?>
  </p>
</body>
</html>