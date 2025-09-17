<?php
include __DIR__ . '/includes/header.php';
require_once __DIR__ . '/../lib/Database.php';
$pdo = Database::get();

$times = $pdo->query("SELECT * FROM teams ORDER BY created_at DESC")->fetchAll();
?>
<h1>Times</h1>
<a href="times_add.php" class="btn btn-success mb-3">+ Novo Time</a>
<table class="table">
  <tr><th>ID</th><th>Nome</th><th>Tag</th><th>Ações</th></tr>
  <?php foreach ($times as $t): ?>
    <tr>
      <td><?= $t['id'] ?></td>
      <td><?= htmlspecialchars($t['name']) ?></td>
      <td><?= htmlspecialchars($t['tag']) ?></td>
      <td>
        <a class="btn btn-sm btn-primary" href="times_edit.php?id=<?= $t['id'] ?>">Editar</a>
        <form style="display:inline" method="post" action="times_delete.php" onsubmit="return confirm('Excluir?');">
          <input type="hidden" name="id" value="<?= $t['id'] ?>">
          <button class="btn btn-sm btn-danger">Excluir</button>
        </form>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
<?php include __DIR__ . '/includes/footer.php'; ?>
