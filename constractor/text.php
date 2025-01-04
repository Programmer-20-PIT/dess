<?php
// #contoh pembuatan konstructor dalam pewarisan
class baseClass {
  function __construct() {
      print "in Baseclass constructor <n/>";
  }
}

class subclass  extends baseclass {
  function __construct () {
      parent::__construct();
      print "in Subclass constructor <n/>";
  }
}
class OtherSubClass extends baseclass {
  function __construct () {
    parent::__construct();
    print "OtherSubClass in constructor <n/>";
  }
}
$obj = new baseclass();
echo "<br>";
$obj = new subclass();
echo "<br>";
$obj = new OtherSubClass();

// _________##_____________
// #2. menggunakan konsntructur argumen
class point {
  protected int $x;
  protected int $y;
  public function __construct(int $x, int $y = 0){
          $this->x = $x;
          $this->y = $y;
  }
}
$p1 = new point(3,4);
$p2 = new point (7);
$p3 = new point (y: 5, x: 4);
?>