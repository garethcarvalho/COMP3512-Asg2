<?php require_once('config.inc.php');

try {
    $companies = [];
    
    if (isset($_GET["symbol"]) && !empty($_GET["symbol"])) {
        $sql = "SELECT * FROM companies WHERE symbol = :symbol";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(":symbol", $_GET["symbol"]);$statement -> execute();
        $companies = $statement->fetchAll(PDO::FETCH_ASSOC);
    } else {
        $sql = "SELECT * FROM companies";
        $result = $pdo->query($sql);
        $companies = $result->fetchAll(PDO::FETCH_ASSOC);
    }

    $response = array();
    
    // $response =  "[";
    foreach ($companies as $key => $value) {
        // $response .= "{";
        // $response .=  '"symbol":"' . $value["symbol"] . '",'; 
        // $response .= '"name":"' . $value["name"] . '",';
        // $response .= '"sector":"' . $value["sector"] . '",';
        // $response .= '"subindustry":"' . $value["subindustry"] . '",';
        // $response .= '"address":"' . $value["address"] . '",';
        // $response .= '"exchange":"' . $value["exchange"] . '",';
        // $response .= '"website":"' . $value["website"] . '",';
        // $response .= '"description":"' . $value["description"] . '",';
        // $response .= '"latitude":"' . $value["latitude"] . '",';
        // $response .= '"longitude":"' . $value["longitude"] . '",';
        // $response .= '"financials":"' . $value["financials"] . '"';
        // $response .= "}";

        // if (array_key_exists($key + 1, $companies))
        // $response .= ",";

        $response["data"][] = $value;
    }
    // $response .= "]";
    $pdo = null; 
    echo json_encode($response);
}
catch (PDOException $e) {
    die( $e->getMessage()); 
}
?>