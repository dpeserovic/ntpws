<?php
function validateEmail($oConnection, $email)
{
    $sQuery = 'SELECT * FROM ntpws_nba.users WHERE email = "' . $email . '"';
    $result = $oConnection->query($sQuery);
    if ($result->num_rows == 0) {
        return true;
    } else {
        return false;
    }
}
