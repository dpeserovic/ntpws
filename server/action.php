<?php
include('connection.php');
include('../utils/validateEmail.php');
session_start();

if (isset($_POST['submit'])) {
    $data = file_get_contents('php://input');
    switch ($_POST['submit']) {
        case 'Register':
            register(
                new User(
                    null,
                    $_POST['name'],
                    $_POST['surname'],
                    $_POST['email'],
                    $_POST['country'],
                    $_POST['city'],
                    $_POST['street'],
                    $_POST['dob'],
                    $_POST['password'],
                    null,
                    null
                ),
                $oConnection
            );
            break;
        case 'Login':
            login(
                $_POST['email'],
                $_POST['password'],
                $oConnection
            );
            break;
        case 'Create':
            create(
                new News(
                    null,
                    null,
                    $_POST['title'],
                    $_POST['text'],
                    $_POST['userId'],
                    1
                ),
                $_FILES['image'],
                $oConnection
            );
            break;
        case 'Unarchive':
            unarchive(
                $_POST['newsId'],
                $oConnection
            );
            break;
        case 'Archive':
            archive(
                $_POST['newsId'],
                $oConnection
            );
            break;
        case 'Edit':
            edit(
                $_POST['newsId'],
                $_POST['shouldEdit'],
                $_POST['title'],
                $_POST['text'],
                $oConnection
            );
            break;
        case 'Delete':
            if (isset($_POST['newsId'])) {
                deleteArticle(
                    $_POST['newsId'],
                    $oConnection
                );
            } else {
                deleteUser(
                    $_POST['userId'],
                    $oConnection
                );
            }
            break;
        case 'Approve':
            approve(
                $_POST['userId'],
                $oConnection
            );
            break;
        case 'Disapprove':
            disapprove(
                $_POST['userId'],
                $oConnection
            );
            break;
        case 'Promote':
            promote(
                $_POST['userId'],
                $oConnection
            );
            break;
        case 'Demote':
            demote(
                $_POST['userId'],
                $oConnection
            );
            break;
    }
}

function register($data, $oConnection)
{
    try {
        $isEmailUnique = validateEmail($oConnection, $data->email);
        if ($isEmailUnique) {
            $query = 'INSERT INTO users(name, surname, email, country, city, street, dob, password, role, isApproved) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
            $statment = $oConnection->prepare($query);
            $data->password = password_hash($data->password, PASSWORD_DEFAULT, ['cost' => 12]);
            $statment->bind_param('sssssssssi', $data->name, $data->surname, $data->email, $data->country, $data->city, $data->street, $data->dob, $data->password, $data->role, $data->isApproved);
            $statment->execute();
            header('location:../index.php?page=success-register');
        } else {
            header('location:../index.php?page=register&errorCode=1');
        }
    } catch (Error $e) {
        echo $e;
    }
}

function login($email, $password, $oConnection)
{
    try {
        $query = 'SELECT * FROM users WHERE email = "' . $email . '"';
        $result = $oConnection->query($query);
        $row = @mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (password_verify($password, $row['password'])) {
            if ($row['isApproved'] == 1) {
                $_SESSION['user'] = new User(
                    $row['id'],
                    $row['name'],
                    $row['surname'],
                    $row['email'],
                    $row['country'],
                    $row['city'],
                    $row['street'],
                    $row['dob'],
                    $row['password'],
                    $row['role'],
                    $row['isApproved'],
                );
                header('location:../index.php?page=dashboard');
            } else {
                header('location:../index.php?page=login&errorCode=2');
            }
        } else {
            header('location:../index.php?page=login&errorCode=1');
        }
    } catch (Error $e) {
        echo $e;
    }
}

function create($news, $image, $oConnection)
{
    try {
        $query = 'INSERT INTO news(title, text, userId, isArchived) VALUES (?, ?, ?, ?)';
        $statment = $oConnection->prepare($query);
        $statment->bind_param('ssii', $news->title, $news->text, $news->userId, $news->isArchived);
        $isSuccess = $statment->execute();
        if ($isSuccess) {
            $getIdQuery = 'SELECT id FROM news WHERE title = "' . $news->title . '"';
            $result = $oConnection->query($getIdQuery);
            $articleId = $result->fetch_row()[0];
            uploadImage($image, $articleId, $oConnection);
            header('location:../index.php?page=dashboard&tab=edit');
        }
    } catch (Error $e) {
        echo $e;
    }
}

function uploadImage($image, $articleId, $oConnection)
{
    $imgContent = addslashes(file_get_contents($image['tmp_name']));
    $uploadImageQuery = 'INSERT INTO images(image, articleId) VALUES (?, ?)';
    $uploadImageStatement = $oConnection->prepare($uploadImageQuery);
    $uploadImageStatement->bind_param('di', $imgContent, $articleId);
    $uploadImageStatement->execute();
}

function unarchive($newsId, $oConnection)
{
    try {
        $query = 'UPDATE news SET isArchived = 0 WHERE id = ' . $newsId;
        $oConnection->query($query);
        header('location:../index.php?page=dashboard&tab=edit');
    } catch (Error $e) {
        echo $e;
    }
}

function archive($newsId, $oConnection)
{
    try {
        $query = 'UPDATE news SET isArchived = 1 WHERE id = ' . $newsId;
        $oConnection->query($query);
        header('location:../index.php?page=dashboard&tab=edit');
    } catch (Error $e) {
        echo $e;
    }
}

function edit($newsId, $shouldEdit, $title, $text, $oConnection)
{
    if ($shouldEdit == 'true') {
        try {
            $query = 'UPDATE news SET title = "' . $title . '", text = "' . $text . '" WHERE id = ' . $newsId;
            $oConnection->query($query);
            header('location:../index.php?page=dashboard&tab=edit');
        } catch (Error $e) {
            echo $e;
        }
    } else {
        header('location:../index.php?page=dashboard&tab=edit&article=' . $newsId);
    }
}

function deleteArticle($newsId, $oConnection)
{
    try {
        $query = 'DELETE FROM news WHERE id = ' . $newsId;
        $oConnection->query($query);
        header('location:../index.php?page=dashboard&tab=edit');
    } catch (Error $e) {
        echo $e;
    }
}

function approve($userId, $oConnection)
{
    try {
        $query = 'UPDATE users SET isApproved = 1 WHERE id = ' . $userId;
        $oConnection->query($query);
        header('location:../index.php?page=dashboard&tab=users');
    } catch (Error $e) {
        echo $e;
    }
}

function disapprove($userId, $oConnection)
{
    try {
        $query = 'UPDATE users SET isApproved = 0 WHERE id = ' . $userId;
        $oConnection->query($query);
        header('location:../index.php?page=dashboard&tab=users');
    } catch (Error $e) {
        echo $e;
    }
}

function promote($userId, $oConnection)
{
    try {
        $query = 'UPDATE users SET role = 2 WHERE id = ' . $userId;
        $oConnection->query($query);
        header('location:../index.php?page=dashboard&tab=users');
    } catch (Error $e) {
        echo $e;
    }
}

function demote($userId, $oConnection)
{
    try {
        $query = 'UPDATE users SET role = 1 WHERE id = ' . $userId;
        $oConnection->query($query);
        header('location:../index.php?page=dashboard&tab=users');
    } catch (Error $e) {
        echo $e;
    }
}

function deleteUser($userId, $oConnection)
{
    try {
        $query = 'DELETE FROM users WHERE id = ' . $userId;
        $oConnection->query($query);
        header('location:../index.php?page=dashboard&tab=users');
    } catch (Error $e) {
        echo $e;
    }
}
