<?php
$userId = $_SESSION['user']->id
?>
<h1 class="title title-primary-create-tab">Create</h1>
<form action="http://localhost/ntpws/server/action.php" method="post" enctype="multipart/form-data" class="form form-create-tab">
    <input type="hidden" id="userId" name="userId" value=<?php echo $userId ?> />
    <label for="title">Title</label><br>
    <input type="text" id="title" name="title" class="input input-create-tab" required><br>
    <label for="text">Text</label><br>
    <textarea id="text" name="text" class="textarea textarea-create-tab" required></textarea><br>
    <label for="image">Image</label><br>
    <input type="file" id="image" name="image" class="input input-create-tab" required><br>
    <input type="submit" name="submit" value="Create" class="button button-create-tab">
</form>