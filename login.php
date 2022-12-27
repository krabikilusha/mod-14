<?php
session_start();

include_once __DIR__ . '/functions.php'; //подключаем файл с функциями

if ( null !== getCurrentUser() ) { //Если пользователь вошёл, то редирект на главную страницу
    header('Location: /index.php');
    exit;
}

if ( isset( $_POST['login'] ) ) {
    if ( isset( $_POST['password'] ) ) { //Если  данные введены в форму входа
        if ( checkPassword( $_POST['login'], $_POST['password'] ) ) { //проверяем введённые данные
            $_SESSION['username'] = $_POST['login']; //делаем метку клиента
            header('Location: /index.php'); //перенапрявляем на главную страницу
            exit;
        }
    }
}
?>
