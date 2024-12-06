<?php
require_once 'config.php';

function getTasks() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM tasks ORDER BY created_at DESC");
    return $stmt->fetchAll();
}

function addTask($title) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO tasks (title, is_done, created_at) VALUES (?, 0, NOW())");
    $stmt->execute([$title]);
}

function markTaskDone($id) {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE tasks SET is_done=1 WHERE id=?");
    $stmt->execute([$id]);
}

function deleteTask($id) {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM tasks WHERE id=?");
    $stmt->execute([$id]);
}
