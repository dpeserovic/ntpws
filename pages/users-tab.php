<?php
include('utils/getCountryName.php');
include('utils/getIsApproved.php');
include('utils/getRankAction.php');
$countries = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getCountries'), true);
$roles = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getAllRoles'), true);
$users = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getAllUsers&queryParam=' . $_SESSION['user']->id), true);
?>
<h1 class="title title-primary-users-tab">Users</h1>
<table class="table table-users-tab">
    <tr>
        <th></th>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>EMAIL</th>
        <th>COUNTRY</th>
        <th>CITY</th>
        <th>STREET</th>
        <th>DATE OF BIRTH</th>
        <th>ROLE</th>
        <th>IS APPROVED</th>
        <th><span class="material-icons">thumbs_up_down</span></th>
        <th><span class="material-icons">arrow_upward / arrow_downwards</span></th>
        <th><span class="material-icons">delete</span></th>
    </tr>
    <?php
    for ($i = 0; $i < count($users); $i++) {
        echo
        '
            <tr>
                <form action="http://localhost/ntpws/server/action.php" method="post">
                <td><input type="hidden" id="userId" name="userId" value="' . $users[$i]['id'] . '" /></td>
                <td>' . $users[$i]['name'] . '</td>
                <td>' . $users[$i]['surname'] . '</td>
                <td>' . $users[$i]['email'] . '</td>
                <td>' . getCountryName($countries, $users[$i]['country']) . '</td>
                <td>' . $users[$i]['city'] . '</td>
                <td>' . $users[$i]['street'] . '</td>
                <td>' . date_format(date_create($users[$i]['dob']), 'd.m.Y') . '</td>
                <td>' . getRoleName($roles, $users[$i]['role'])  . '</td>
                <td>' . getIsApproved($users[$i]['isApproved'], true) . '</td>
                <td><input type="submit" name="submit" value="' . getIsApproved($users[$i]['isApproved'], false) . '" class="button button-users-tab"/></td>
                <td><input type="submit" name="submit" value=' . getRankAction(getRoleName($roles, $users[$i]['role'])) . ' class="button button-users-tab"/></td>
                <td><input type="submit" name="submit" value="Delete" class="button button-users-tab"/></td>
                </form>
            </tr> 
        ';
    }
    ?>
</table>