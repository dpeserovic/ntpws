<?php
$newsId = $_GET['article'];
$article = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getArticle&queryParam=' . $newsId), true);
?>
<h1 class="title title-primary-edit-article">Edit article</h1>
<form action="http://localhost/ntpws/server/action.php" method="post" class="form form-create-tab">
    <input type="hidden" id="newsId" name="newsId" value=<?php echo $newsId ?> />
    <input type="hidden" id="shouldEdit" name="shouldEdit" value="true" />
    <label for="title">Title</label><br>
    <input type="text" id="title" name="title" value="<?php echo $article[0]['title'] ?>" class="input input-create-tab" required><br>
    <label for="text">Text</label><br>
    <textarea id="text" name="text" class="textarea textarea-create-tab" required><?php echo $article[0]['text'] ?></textarea><br>
    <input type="submit" name="submit" value="Edit" class="button-edit-article">
</form>