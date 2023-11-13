<?php
$bintang = 12; // jumlah baris bintang

// Loop untuk setiap baris bintang
for ($i = 1; $i <= $bintang; $i++) {
    // Loop untuk setiap kolom pada baris bintang tertentu
    for ($j = 1; $j <= $i; $j++) {
        echo '* ';
    }
    echo '<br>';
}
?>
