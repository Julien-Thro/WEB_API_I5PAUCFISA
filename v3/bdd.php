<?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "web_api_bdd";

// Clé API OpenWeatherMap
$apiKey = '1756f1e19a1c73cb1e3d481af41f5392';

$city = isset($_GET['city']) ? $_GET['city'] : '';

$url = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . $apiKey . "&units=metric";

$response = file_get_contents($url);

$data = json_decode($response, true);
try {
// Connexion à la base de données

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Requête d'insertion des données dans la table
$sql = "INSERT INTO histo_requete (temp, lat, lon, speed, deg, id)
        VALUES (:temp, :lat, :lon, :speed, :deg, :id)";

$stmt = $conn->prepare($sql);

// Liaison des paramètres
$stmt->bindParam(':temp', $data['main']['temp']);
$stmt->bindParam(':lat', $data['coord']['lat']);
$stmt->bindParam(':lon', $data['coord']['lon']);
$stmt->bindParam(':speed', $data['wind']['speed']);
$stmt->bindParam(':deg', $data['wind']['deg']);
$stmt->bindParam(':id', $data['weather'][0]['id']);

// Exécution de la requête

    $stmt->execute();
    echo "Données insérées avec succès dans la base de données.";
} catch(PDOException $e) {
    echo "Erreur lors de l'insertion des données : " . $e->getMessage();
}
?>
