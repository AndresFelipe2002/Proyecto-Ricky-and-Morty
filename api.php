<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rickandmortyapi.com/api/episode',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);


$api = json_decode($response, true);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="api.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Ricky and Morty</title>
</head>

<body>


  <h1 class="titulo">EPISODIOS DE RICKY AND MORTY</h1>
  
  <div class="contenedor d-flex align-content-start flex-wrap">
    <?php
    foreach ($api['results'] as $key
      => $value) {

      $id = $value['id'];
      $name = $value['name'];
      $air_date = $value['air_date'];
      $episode = $value['episode'];
      $characters = $value['characters'];
      $created = $value['created'];

    ?>
      <div class="row">

        <div class="card" style="width: 18rem;">

          <div class="card-body">
            <h6 class="card-title"><?php echo $id ?></h6>
            <br/>
            
            <h6 class="card-title"><?php echo $name ?></h6>
            <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/hc_1440x810/public/media/image/2021/06/rick-morty-2381623.jpg?itok=KbiMtfiF" width="260px" height="150px">
            <br/>
            <small class="text-muted"><?php echo $air_date ?></small>
            <p class="card-text"><?php echo $episode ?></p>
            
              <p ><?php echo $created ?></p>
           
           
            <form action="detalle.php" method="POST">
              <button type="subtmit" class="btn btn-dark">Detalle</button>
            </form>
          </div>

        </div>
      </div>
    <?php
    }
    ?>
  </div>
  </div>

</body>

</html>