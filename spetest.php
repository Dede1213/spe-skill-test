<?php

#Narsistik Number
function narsistik($angka){
	$split = str_split($angka);
    $count = count($split);
    $countPow = 0;
    for($i=0;$i<$count;$i++){
    	$countPow += pow($split[$i],$count);
    }
    
    if($countPow == $angka){
    		echo "True";
    }else{
    		echo "False";
    }
    
}

narsistik(1634); //153,1634

#Paritas Number
function parity($angka){
	$split = explode(',',$angka);
    $odd = array();
    $even = array();
    foreach($split as $row){
    	$n = $row % 2;
        if($n==0){
        	$even[] =  $row;
        }else{
        	$odd[] =  $row;
        }
    }
    
    if(count($even) == 1){
    	foreach($even as $v){
        	echo $v;
        }
    }else if(count($odd) == 1){
    	foreach($odd as $v){
              echo $v;
          }
    }else{
    	echo "False";
    }
    
}

parity('2, 4, 0, 100, 4, 11, 2602, 36');

#Find Needle
function findNeedle($data,$need){
	$str = $data;
 
    $n = 0;
    for($i=0;$i<count($str);$i++){
    	if($str[$i] == $need){
        	$n++;
        }
    }
    
    if($n > 0){
    	echo $need;
    }else{
    	echo "False";
    }
}

findNeedle(array("red", "blue", "yellow", "gray"),"blue");

#BlueOcean
function blueOcean($data,$param){
	
  $data_new = array();
  for($i=0;$i<count($data);$i++){
   $count = 0;
     foreach($param as $v){
          if($data[$i] == $v){
              $count++;
          }
     }
     
   	 if($count == 0){
     	$data_new[] =  $data[$i];
     }
  }
  
  print_r($data_new);

}

blueOcean(array(1,2,3,4,6,10),array(1));

?>