<?php

$date1 = strtotime("2019-05-31");
$date2 = strtotime("2018-04-05");

$difference = abs($date1 - $date2);

$years = floor($difference/ (365*60*60*24));
$months = floor(($difference - $years * 365*60*60*24)/(30*60*60*24));
$days = floor(($difference - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d year, %d month, %d days", $years,$months,$days);
?>