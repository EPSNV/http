<?php

namespace App;

require 'vendor/autoload.php';
$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://data.admhmao.ru/api/data/?id=1933229&limit=22', ['auth' => ['nbelov', '19381938q']]);
//echo $response->getStatusCode();
//echo $response->getBody();
$data = json_decode($response->getBody());
$name='4naimenovanie';
print_r($data->Items);

foreach ($data->Items as $item) {
    print_r($item->Cells->NAME );
    echo "\n";
};    
