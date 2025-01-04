<?php
// Membuat class abdrrack 
class carr {
  public $name;
  public $jenis;

  public function __construct ($name, $jenis) {
    $this->name = $name;
    $this->jenis = $jenis;
  }
}

// membuat class abstract
// abstract class function (); -> untuk tanpa parameter
// abstract class function($nama, $color) -> harus di implementasikan pada class anak
// abstract class function () : string -> Data /  nilai yg harus di keluarkan berupa string
abstract class Hewan {
  // Properti yang dimiliki setiap hewan
  public $nama;
  public $jenis;

  // Constructor untuk inisialisasi properti
  public function __construct($nama, $jenis) {
      $this->nama = $nama;
      $this->jenis = $jenis;
  }

  // Method abstrak (tidak ada implementasi)
  abstract public function suara();

  // Method biasa (dapat langsung digunakan oleh kelas turunan)
  public function infoHewan() {
      return "Nama: {$this->nama}, Jenis: {$this->jenis}";
  }
}

// Kelas turunan dari Hewan
class Anjing extends Hewan {
  // Implementasi method abstrak suara()
  public function suara() {
      return "Guk Guk";
  }
}

// Kelas turunan dari Hewan
class Kucing extends Hewan {
  // Implementasi method abstrak suara()
  public function suara() {
      return "Meong";
  }
}

// Membuat objek dari kelas turunan
$anjing = new Anjing("Rex", "Anjing","maung");
$kucing = new Kucing("Milo", "Kucing");

// Memanggil method yang ada di kelas turunan
echo $anjing->infoHewan();  // Output: Nama: Rex, Jenis: Anjing
echo "<br>";
echo $anjing->suara();      // Output: Guk Guk
echo "<br>";

echo $kucing->infoHewan();  // Output: Nama: Milo, Jenis: Kucing
echo "<br>";
echo $kucing->suara(); 

// mencoba membuat class abstrct lagi
abstract class benda {
  public $jenis;
  public $harga;

  public function __construct ($jenis,  $harga) {
      $this->jenis = $jenis;
      $this->harga = $harga;
  }

  // Method abstract yg tidak ada implementasi
  abstract public function getinfo ();

  // method biasa yg di gunakan untuk kelas tururnan
  public function informasi($harga) {
    $this->harga = $harga;
  }
}

class hp  extends benda {
  public function getinfo () {
    return "Devise: {$this->jenis} dengan harga Rp. {$this->harga} ";
  }
}

class laptop extends benda {
  public function  getinfo () {
    return "Device:  {$this->jenis} dengan harga Rp. {$this->harga} ";
  }
}

$produkhp = new hp ("samsung", 57576e67887);
$produklaptop = new laptop ("asus",234343242);
echo $produkhp->getinfo();
echo "<br/>";
echo $produklaptop-> getinfo();
?>