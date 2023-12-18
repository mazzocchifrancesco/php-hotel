<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
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
</head>
<body>
    <?php

    // prova, stampa TUTTO in linea
    // foreach ($hotels as $hotel) {

    //     echo implode(", ",$hotel);
    //     echo '<br><br>';

    // };


    echo '<br><br>';
    echo '<br><br>';
    echo '<br><br>';

    foreach ($hotels as $hotel) {

        echo "Nome: ".$hotel['name'];
        echo '<br>';
        echo "Descrizione: ".$hotel['description'];
        echo '<br>';

        $parcheggio='manca';

        if ($hotel['parking']==true) {
            $parcheggio='presente';
        }
        echo "Parcheggio: ".$parcheggio;
        echo '<br>';

        echo "Voto: ".$hotel['vote'];
        echo '<br>';
        echo "Distanza dal centro: ".$hotel['distance_to_center'];
        echo '<br>';
        
        echo '<br><br>';




    };


?>
</body>
</html>