<?php
session_start();
include('connection.php');
include('../utils/validateEmail.php');

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
                header('location:../index.php?page=home');
            } else {
                header('location:../index.php?page=login&errorCode=2');
            }
        } else {
            header('location:../index.php?page=login&errorCode=1');
        }
    } catch (Error $e) {
    }
}
