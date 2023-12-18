<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

    //creo intestazione tabella hotel
    
    // intestazione colonne secondo keys
echo '<table class="table"><thead><tr>';
    foreach ($hotels[0] as $key =>$value) {
        echo "<th scope='col'>".$key.'</th>';
    };
echo '</tr></thead>';
echo '<tbody>';

foreach ($hotels as $key => $value) { 

    if ($value["vote"] >= $_GET["voto"] || $_GET["voto"]=="" ) {

        // convertitore valore parcheggio 
        $parcheggio='manca';
        if ($value['parking']==true) {
            $parcheggio='presente';
        };
        
        echo '<tr>
        <th scope="row">'.$value["name"].'</th>
        <td>'.$value["description"].'</td>
        <td>'.$parcheggio.'</td>
        <td>'.$value["vote"].'</td>
        <td>'.$value["distance_to_center"].' km</td>
        
        </tr>';
    }
    


};
echo '</tbody></teble';





    // foreach ($hotels as $hotel) {

    //     echo "Nome: ".$hotel['name'];
    //     echo '<br>';
    //     echo "Descrizione: ".$hotel['description'];
    //     echo '<br>';

    //     $parcheggio='manca';

    //     if ($hotel['parking']==true) {
    //         $parcheggio='presente';
    //     }
    //     echo "Parcheggio: ".$parcheggio;
    //     echo '<br>';

    //     echo "Voto: ".$hotel['vote'];
    //     echo '<br>';
    //     echo "Distanza dal centro: ".$hotel['distance_to_center']." km";
    //     echo '<br>';
        
    //     echo '<br><br>';




    // };


?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>