<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    $isParking = !empty($_GET["parking"]);
    $filterVote = (int)$_GET["vote"];
    $filteredHotels = [];

    if ($isParking && $filterVote != 0) {
    foreach ($hotels as $hotel) {
        if ($hotel["parking"] && $hotel["vote"] >= $filterVote) {
            $filteredHotels[] = $hotel;
        }
    }
    } else if($isParking) {
        foreach ($hotels as $hotel) {
        if ($hotel["parking"]) {
            $filteredHotels[] = $hotel;
        }
        }
    } else if($filterVote != 0){
        foreach ($hotels as $hotel) {
        if ($hotel["vote"] >= $filterVote) {
            $filteredHotels[] = $hotel;
        }
    }
    }else{
        $filteredHotels = $hotels;
    };


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=1.1">
    
</head>
<body>
    <h1>Esercizio Hotels</h1>

    <form action="./index.php" method="GET">
        <div>
            <label for="parking">Filtra per parcheggio:</label> 
            <input type="checkbox" name="parking" id="" <?php if($isParking) echo "checked"?> >
        </div>
        <div>
            <label for="">Inserisci voto minimo con cui filtrare: </label>
            <input type="number" name="vote" id="" value="<?php if($filterVote == 0){echo "";}else{echo $filterVote;}; ?>" max="5" min="1">
        </div>
        
        <button type="submit">FILTRA</button>
    </form>

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
                for($i = 0; $i < count($filteredHotels); $i++){
                    echo "<tr> <td>"   . $i+1 . "</td>";
                    foreach($filteredHotels[$i] as $key => $value){
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