<?php
require_once 'functions.php';
$tasks = getTasks();
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>My To-Do List</h1>
  <form action="add.php" method="post">
    <input type="text" name="title" placeholder="Новая задача" required>
    <button type="submit">Добавить</button>
  </form>
  
  <ul>
    <?php foreach ($tasks as $task): ?>
      <li>
        <?php echo htmlspecialchars($task['title']); ?>
        <?php if (!$task['is_done']): ?>
          <a href="update.php?id=<?php echo $task['id']; ?>">Готово</a>
        <?php endif; ?>
        <a href="delete.php?id=<?php echo $task['id']; ?>">Удалить</a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
