<?php
require_once __DIR__ . '/../lib/Database.php';
$pdo = Database::get();
$players = $pdo->query("SELECT id, nickname, team_id FROM players")->fetchAll();
header('Content-Type: application/json');
echo json_encode($players);
