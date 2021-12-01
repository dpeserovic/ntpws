<?php
header('Content-type: text/json');
header('Content-type: application/json; charset=utf-8');
ini_set('memory_limit', '2048M');
include('connection.php');
include('../utils/getAuthor.php');

$sJsonId = '';
$queryParam = '';

if (isset($_GET['jsonId'])) {
    $sJsonId = $_GET['jsonId'];
}

if (isset($_GET['queryParam'])) {
    $queryParam = $_GET['queryParam'];
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
    case 'getUserRole':
        $sQuery = 'SELECT * FROM ntpws_nba.roles WHERE id = "' . $queryParam . '"';
        $result = $oConnection->query($sQuery);
        while ($row = $result->fetch_assoc()) {
            $oRole = new Role(
                $row['id'],
                $row['role']
            );
            array_push($aJson, $oRole);
        }
        $oConnection->close();
        break;
    case 'getUserCountry':
        $sQuery = 'SELECT * FROM ntpws_nba.countries WHERE country_code = "' . $queryParam . '"';
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

    case 'getAllRoles':
        $sQuery = 'SELECT * FROM ntpws_nba.roles';
        $result = $oConnection->query($sQuery);
        while ($row = $result->fetch_assoc()) {
            $oRole = new Role(
                $row['id'],
                $row['role']
            );
            array_push($aJson, $oRole);
        }
        $oConnection->close();
        break;
    case 'getAllNews':
        $sQuery = 'SELECT * FROM ntpws_nba.news ORDER BY date DESC';
        $result = $oConnection->query($sQuery);
        while ($row = $result->fetch_assoc()) {
            $oNews = new News(
                $row['id'],
                $row['date'],
                $row['title'],
                $row['text'],
                $row['userId'],
                $row['isArchived']
            );
            $oNews->author = getAuthor($oNews->userId, $oConnection);
            array_push($aJson, $oNews);
            // $aJson = array_reverse($aJson);
        }
        $oConnection->close();
        break;
    case 'getArticle':
        $sQuery = 'SELECT * FROM ntpws_nba.news WHERE id =' . $queryParam;
        $result = $oConnection->query($sQuery);
        while ($row = $result->fetch_assoc()) {
            $oNews = new News(
                $row['id'],
                $row['date'],
                $row['title'],
                $row['text'],
                $row['userId'],
                $row['isArchived']
            );
            array_push($aJson, $oNews);
        }
        $oConnection->close();
        break;
    case 'getAllUsers':
        $sQuery = 'SELECT * FROM ntpws_nba.users WHERE id != "' . $queryParam . '"';
        $result = $oConnection->query($sQuery);
        while ($row = $result->fetch_assoc()) {
            $oUser = new User(
                $row['id'],
                $row['name'],
                $row['surname'],
                $row['email'],
                $row['country'],
                $row['city'],
                $row['street'],
                $row['dob'],
                $row['password'],
                $row['role'],
                $row['isApproved'],
            );
            array_push($aJson, $oUser);
        }
        $oConnection->close();
        break;
    case 'getAllUnarchivedNews':
        $sQuery = 'SELECT * FROM ntpws_nba.news WHERE isArchived = 0 ORDER BY date DESC';
        $result = $oConnection->query($sQuery);
        while ($row = $result->fetch_assoc()) {
            $oNews = new News(
                $row['id'],
                $row['date'],
                $row['title'],
                $row['text'],
                $row['userId'],
                $row['isArchived']
            );
            array_push($aJson, $oNews);
        }
        $oConnection->close();
        break;
    case 'getArticleWithImage':
        $sQuery = 'SELECT * FROM ntpws_nba.news WHERE id = ' . $queryParam;
        $result = $oConnection->query($sQuery);
        while ($row = $result->fetch_assoc()) {
            $oNews = new News(
                $row['id'],
                $row['date'],
                $row['title'],
                $row['text'],
                $row['userId'],
                $row['isArchived']
            );
            $sQueryGetArticleImage = 'SELECT image FROM ntpws_nba.images WHERE articleId = ' . $queryParam;
            $image = $oConnection->query($sQueryGetArticleImage);
            $oNews->image = base64_encode($image->fetch_row()[0]);
            array_push($aJson, $oNews);
        }
        $oConnection->close();
        break;
}
echo json_encode($aJson);
