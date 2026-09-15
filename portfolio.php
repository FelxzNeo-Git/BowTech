
<?php
$pastaCarrossel = './css/imag/';

$imagensCarrossel = glob($pastaCarrossel . "*.{jpg,jpeg,png,webp}", GLOB_BRACE);
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Bowtech</title>
    <link rel="stylesheet" href="./css/stylehome.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="./img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="./img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="./img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="BowTech" />
    <link rel="manifest" href="./img/favicon/site.webmanifest" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/portfolio.css">
</head>

<body class="fundo">
    <header class="header-container" id="mainHeader">
        <img src="./img/logoBowtech.png" alt="Logo Bowtech" class="logo">

        <nav class="meu-menu">
            <a href="home.php">HOME</a>
            <a href="services.php">SERVICES</a>
            <a href="portfolio.php"><strong style="color: #c13431;">PORTIFÓLIO</strong></a>
            <a href="planos.php">PLANOS</a>
            <a href="sobre.php">SOBRE</a>
            <a href="contato.php">CONTATO</a>
        </nav>

<div class="auth-links">
    <?php include 'nav.php'; ?>
</div>
    </header>

    <div class="boxcentral">

        <main class="hero">

            <div class="brand">
                <h1 class="brand-title">BOW</h1>
                <h1 class="brand-title brand-tech">TECH</h1>
                <h2 class="tagline">PROJETOS EM DESTAQUE</h2>
            </div>

            <div class="descricao">
                <p>Alguns dos projetos que fazem parte do nosso portfólio.</p>
            </div>


            <div class="carousel-container">
                <?php if (!empty($imagensCarrossel)): ?>
                    <div id="carrosselBowtech" class="carousel slide shadow" data-bs-ride="carousel" data-bs-interval="3000">
                        

                        <div class="carousel-indicators">
                            <?php foreach ($imagensCarrossel as $index => $imagem): ?>
                                <button type="button" 
                                        data-bs-target="#carrosselBowtech" 
                                        data-bs-slide-to="<?= $index; ?>" 
                                        class="<?= $index === 0 ? 'active' : ''; ?>" 
                                        aria-current="<?= $index === 0 ? 'true' : 'false'; ?>" 
                                        aria-label="Slide <?= $index + 1; ?>">
                                </button>
                            <?php endforeach; ?>
                        </div>

                        <div class="carousel-inner">
                            <?php foreach ($imagensCarrossel as $index => $imagem): ?>
                                <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>">
                                    <img src="<?= $imagem; ?>" class="d-block w-100" alt="Projeto <?= $index + 1; ?>">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carrosselBowtech" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carrosselBowtech" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>

                    </div>
                <?php else: ?>
                    <p style="color: #fff; text-align: center;">Nenhuma imagem encontrada na pasta <code><?= $pastaCarrossel; ?></code>.</p>
                <?php endif; ?>
            </div>

            <section class="avaliacoes-section">
                <h3 class="titulo-avaliacoes">O QUE DIZEM NOSSOS CLIENTES</h3>
                
                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="card-avaliacao">
                            <div class="estrelas">★★★★★</div>
                            <p class="comentario">"A equipe da Bowtech superou todas as nossas expectativas. O sistema foi entregue antes do prazo e com excelente desempenho."</p>
                            <div class="cliente-info">
                                <div class="cliente-avatar">G</div>
                                <div>
                                    <h4 class="cliente-nome">Gabe Newell</h4>
                                    <p class="cliente-cargo">CEO - Steam</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card-avaliacao">
                            <div class="estrelas">★★★★★</div>
                            <p class="comentario">"Design incrível e usabilidade perfeita! O site desenvolvido elevou a autoridade da minha empresa no pais."</p>
                            <div class="cliente-info">
                                <div class="cliente-avatar">M</div>
                                <div>
                                    <h4 class="cliente-nome">Mariana Costa</h4>
                                    <p class="cliente-cargo">Diretora de Marketing - Enel</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-avaliacao">
                            <div class="estrelas">★★★★★</div>
                            <p class="comentario">"Suporte impecável e solução muito robusta. Recomendo totalmente o trabalho do time Bowtech para qualquer projeto."</p>
                            <div class="cliente-info">
                                <div class="cliente-avatar">D</div>
                                <div>
                                    <h4 class="cliente-nome">Dave Hyatt</h4>
                                    <p class="cliente-cargo">Fundador - FireFox</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </main>
    </div>


    <footer class="footer-terracota">
        <div class="cttmenu">
            <a href="https://instagram.com/BT_TECH" target="_blank" class="ctt-item">
                <span class="icon">📷</span> @BowTech
            </a>
            <a href="https://wa.me/5599999999999" target="_blank" class="ctt-item">
                <span class="icon">💬</span> +99 99999-9999
            </a>
            <a href="mailto:BTTECH@gmail.com" class="ctt-item">
                <span class="icon">✉️</span> BTECH@gmail.com
            </a>
            <span class="ctt-item">
                <span class="icon">📍</span> 280748-90
            </span>
        </div>
    </footer>

    <!-- Bootstrap JavaScript (Obrigatório) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script para ocultar/mostrar navbar -->
    <script>
        (function () {
            const header = document.getElementById('mainHeader');
            let lastScrollY = window.scrollY;
            let ticking = false;
            const threshold = 10;

            function onScroll() {
                const currentScrollY = window.scrollY;

                if (currentScrollY <= 0) {
                    header.classList.remove('hide-nav');
                    lastScrollY = currentScrollY;
                    ticking = false;
                    return;
                }

                if (Math.abs(currentScrollY - lastScrollY) > threshold) {
                    if (currentScrollY > lastScrollY) {
                        header.classList.add('hide-nav');
                    } else {
                        header.classList.remove('hide-nav');
                    }
                    lastScrollY = currentScrollY;
                }

                ticking = false;
            }

            window.addEventListener('scroll', function () {
                if (!ticking) {
                    window.requestAnimationFrame(onScroll);
                    ticking = true;
                }
            });
        })();
    </script>

</body>

</html>