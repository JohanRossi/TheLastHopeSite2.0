<?php
require_once __DIR__ . '/../lib/Database.php';
$pdo = Database::get();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("INSERT INTO teams (name, tag, logo, country) VALUES (?, ?, ?, ?)");
  $stmt->execute([$_POST['name'], $_POST['tag'], $_POST['logo'], $_POST['country']]);
  header('Location: times.php'); exit;
}
include __DIR__ . '/includes/header.php';
?>
<h1>Novo Time</h1>
<form method="post">
  <div class="mb-3"><label>Nome<input name="name" required class="form-control"></label></div>
  <div class="mb-3"><label>Tag<input name="tag" class="form-control"></label></div>
  <div class="mb-3"><label>Logo (URL)<input name="logo" class="form-control"></label></div>
  <div class="mb-3"><label>País<input name="country" class="form-control"></label></div>
  <button class="btn btn-success">Salvar</button>
</form>
<?php include __DIR__ . '/includes/footer.php'; ?>
