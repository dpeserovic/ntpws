<?php $article = $_GET['article']; ?>
<article>
    <div>
        <figure class="figure figure-news-article">
            <?php echo '<img src="articles/article-' . $article . '/img" class="img img-news-article">'; ?>
            <figcaption>
                <ul class="ul ul-news-article"><?php include('articles/article-' . $article . '/img-description.html') ?></ul>
            </figcaption>
        </figure>
    </div>
    <div>
        <?php include('articles/article-' . $article . '/article.html') ?>
        <br>
        <a href="index.php?page=news">Back to news</a>
    </div>
</article>