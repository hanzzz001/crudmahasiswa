<?php

class Perpustakaan{
    function buku(){
        $pinjam = 150;
        $sedia = 300;
        $rusak = 100;
        $lenyap = 200;

        echo ("buku yang dipinjam = ".$pinjam);
        echo("<br/>");
        echo ("buku yang tersedia = ".$sedia);
        echo("<br/>");
        echo ("buku yang Rusak = ".$rusak);
        echo("<br/>");
        echo ("buku yang tidak dikembalikan = ".$lenyap);
        echo("<br/>");

        $total = $pinjam+$sedia+$rusak+$lenyap;
        echo ("Total keseluruhan buku adalah " .$total);
        echo("<br/>");
        $totalK = $sedia + 75;
        echo("Total buku yang tersedia jika sudah dikembalikan 75 buku = " .$totalK);
        echo("<br/>");
        $totalR = $rusak * 0.2;
        $totalAkhir = $total - $totalR;
        echo (" Total buku keseluruhan setelah dikurang 20% buku rusak = " .$totalAkhir);
    }
}
?>