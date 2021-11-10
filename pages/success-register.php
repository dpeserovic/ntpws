<?php
$gifCount = new FilesystemIterator('assets/gifs', FilesystemIterator::SKIP_DOTS);
?>
<div class="container container-success-register">
    <h1 class="title title-primary-success-register">You have successfully registered!</h1>
    <a href="index.php?page=home"><button class="button button-success-register">Go home</button></a>
    <br>
    <?php echo '<img src="assets/gifs/giphy-' . rand(1, iterator_count($gifCount)) . '.gif" alt="gif" class="img img-success-register">' ?>
</div>