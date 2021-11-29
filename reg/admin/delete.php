<?php
session_start();
if (!isset($_SESSION['admin']) and !isset($_SESSION['pass'])) {
    echo "<script>location.replace(`index.php`)</script>";
} else {
    require '../db.php';
    $d = new Db();

    if ($_GET['from'] == 'firm') {
        if ($d->delete('firm', $_GET['id'])) {
            $res['stat'] = true;
        } else {
            $res['stat'] = false;
        }
    } else if ($_GET['from'] == 'invest') {
        if ($d->delete('invest', $_GET['id'])) {
            $res['stat'] = true;
        } else {
            $res['stat'] = false;
        }
    }
    echo json_encode($res);
}
