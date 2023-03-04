<!-- 
    4	PHP Functions
        4.1	PHP Functions
        Selain fungsi PHP bawaan, kita dapat membuat fungsi kita sendiri.
        Fungsi adalah blok pernyataan yang dapat digunakan berulang kali dalam suatu program.
        Suatu fungsi tidak akan langsung dieksekusi ketika halaman memuat.
        Suatu fungsi akan dieksekusi oleh panggilan ke fungsi tersebut.
 -->

<!-- 
    4.1.1	Create a User Defined Function
    Deklarasi fungsi yang ditentukan pengguna dimulai dengan kata function
 -->

<?php
function writeMsg()
{
    echo "Hello world!";
}

writeMsg(); // call the function
echo "<br>";
echo "<br>";
?>

<!-- 
    Note: Nama fungsi dapat dimulai dengan huruf atau garis bawah (bukan angka).
    Tips: Beri nama fungsi yang mencerminkan fungsi itu!
    Nama fungsi TIDAK peka huruf besar-kecil.
-->

<!-- 
    4.1.2	Function Arguments
    Informasi dapat diteruskan ke fungsi melalui argumen. Argumen seperti variabel.
    Argumen ditentukan setelah nama fungsi, di dalam tanda kurung. Anda dapat menambahkan argumen sebanyak yang Anda inginkan, cukup pisahkan dengan koma.
    Contoh berikut memiliki fungsi dengan satu argumen ($fname). Saat fungsi familyName () dipanggil, kami juga menyampaikan nama (mis. Jani), dan nama tersebut digunakan di dalam fungsi, yang menampilkan beberapa nama depan yang berbeda, tetapi nama belakang yang sama:
 -->

