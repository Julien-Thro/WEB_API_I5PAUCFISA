<?php
$apiKey = '1756f1e19a1c73cb1e3d481af41f5392';

$city = isset($_GET['city']) ? $_GET['city'] : '';

$url = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . $apiKey . "&units=metric";

$response = file_get_contents($url);

$data = json_decode($response, true);

$result = array(
    'temp' => $data['main']['temp'],
    'lat' => $data['coord']['lat'],
    'lon' => $data['coord']['lon'],
    'speed' => $data['wind']['speed'],
    'deg' => $data['wind']['deg'],
    'id' => $data['weather'][0]['id'],
    'desc' => $data['weather'][0]['description'],
    'humidity' => $data['main']['humidity']
);

header('Content-Type: application/json');
echo json_encode($result);
?>
