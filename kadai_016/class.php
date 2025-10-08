<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
      <?php
      // クラスの定義
      Class Food {
        private $name;
        private $price;

        // コンストラクタ
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }

        // メソッド
        public function show_price() {
          echo $this->price . '<br>';
        }
      }

      Class Animal {
        private $name;
        private $height;
        private $weight;

        // コンストラクタ
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }

        // メソッド
        public function show_height() {
          echo $this->height . '<br>';
        }
      }

      // インスタンス化、出力
      $apple = new Food('apple', 100);
      print_r($apple);
      echo '<br>';

      $cat = new Animal('cat', 30, 3000);
      print_r($cat);
      echo '<br>';

      // メソッド呼び出し
      $apple->show_price();
      $cat->show_height();

      ?>
    </p>
</body>

</html>