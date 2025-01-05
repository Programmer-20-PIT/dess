<?php
// for loops untuk 
$fruits = ["apel", "jeruk", "pisang"];
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "<br>";
}
$n = 5; // jumlah baris segitiga
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat(" ", $n - $i) . str_repeat("*", $i) . "<br>";
}
    echo "<hr>";
// methode dalam penulisan sebuah array

class ArraySorter{
    public static function sortArray($arr)
    {
        sort($arr);
        echo "Array yng sudah di urutkan:";
        return $arr;
    }

    public static function bubleShort($arr)
    {
        $n= count($arr);
        // mmelakukan perbandingkan di seluruh array
        for($i = 0; $i < $n - 1; $i++) {
            // elemen terakhir suadah berada pofifi terakhir jadi hanya elemen elemen yg sisa yg di bandingkan
            for ($j = 0; $j < $n - $i - 1;  $j++) {
                if  ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j +1] = $temp;
                }
            }
        }
        return $arr;
    }

    public static function selectionSort($arr) 
    {
        $n = count($arr);

        for ($i = 0; $i < $n  - 1; $i++) {
           $minIndex =  $i;

           for ($j = $i + 1; $j <  $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
           }

           if ($minIndex !=  $i) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$minIndex];
            $arr [$minIndex] = $temp;
           }
        }

        return $arr;
    }

}
    
    $array1 =  [9, 123, 7, 456, 1, 789,  6.234, 2.657, 5.890, 4.456, 3.789, 0.234, 11.567, 15.890, 13.123, 10.456, 12.789, 14.234, 19.567, 16.890, 17.123,18.456];
    print_r(ArraySorter::sortArray($array1));
    print_r(ArraySorter::bubleShort($array1));
    print_r(ArraySorter::selectionSort($array1));

    echo "<hr>";
    // cara membuat arraysumfider
    class ArraySumFinder 
    {
        /**
         * mencari sepasang angka dalam array yg jumlahnya sama dengan target.
         * 
         * @param array $arr Array input berisi angka-angka.
         * @param int|float $target Target jumlah yang di inginkan.
         * @return array |null Pasangn angka jika di temukan, atau null jika tidak ada.         */
        public static function findPairWithSum(array $arr, $target): ?array {
            $seen = [];
            foreach ($arr as $num) {
                $complement = $target  - $num;

                // memriksa apkah pekengkap sudah pernah di lihat sebelemnya
                if (isset($seen[$complement])) {
                    // jika di temukan , kembalikan pasangan tersebut
                    return [$complement, $num];
                }

                // menandai angka saat ini sebagia sudah di lihat
                $seen[$num] = true;
            }

            // jika tidak di temukan pasangan yang memenuhi 
            return null;
        }
    }
    echo "<hr>";

    // contoh penggunaan:
    $array = [4, 9, 3, 12, 6, 8, 17, 5, 10, 1, 14, 19, 13, 16, 20, 2, 11, 7, 15, 18];
    $target = 36;

    echo "Array yang di gunakan: [" . implode(",", $array) . "]\n";
    echo "<br>";
    echo "Target jumlah: $target\n";
    echo "<br>";    

    $result = ArraySumFinder::findPairWithSum($array, $target);
    
    if ($result !== null) {
        echo "pasangan yg tidak di temukan: [" . $result[0] . ", " . $result [1] . "] \n";
    } else {
        echo "Tidak di temukan pasngan yang jumlahnya sama denagn target. \n";
    }
    echo "<hr/>";

    // membuat kata 
    class WordCounter {
        public static function countWorld ($sentence) {

            $wordCount = str_word_count($sentence);
            echo "kalimat: \"$sentence\"\n";
            echo "Jumlah kata: $wordCount\n";

            return $wordCount;
        }
    }

    WordCounter::countWorld ("Hallo, nama saya John Doe");

    // menggunakan for lops
    for ($i = 0; $i < 10; $i++) {
        echo $i. "<br>";
    }

    $i = 0;
    while ($i < 10 ) {
        echo $i . "<br>";
            $i++;
    }

    // contoh do while loop
    $i = 0;

    do  {
        echo $i . "<br>";
        $i++;
    }while ($i < 10);

    // Penggunaan foreach loops

    $fruits = ["banana", "anggur", "apel", "kelapa"];
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    // latihan 

    for ($a = 0; $a < 20; $a++) {
        echo $a . "<br>";
    }

    $e = 0;
    while ($e < 15) {
        echo $e . "<br>";
        $e++;
    }

//    contoh penggunan code switch statment
$day = 8;
switch ($day) {
    case 1;
    echo "Senin";
    break;
    case 2;
    echo "Selasa";
    break;
    case 3;
    echo "Rabu";
    break;
    case 4;
    echo "Kamis";
    break;
    case 5;
    echo "jumat";
    break;
    case 6;
    echo 'Sabtu';
    break;
    case 7;
    echo "Ahad";
    break;
    default :
    echo  "Angka tidak valid";
}

// membuat sebuah contoh foreach

$umur = 20;
if ($umur >= 18 ) {
    echo "Anda tidak termasuk dalam mendapatkan diskon";
}else {
    echo "anda mendapatkan sebuah diskon";
}

// latihan pembuatan foreach
$x = 0;

for ($i = 0; $i < 19; $i+= 2) {
    echo $i++ . "<br>";
}

// penggunaan array ternary
$age = 18;
$status = ($age <= 18 ) ? "Dewasa" : "Anak - Anak";
echo $status;
