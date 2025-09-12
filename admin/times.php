<?php
include 'includes/header.php';
require_once __DIR__ . '/../lib/Database.php';
$pdo = Database::get();

$times = $pdo->query("SELECT * FROM teams ORDER BY created_at DESC")->fetchAll();
?>

<h1>Times</h1>
<a href="times_add.php" class="btn btn-success mb-3">+ Novo Time</a>
<table class="table table-striped">
  <tr>
    <th>ID</th><th>Nome</th><th>Tag</th><th>Ações</th>
  </tr>
  <?php foreach ($times as $t): ?>
    <tr>
      <td><?= $t['id'] ?></td>
      <td><?= htmlspecialchars($t['name']) ?></td>
      <td><?= htmlspecialchars($t['tag']) ?></td>
      <td>
        <a href="times_edit.php?id=<?= $t['id'] ?>" class="btn btn-sm btn-primary">Editar</a>
        <a href="times_delete.php?id=<?= $t['id'] ?>" class="btn btn-sm btn-danger">Excluir</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php include 'includes/footer.php'; ?>
