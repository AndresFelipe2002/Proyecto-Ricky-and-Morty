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

foreach ($api['results'] as $key
      => $value) {

      $id = $value['id'];
      $name = $value['name'];
      $air_date = $value['air_date'];
      $episode = $value['episode'];
      $characters = $value['characters'];
      $created = $value['created'];
      }

      echo $id;
?>