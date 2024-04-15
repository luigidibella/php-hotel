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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
  <title>php-hotel</title>
</head>
<body>
  <div class="container text-center my-3">
    <h1>php-hotel</h1>

    <?php
      $parking_filter = isset($_GET['parking_filter']) && $_GET['parking_filter'] === 'on';
    ?>

    <form action="" method="GET">
      <label for="parking_filter">Mostra solo hotel con parcheggio</label>
      <input type="checkbox" id="parking_filter" name="parking_filter" <?php echo $parking_filter ? 'checked' : ''; ?>>
      <button type="submit">Filtra</button>
    </form>

    <table class="table text-start">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">description</th>
          <th scope="col">parking</th>
          <th scope="col">vote</th>
          <th scope="col">distance to center</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($hotels as $index => $item) {
          if ($parking_filter && !$item['parking']) {
          } else {
            ?>
            <tr>
              <th scope="row"><?php echo $index + 1; ?></th>
              <td><?php echo $item['name']; ?></td>
              <td><?php echo $item['description']; ?></td>
              <td><?php echo $item['parking'] ? 'Si' : 'No'; ?></td>
              <td><?php echo $item['vote']; ?></td>
              <td><?php echo $item['distance_to_center']; ?></td>
            </tr>
          <?php }
        } ?>
      </tbody>
    </table>

  </div>
  
</body>
</html>