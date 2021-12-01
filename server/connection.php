<?php
include 'classes.php';
$oConfig = new Configuration();

$oConnection = new mysqli($oConfig->host, $oConfig->username, $oConfig->password, $oConfig->dbName);
if ($oConnection->connect_errno) {
    echo 'Failed to connect to MySQL: ' . $oConnection->connect_error;
    exit();
}
