<?php
require_once __DIR__ . '/../lib/Database.php';
$pdo = Database::get();

$id = $_GET['id'] ?? null;
if (!$id) { header('Location: times.php'); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("UPDATE teams SET name=?, tag=?, logo=?, country=?, updated_at=NOW() WHERE id=?");
  $stmt->execute([$_POST['name'], $_POST['tag'], $_POST['logo'], $_POST['country'], $id]);
  header('Location: times.php'); exit;
}

$stmt = $pdo->prepare("SELECT * FROM teams WHERE id = ?");
$stmt->execute([$id]);
$team = $stmt->fetch();
if (!$team) { echo "Time não encontrado"; exit; }

include __DIR__ . '/includes/header.php';
?>
<h1>Editar Time</h1>
<form method="post">
  <div class="mb-3"><label>Nome<input name="name" required value="<?= htmlspecialchars($team['name']) ?>" class="form-control"></label></div>
  <div class="mb-3"><label>Tag<input name="tag" value="<?= htmlspecialchars($team['tag']) ?>" class="form-control"></label></div>
  <div class="mb-3"><label>Logo (URL)<input name="logo" value="<?= htmlspecialchars($team['logo']) ?>" class="form-control"></label></div>
  <div class="mb-3"><label>País<input name="country" value="<?= htmlspecialchars($team['country']) ?>" class="form-control"></label></div>
  <button class="btn btn-primary">Atualizar</button>
</form>
<?php include __DIR__ . '/includes/footer.php'; ?>
