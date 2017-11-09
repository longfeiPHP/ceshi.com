<?php
function birthday($birthday){ 
 $age = strtotime($birthday); 
 if($age === false){ 
  return false; 
 } 
 list($y1,$m1,$d1) = explode("-",date("Y-m-d",$age)); 
 $now = strtotime("now"); 
 list($y2,$m2,$d2) = explode("-",date("Y-m-d",$now)); 
 $age = $y2 - $y1; 
 if((int)($m2.$d2) < (int)($m1.$d1)) 
  $age -= 1; 
 return $age; 
} 

function birthday2($birthday){
  list($year,$month,$day) = explode("-",$birthday);
  $year_diff = date("Y") - $year;
  $month_diff = date("m") - $month;
  $day_diff  = date("d") - $day;
  if ($day_diff < 0 || $month_diff < 0)
   $year_diff--;
  return $year_diff;
}
echo birthday('2015-05-22'); 
echo '<br />';
echo birthday2('2015-05-22'); 
?>