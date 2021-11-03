<?php
class Configuration
{
    public $host = 'localhost';
    public $dbName = 'ntpws_nba';
    public $username = 'root';
    public $password = '';
}

class User
{
    public $id = 'N/A';
    public $name = 'N/A';
    public $surname = 'N/A';
    public $email = 'N/A';
    public $country = 'N/A';
    public $city = 'N/A';
    public $street = 'N/A';
    public $dob = 'N/A';
    public $password = 'N/A';

    public function __construct($id = null, $name = null, $surname = null, $email = null, $country = null, $city = null, $street = null, $dob = null, $password = null)
    {
        if ($id) $this->id = $id;
        if ($name) $this->name = $name;
        if ($surname) $this->surname = $surname;
        if ($email) $this->email = $email;
        if ($country) $this->country = $country;
        if ($city) $this->city = $city;
        if ($street) $this->street = $street;
        if ($dob) $this->dob = $dob;
        if ($password) $this->password = $password;
    }
}

class Country
{
    public $id = 'N/A';
    public $county_code = 'N/A';
    public $country_name = 'N/A';

    public function __construct($id = null, $county_code = null, $country_name = null)
    {
        if ($id) $this->id = $id;
        if ($county_code) $this->county_code = $county_code;
        if ($country_name) $this->country_name = $country_name;
    }
}
