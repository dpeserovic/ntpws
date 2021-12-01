<?php
$countryCode = $_SESSION['user']->country;
$userCountry = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getUserCountry&queryParam=' . $countryCode), true);
$userObj = (object) [
    'name' => $_SESSION['user']->name,
    'surname' => $_SESSION['user']->surname,
    'email' => $_SESSION['user']->email,
    'country' => $userCountry[0]['country_name'],
    'city' => $_SESSION['user']->city,
    'street' => $_SESSION['user']->street,
    'date of birth' => date_format(date_create($_SESSION['user']->dob), 'd.m.Y'),
    'role' => $userRole[0]['role']
];
?>
<h1 class="title title-primary-profile-tab">Profile</h1>
<ul class="ul ul-profile-tab">
    <?php
    foreach ($userObj as $key => $value) {
        if ($key != 'password') {
            echo '<li class="li li-profile-tab"><u>' . strtoupper($key) . '</u>: ' . strtoupper($value) . '</li>';
        }
    }
    ?>
</ul>