<?php
    header('Content-Type: application/json');

    $data = new \stdClass();
    $file = file_get_contents('./data/qplFY2019Programs.json', true);
    $allData = json_decode($file, true);

    /*** Programmatically output array element by index */ 
    // $program = $_GET["program"];
    // echo json_encode($allData[$program]);

    /*** Programmatically filter by month */
    $month = (isset($_GET["month"]) && !empty($_GET["month"])) ? $_GET["month"] : false;    
    //$month = $_GET["month"];
    $output = [];


    if (!$month) {
        $output = $allData;
    }
    else {
        foreach($allData as $element) {
            if ($element["Month"] == $month) {
                array_push($output, $element);
            }
        }
    }

    //$programPresenter = $_GET["presenter"];
    $programPresenter = (isset($_GET["presenter"]) && !empty($_GET["presenter"])) ? $_GET["presenter"] : false;
    $output2 = [];


    if (!$programPresenter) {
        $output2 = $output;
    }
    else {
        foreach($output as $element) {
            if ($element["Program Presenter"] == $programPresenter) {
                array_push($output2, $element);
            }
        }
    }


    echo json_encode($output2);
/*
Build a front end to GET, filter, and output JSON data nicely into tables 
Build a back end that finds all dictionary keys for each database variable
Use an associative array to keep track of keys. Print out only keys.
Store keys in their own JSON file. 
*/
?>   
