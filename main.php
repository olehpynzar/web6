<?php
$date = new DateTimeImmutable();
echo $date->format('U = Y-m-d H:i:s') . "\n";

$newDate = $date->setTimestamp(1171502725);
echo $newDate->format('U = Y-m-d H:i:s') . "\n";
?>