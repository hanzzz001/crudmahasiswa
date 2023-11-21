<?php

class Persegi
{
    function keliling($sisi)
    {
        $keliling = 4 * $sisi;
        echo "Keliling Persegi dengan sisi " . $sisi . " Adalah " . $keliling;
    }
    
    function luas($sisi)
    {
        $luas = $sisi * $sisi;
        echo "Luas Persegi dengan sisi " . $sisi . " adalah " .$luas;
    }
}

?>