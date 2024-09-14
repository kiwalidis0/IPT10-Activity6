<?php
require_once 'FileUtility.php';
require_once 'Random.php';

$fileUtility = new FileUtility(__DIR__ . '/persons.csv');
$randomData = Random::generatePersonData(300);
$fileUtility->writeToFile($randomData);

echo "Random data generated and saved to persons.csv.";
?>