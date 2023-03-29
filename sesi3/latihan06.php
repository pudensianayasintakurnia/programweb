<?php
   $mhs = array(
    array("Ardika","22345712","Denpasar"),
    array("Wahyu","223470","Malang"),
    array("Santi","22201017","Surabaya")
   );

   foreach ($mhs as $idx => $dta){
    echo "Data ke-".$idx."<br>";
    foreach ($dta as $nval){
        echo $nval."<br>";
    }
    echo "<br>";
   }