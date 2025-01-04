<?php
//  banyak method yg akan di gunakan untuk anak turunan 
abstract class Kendaraan2 {
  public $merk;

  // malakukan penggaaran suatu property
  public function __construct($merk) 
  {
    $this->merk = $merk;
  }

  // melakukan method
  abstract public function bunhyi(); 
  public function getmerk () {
    return $this->merk;
  }
}
class Motor  extends Kendaraan2 {
  // implementasi method bunyi
  public function  bunhyi()
  {
    return "brem brem <n/>";
  }
}
class motor1 extends Kendaraan2 {
  // implementasikan method  bunyi
  public function bunhyi()
  {
    return "ngeng ngeng <n/>";
  }
  public function jaga () {
    return "<br>";
  }
}

// pembuatan object
// object yang construct
$motorsaya = new Motor ("Toyota". " ");
echo $motorsaya->getmerk()."berbunnyi:". $motorsaya->bunhyi() . "<n/>";
echo "<br>";
$motortemensaya = new motor1 ("Honda".  " ");
echo $motortemensaya->getmerk(). "berbunyi:" .$motortemensaya->bunhyi(). "<n/>";

?>