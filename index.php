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
        [
            'name' => 'Grandhotel Seagull Magique',
            'description' => 'Grandhotel Seagull Magique Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    $userSearch = $_GET['search'] ?? '';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-info" >
    <div class="container bg-primary">
        <div class="row">
            <h1 class="text-center my-3 text-white" >BoolHotels</h1>
            <div class="col-8 mb-3 ps-3">
                <form action="index.php" method="GET">
                    <input type="text" name="search">
                    <button type="submit" >Cerca</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container bg-info-subtle">
        <div class="row justify-content-center">
            <div class="col-8 d-flex flex-wrap gap-3 py-4">
                <?php foreach($hotels as $hotel) {?>
                    <div class="card" style="width: calc(100% / 2 - 1rem);">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $hotel['name']?></h5>
                            <p class="card-text"><?php echo $hotel['description']?></p>
                            <p class="card-text">Disponibiità parcheggio: <?php if($hotel['parking'] === true) { ?>
                                Si
                                <?php } else {?> 
                                No
                                <?php } ?>
                            </p>
                            <div class="d-flex justify-content-between" >
                            <small class="card-text">Voto: <?php echo $hotel['vote']?></small>
                            <small class="card-text">Distanza dal centro: <?php echo $hotel['distance_to_center']?></small>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</body>
</html>