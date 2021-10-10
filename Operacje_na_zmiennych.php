<?php
  echo PHP_VERSION; //8.0.10
  echo 2**10, "<br>"; //1024

  $x=1;
  $y=10;
  echo $x<=>$y;

  //rowne
  $x = 1;
  $y = 1.0;

  echo gettype($x); //integer
  echo gettype($y); //double

  if ($x == $y) {
    echo "Rowne";
  }else {
    echo "Rozne";
  }

  if ($x === $y) {
    echo "Identyczne";
  }else {
    echo "Nie Identyczne";
  }

  $x=10;
  $x++;

  echo $x; //11
  $x = $x++;
  echo $x; //11
  $y = $x++;
  echo $x; //12
  echo $y; //11

  $x=--$x;
  echo $x; //11

?>
