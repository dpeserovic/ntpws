<?php
include 'server/classes.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Napredne tehnike projektiranja web servisa">
    <meta name="keywords" content="advanced web service design">
    <meta name="author" content="Dario Pešerović">
    <title>NTPWS</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include('components/header.php');
    ?>
    <main>
        <?php
        $route = isset($_GET['page']) ? $_GET['page'] : 'home';
        $article = isset($_GET['article']) ? $_GET['article'] : null;
        switch ($route) {
            case 'home':
                include('pages/home.html');
                break;
            case 'news':
                if (!isset($article)) {
                    include('pages/news.php');
                } else {
                    include('pages/news-article.php');
                }
                break;
            case 'contact':
                include('pages/contact.php');
                break;
            case 'about':
                include('pages/about.html');
                break;
            case 'gallery':
                include('pages/gallery.html');
                break;
            case 'api':
                include('pages/api.php');
                break;
            case 'register':
                include('pages/register.php');
                break;
            case 'success-register':
                include('pages/success-register.php');
                break;
            case 'login':
                include('pages/login.php');
                break;
            case 'dashboard':
                include('pages/dashboard.php');
                break;
            case 'logout':
                include('pages/logout.php');
                break;
            default:
                include('pages/home.html');
        }
        ?>
    </main>
    <?php
    include('components/footer.php');
    ?>
</body>

</html>