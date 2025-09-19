<?php include('includes/header.php'); ?>
<link rel="stylesheet" href="csst/estilo.css">

<?php
require_once __DIR__ . '/../lib/Database.php';
$$pdo = Database::get();
$stmt = $pdo->query("SELECT id, name, tag, logo, country, ordem FROM teams ORDER BY ordem ASC");
$times = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="container">
    <h1>Times</h1>
    <div class="botoes">
        <?php foreach ($times as $time): ?>
            <div class="botao-imagem">
                <?php if (!empty($time['logo'])): ?>
                    <img src="<?php echo htmlspecialchars($time['logo']); ?>" 
                         alt="<?php echo htmlspecialchars($time['name']); ?>">
                <?php else: ?>
                    <img src="img/times/default.png" alt="Sem logo"> <!-- fallback -->
                <?php endif; ?>
                <p>
                  <?php echo htmlspecialchars($time['name']); ?>
                  <?php if (!empty($time['tag'])): ?>
                    (<?php echo htmlspecialchars($time['tag']); ?>)
                  <?php endif; ?>
                </p>
                <p><?php echo htmlspecialchars($time['country']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<section> 
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
<?php include('includes/footer.php'); ?>