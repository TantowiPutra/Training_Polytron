<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQL_Database</title>
</head>

<body>
    <!-- 
        5	Introduction to MySQL Database
        5.1	Understanding an RDBMS
        Sebuah sistem manajemen basis data relasional atau dalam bahasa Inggrisnya dikenal sebagai relational database management system (RDBMS) adalah sebuah program komputer (atau secara lebih tipikal adalah seperangkat program komputer) yang dirancang untuk mengatur/memanajemen sebuah basis data sebagai sekumpulan data yang disimpan secara terstruktur, dan melakukan operasi-operasi atas data atas permintaan penggunanya.

        5.2	Understanding a Relational Database
        Database relasional adalah seperangkat tabel yang dideskripsikan secara formal dari mana data dapat diakses atau disusun kembali dengan berbagai cara tanpa harus menata ulang tabel database. Pengguna standar dan antarmuka pemrograman aplikasi (API) dari database relasional adalah Structured Query Language (SQL). Pernyataan SQL digunakan baik untuk pertanyaan interaktif untuk informasi dari database relasional dan untuk mengumpulkan data untuk laporan.

        5.3	Introduction to MySQL  Database
        MySQL adalah sebuah implementasi dari sistem manajemen basis data relasional (RDBMS) yang didistribusikan secara gratis di bawah lisensi GPL (General Public License). Setiap pengguna dapat secara bebas menggunakan MySQL, namun dengan batasan perangkat lunak tersebut tidak boleh dijadikan produk turunan yang bersifat komersial. MySQL sebenarnya merupakan turunan salah satu konsep utama dalam basisdata yang telah ada sebelumnya; SQL (Structured Query Language). SQL adalah sebuah konsep pengoperasian basisdata, terutama untuk pemilihan atau seleksi dan pemasukan data, yang memungkinkan pengoperasian data dikerjakan dengan mudah secara otomatis.

        5.4	Understanding Tables, Records, and Fields
        5.4.1	Tables -> kumpulan dari records
        Tabel database terdiri dari catatan dan bidang yang menyimpan data. Tabel juga disebut lembar data. Setiap tabel dalam database menyimpan data tentang subjek yang berbeda namun terkait

        5.4.2	Records -> sebuah baris data dalam database
        Data disimpan dalam records. Records terdiri dari bidang dan berisi semua data tentang satu orang, perusahaan, atau item tertentu dalam database. Dalam database ini, records berisi data untuk satu laporan insiden dukungan pelanggan. Records muncul sebagai baris dalam tabel database. Records untuk Log ID 1201242 disorot pada gambar dibawah ini.

        5.4.3	Fields
        Fields adalah bagian dari records dan berisi satu bagian data untuk subjek records.
     -->

    <!-- 
        5.5	Understanding Primaryand Foreign Keys
        5.5.1	PRIMARY KEY Constraint
        Batasan PRIMARY KEY secara unik mengidentifikasi setiap record dalam sebuah tabel.
        PRIMARY KEY harus mengandung nilai UNIK, dan tidak bisa mengandung nilai NULL.
        Tabel hanya dapat memiliki satu PRIMARY KEY, yang dapat terdiri dari satu atau banyak field.

        5.5.2	FOREIGN KEY Constraint
        FOREIGN KEY adalah kunci yang digunakan untuk menghubungkan dua tabel bersama.
        FOREIGN KEY adalah field (atau kumpulan field) dalam satu tabel yang mengacu pada PRIMARY KEY dalam tabel lain.
        Tabel yang berisi FOREIGN KEY disebut tabel child, dan tabel yang berisi candidate key disebut tabel referensi atau tabel parent.
        Lihatlah dua tabel berikut:
        Tabel "persons":
        PersonID	LastName	FirstName	Age
        1	Hansen	Ola	30
        2	Svendson	Tove	23
        3	Pettersen	Kari	20

        Tabel “orders”:
        OrderID	OrderNumber	PersonID
        1	77895	3
        2	44678	3
        3	22456	2
        4	24562	1
        Perhatikan bahwa kolom "PersonID" di tabel "orders" menunjuk ke kolom "PersonID" di tabel "persons".
        Kolom "PersonID" di tabel "persons" adalah PRIMARY KEY dalam tabel "persons".
        Kolom "PersonID" di tabel "orders" adalah FOREIGN KEY dalam tabel "orders".
        Batasan FOREIGN KEY digunakan untuk mencegah tindakan yang akan menghancurkan link antar tabel.
        Batasan FOREIGN KEY juga mencegah data tidak valid dimasukkan ke dalam kolom FOREIGN KEY, karena itu harus menjadi salah satu nilai yang terkandung dalam tabel yang ditunjuknya.

        5.6	Understanding SQL and SQL Queries
        5.6.1	SELECT Statement
        Pernyataan SELECT digunakan untuk memilih data dari database.
        SELECT column1, column2, ...
        FROM table_name;

        SELECT * FROM table_name;

        5.6.2	SELECT DISTINCT Clause
        Pernyataan SELECT DISTINCT digunakan untuk mengembalikan hanya nilai unik.
        Di dalam tabel, field sering berisi banyak nilai duplikat; dan kadang-kadang kita hanya ingin membuat daftar nilai (berbeda) yang berbeda.

        SELECT DISTINCT column1, column2, ...
        FROM table_name;

        5.6.3	WHERE Operators
        Klausa WHERE digunakan untuk memfilter catatan.
        Klausa WHERE digunakan untuk mengekstraksi hanya catatan yang memenuhi kondisi tertentu.
        SELECT column1, column2, ...
        FROM table_name
        WHERE condition;

        5.6.4	AND, OR and NOT Operators
        Klausa WHERE dapat digabungkan dengan operator AND, OR, dan NOT.
        Operator AND dan OR digunakan untuk memfilter catatan berdasarkan lebih dari satu kondisi:
        -	Operator AND menampilkan catatan jika semua kondisi yang dipisahkan oleh AND adalah BENAR.
        -	Operator OR menampilkan catatan jika salah satu kondisi yang dipisahkan oleh OR adalah BENAR.
        -   Operator NOT menampilkan catatan jika kondisinya TIDAK BENAR.

        SELECT column1, column2, ...
        FROM table_name
        WHERE condition1 AND condition2 AND condition3 ...;

        SELECT column1, column2, ...
        FROM table_name
        WHERE condition1 OR condition2 OR condition3 ...;

        SELECT column1, column2, ...
        FROM table_name
        WHERE NOT condition;

        5.6.5	ORDER BY Keyword
        Kata kunci ORDER BY digunakan untuk mengurutkan hasil-set dalam urutan naik atau turun.
        Kata kunci ORDER BY mengurutkan catatan dalam urutan naik secara default. Untuk mengurutkan catatan dalam urutan menurun, gunakan kata kunci DESC.

        SELECT column1, column2, ...
        FROM table_name
        ORDER BY column1, column2, ... ASC|DESC;

        5.6.6	INSERT INTO Statement
        Pernyataan INSERT INTO digunakan untuk menyisipkan catatan baru dalam sebuah tabel.

        INSERT INTO table_name (column1, column2, column3, ...) 
        VALUES (value1, value2, value3, ...);

        INSERT INTO table_name
        VALUES (value1, value2, value3, ...);

        5.6.7	UPDATE Statement
        Pernyataan UPDATE digunakan untuk mengubah catatan yang ada dalam sebuah tabel.
        UPDATE table_name
        SET column1 = value1, column2 = value2, ...
        WHERE condition;

        5.6.8	DELETE Statement
        Pernyataan DELETE digunakan untuk menghapus catatan yang ada dalam sebuah tabel.

        DELETE FROM table_name WHERE condition;

        5.6.9	INNER JOIN Keyword
        Kata kunci INNER JOIN memilih catatan yang memiliki nilai yang cocok di kedua tabel.
        SELECT column_name(s)
        FROM table1
        INNER JOIN table2
        ON table1.column_name = table2.column_name;

        5.6.10	LEFT JOIN Keyword
        Kata kunci LEFT JOIN mengembalikan semua record dari tabel kiri (table1), dan record yang cocok dari tabel kanan (table2). Hasilnya NULL dari sisi kanan, jika tidak ada kecocokan.

        SELECT column_name(s)
        FROM table1
        LEFT JOIN table2
        ON table1.column_name = table2.column_name;

        5.6.11	RIGHT JOIN Keyword
        Kata kunci yang RIGHT JOIN mengembalikan semua record dari tabel kanan (table2), dan record yang cocok dari tabel kiri (table1). Hasilnya NULL dari sisi kiri, ketika tidak ada kecocokan.

        SELECT column_name(s)
        FROM table1
        RIGHT JOIN table2
        ON table1.column_name = table2.column_name;

        5.6.12	UNION Operator
        Operator UNION digunakan untuk menggabungkan set hasil dari dua atau lebih pernyataan SELECT.
        -	Setiap pernyataan SELECT dalam UNION harus memiliki jumlah kolom yang sama
        -	Kolom juga harus memiliki tipe data yang serupa
        -	Kolom dalam setiap pernyataan SELECT juga harus dalam urutan yang sama

        SELECT column_name(s) FROM table1
        UNION
        SELECT column_name(s) FROM table2;

        5.6.13	GROUP BY Statement
        Pernyataan GROUP BY sering digunakan dengan fungsi agregat (COUNT, MAX, MIN, SUM, AVG) untuk mengelompokkan hasil-set dengan satu atau beberapa kolom.
        SELECT column_name(s)
        FROM table_name
        WHERE condition
        GROUP BY column_name(s)
        ORDER BY column_name(s);

        5.6.14	SELECT INTO Statement
        Pernyataan SELECT INTO menyalin data dari satu tabel ke tabel baru.
        SELECT *
        INTO newtable [IN externaldb]
        FROM oldtable
        WHERE condition;

        5.7	Understanding Database Normalization
        Normalisasi database adalah proses penataan database relasional sesuai dengan serangkaian bentuk normal yang disebut untuk mengurangi redundansi data dan meningkatkan integritas data.













      -->
</body>

</html>