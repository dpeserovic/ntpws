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
                    include('pages/news.html');
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
            case 'register':
                include('pages/register.php');
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