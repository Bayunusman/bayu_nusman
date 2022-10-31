<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>ARRAY PHP</p>'; 

//$mencoba = array("mawar", "akasia", "alamanda", "mawar");// nama bunga
//$nama = ["juki", "dodo", "andri"]; // nama orang
//$angka = [9,5,7,5,3,4,8,6,7,4];
//print_r ($mencoba); // print semuanya
//print $nama[0] //print per item

// METODE ARRAY
//print_r (array_unique($mencoba)). '<br>'; //menghilangkan bagian unik/doble

//print_r (array_reverse($mencoba)). '<br>'; //membalikan bagian array

//shuffle($mencoba); //random
//print_r ($mencoba);

//print count($mencoba). '<br>'; //menjumlahkan seluruh isi dari variabel
//print count($nama). '<br>';

//sort ($angka). '<br>' ; // pengurutan
//print_r ($angka). '<br>';

//Associative Array
// $data = array ( "nama" => "Bayu Nusman",
//                 "umur" => 21,
//                 "pekerjaan" => "Mahasiswa"
// );
// // // //print_r($data) . '<br>';
// $data2 = array ( "hoby" => "olahraga",
//                 "agama" => "islam"
// );

// echo "haii nama ku " . $data["nama"] . '<br>';
// echo " umur ku sekarang " . $data["umur"] . '<br>';
// echo " sekarang stusku adalah " . $data["pekerjaan"] . '<br>';

//$data ['nama'] = "BAYU NUSMAN";
// echo "nama lengkap ku adalah ". $data["nama"];

// ARRAY LANJUTAN
// METHOD Associative Array

//print_r(array_values($data)) .'<br>';//menagganti que menjadi index
//print_r(array_keys($data)) .'<br>';//menagganti que menjadi nama dari que
//print_r(array_merge($data, $data2)) .'<br>'; //menggabungkan array 1 dan 2

//Array Multi Dimensi
$data_baru = array (
                array ("bayu", "21", "olahraga"),
                array ("lukman", "28", "main"),
                array ("andri", "32", "belajar")
                    
              );

//print_r($data_baru).'<br>';
//jika ingin print peritem maka urutan nya seperti ini
// 00 01 02
// 10 11 12
// 20 21 22

//echo $data_baru [1][1];
//echo $data_baru [0][0];

//mengubah isi array 
// $data_baru [1][2] = 'membaca';
// echo $data_baru [1][2];
//MATERI SUPER GLOBAL ARRAY  

echo $_SERVER ("SERVER ADDR");
?> 
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>