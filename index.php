<?php
            $data = new \stdClass();

            $file = file_get_contents('./data/qplFY2019Programs.json', true);

            $allData = json_decode($file, true);

            header('Content-Type: application/json');

            $program = htmlspecialchars($_GET["program"]);

            echo json_encode($allData[$program]);
?>   