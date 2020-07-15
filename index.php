<?php
$data = new \stdClass();

$file = file_get_contents('./data/qplFY2019Programs.json', true);

// $data->name = "John";
// $data->age = 30;
// $data->city = "New York";

$json_a = json_decode($file, true);

header('Content-Type: application/json');
echo json_encode($json_a["Month"]);

?>