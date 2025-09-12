<?php
require_once __DIR__ . '/../lib/Database.php';
$pdo = Database::get();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("INSERT INTO teams (name, tag, logo, country) VALUES (?, ?, ?, ?)");
  $stmt->execute([$_POST['name'], $_POST['tag'], $_POST['logo'], $_POST['country']]);
  header("Location: times.php");
  exit;
}
?>

<?php include 'includes/header.php'; ?>
<h1>Novo Time</h1>
<form method="post">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Tag</label>
    <input type="text" name="tag" class="form-control">
  </div>
  <div class="mb-3">
    <label>Logo (URL)</label>
    <input type="text" name="logo" class="form-control">
  </div>
  <div class="mb-3">
    <label>País</label>
    <input type="text" name="country" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Salvar</button>
</form>
<?php include 'includes/footer.php'; ?>
