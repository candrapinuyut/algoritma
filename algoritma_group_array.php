<?php 
 /* 
  cocok untuk melakukan group pada data dari database.
  contoh data :
  ----------------------------------------
  no.  kec                       kelurahan
  ---------------------------------------
  1.   kotamobagu barat          molinow
  2.   kotamobagu barat          mongkonai
  3.   kotamobagu barat          mogolaing
  4.   kotamobagu timur          matali
  5.   kotamobagu timur          Sinindian
  6.   kotamobagu timur          Tumubui


  
  dengan grouping data di atas, sebenarny kita bisa sederhanakan dengan:
   ----------------------------------------
  no.  kec                       kelurahan
  ---------------------------------------
  1.   kotamobagu barat          molinow
                                 mongkonai
                                 mogolaing
  2.   Kotamobagu Timur          Matali
                                 Sinindian
                                 Tumubui
 */
 
 
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
