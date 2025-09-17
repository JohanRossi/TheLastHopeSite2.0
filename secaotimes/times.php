<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="csst/estilo.css">

<?php
require_once __DIR__ . '/../lib/Database.php';
$pdo = Database::get();

$stmt = $pdo->query("SELECT id, name, tag, logo, country FROM teams ORDER BY name");
$teams = $stmt->fetchAll();
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Times</title></head>
<body>
  <h1>Times</h1>
  <div class="row">
    <?php foreach ($teams as $t): ?>
      <div class="col">
        <div class="card">
          <img src="<?= htmlspecialchars($t['logo']) ?>" alt="<?= htmlspecialchars($t['name']) ?>" />
          <div class="card-body">
            <h5><?= htmlspecialchars($t['name']) ?> (<?= htmlspecialchars($t['tag']) ?>)</h5>
            <p><?= htmlspecialchars($t['country']) ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>


   <!-- <section> 
  <div class="container">
    <div class="botoes">
      <div class="botao-imagem">
        <a href="times/rocketleague.php">
          <img src="img/Rocket League.png" alt="Time">
          <p>Rocket League</p>
        </a>
      </div>
      <div class="botao-imagem">
        <a href="times/arenabreakout.php">
          <img src="img/ArenaBreakout.png" alt="Time">
          <p>Arena Breakout: Infinite</p>
        </a>
      </div>
        <div class="botao-imagem">
            <a href="times/freefire.php">
            <img src="img/Freefire.png" alt="Time">
            <p>Free Fire</p>
            </a>
    </div>
    <div class="botao-imagem">
        <a href="times/cs2.php">
          <img src="img/cs2.png" alt="Time">
          <p>Counter Strike 2</p>
        </a>
      </div>
  </div>

    <div class="botoes">
      <div class="botao-imagem">
        <a href="times/clashofclans.php">
          <img src="img/clashofclans.png" alt="Time">
          <p>Clash Of Clans</p>
        </a>
      </div>
      <div class="botao-imagem">
        <a href="times/clashroyale.php">
          <img src="img/clashroyale.png" alt="Time">
          <p>Clash Royale</p>
        </a>
      </div>
      <div class="botao-imagem">
        <a href="#">
          <img src="img/jogoindisponivel.png" alt="Time">
          <p>...
          </p>
        </a>
      </div>
      <div class="botao-imagem">
        <a href="#">
          <img src="img/jogoindisponivel.png" alt="Time">
          <p>...</p>
        </a>
      </div>
    </div>
</section>

</body>
</html>
-->
<?php include('includes/footer.php'); ?>