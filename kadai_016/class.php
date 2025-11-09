<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP課題016</title>
</head>

<body>
   <p>
    <?php
class Food {
    public $name;     
    public $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price =$price;
    }

       public function show_price() {
       echo $this->price;
   }
}

class Animal {
    public $name;     
    public $height;
    public $weight;

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height =$height;
        $this->weight =$weight;
    }

       public function show_height() {
          echo $this->height;
    }
}
        $Product = new Food('potato', 250); 
        $Pet = new Animal('dog', 60, 5000);

        print_r($Product);
        echo "<br>";
        print_r($Pet);
        echo "<br>";
        $Product->show_price();
        echo "<br>";
        $Pet->show_height();
?>

</p>
</body>

</html>