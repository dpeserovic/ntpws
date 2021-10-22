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
        switch ($route) {
            case 'home':
                include('pages/home.php');
                break;
            case 'news':
                include('pages/news.php');
                break;
            case 'contact':
                include('pages/contact.php');
                break;
            case 'about':
                include('pages/about.php');
                break;
            case 'gallery':
                include('pages/gallery.php');
                break;
            default:
                include('pages/home.php');;
        }
        ?>
    </main>
    <?php
    include('components/footer.php');
    ?>
</body>

</html>