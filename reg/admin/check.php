<?php


$name = 'admin';
$passw = 'admin332';

// echo json_encode($_POST);
if ($_POST) {

    if ($_POST['nam'] == $name and  $_POST['pass'] == $passw) {
        session_start();
        $_SESSION['admin'] = $name;
        $_SESSION['pass'] = $passw;
        echo json_encode(['stat' => true]);
    } else {
        echo json_encode(['stat' => false]);
    }
}


