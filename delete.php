<?php
require_once 'functions.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    deleteTask($id);
}

header('Location: index.php');
exit;
