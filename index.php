<?php
$mongodbHost = "localhost";
$mongodbPort = 27017;

$databaseName = "your_database_name";


$connectionString = "mongodb://$mongodbHost:$mongodbPort";


try {
    $mongoClient = new MongoDB\Client($connectionString);
    echo "Connected to MongoDB successfully\n";

    
    $database = $mongoClient->$databaseName;

    echo "Database '$databaseName' selected\n";


    $collectionName = "your_collection_name";
    $collection = $database->$collectionName;
    echo "Collection '$collectionName' created\n";

} catch (MongoDB\Driver\Exception\ConnectionException $e) {
    die("Connection to MongoDB failed: " . $e->getMessage());
}
?>
