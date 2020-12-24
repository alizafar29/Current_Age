<?php


    $date = $_POST['date'];
    $time = $_POST['time'];
    $bDate = ($date." ".$time);

   if($date <= date('Y-n-j') && $date !=""){
    $currentDate = date('Y-n-j H:i:s');
    $date2 = date_create($currentDate);
  
    $date1 = date_create($bDate);

    $dateDiff = date_diff($date2,$date1);

    echo $dateDiff->format("%y Year %m Month %d Day <br> %h Hour %i Min %s Sec");

   }
   else{
       echo "Please Enter a Valid Date of Birth !";
   }

?>