<?php
function familyName($fname)
{
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
echo "<br>";
?>

<?php
function familyName2($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
echo "<br>";
?>

<!-- 
    4.1.3	Default Argument Value
    Contoh berikut menunjukkan cara menggunakan parameter default. Jika kita memanggil fungsi setHeight() tanpa argumen, dibutuhkan nilai default sebagai argumen:
 -->
<?php
function setHeight($minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
echo "<br>";
?>

<!-- 
    4.1.4	Functions - Returning values
    Untuk membiarkan suatu fungsi mengembalikan nilai, gunakan pernyataan pengembalian:
 -->
<?php
function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
?>

<!-- 
    4.2	Creating an Array
    Array adalah variabel khusus, yang dapat menampung lebih dari satu nilai pada suatu waktu.
    Jika Anda memiliki daftar item (daftar nama mobil, misalnya), menyimpan mobil dalam variabel tunggal dapat terlihat seperti ini:
    $cars1 = "Volvo";
    $cars2 = "BMW";
    $cars3 = "Toyota";
    Namun, bagaimana jika kita ingin melewati mobil dan menemukan yang spesifik? Dan bagaimana jika kita tidak memiliki 3 mobil, tetapi 300?

    Solusinya adalah membuat array!
    Array dapat menyimpan banyak nilai dengan satu nama, dan Anda dapat mengakses nilai dengan merujuk ke nomor indeks.
    Di PHP, fungsi array() digunakan untuk membuat array:
    array();
    Di PHP, ada tiga jenis array:
    -	Indexed arrays - Arrays with a numeric index
    -	Associative arrays - Arrays with named keys
    -	Multidimensional arrays - Arrays containing one or more arrays

    4.2.1	Indexed Arrays
    Ada dua cara untuk membuat array yang diindeks:
    Indeks dapat ditetapkan secara otomatis (indeks selalu dimulai pada 0), seperti ini:
    $cars = array("Volvo", "BMW", "Toyota");
    atau indeks dapat ditetapkan secara manual:
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";
 -->

<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "<br>";
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
echo "<br>";
?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";
echo "<br>";
?>

<!-- 
    4.2.2	Associative Arrays
    Array asosiatif adalah array yang menggunakan kunci bernama yang Anda tetapkan untuk mereka.
    Ada dua cara untuk membuat array asosiatif:
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    $age['Peter'] = "35";
    $age['Ben'] = "37";
    $age['Joe'] = "43";
 -->

<?php
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";
echo "<br>";
?>

<!-- 
    4.2.3	Multidimensional Arrays
    Array multidimensi adalah array yang berisi satu atau lebih array.
    PHP memahami array multidimensi yang memiliki kedalaman dua, tiga, empat, lima, atau lebih. Namun, susunan lebih dari tiga level sulit untuk dikelola oleh kebanyakan orang.
    Array dua dimensi adalah array dari array (array tiga dimensi adalah array dari array dari array).
    Pertama, lihatlah tabel berikut:
    Name	Stock	Sold
    Volvo	22	18
    BMW	15	13
    Saab	5	2
    Land Rover	17	15
    Kita dapat menyimpan data dari tabel di atas dalam array dua dimensi, seperti ini:
    $cars = array
    (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
    );
    Sekarang array $cars dua dimensi berisi empat array, dan memiliki dua indeks: baris dan kolom.
    Untuk mendapatkan akses ke elemen-elemen array $cars kita harus menunjuk ke dua indeks (baris dan kolom):   
 -->
<?php
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
echo "<br>";
?>

<!-- 
    4.3	Processing Arrays with Loops
    Untuk mengulang dan mencetak semua nilai array yang diindeks, Anda bisa menggunakan loop for, seperti ini:
 -->
<?php
$cars = array("Volvo", "BMW", "Toyota", "Ferrari");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
?>

<!-- 
    Untuk mengulang dan mencetak semua nilai array asosiatif, Anda bisa menggunakan foreach loop, seperti ini:
 -->    
 <?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?> 

<!-- 
    Kita juga bisa meletakkan loop for di dalam loop lain untuk mendapatkan elemen-elemen dari array $cars (kita masih harus menunjuk ke dua indeks):
 -->

 <?php

for ($row = 0; $row < count($cars); $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 4; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?> 

<!-- 
    4.4	Using Array Functions
    Fungsi array memungkinkan Anda untuk mengakses dan memanipulasi array.
    Function	Description
    array()	Creates an array
    array_change_key_case()	Changes all keys in an array to lowercase or uppercase
    array_chunk()	Splits an array into chunks of arrays
    array_column()	Returns the values from a single column in the input array
    array_combine()	Creates an array by using the elements from one "keys" array and one "values" array
    array_count_values()	Counts all the values of an array
    array_diff()	Compare arrays, and returns the differences (compare values only)
    array_diff_assoc()	Compare arrays, and returns the differences (compare keys and values)
    array_diff_key()	Compare arrays, and returns the differences (compare keys only)
    array_diff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)
    array_diff_ukey()	Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)
    array_fill()	Fills an array with values
    array_fill_keys()	Fills an array with values, specifying keys
    array_filter()	Filters the values of an array using a callback function
    array_flip()	Flips/Exchanges all keys with their associated values in an array
    array_intersect()	Compare arrays, and returns the matches (compare values only)
    array_intersect_assoc()	Compare arrays and returns the matches (compare keys and values)
    array_intersect_key()	Compare arrays, and returns the matches (compare keys only)
    array_intersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
    array_intersect_ukey()	Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
    array_key_exists()	Checks if the specified key exists in the array
    array_keys()	Returns all the keys of an array
    array_map()	Sends each value of an array to a user-made function, which returns new values
    array_merge()	Merges one or more arrays into one array
    array_merge_recursive()	Merges one or more arrays into one array recursively
    array_multisort()	Sorts multiple or multi-dimensional arrays
    array_pad()	Inserts a specified number of items, with a specified value, to an array
    array_pop()	Deletes the last element of an array
    array_product()	Calculates the product of the values in an array
    array_push()	Inserts one or more elements to the end of an array
    array_rand()	Returns one or more random keys from an array
    array_reduce()	Returns an array as a string, using a user-defined function
    array_replace()	Replaces the values of the first array with the values from following arrays
    array_replace_recursive()	Replaces the values of the first array with the values from following arrays recursively
    array_reverse()	Returns an array in the reverse order
    array_search()	Searches an array for a given value and returns the key
    array_shift()	Removes the first element from an array, and returns the value of the removed element
    array_slice()	Returns selected parts of an array
    array_splice()	Removes and replaces specified elements of an array
    array_sum()	Returns the sum of the values in an array
    array_udiff()	Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
    array_udiff_assoc()	Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
    array_udiff_uassoc()	Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
    array_uintersect()	Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)
    array_uintersect_assoc()	Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
    array_uintersect_uassoc()	Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)
    array_unique()	Removes duplicate values from an array
    array_unshift()	Adds one or more elements to the beginning of an array
    array_values()	Returns all the values of an array
    array_walk()	Applies a user function to every member of an array
    array_walk_recursive()	Applies a user function recursively to every member of an array
    arsort()	Sorts an associative array in descending order, according to the value
    asort()	Sorts an associative array in ascending order, according to the value
    compact()	Create array containing variables and their values
    count()	Returns the number of elements in an array
    current()	Returns the current element in an array
    each()	Returns the current key and value pair from an array
    end()	Sets the internal pointer of an array to its last element
    extract()	Imports variables into the current symbol table from an array
    in_array()	Checks if a specified value exists in an array
    key()	Fetches a key from an array
    krsort()	Sorts an associative array in descending order, according to the key
    ksort()	Sorts an associative array in ascending order, according to the key
    list()	Assigns variables as if they were an array
    natcasesort()	Sorts an array using a case insensitive "natural order" algorithm
    natsort()	Sorts an array using a "natural order" algorithm
    next()	Advance the internal array pointer of an array
    pos()	Alias of current()
    prev()	Rewinds the internal array pointer
    range()	Creates an array containing a range of elements
    reset()	Sets the internal pointer of an array to its first element
    rsort()	Sorts an indexed array in descending order
    shuffle()	Shuffles an array
    sizeof()	Alias of count()
    sort()	Sorts an indexed array in ascending order
    uasort()	Sorts an array by values using a user-defined comparison function
    uksort()	Sorts an array by keys using a user-defined comparison function
    usort()	Sorts an array using a user-defined comparison function
 -->

