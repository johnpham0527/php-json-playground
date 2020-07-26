<!DOCTYPE html>
<html>
    <head>
        <title>PHP JSON Playground</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            $data = new \stdClass();

            $file = file_get_contents('./data/qplFY2019Programs.json', true);

            // $data->name = "John";
            // $data->age = 30;
            // $data->city = "New York";

            $allData = json_decode($file, true);

            // $month = $allData["Month"];
            // $familySessions = $allData["Family Sessions"];

            header('Content-Type: application/json');
            // echo json_encode($familySessions[0]);

            echo $allData[0];

    ?>   
    </body>
</html>

