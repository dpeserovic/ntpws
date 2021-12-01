<?php
$roleId = $_SESSION['user']->role;
$userRole = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getUserRole&queryParam=' . $roleId), true);
?>
<div class="container container-dashboard">
    <h1 class="title title-primary-dashboard"><?php echo $_SESSION['user']->name . ' ' . $_SESSION['user']->surname . ' [' . strtoupper($userRole[0]['role']) . ']' ?></h1>
    <?php
    include('components/dashboard-tabs.php');
    $currentTab = isset($_GET['tab']) ? $_GET['tab'] : 'profile';
    $article = isset($_GET['article']) ? $_GET['article'] : null;
    switch ($currentTab) {
        case 'profile':
            include('pages/profile-tab.php');
            break;
        case 'create':
            include('pages/create-tab.php');
            break;
        case 'edit':
            if (isset($article)) {
                include('pages/edit-article.php');
            } else {
                include('pages/edit-tab.php');
            }
            break;
        case 'users':
            include('pages/users-tab.php');
            break;
        default:
            include('pages/profile-tab.php');
    }
    ?>
</div>