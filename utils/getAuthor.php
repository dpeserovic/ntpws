<?php
function getAuthor($userId, $oConnection)
{
    $sQuery = 'SELECT name, surname FROM ntpws_nba.users WHERE id = "' . $userId . '"';
    $result = $oConnection->query($sQuery);
    $author = $result->fetch_row()[0];
    return $author;
}
