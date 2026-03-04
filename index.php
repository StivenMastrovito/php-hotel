<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
    <h1>Esercizio Hotels</h1>

    <table>
        <thead>
            <tr>
                <td></td>
                <?php 
                foreach ($hotels[0] as $key => $value){
                   echo "<td> " . $key . "</td>";
                };
                ?>             
            </tr>
        </thead>
        <tbody>
            <?php
                for($i = 0; $i < count($hotels); $i++){
                    echo "<tr> <td>"   . $i+1 . "</td>";
                    foreach($hotels[$i] as $key => $value){
                        if($key == "parking" && $value){
                            echo "<td> Presente </td>";
                        }else if($key == "parking"){
                            echo "<td> Assente </td>";
                        }else{
                            echo "<td> $value </td>";
                        };
                    };
                    echo "</tr>";
                };
            ?>
        </tbody>
    </table>

    
    
</body>
</html>