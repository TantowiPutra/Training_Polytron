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
    ?>

    <!-- 
        3.4.5 PHP The Static Keyword
        Biasanya, ketika suatu fungsi selesai / dieksekusi, semua variabelnya dihapus. Namun, terkadang kita ingin variabel lokal TIDAK dihapus. Kita membutuhkannya untuk pekerjaan lebih lanjut. Untuk melakukan ini, gunakan kata kunci statis ketika Anda pertama kali mendeklarasikan variabel:
     -->

    <?php
    function myTest3()
    {
        static $x = 0;
        echo $x;
        $x++;
    }

    echo "Test static variable:";
    echo "<br>";
    myTest3();
    echo "<br>";
    myTest3();
    echo "<br>";
    myTest3();
    echo "<br>";
    echo "<br>";
    ?>
    <!-- 
        Kemudian, setiap kali fungsi dipanggil, variabel itu akan tetap memiliki informasi yang dikandungnya dari terakhir kali fungsi dipanggil.
     -->

    <?php
    echo "Test algoritma:";
    echo "<br>";
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
    ?>

    <!-- 
        3.5 Understanding data types
        PHP mendukung beberapa tipe data berikut:
        •	String
        •	Integer
        •	Float (floating point numbers - also called double)
        •	Boolean
        •	Array
        •	Object
        •	NULL
     -->

    <!-- 
        3.5.1 String
        String adalah urutan karakter, seperti "Halo dunia!".
        Sebuah string dapat berupa teks apa pun di dalam tanda kutip. Anda dapat menggunakan tanda kutip tunggal atau ganda:
     -->


    <?php
    echo "Test tipe data string: <br>    ";
    $x = "Hello world!";
    $y = 'Hello world!';

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    ?>

    <!-- 
        Tanda kutip dua : dapat melakukan variable substitution (kita dapat langsung menyisipkan variabel)
        Tanda kutip tunggal : tidak dapat melakukan variable substitution (tidak dapat langsung menyisipkan variabel, harus di concatenate)
      -->

    <!-- 
        3.5.2 Integer
        Tipe data integer adalah angka non-desimal antara -2,147.483.648 dan 2.147.483.647.
        Aturan untuk bilangan bulat:
        -	Integer harus memiliki setidaknya satu digit
        -	Bilangan bulat tidak boleh memiliki titik desimal
        -	Integer dapat berupa positif atau negatif
        -	Integer dapat ditentukan dalam tiga format: desimal (berbasis 10), heksadesimal (berbasis 16 - diawali dengan 0x) atau oktal (berbasis 8 - diawali dengan 0)

        Dalam contoh berikut $x adalah bilangan bulat. Fungsi PHP var_dump() mengembalikan tipe data dan nilai:
    -->

    <?php
    $x = 5985;
    var_dump($x);
    echo "<br>";
    echo "<br>";
    ?>

    <!-- 
        3.5.3 Float
        Float (angka titik mengambang) adalah angka dengan titik desimal atau angka dalam bentuk eksponensial.

        Dalam contoh berikut $x adalah float. Fungsi PHP var_dump() mengembalikan tipe data dan nilai:
     -->

    <?php
    $x = 10.365;
    var_dump($x);
    echo "<br>";
    echo "<br>";
    ?>

    <!-- 
        3.5.4 Boolean
        Boolean mewakili dua kemungkinan kondisi: TRUE atau FALSE.
     -->

    <?php
    $x = true;
    $y = false;
    ?>
    <!-- Boolean sering digunakan dalam pengujian bersyarat. -->

    <!-- 
        3.5.5 Array
        Array menyimpan banyak nilai dalam satu variabel tunggal.
        Dalam contoh berikut, $cars adalah sebuah array. Fungsi PHP var_dump() mengembalikan tipe data dan nilai:
     -->

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo "<br>";
    echo "<br>";
    ?>

    <!-- 
        3.5.6 Object
        Object adalah tipe data yang menyimpan data dan informasi tentang cara memproses data itu.

        Dalam PHP, suatu object harus dinyatakan secara eksplisit.

        Pertama kita harus mendeklarasikan kelas object. Untuk ini, kami menggunakan class keyword. Class adalah struktur yang dapat berisi properti dan metode:
     -->

    <?php
    class Car
    {
        public $model;
        // Constructor
        public function __construct()
        {
            $this->model = "VW";
        }

        public function getModel()
        {
            return $this->model;
        }
    }

    // Create an object
    $herbie = new Car();

    // show object properties
    var_dump($herbie->model);
    echo "<br>";
    echo "<br>";
    ?>

    <!-- 
        3.5.7 NULL Value
        Null adalah tipe data khusus yang hanya dapat memiliki satu nilai: NULL.
        Variabel tipe data NULL adalah variabel yang tidak memiliki nilai yang ditetapkan padanya.
        Tip: Jika suatu variabel dibuat tanpa nilai, variabel itu secara otomatis akan diberi nilai NULL.
        Variabel juga dapat dikosongkan dengan menetapkan nilai ke NULL:
     -->

    <?php
    $x = "Hello world!";
    $x = null;
    var_dump($x);
    echo "<br>";
    echo "<br>";
    ?>

    <!-- 
        3.6 Using Operators
        Operator digunakan untuk melakukan operasi pada variabel dan nilai.
        PHP membagi operator dalam grup berikut:
        -	Arithmetic operators
        -	Assignment operators
        -	Comparison operators
        -	Increment/Decrement operators
        -	Logical operators
        -	String operators
        -	Array operators

        3.6.1	Arithmetic Operators
        Operator aritmatika PHP digunakan dengan nilai numerik untuk melakukan operasi aritmetika umum, seperti penambahan, pengurangan, perkalian, dll.

        Operator	Name	Example	Result
        +	Addition	$x + $y	Sum of $x and $y
        -	Subtraction	$x - $y	Difference of $x and $y
        *	Multiplication	$x * $y	Product of $x and $y
        /	Division	$x / $y	Quotient of $x and $y
        %	Modulus	$x % $y	Remainder of $x divided by $y
        **	Exponentiation	$x ** $y	Result of raising $x to the $y'th power (Introduced in PHP 5.6)

        3.6.2	Assignment Operators
        Operator Assignment PHP digunakan dengan nilai numerik untuk menulis nilai ke variabel.
        Operator Assignment dasar dalam PHP adalah "=". Ini berarti bahwa operan kiri diatur ke nilai ekspresi penugasan di sebelah kanan.
        Assignment	Same as...	Description
        x = y	x = y	The left operand gets set to the value of the expression on the right
        x += y	x = x + y	Addition
        x -= y	x = x - y	Subtraction
        x *= y	x = x * y	Multiplication
        x /= y	x = x / y	Division
        x %= y	x = x % y	Modulus

        3.6.3	Comparison Operators
        Operator perbandingan PHP digunakan untuk membandingkan dua nilai (angka atau string):
        Operator	Name	Example	Result
        ==	Equal	$x == $y	Returns true if $x is equal to $y
        ===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type
        !=	Not equal	$x != $y	Returns true if $x is not equal to $y
        <>	Not equal	$x <> $y	Returns true if $x is not equal to $y
        !==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type
        >	Greater than	$x > $y	Returns true if $x is greater than $y
        <	Less than	$x < $y	Returns true if $x is less than $y
        >=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y
        <=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y

        3.6.4	Increment / Decrement Operators
        Operator increment PHP digunakan untuk meningkatkan nilai variabel.
        Operator decrement PHP digunakan untuk mengurangi nilai variabel.
        Operator	Name	Description
        ++$x	Pre-increment	Increments $x by one, then returns $x
        $x++	Post-increment	Returns $x, then increments $x by one
        --$x	Pre-decrement	Decrements $x by one, then returns $x
        $x--	Post-decrement	Returns $x, then decrements $x by one

        3.6.5	Logical Operators
        Operator logis PHP digunakan untuk menggabungkan pernyataan bersyarat.
        Operator	Name	Example	Result
        and	And	$x and $y	True if both $x and $y are true
        or	Or	$x or $y	True if either $x or $y is true
        xor	Xor	$x xor $y	True if either $x or $y is true, but not both
        &&	And	$x && $y	True if both $x and $y are true

        3.6.6	String Operators
        PHP memiliki dua operator yang dirancang khusus untuk string.
        Operator	Name	Example	Result
        .	Concatenation	$txt1 . $txt2	Concatenation of $txt1 and $txt2
        .=	Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1

        3.6.7	Array Operators
        Operator array PHP digunakan untuk membandingkan array.
        Operator	Name	Example	Result
        +	Union	$x + $y	Union of $x and $y
        ==	Equality	$x == $y	Returns true if $x and $y have the same key/value pairs
        ===	Identity	$x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types
        !=	Inequality	$x != $y	Returns true if $x is not equal to $y
        <>	Inequality	$x <> $y	Returns true if $x is not equal to $y
        !==	Non-identity	$x !== $y	Returns true if $x is not identical to $y

        3.7	Using Conditional Statements
            Sangat sering ketika menulis kode, kita ingin melakukan tindakan berbeda untuk kondisi yang berbeda. Kita dapat menggunakan pernyataan kondisional dalam kode untuk melakukan ini.
            Dalam PHP memiliki pernyataan kondisional berikut:
            •	if statement - executes some code if one condition is true
            •	if...else statement - executes some code if a condition is true and another code if that condition is false
            •	if...elseif....else statement - executes different codes for more than two conditions
            •	switch statement - selects one of many blocks of code to be executed

        3.7.1	PHP - The if Statement
            Pernyataan if mengeksekusi beberapa kode jika satu syarat benar.
     -->

    <?php
    $date = date("Y-m-d"); // example date in string format
    $today = date('d', strtotime($date)); // extracts year from date string

    if ($today < "20") {
        echo "Have a good day!";
        echo "<br>";
        echo "hari ini tanggal $today";
        echo "<br>";
        echo "<br>";
    }
    ?>

    <!-- 
        3.7.2	PHP - The if...else Statement
        Pernyataan if .... else mengeksekusi beberapa kode jika suatu kondisi benar dan kode lain jika kondisi itu salah.
     -->
    <?php
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day!";
        echo "<br>";
        echo "Saat ini jam $t";
        echo "<br>";
        echo "<br>";
    } else {
        echo "Have a good night!";
        echo "<br>";
        echo "<br>";
    }
    ?>

    <!-- 
        3.7.3	PHP - The if...elseif....else Statement
        Pernyataan if .... elseif ... else mengeksekusi kode yang berbeda untuk lebih dari dua syarat.
     -->
    <?php
    $t = date("H");

    if ($t < "10") {
        echo "Have a good morning!";
        echo "<br>";
        echo "<br>";
    } elseif ($t < "20") {
        echo "Have a good day!";
        echo "<br>";
        echo "<br>";
    } else {
        echo "Have a good night!";
        echo "<br>";
        echo "<br>";
    }
    ?>

    <!-- 
        3.7.4	PHP - The switch Statement
        Gunakan switch statement untuk memilih salah satu dari banyak blok kode yang akan dieksekusi.
     -->

    <?php
    $favcolor = "red";
    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            echo "<br>";
            echo "<br>";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            echo "<br>";
            echo "<br>";
            break;
        case "green":
            echo "Your favorite color is green!";
            echo "<br>";
            echo "<br>";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
            echo "<br>";
            echo "<br>";
    }
    ?>

    <!-- 
        3.8	Loops
        Seringkali saat kita menulis kode, kita ingin blok kode yang sama berulang kali berturut-turut. Alih-alih menambahkan beberapa baris kode yang hampir sama dalam sebuah skrip, kita dapat menggunakan loop untuk melakukan tugas seperti ini.
        Dalam PHP, memiliki pernyataan perulangan berikut:
        •	while - loops through a block of code as long as the specified condition is true
        •	do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
        •	for - loops through a block of code a specified number of times
        •	foreach - loops through a block of code for each element in an array
     -->

    <!-- 
        3.8.1	while Loops
        PHP while loop mengeksekusi blok kode sementara kondisi yang ditentukan benar.
      -->
    <?php
    $x = 1;

    while ($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<br>";
    ?>

    <!-- 
        3.8.2	do...while Loop
        Loop do ... while akan selalu mengeksekusi blok kode sekali, kemudian akan memeriksa kondisinya, dan mengulangi loop sementara kondisi yang ditentukan benar.
     -->

    <?php
    $x = 1;

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
    echo "<br>";
    ?>

    <!-- 
        Perhatikan bahwa dalam loop do do while kondisi diuji SETELAH mengeksekusi pernyataan dalam loop. Ini berarti bahwa loop do while akan menjalankan pernyataannya setidaknya satu kali, walaupun kondisinya salah saat pertama kali.
     -->

    <!-- 
        3.8.3	for Loop
        Loop for digunakan ketika kita tahu sebelumnya berapa kali skrip harus dijalankan.
      -->
    <?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    echo "<br>";
    ?>

    <!-- 
        3.8.4	foreach Loop
        Foreach loop hanya bekerja pada array, dan digunakan untuk loop melalui setiap pasangan kunci / nilai dalam array.
     -->

    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>

    

</body>

</html>