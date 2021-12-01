<?php
$unarchivedNews = json_decode(file_get_contents('http://localhost/ntpws/server/json.php?jsonId=getAllUnarchivedNews'), true);
?>
<h1 class="title title-primary-news">NEWS</h1>
<?php
for ($i = 0; $i < count($unarchivedNews); $i++) {
    echo
    '
    <a href="index.php?page=news&article=' . $unarchivedNews[$i]['id'] . '">
        <h3 class="title title-secondary-news">' . $unarchivedNews[$i]['title'] . '</h3>
    </a>
    <a href="index.php?page=news&article=' . $unarchivedNews[$i]['id'] . '"><img src="assets/images/ball.jpg" alt="ball" class="img img-news"></a>
    <p>'
        . implode(' ', array_slice(explode(' ', $unarchivedNews[$i]['text']), 0, 50)) . '... <a href="index.php?page=news&article=' . $unarchivedNews[$i]['id'] . '">Read more</a>' .
    '</p>
    Date: <span class="date date-news">' . date_format(date_create($unarchivedNews[$i]['date']), 'd.m.Y') . '</span>
    ';
}
?>