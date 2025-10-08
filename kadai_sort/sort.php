<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数
        function sort_2way(array $array, bool $order) {

          // 引数$orderはTRUE(昇順)か？
          if ($order) {
            // 昇順のとき
            echo '昇順にソートします。<br>';
            sort($array);

          } else {
            // 降順のとき
            echo '降順にソートします。<br>';
            rsort($array);
          }

          // ソートした配列のデータを1行ずつ表示する
          foreach ($array as $value) {
            echo "{$value}<br>";
          }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 昇順ソート
        sort_2way($nums, true);

        // 降順ソート
        sort_2way($nums, false);
        ?>
    </p>
</body>

</html>