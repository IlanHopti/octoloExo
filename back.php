<?php
//use library date
date_default_timezone_set('Europe/Paris');
$timezone = date('e');
$date = date('D. d  F  Y');
$time = date('H:i:s');


$array = Array (
    "timezone" => $timezone,
    "date" => $date,
    "time" => $time
);

// encode array to json
$json = json_encode(array('data' => $array));

//write json to file
if (file_put_contents("data.json", $json))
    echo "JSON file created successfully...";
else
    echo "Oops! Error creating json file...";
