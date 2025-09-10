<?php
header('Content-Type: text/html; charset=utf-8');
echo "<link href='favicon.ico' rel='shortcut icon' type='image/x-icon' />";

echo "<CENTER><H1>AL - QUR'AN BAHASA ARAB</H1></CENTER>";
echo "<BR/>";
echo "<BR/>";
echo "<BR/>";
echo "<center><img border='0'  src='quran.jpg' alt='' ></center>";
echo "<BR/>";
echo "<center><i>Al-Qur'an Resam Usmani</i></center>";
echo "</center></td><td><br/>";
echo "<a href='index.php' class='button-link'>Kembali</a></br>";
// Tentukan path ke file teks Alquran
$file = 'quran-uthmani.txt';

// Periksa apakah file ada
if (file_exists($file)) {
    // Baca seluruh isi file ke dalam sebuah string
    $quran_text = file_get_contents($file);

    // Tampilkan isi file di dalam elemen <pre> untuk menjaga format aslinya
    echo '<pre dir="rtl" style="font-family: \'Traditional Arabic\', serif; font-size: 27px;white-space: pre-wrap;word-wrap: break-word;">';
    echo $quran_text;
    echo '</pre>';
} else {
    // Tampilkan pesan kesalahan jika file tidak ditemukan
    echo "File 'quran-uthmani.txt' tidak ditemukan.";
}
?>