<?php

$begin = new DateTime( '2019-11-01' );
$end = new DateTime( '2019-11-05' );
$end = $end->modify( '+1 day' ); 

$interval = new DateInterval('P1D');
$daterange = new DatePeriod($begin, $interval ,$end);

foreach($daterange as $date){
    echo  $date->format("'Y-m-d',") ;
}





?>