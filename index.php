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
    <link rel="stylesheet" href="style.css">

    <title>PHP Hotel</title>
  </head>
  <body>

  <div class="container d-flex my-5"
  
  
  
  
  
  
  
  
  >
      <?php foreach ($hotels as $hotel) : ?>
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $hotel['name'] ?> </h5>
            <h6 class="card-subtitle mb-2 text-muted">Descrizione: <?php echo $hotel['description']  ?>  </h6>
            <p class="card-text"> Parcheggio: <?php echo ($hotel['parking'] ? 'si' : 'no' ) ?> </p>
            <p class="card-text"> Vote: <?php echo $hotel['vote']  ?> </p>
            <p class="card-text"> Distanza dal centro: <?php echo $hotel['distance_to_center'] ?> km </p>
          </div>
        </div>
        <?php endforeach ?>
        
  </div>
  </body>
</html>