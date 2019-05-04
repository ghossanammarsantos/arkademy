<?php
function cetak($nilai) {
    $karakter = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $panjangKarakter = strlen($karakter); //untuk mengukur panjang karakter
    $randomString = ''; 
    for ($i = 0; $i < $nilai*32; $i++) {
        $randomString .= $karakter[rand(0, $panjangKarakter - 1)];
    }
    return $randomString;
}
echo cetak(3);