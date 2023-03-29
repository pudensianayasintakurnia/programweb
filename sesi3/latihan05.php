<?php
    //model 1
    $age = array("Peter"=>"35","ben"=>"37","joe"=>"43");

  //  print_r($age);

   //echo "Umur dari Peter adalah ".$age["Peter"];
 foreach ($age as $p => $u) {
    
    echo $p ." umurnya " .$u;

    echo "<br>";
 }