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
    public $id;
    public $name;
    public $surname;
    public $email;
    public $country;
    public $city;
    public $street;
    public $dob;
    public $password;
    public $role = '1';
    public $isApproved = 0;

    public function __construct($id = null, $name = null, $surname = null, $email = null, $country = null, $city = null, $street = null, $dob = null, $password = null, $role = null, $isApproved = null)
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
        if ($role) $this->role = $role;
        if ($isApproved) $this->isApproved = $isApproved;
    }
}

class Role
{
    public $id;
    public $role;

    public function __construct($id = null, $role = null)
    {
        if ($id) $this->id = $id;
        if ($role) $this->role = $role;
    }
}

class Country
{
    public $id = 'N/A';
    public $country_code = 'N/A';
    public $country_name = 'N/A';

    public function __construct($id = null, $country_code = null, $country_name = null)
    {
        if ($id) $this->id = $id;
        if ($country_code) $this->country_code = $country_code;
        if ($country_name) $this->country_name = $country_name;
    }
}

class News
{
    public $id = 'N/A';
    public $date = 'N/A';
    public $title = 'N/A';
    public $text = 'N/A';
    public $userId = 'N/A';
    public $isArchived;

    public function __construct($id = null, $date = null, $title = null, $text = null, $userId = null, $isArchived = null)
    {
        if ($id) $this->id = $id;
        if ($date) $this->date = $date;
        if ($title) $this->title = $title;
        if ($text) $this->text = $text;
        if ($userId) $this->userId = $userId;
        if ($isArchived) $this->isArchived = $isArchived;
    }
}
