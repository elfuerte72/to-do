<?php
require_once 'functions.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    markTaskDone($id);
}

header('Location: index.php');
exit;
