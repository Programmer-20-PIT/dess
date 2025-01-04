<?php
// #.1  contoh pewarisan
class foo {
  public  function printitem($string){
    echo 'foo:' . $string . PHP_EOL;
  }
  public function printphp () {
    echo 'php is grat' . PHP_EOL;
  }
}
class Bamm extends foo {
  public function printitem($string)
  {
    echo 'Bamm:' . $string . PHP_EOL;
  }
}
$Foo = new foo ();
$bamm = new Bamm();
$Foo->printitem('Good');
$Foo->printphp();
echo "<br>";
$bamm->printitem('Boys');
$bamm->printphp();

// ######______________########
class fruit {
  public $name;
  public  $warna;
  public $bentuk;

  public function __construct ($name,$warna,$bentuk) {
      $this->name =$name;
      $this->warna =$warna;
      $this->bentuk =$bentuk;
  }

  protected function intro  () {
    return "ini adalah buah {$this->name} dan dia berwarna {$this->warna} dan berbentuk {$this->bentuk}";
  }
}
 class mellon extends fruit {
  // membuat satu function
  public function cek () {
    echo "apakah ini adalah buah mellon? ";

    // memmanggil method protected
    $this->intro();
  }
 }

 $melon = new mellon ("mellonn","hijau","bulat");
 echo  $melon->cek ();


 


?>