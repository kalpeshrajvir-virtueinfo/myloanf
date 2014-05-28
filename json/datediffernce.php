<?php
      $now = strtotime("2013-10-22"); // or your date as well
     $your_date = strtotime("2013-11-22");
     $datediff =$your_date -  $now;
     echo floor($datediff/(60*60*24));
?>