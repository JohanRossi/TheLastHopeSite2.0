<?php
require_once __DIR__ . '/../lib/Database.php';
$pdo = Database::get();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id'])) {
  $stmt = $pdo->prepare("DELETE FROM teams WHERE id = ?");
  $stmt->execute([$_POST['id']]);
}
header('Location: times.php'); exit;
