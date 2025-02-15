<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Todo List</title>
    <link rel="stylesheet" href="assets/css/todo.css">
</head>
<body>
    <!-- Todo List HTML from original code -->
      <div class="wrapper">
      <div class="task-input">
        <img src="assets/bar.svg" alt="icon" />
        <input type="text" placeholder="Add a new task" />
      </div>
      <div class="controls">
        <div class="filters">
          <span class="active" id="all">All</span>
          <span id="pending">Pending</span>
          <span id="completed">Completed</span>
        </div>
        <button class="clear-btn">Clear All</button>
      </div>
      <ul class="task-box"></ul>
    </div>

    <script src="assets/js/todo.js"></script>
</body>
</html>