<?php
$articleId = $_GET['article'];
$article = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getArticleWithImage&queryParam=' . $articleId), true);
?>
<article>
    <div>
        <h1 class="title title-primary-news-article"><?php echo $article[0]['title'] ?></h1>
        <figure class="figure figure-news-article">
            <?php echo '<img src="assets/images/ball.jpg" class="img img-news-article">' ?>
        </figure>
    </div>
    <div>
        <?php echo $article[0]['text'] ?>
        <br>
        <br>
        <a href="index.php?page=news">Back to news</a>
    </div>
</article>