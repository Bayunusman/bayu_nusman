<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
// ini adalah komentar 1 baris, tidak akan di eksekusi
/*
  ini komentar juga
  tetapi lebih dari satu baris
  tidak akan di eksekusi
*/
    $a = "belajar variabel";
    $b = 60;
    $c = 120;
    $nama_variabel_panjang = 9.86;
    $d = 9.5;


    echo '<h1>DASAR PHP</h1>'; // cetak tebal ukuran h1
    echo 'Tetap Belajar<br>'; // fungsi echo
    echo  $a . "<br>";
    echo "hello aku sedang".' '. $a.'<br>';
    echo $b + $c . '<br>'; // penjumlahan pada int
    echo $b . $c . "<br>"; // penggabungan number
    echo $b * $nama_variabel_panjang.'<br>';
    echo "yuk rekk kita $a". '<br>'; // tipe data string
    echo $b / $d . "<br>"; //type data float

    echo "<h1>OPERATOR MATEMATIKA</h1>";
    $mtk1 = 25;
    $mtk2 = 520;
    $mtk3 = 6.5;


    echo $mtk1 + $mtk2 * $mtk3 . '<br>'; //perkalian terlebih        dahulu
    $baru = $mtk1 + $mtk2 . '<br>'; //variabel baru
    echo  $baru;
    $mtk1 = $mtk1 + $mtk2 . '<br>';
    echo $mtk1; // mengubah nilai dari variabel mtk1
    $mtk1 += $mtk2 . '<br>'; //penjumlahan langsung
    $mtk1 *= $mtk3 . '<br>'; //perkalian langsung

// METODE MATEMATIKA 
    echo round ($mtk3). '<br>'; //method untuk pembulatan
    echo "contoh angka random seperti". ' ' . rand (1,9). '<br>';
    echo "contoh angka terbesar seperti". ' ' . max (1,9,8,5,3,2). '<br>';
    echo "contoh angka terkecil seperti". ' ' . min ($mtk1, $mtk2, $mtk3). '<br>';


// METODE STRING
    $text = "apa kabar semuanya";
    echo strlen ($text) . '<br>';  #menghitung jumlah index text
    echo str_word_count ($text) . '<br>' ; # menghitung perkata
    echo str_replace ("semuanya", "rekk", $text) . '<br>'; //mengubah        kata
    echo str_repeat ("rekk", 10).'<br>'; //perulangan kata tertentu
    echo str_repeat(str_replace('rekk', 'gaes',$text), 10 );
?> 
    
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>