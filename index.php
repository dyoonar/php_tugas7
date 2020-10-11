<?php
$a = [4,7,10,12];
for($i=0;$i<count($a);$i++){
    $l = 6*pow($a[$i],2);
    echo "Luas dengan panjang rusuk ".$a[$i]." cm : ", $l , " cm<sup>2</sup>";
}

echo "<br><br><hr>";
$l2 = 3750;
$a2 = 3750/6;
echo "Jadi panjang sisi kotak kayu tersebut adalah akar dari ", $a2, " yaitu ", sqrt($a2)," cm" ;

echo "<br><br><hr>";
$r = 10;
$t = 30;
echo "Volume dari tabung tersebut adalah : ", 3.14*pow($r,2)*$t ," cm<sup>3</sup>" ;

echo "<br><br><hr>";
$r2 = 14;
$t2 = 10;
echo "Jadi, Luasnya adalah : ", ((2*3.14*pow($r2,2))+(2*3.14*$r2*$t2))  ," cm<sup>2</sup>" ;

echo "<br><br><hr>";
$r3 = 14;
echo "Luasnya adalah : ", (3.14*pow($r3,2)) ," cm<sup>2</sup>" ;

echo "<br><br><hr>";
$r4 = 14;
echo "Kelilingnya adalah : ", (2*3.14*$r4) ," cm" ;

echo "<br><br><hr>";
$r5 = 21;
echo "Jarak tempuhnya adalah : ", (2*3.14*$r5)*200 ," cm atau ",(2*3.14*$r5)*200/100, " m" ;
?>