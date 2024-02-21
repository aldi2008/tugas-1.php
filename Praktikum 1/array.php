<?php
$ar_buah = ["Pepaya", "Mangga","Pisang","Jambu" ];

//Mencetak dengan index -2
echo $ar_buah[2];

//mencetak jumlah buah
echo '<br/>Jumlah Buah : ' . count($ar_buah);

//mencetak keseluruhan
echo '<ol>';
foreach($ar_buah as $buah){
    echo '<li>'. $buah .'</li>';
}
echo '</ol>';

// tambahkan buah
$ar_buah[]="Durian";

// hapus buah index ke 1
unset($ar_buah[1]);

// ubah buah index ke 2 menjadi Manggis
$ar_buah[2]="Manggis";

// cetak seluruh buah dengan index nya
echo '<ul>';
foreach($ar_buah as $k => $v){
echo '<li> buah index - ' . $k .' adalah '. $v .'</li>';
}

echo '</ul>';
?>

