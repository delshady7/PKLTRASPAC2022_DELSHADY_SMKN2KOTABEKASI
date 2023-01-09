<?php

$bulan = 5;

function bulan($bulan)
{
    switch ($bulan) {
    
    case 1:
        echo "</br>Bulan pertama: Januari";
        break;

    case 2:
        echo "</br>Bulan kedua: Februari";
        break;

    case 3:
        echo "</br>Bulan ketiga: Maret";
        break;

    case 4:
        echo "</br>Bulan keempat: April";
        break;

    case 5:
        echo "</br>Bulan kelima: Mei";
        break;

    case 6:
        echo "</br>Bulan keenam: Juni";
        break;

    case 7:
        echo "</br>Bulan ketujuh: Juli";
        break;

    case 8:
        echo "</br>Bulan kedelapan: Agustus";
        break;

    case 9:
        echo "</br>Bulan kesembilan: September";
        break;

    case 10:
        echo "</br>Bulan kesepuluh: Oktober";
        break;

    case 11:
        echo "</br>Bulan kesebelas: November";
        break;

    case 12:
        echo "</br>Bulan terakhir: Desember";
        break;
}
} bulan($bulan);
