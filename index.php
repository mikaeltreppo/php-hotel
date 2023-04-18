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

        echo("<table class='table'>");
        foreach ($hotels[0] as $key => $hotel){
            if ( $key ==  'distance_to_center' ){
                $key = 'Distanza dal Centro';
            }
            echo('<th> '.ucfirst($key) .'</th>');
        }
                //hotel elencati
        foreach($hotels as $hotel) {
            if($hotel['parking']==true)
            {
                $hotel['parking']='si abbiamo il parcheggio';
            }
            else{
                $hotel['parking']='mi dispiace non abbiamo il parcheggio';
            }
                    //valori
         echo('<tr>');
            foreach($hotel as $name) {
                    echo('<td> '.$name.'</td>');
            }
            echo("</tr>\n");
        }
        echo('</table>');




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  
</body>
</html>