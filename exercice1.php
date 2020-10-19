<?php
$ville=array('Poitiers' =>'86' ,'Paris'=>'75','La rochelle'=>'17');
echo $ville['Poitiers'];
if (array_key_exists('nice',$ville)){
  echo "<br />Nice exist";
}
else {
  echo "<br /> Nice existe pas";
}

  echo "Poitiers";



 ?>
