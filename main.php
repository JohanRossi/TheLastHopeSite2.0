<?php include('includes/header.php'); ?>

<section id="jogos" class="time">
    <h2>ULTIMAS COMPETIÇÕES</h2>
    <div class="membros">
        <?php
        $membros = [
            ['nome' => 'Rocket League Torneio Diamante T20', 'cargo' => 'The Last Hope 8°', 'img' => 'secaotimes/img/Rocket League.png', 'link' => 'secaopartidas/ultimaspartidas/rocketleaguep.php'],
            ['nome' => 'Ralisco Showdown', 'cargo' => 'The Last Hope 37º', 'img' => 'img/ArenaBreakout.png', 'link' => 'secaopartidas/ultimaspartidas/arenabreakoutp.php'],
        ];
        foreach($membros as $membro): ?>
        <a href="<?= $membro['link'] ?>" class="card">
            <div class="card">
                    <img src="<?= $membro['img'] ?>">
                    <p><?= $membro['nome'] ?></p>
                    <p><?= $membro['cargo'] ?></p>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</section>

<section id="galeria">
    <h2>GALERIA DO TIME</h2>
    <div class="galeria-container">
        <div class="foto">
            <img src="imgalery/i1.png" alt="Foto 1">
        </div>
        <div class="foto">
            <img src="imgalery/i2.png" alt="Foto 2">
        </div>
        <div class="foto">
            <img src="imgalery/i3.png" alt="Foto 3">
        </div>
        <div class="foto">
            <img src="imgalery/i4.png" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i5.jpg" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i6.png" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i7.png" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i8.png" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i9.jpg" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i10.png" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i11.png" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i12.png" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i13.png" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i14.png" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i15.png" alt="Foto 4">
        </div>
        <div class="foto">
            <img src="imgalery/i16.png" alt="Foto 4">
        </div>
        <!-- Pode adicionar quantas fotos quiser -->
    </div>
</section>

<div id="lightbox">
    <span class="fechar">&times;</span>
    <img id="lightbox-img">
</div>

<section id="time" class="time">
    <h2>MEMBROS</h2>
    <div class="membros">
        <?php
        $membros = [
            ['nome' => 'PokasZideia', 'cargo' => 'Influencer | Jogador Pro | CEO', 'img' => 'secaotimes/img/pokas2.png', 'link' => 'secaojogadores/jogadores/pokas.php'],
            ['nome' => 'L1GHTZ', 'cargo' => 'Jogador Pro', 'img' => 'secaotimes/img/semfoto.png', 'link' => 'secaojogadores/jogadores/lightz.php'],
            ['nome' => 'KAMKE', 'cargo' => 'Influencer | Assistente Tecnico', 'img' => 'secaotimes/img/kamke2.png', 'link' => 'secaojogadores/jogadores/kamke.php'],
            ['nome' => 'Fusion', 'cargo' => 'Jogador Pro', 'img' => 'secaotimes/img/fusion2.jpg', 'link' => 'secaojogadores/jogadores/fusion.php'],
            ['nome' => 'VT', 'cargo' => 'Influencer | Jogador Pro', 'img' => 'secaotimes/img/vt.png', 'link' => 'secaojogadores/jogadores/vt.php'],
            ['nome' => 'Aleke', 'cargo' => 'Jogador Pro | CEO', 'img' => 'secaotimes/img/aleke.jpg', 'link' => 'secaojogadores/jogadores/aleke.php'],
            ['nome' => 'Beca', 'cargo' => 'Jogador Pro', 'img' => 'secaotimes/img/Beca.jpg', 'link' => 'secaojogadores/jogadores/beca.php'],
        ];

        foreach($membros as $membro): ?>
            <a href="<?= $membro['link'] ?>" class="card">
                <img src="<?= $membro['img'] ?>" alt="<?= $membro['nome'] ?>">
                <h3><?= $membro['nome'] ?></h3>
                <p><?= $membro['cargo'] ?></p>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<script>
    // Seleciona todos as imagens da galeria
    const imagens = document.querySelectorAll('.galeria-container img');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const fechar = document.querySelector('#lightbox .fechar');

    // Ao clicar numa imagem, abre no lightbox
    imagens.forEach(img => {
        img.addEventListener('click', () => {
            lightbox.style.display = 'flex';
            lightboxImg.src = img.src;
        });
    });

    // Ao clicar no X, fecha
    fechar.addEventListener('click', () => {
        lightbox.style.display = 'none';
    });

    // Fecha também clicando fora da imagem
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.style.display = 'none';
        }
    });

    // Fecha com tecla ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            lightbox.style.display = 'none';
        }
    });
</script>

<?php include('includes/footer.php'); ?>
