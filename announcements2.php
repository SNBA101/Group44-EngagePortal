<?php
// announcements.php
session_start();  // Assuming you're using PHP sessions for user authentication
require_once 'db_conn.php';
require_once 'functions.php';

$user_id = $_SESSION['username']; // Assuming the user ID is stored in the session
$isAdmin = isAdmin($user_id);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $isAdmin) {
  $title = $_POST['title'];
  $content = $_POST['content'];

  $stmt = $conn->prepare("INSERT INTO announcements (title, content) VALUES (?, ?)");
  $stmt->bind_param("ss", $title, $content);
  $stmt->execute();
  $stmt->close();
}

$announcements = getAnnouncements();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Announcements</title>
</head>
<body>
  <h1>Announcements</h1>
  <?php if ($isAdmin) : ?>
    <form method="POST">
      <div>
        <label>Title:</label>
        <input type="text" name="title" required>
      </div>
      <div>
        <label>Content:</label>
        <textarea name="content" required></textarea>
      </div>
      <button type="submit">Add Announcement</button>
    </form>
  <?php endif; ?>

  <ul>
    <?php foreach ($announcements as $announcement) : ?>
      <li>
        <h2><?= htmlspecialchars($announcement['title']) ?></h2>
        <p><?= nl2br(htmlspecialchars($announcement['content'])) ?></p>
        <small><?= htmlspecialchars($announcement['created_at']) ?></small>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>