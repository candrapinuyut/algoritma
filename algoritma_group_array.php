<?php 

  $items=[1,1,1,1,1,2,2,2,2,2,3,3,3,3,4,4,4,4];

  $temp='';
  $y='';

  foreach($items as $i){
    if($y==$i) 
        $temp='';
    else 
        $temp=$i;
    $y=$i;

    echo $temp.'<br />';

  }
