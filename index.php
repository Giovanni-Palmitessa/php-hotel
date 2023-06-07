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
$park = $_GET['park'];?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>
    <form action="" class="d-flex p-2" style="gap:1.5rem" method="get">
        <label for="select">Parcheggio</label>
        <select class="form-select w-25 align-items-center" aria-label="Default select example" id="select" name="park">
            <option selected>Scegli</option>
            <option value="true">Si</option>
            <option value="false">No</option>
        </select>

        <label for="vote">Voto</label>
        <input type="number" name="vote" id="vote">

        <button type="button" class="btn btn-primary">Cerca</button>

        <button type="button" class="btn btn-secondary">Annulla</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Stelle</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $key => $hotel) {?>
            <tr>
                <th scope="row"><?= $hotel["name"] ?></th>
                <td><?= $hotel['description'] ?></td>
                <td><?php 
                    if ($hotels[$key]['parking'] == true){ ?>
                        SI <?php
                    } else { ?>
                        NO <?php
                    };
                ?></td>
                <td><?= $hotel['vote'] ?></td>
                <td><?= $hotel['distance_to_center'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php var_dump($park) ?>
</body>

</html>