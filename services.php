<?php session_start(); ?>
<html>

<head>
    <link rel="stylesheet" href="./css/stylehome.css">
    <link rel="stylesheet" href="./css/services&planos.css">
    <link rel="icon" type="image/png" href="./img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="./img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="./img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="BowTech" />
    <link rel="manifest" href="./img/favicon/site.webmanifest" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowtech - Services</title>
</head>

<body class="fundo">


    <header class="header-container" id="mainHeader">
        <img src="./img/logoBowtech.png" alt="Logo Bowtech" class="logo">

        <nav class="meu-menu">
            <a href="home.php">HOME</a>
            <a href="services.php"><strong style="color: #c13431;">SERVICES</strong></a>
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

            <h1 class="servicestitle">Planejados e personalizados conforme o seu comércio</h1>
            <h5 class="servicesh5">Não entregamos um template genérico. Cada site ou sistema é pensado a partir da forma
                real como o seu negócio funciona — varejo, indústria, associação, órgão público ou prestação de serviço.
            </h5>






            <div class="caixa">
                <div class="card">
                    <div class="cardcontent">
                        <h3>Criação de sites</h3>
                        <p>Sites institucionais rápidos, responsivos e otimizados para SEO, com hospedagem inclusa — a
                            partir de <strong><span style="color: blanchedalmond;">R$299</span></strong>.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="cardcontent">
                        <h3>Sistemas sob medida</h3>
                        <p>Softwares de gestão planejados para o seu processo real — prefeituras, associações, comércio
                            e indústria — a partir de <strong><span
                                    style="color: blanchedalmond;">R$3.999</span></strong>.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="cardcontent">
                        <h3>Lojas virtuais</h3>
                        <p>E-commerce sob medida para vender online, com catálogo, pagamento e gestão de pedidos — a
                            partir de <strong><span style="color: blanchedalmond;">R$1.299</span></strong>.</p>
                    </div>
                </div>
            </div>



            <section class="trust-badges-container" style="margin-top:120px; margin-bottom: 100px;">

                <div class="laurel-branch left">
                    <svg viewBox="0 0 24 24" width="48" height="48" fill="currentColor">

                    </svg>
                </div>

                <!-- Bloco 1: Garantia -->
                <div class="trust-badge-item">
                    <div class="badge-icon">
                        <!-- Ícone de Check/Escudo -->
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h3>100% Garantia</h3>
                    <p>Satisfação garantida por 14 dias.<br>Se não gostar, receba seu dinheiro de volta.</p>
                </div>


                <div class="divider"></div>


                <div class="trust-badge-item">
                    <div class="badge-icon">

                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <h3>Sistema Seguro</h3>
                    <p>Seus dados seguros e protegidos<br>com SSL, PCI DSS e SOC II</p>
                </div>


                <div class="laurel-branch right">
                    <svg viewBox="0 0 24 24" width="48" height="48" fill="currentColor">
                    </svg>
                </div>
            </section>


</main>
    </div>

    <video class="videoplanos" autoplay loop muted>
        <source src="./img/devvideo3.mp4" type="video/mp4" autoplay loop muted controls>
        Seu navegador não suporta este vídeo.
    </video>

    <div class="boxcentral">


        <main class="hero">



            <section class="faq-section">
                <h2 style="color: #a1a3a5;">Perguntas frequentes</h2>

                <details class="faq-item">
                    <summary class="faq-question">
                        <span>O que é a criação de sites sob medida?</span>
                        <span class="icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Desenvolvemos o site de acordo com a necessidade exata da sua empresa, garantindo alta
                            performance e design exclusivo.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        <span>Quanto tempo demora para ficar pronto?</span>
                        <span class="icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>O prazo médio para sites institucionais é de 15 a 40 dias úteis. Para e-commerces e projetos
                            sob medida, o prazo varia de acordo com as funcionalidades contratadas, sendo alinhado logo
                            no início do projeto.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        <span>Vocês oferecem suporte após a entrega?</span>
                        <span class="icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Sim! Oferecemos suporte técnico e manutenção contínua para garantir que seu site ou sistema
                            funcione perfeitamente.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        <span>O site já vem adaptado para celular (responsivo)?</span>
                        <span class="icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Sim, 100% dos nossos projetos são desenvolvidos para funcionarem com perfeição em celulares,
                            tablets e computadores.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        <span>Eu mesmo vou conseguir alterar os textos e fotos do site depois?</span>
                        <span class="icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Com certeza. Entregamos o site com um painel administrativo intuitivo para você atualizar
                            fotos, textos e produtos sem precisar entender de programação.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        <span>Quais são as formas de pagamento disponíveis?</span>
                        <span class="icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Trabalhamos com PIX, boleto bancário e parcelamento no cartão de crédito.</p>
                    </div>
                </details>

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

    <script>
        // Esconde a navbar principal ao rolar pra baixo, mostra ao rolar pra cima
        (function () {
            const header = document.getElementById('mainHeader');
            let lastScrollY = window.scrollY;
            let ticking = false;
            const threshold = 10; // evita "tremedeira" em pequenos scrolls

            function onScroll() {
                const currentScrollY = window.scrollY;

                // sempre visível no topo da página
                if (currentScrollY <= 0) {
                    header.classList.remove('hide-nav');
                    lastScrollY = currentScrollY;
                    ticking = false;
                    return;
                }

                if (Math.abs(currentScrollY - lastScrollY) > threshold) {
                    if (currentScrollY > lastScrollY) {
                        // rolando pra baixo -> esconde
                        header.classList.add('hide-nav');
                    } else {
                        // rolando pra cima -> mostra
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