<?php 
$cores = 4; 

$output1 = null; 
$output2 = null; 

// First output of /proc/stat 
exec("cat /proc/stat", $output1); 

// Set the time interval 
sleep(1); 

// Second output of /proc/stat 
exec("cat /proc/stat", $output2); 

// CPU total load 
$cpu_load_total = 0; 

for ( $i=0 ; $i < $cores ; $i++ ) 
{ 
  // Get informations from first row of /proc/stat 
  $cpu_stat_1 = explode(" ", $output1[ $i + 1 ]); 
  $cpu_stat_2 = explode(" ", $output2[ $i + 1 ]); 

  // Init arrays 
  $info1 = array( "user"   => $cpu_stat_1[1],  
                  "nice"   => $cpu_stat_1[2], 
                  "system" => $cpu_stat_1[3],  
                  "idle"   => $cpu_stat_1[4] 
                ); 
                 
  $info2 = array( "user"   => $cpu_stat_2[1],  
                  "nice"   => $cpu_stat_2[2], 
                  "system" => $cpu_stat_2[3],  
                  "idle"   => $cpu_stat_2[4] 
                ); 

  // Informations that should involve the calculation 
  $idlesum = $info2["idle"]-$info1["idle"] + 
             $info2["system"]-$info1["system"]; 

  // Sum the outputvalues 
  $sum1 = array_sum( $info1 ); 
  $sum2 = array_sum( $info2 ); 

  // Calculate the cpu-load 
  $load = ( 1 - ( $idlesum / ( $sum2 - $sum1 ) ) ) *100; 
   
  $cpu_load_total += $load; 
} 

// Devide the total cpu load because we sum it in the loop 
$cpu_load_total /= $cores; 

// Round it to 2 decimals 
echo round( $cpu_load_total, 2 ).'% CPU-Load<br>'; 
?>