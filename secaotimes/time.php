<?php
require_once '../lib/Database.php';

$db = Database::get();
$id = $_GET['id'] ?? 0;

$stmt = $db->prepare("SELECT * FROM times WHERE id = ?");
$stmt->execute([$id]);
$time = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$time) {
    echo "Time não encontrado.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($time['name']); ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1><?php echo htmlspecialchars($time['name']); ?></h1>
    <img src="<?php echo htmlspecialchars($time['logo']); ?>" alt="Logo" width="250">
    <p><strong>Sigla:</strong> <?php echo htmlspecialchars($time['sigla']); ?></p>
    <p><strong>País:</strong> <?php echo htmlspecialchars($time['pais']); ?></p>
</body>
</html>
