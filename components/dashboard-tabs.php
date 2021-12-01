<?php
include('utils/getRoleName.php');
include('utils/hasPermission.php');
$roles = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getAllRoles'), true);
$role = getRoleName($roles, $_SESSION['user']->role);
$tabs = array('profile', 'create', 'edit', hasPermission($role, 'editUsers', true) == true ? 'users' : null);
?>
<nav class="nav nav-dashboard-tabs">
    <?php
    for ($i = 0; $i < count($tabs); $i++) {
        if ($tabs[$i] != null) {
            echo '<a href="index.php?page=dashboard&tab=' . $tabs[$i] . '" class="link link-dashboard-tabs">' . ucwords($tabs[$i]) . '</a>';
        }
    }
    ?>
</nav>