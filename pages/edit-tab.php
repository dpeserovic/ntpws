<?php
include('utils/getIsArchived.php');
$news = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getAllNews'), true);
?>
<h1 class="title title-primary-edit-tab">Edit</h1>
<table class="table table-edit-tab">
    <tr>
        <th></th>
        <th></th>
        <th>DATE</th>
        <th>TITLE</th>
        <th>AUTHOR</th>
        <th>IS ARCHIVED</th>
        <th><span class="material-icons">archive / unarchive</span></th>
        <th><span class="material-icons">edit</span></th>
        <th><span class="material-icons">delete</span></th>
    </tr>
    <?php
    for ($i = 0; $i < count($news); $i++) {
        echo
        '
            <tr>
                <form action="http://localhost/ntpws/server/action.php" method="post">
                <td><input type="hidden" id="newsId" name="newsId" value="' . $news[$i]['id'] . '" /></td>
                <td><input type="hidden" id="shouldEdit" name="shouldEdit" value="false" /></td>
                <td>' . date_format(date_create($news[$i]['date']), 'd.m.Y') . '</td>
                <td>' . $news[$i]['title'] . '</td>
                <td>' . $news[$i]['author'] . '</td>
                <td>' . getIsArchived($news[$i]['isArchived'], false) . '</td>
                <td>' . hasPermission($role, 'archiveNews', '<input type="submit" name="submit" value=' . getIsArchived($news[$i]['isArchived'], true) . ' class="button button-edit-tab" />') . '</td>
                <td>' . hasPermission($role, 'editNews', '<input type="submit" name="submit" value=Edit class="button button-edit-tab" />') . '</td>
                <td>' . hasPermission($role, 'deleteNews', '<input type="submit" name="submit" value=Delete class="button button-edit-tab" />') . '</td>
                </form>
            </tr> 
        ';
    }
    ?>
</table>