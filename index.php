<?php
$numDeA = cuentaLetraA("Upgrade Hub");

function cuentaLetraA($string){
  $cont = 0;
  for($i=0;$i<strlen($string);$i++){
    if($string[$i]=='a'){
      $cont++;
    }
  }
  return $cont;
}
?>

