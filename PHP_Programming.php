<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming</title>
</head>

<body>
    <!-- 
        3.1 Syntax of PHP
            3.1.1 Basic PHP Syntax
                  Skrip PHP dapat ditempatkan di mana saja di dalam dokumen.
     -->
    <h1>My First PHP page</h1>
    <?php
    // PHP Code goes here
    echo "Hello World";
    ?>

    <h2>Thank you for Visiting my Page</h2>

    <!-- 
        3.1.2 Comments in PHP
                Comment dalam kode PHP adalah baris yang tidak dibaca / dieksekusi sebagai bagian dari program. Tujuannya hanya untuk dibaca oleh seseorang yang melihat kode.
                Komentar dapat digunakan untuk:
                o	Biarkan orang lain mengerti apa yang Anda lakukan
                o	Ingatkan diri sendiri tentang apa yang Anda lakukan. Sebagian besar programmer mempunyai pengalaman untuk kembali ke pekerjaan mereka sendiri satu atau dua tahun kemudian dan harus mencari tahu apa yang mereka lakukan. Komentar dapat mengingatkan Anda tentang apa yang Anda pikirkan ketika Anda menulis kode

     -->
    <?php
    // This is a single-line comment

    # This is also a single-line comment

    /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
    */

    // You can also use comments to leave out parts of a code line
    $x = 5 /* + 15 */ + 5;
    echo $x;
    echo "<br>";
    ?>

    <!-- 
        3.1.3 PHP Case Sensitivity
        Dalam PHP, TIDAK ada kata kunci (mis. Jika, selain itu, sementara, gema, dll.), Kelas, fungsi, dan fungsi yang ditentukan pengguna adalah case-sensitive.
     -->

    <?php
    echo "Hello World!<br>";
    echo "Hello World!<br>";
    echo "Hello World!<br>";
    ?>

    <!-- 
        Dalam contoh di bawah ini, hanya pernyataan pertama yang akan menampilkan nilai variabel $color (ini karena $color, $COLOR, dan $coLOR diperlakukan sebagai tiga variabel berbeda):
      -->
    <?php
    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";
    echo "<br>";
    ?>

    <!-- 
        Latihan
     -->

    <?php
    echo "Hello World";
    ?>

    <!-- 
        3.2 Embedding PHP in HTML
        Anda menanamkan kode PHP ke halaman HTML standar. Berikut contoh cara Anda dapat menghasilkan judul dokumen HTML secara dinamis:
        <html><head><title><? echo $title ?></title></head>

        Bagian <? echo $title ?> dari dokumen digantikan oleh isi dari variabel $title PHP. echo adalah pernyataan bahasa dasar yang dapat Anda gunakan untuk menampilkan data.
     -->

    <!-- 
        3.3. Embedding HTML in PHP
        Anda menanamkan kode PHP ke halaman HTML standar.

        Menggunakan keyword echo
      -->

    <?php
    echo "<html>";
    echo "<br>";
    echo "<title>HTML With PHP</title>";
    echo "<br>";
    echo "<b>My Example</b>";
    echo "<br>";
    print "<i>Print works too!</i>";
    echo "<br>";
    ?>


    <!-- 
        3.4 Introduction to PHP variable
        3.4.1 Creating [Declaring] PHP Variables
        Di PHP, variabel dimulai dengan tanda $, diikuti dengan nama variabel
     -->

    <?php
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;
    ?>
    <!-- 
        Setelah eksekusi pernyataan di atas, variabel $txt akan menyimpan nilai Hello world !, variabel $x akan menyimpan nilai 5, dan variabel $y akan menyimpan nilai 10.5
      -->

    <!-- 
        3.4.2 Output Variables
        Pernyataan PHP “echo” sering digunakan untuk menampilkan data ke layar.
    -->

    <?php
    $txt = "polytron.co.id";
    echo "I love $txt!";
    echo "<br>";
    ?>
    <?php
    $txt = "polytron.co.id";
    echo "I love " . $txt . "!";
    echo "<br>";
    ?>

    <!-- 
        3.4.4 PHP The global keyword
        Kata kunci global digunakan untuk mengakses variabel global dari dalam suatu fungsi.
        Untuk melakukan ini, gunakan kata kunci global sebelum variabel (di dalam fungsi):
     -->

    <?php
    $x = 5;
    $y = 10;

    function myTest()
    {
        global $x, $y;
        $y = $x + $y;
    }

    myTest();
    echo $y; // outputs 15
    echo "<br>";
    ?>

    <!-- 
        PHP juga menyimpan semua variabel global dalam array yang disebut $GLOBALS [index]. Indeks menyimpan nama variabel. Array ini juga dapat diakses dari dalam fungsi dan dapat digunakan untuk memperbarui variabel global secara langsung. Contoh di atas dapat ditulis ulang seperti ini:
     -->

    <?php
    $x = 5;
    $y = 10;

    function myTest2()
    {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest2();
    echo $y; // outputs 15
    echo "<br>";
    ?>

    <!-- 
        3.4.5 PHP The static keyword
        Biasanya, ketika suatu fungsi selesai / dieksekusi, semua variabelnya dihapus. Namun, terkadang kita ingin variabel lokal TIDAK dihapus. Kita membutuhkannya untuk pekerjaan lebih lanjut.
        Untuk melakukan ini, gunakan kata kunci statis ketika Anda pertama kali mendeklarasikan variabel:
     -->

    <!-- 
        Code ini iseng doang
      -->
    <?php
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < $i; $j++) {
            echo ".";
        }

        for ($j = 0; $j < 5 - $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>

    <!-- 
        3.4.5 PHP The Static Keyword
        Biasanya, ketika suatu fungsi selesai / dieksekusi, semua variabelnya dihapus. Namun, terkadang kita ingin variabel lokal TIDAK dihapus. Kita membutuhkannya untuk pekerjaan lebih lanjut. Untuk melakukan ini, gunakan kata kunci statis ketika Anda pertama kali mendeklarasikan variabel:
        
     -->

    <?php
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5 - $i; $j++) {
            echo "*";
        }

        for ($j = 0; $j < $i; $j++) {
            echo ".";
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>


</body>

</html>