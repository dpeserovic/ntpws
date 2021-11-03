<?php
header('Content-type: text/json');
header('Content-type: application/json; charset=utf-8');
ini_set('memory_limit', '2048M');
include('connection.php');

$sJsonId = '';

if (isset($_GET['jsonId'])) {
    $sJsonId = $_GET['jsonId'];
}

$aJson = array();

switch ($sJsonId) {
    case 'getCountries':
        $sQuery = 'SELECT * FROM ntpws_nba.countries';
        $result = $oConnection->query($sQuery);
        while ($row = $result->fetch_assoc()) {
            $oCountry = new Country(
                $row['id'],
                $row['country_code'],
                $row['country_name']
            );
            array_push($aJson, $oCountry);
        }
        $oConnection->close();
        break;
}
echo json_encode($aJson);
