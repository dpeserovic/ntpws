<?php
if (isset($_SESSION['user'])) {
    $menu = array('home', 'news', 'contact', 'about', 'gallery', 'dashboard', 'logout');
} else {
    $menu = array('home', 'news', 'contact', 'about', 'gallery', 'register', 'login');
}
?>
<header>
    <nav class="nav nav-main">
        <?php
        for ($i = 0; $i < count($menu); $i++) {
            echo '<a href="index.php?page=' . $menu[$i] . '" class="link link-main"> ' . ucwords($menu[$i]) . ' </a>';
        }
        ?>
    </nav>
    <img src="assets/images/banner.jpg" alt="banner" class="img img-banner">
</header>