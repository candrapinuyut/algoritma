<?php 

$items=[1,1,1,1,1,2,2,2,2,2,3,3,3,3,4,4,4,4];

$temp='';
$y='';

foreeach($items as $i){
  if($y==$i) 
    $temp='';
  else 
    $temp=$i;
   $y=$i;
   
   echo $i.'<br />';
   
}
 
