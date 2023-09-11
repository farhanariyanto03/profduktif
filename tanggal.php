<?php
// Mengambil informasi tanggal sekarang menggunakan fungsi getdate()
$today = getdate();

// Mengambil tanggal, bulan, dan tahun dari hasil getdate()
$day = $today['mday'];     // Tanggal
$month = $today['mon'];    // Bulan
$year = $today['year'];    // Tahun

// Format tanggal, bulan, dan tahun sesuai dengan format yang diinginkan (contoh: 28-11-2012)
$dateFormatted = sprintf("%02d-%02d-%04d", $day, $month, $year);

// Menampilkan tanggal, bulan, dan tahun yang telah diformat
echo "Tanggal, Bulan, Tahun sekarang: " . $dateFormatted;
?>
