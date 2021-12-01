<?php
function getCountryName($countries, $countryCode)
{
    foreach ($countries as $country) {
        if ($country['country_code'] == $countryCode) {
            return $country['country_name'];
        }
    }
}
