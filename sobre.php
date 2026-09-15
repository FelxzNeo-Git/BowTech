<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bowtech - Sobre Nós</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./css/stylehome.css">
    <link rel="stylesheet" href="./css/sobre.css">
    <link rel="icon" type="image/png" href="./img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="./img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="./img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="BowTech" />
    <link rel="manifest" href="./img/favicon/site.webmanifest" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="fundo">


    <header class="header-container" id="mainHeader">
        <img src="./img/logoBowtech.png" alt="Logo Bowtech" class="logo">


        <nav class="meu-menu">
            <a href="home.php">HOME</a>
            <a href="services.php">SERVICES</a>
            <a href="portfolio.php">PORTIFÓLIO</a>
            <a href="planos.php">PLANOS</a>
            <a href="sobre.php"><strong style="color: #c13431;">SOBRE</strong></a>
            <a href="contato.php">CONTATO</a>
        </nav>


        <!-- ÁREA DINÂMICA DE AUTENTICAÇÃO / PERFIL -->
        <div class="auth-links">
            <?php include 'nav.php'; ?>
        </div>
    </header>


    <div class="boxcentral">


        <main class="hero">


            <!-- Cabeçalho Principal -->
            <div class="sobre-intro">
                <h1 class="brand-title">SOBRE A</h1>
                <h1 class="brand-title brand-tech">BOWTECH</h1>
                <p class="tagline">Não atiramos no escuro. Nós acertamos o alvo.</p>
            </div>


            <div class="descricao">
                <p>Na <strong>BowTech</strong>, a tecnologia é a nossa estrutura e a inovação é a nossa flecha. Nascemos com um propósito claro: transformar a complexidade do ecossistema digital em soluções precisas, escaláveis e eficientes.</p>
                <p>Nosso nome reflete o nosso compromisso diário com a excelência: <strong>foco total, planejamento estratégico e alcance sem limites</strong>. Assim como um arco tensionado com precisão dispara uma flecha diretamente ao seu objetivo, nós traçamos a rota perfeita para impulsionar o seu negócio ao topo.</p>
            </div>


        </main>


        <div style="display: flex;" class="icons">
            <img src="./img/java.png">
            <img src="./img/github.png">
            <img src="./img/python.png">
            <img src="./img/c++.png">
            <img src="./img/html.png">
            <img src="./img/css.png">
            <img src="./img/javascript.png">
            <img src="./img/php.png">
        </div>


    </div>


    <!-- FAIXA DE MÉTRICAS / NÚMEROS -->
    <section class="stats-section">
        <div class="stats-row">
            <div class="stat-box">
                <div class="stat-number">+180</div>
                <div class="stat-label">Projetos Disparados</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">99.8%</div>
                <div class="stat-label">Precisão de Entrega</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Suporte de Elite</div>
            </div>
            <div class="stat-box">
                <div class="stat-number">100%</div>
                <div class="stat-label">Foco no Cliente</div>
            </div>
        </div>
    </section>


    <!-- FAIXA FULL-WIDTH: MISSÃO, VISÃO E VALORES -->
    <section class="valores-section">
        <h2 class="valores-title">Por que escolher a BowTech?</h2>


        <div class="valores-row">


            <div class="valor-item">
                <div class="valor-icon"><i class="fa-solid fa-bullseye"></i></div>
                <h3>Missão</h3>
                <p>Desenvolver sistemas e plataformas com precisão milimétrica, eliminando gargalos e conectando empresas ao futuro digital.</p>
            </div>


            <div class="valor-divider"></div>


            <div class="valor-item">
                <div class="valor-icon"><i class="fa-solid fa-eye"></i></div>
                <h3>Visão</h3>
                <p>Ser a principal força tecnológica de inovação na América Latina, reconhecida pela velocidade de disparo e impacto das soluções.</p>
            </div>


            <div class="valor-divider"></div>


            <div class="valor-item">
                <div class="valor-icon"><i class="fa-solid fa-gem"></i></div>
                <h3>Valores</h3>
                <p>Transparência radical, engenharia de código limpo, agilidade no desenvolvimento e compromisso inabalável com o sucesso do cliente.</p>
            </div>


        </div>
    </section>


    <!-- FAIXA FULL-WIDTH: LINHA DO TEMPO -->
    <section class="timeline-section">
        <h2 class="valores-title">A Trajetória da Flecha</h2>
       
        <div class="timeline-container">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-date">2022 — A TENSÃO DA CORDA</div>
                    <h4>Fundação da BowTech</h4>
                    <p>Iniciamos como um laboratório de desenvolvimento focado em solucionar problemas complexos de arquitetura web.</p>
                </div>
            </div>


            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-date">2024 — O DISPARO</div>
                    <h4>Expansão dos Serviços</h4>
                    <p>Lançamos a nossa divisão de soluções em nuvem e desenvolvimento sob medida, atingindo a marca de 100 clientes.</p>
                </div>
            </div>


            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <div class="timeline-date">2026 — NO ALVO</div>
                    <h4>Nova Sede & Globalização</h4>
                    <p>Inauguração da nossa sede tecnológica de alta performance e início das operações para clientes internacionais.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- FAIXA FULL-WIDTH: EQUIPE -->
    <section class="equipe-section">
        <h2 class="valores-title">Mentes Por Trás do Alvo</h2>
       
        <div class="equipe-grid">
            <div class="membro-card">
                <div class="membro-avatar"><i class="fa-solid fa-user-astronaut"></i></div>
                <h4>Leonardo</h4>
                <div class="membro-cargo">CEO & Chief Architect</div>
                <p class="membro-desc">Especialista em arquitetura de dados e estratégia tecnológica.</p>
            </div>


            <div class="membro-card">
                <div class="membro-avatar"><i class="fa-solid fa-code"></i></div>
                <h4>Felipe</h4>
                <div class="membro-cargo">Head of Engineering</div>
                <p class="membro-desc">Lidera o desenvolvimento de software e controle de qualidade técnica.</p>
            </div>


            <div class="membro-card">
                <div class="membro-avatar"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                <h4>Matheus</h4>
                <div class="membro-cargo">Lead UX/UI Designer</div>
                <p class="membro-desc">Responsável por transformar interfaces complexas em experiências fluidas.</p>
            </div>
        </div>
    </section>


    <!-- FAIXA FULL-WIDTH: NOSSA SEDE INTERATIVA -->
    <section class="sede-section">
        <h2 class="sede-title">Nossa Sede</h2>
        <p class="sede-subtle">Onde a inovação ganha forma todos os dias.</p>
       
        <div class="sede-img-wrapper">
            <img src="./img/sedetech.png" alt="Sede da BowTech" class="sede-img">
            <div class="sede-overlay">
                <span class="sede-badge">Centro de Inovação</span>
                <p>📍 BowTech Tower — São Paulo, SP | Brasil</p>
            </div>
        </div>
    </section>


    <!-- Barra terracota no rodapé -->
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
                <span class="icon">📍</span>  01000-000
            </span>
        </div>
    </footer>


    <script>
        // Esconde a navbar principal ao rolar pra baixo, mostra ao rolar pra cima
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
