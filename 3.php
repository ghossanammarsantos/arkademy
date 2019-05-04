<?php 
// belum bentuk kotak
function cetak_gambar($sisi) {
       for($i=0; $i < $sisi; $i++)  {
        for($j=0; $j < $sisi; $j++) {
            if($i==0 || $i==$sisi-1)
            {
                echo "*";
            }
            else
            {
                if($j==0 || $j==$sisi-1)
                {
                    echo "=";
                }
                else{
                    echo " ";
                }
            }
        }
        echo "\n";
    }

}

echo cetak_gambar(5);