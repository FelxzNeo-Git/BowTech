<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bowtech</title>
    <link rel="stylesheet" href="./css/stylehome.css">
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
            <a href="home.php"><strong style="color: #c13431;">HOME</strong></a>
            <a href="services.php">SERVICES</a>
            <a href="portfolio.php">PORTIFÓLIO</a>
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

            <div class="hero-background-wrapper">
                <div class="hero-background-content">
                    <div class="brand">
                        <h1 class="brand-title">BOW</h1>
                        <h1 class="brand-title brand-tech">TECH</h1>
                        <p class="tagline">Tecnologia que mira no seu objetivo.</p>
                    </div>

                    <a href="sobre.php"><button class="btn-quem-somos">Quem Somos:</button></a>

                    <h2 class="subheading">Inovação e Precisão em Engenharia de Software</h2>
                </div>
            </div>

            <div class="descricao">
                <p>Com mais de 8 anos de experiência, a bowtech projeta e desenvolve soluções digitais sob medida para transformar a operação da sua empresa.</p>
                <p>Unimos design funcional e arquitetura robusta para criar produtos eficientes, escaláveis e focados em resultados reais.</p>
            </div>

            <section class="solucoes">
                <span class="tag-solucoes">Nossas soluções:</span>

                <div class="solucoes-content">
                    <img src="./img/logoBowtech.png" class="solucoes-icon">

                    <ul>
                        <li><strong>Softwares Sob Medida:</strong> Sistemas personalizados para automatizar e otimizar processos complexos.</li>
                        <li><strong>Dashboards &amp; BI:</strong> Painéis inteligentes para visualização de dados e tomada de decisão em tempo real.</li>
                        <li><strong>Plataformas &amp; Portais:</strong> Ambientes de cadastro, portais de clientes e sistemas de gestão seguros.</li>
                        <li><strong>Sites &amp; E-commerce:</strong> Portais corporativos e lojas virtuais de alta performance e conversão.</li>
                    </ul>
                </div>
            </section>

            <section class="fazemos">
                <h3 class="tag-fazemos">O que fazemos:</h3>

                <div class="card-diferencial">

                    <article class="diferencial">
                        <h3>Desenvolvimento Web de Alta Performance</h3>
                        <p>
                            Criação de sites corporativos, landing pages focadas em conversão e plataformas web responsivas, otimizadas para SEO, velocidade e usabilidade.
                        </p>
                    </article>

                    <article class="diferencial">
                        <h3>Sistemas Sob Medida</h3>
                        <p>
                            Desenvolvimento de softwares, CRMs e ERPs customizados para atender às regras de negócio específicas da sua empresa e otimizar a operação.
                        </p>
                    </article>

                    <article class="diferencial">
                        <h3>Design & Experiência</h3>
                        <p>
                            Projetos de interfaces intuitivas, modernas e centradas no usuário, desenhadas para elevar a retenção, facilitar a navegação e maximizar a satisfação do cliente.
                        </p>
                    </article>

                    <article class="diferencial">
                        <h3>Integração & Soluções Digitais</h3>
                        <p>
                            Automação de processos operacionais e integração contínua de APIs e tecnologias estratégicas para impulsionar a eficiência e acelerar os resultados do negócio.
                        </p>
                    </article>

                </div>
            </section>




                        <div class="iaprojeto" id="sec-iaprojeto">
                <div class="ia-conteudo">
                    <h5>◉ Projeto de Inteligência Artificial</h5>
                    <h1>E se a IA cuidasse do trabalho <br> mais repetitivo da sua equipe?</h1>
                    <p>Apresentamos o Bowtech AI Agent, uma inteligência artificial desenvolvida sob medida para automatizar processos internos e acelerar a tomada de decisão. Além de gerar sugestões, ele executa tarefas de ponta a ponta, integrado diretamente aos sistemas da sua empresa.</p>
                    <a href="contato.php"><button>Solicitar demonstração</button></a>
                </div>

                <div class="ia-imagem">
                    <img src="./img/IAimagem.png" alt="Projeto de IA Bowtech" class="imgia">
                </div>
            </div>

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