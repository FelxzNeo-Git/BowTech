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
    <title>Bowtech - Planos</title>
</head>

<body class="fundo">


    <header class="header-container" id="mainHeader">
        <img src="./img/logoBowtech.png" alt="Logo Bowtech" class="logo">

        <nav class="meu-menu">
            <a href="home.php">HOME</a>
            <a href="services.php">SERVICES</a>
            <a href="portfolio.php">PORTIFÓLIO</a>
            <a href="planos.php"><strong style="color: #c13431;">PLANOS</strong></a>
            <a href="sobre.php">SOBRE</a>
            <a href="contato.php">CONTATO</a>
        </nav>

        <div class="auth-links">
            <?php include 'nav.php'; ?>
        </div>
    </header>

    <div class="boxcentral">


        <main class="hero"   id="sec-hero">
            <h1 class="servicestitle">Um plano para cada etapa do seu negócio</h1>
            <h5 class="servicesh5">Todos os valores abaixo são <span style="color: #c13431;">a partir</span> de — o
                orçamento final é ajustado ao escopo real do seu projeto. </h5>






            <div class="caixa">
                <div class="card">
                    <div class="cardcontent">
                        <p
                            style="margin-left: -150px; 
                    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                            A partir de</p>
                        <h3><strong><span style="color: blanchedalmond;"><span
                                        style="font-size: 25;">R$299</span>/mês</span></strong></h3>
                        <h6>Site institucional</h6>
                        <ul>
                            <li>Página institucional responsiva</li>
                            <li>Desenvolvimento + hospedagem inclusos</li>
                            <li>Otimização básica de SEO</li>
                            <li>Formulário de contato</li>
                        </ul>
                        <a href="#sec-siteinstitucional" class="btn-saiba-mais">Saiba mais...</a>
                    </div>
                </div>

                <div class="card">
                    <div class="cardcontent">
                        <p
                            style="margin-left: -150px; 
                    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                            A partir de</p>
                        <h3><strong><span style="color: blanchedalmond;"><span
                                        style="font-size: 25;">R$3.999</span>/mês</span></strong></h3>
                        <h6>Sistema sob medida</h6>
                        <ul>
                            <li>Levantamento do processo real</li>
                            <li>Desenvolvimento 100% personalizado</li>
                            <li>Painel administrativo próprio</li>
                            <li>Suporte e evolução contínua</li>
                        </ul>
                        <a href="#sec-sobmedida" class="btn-saiba-mais">Saiba mais...</a>
                    </div>
                </div>

                <div class="card">
                    <div class="cardcontent">
                        <p
                            style="margin-left: -150px; 
                    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                            A partir de</p>
                        <h3><strong><span style="color: blanchedalmond;"><span
                                        style="font-size: 25;">R$1.299</span>/mês</span></strong></h3>
                        <h6 style="margin-left: -40;">Loja virtual (E-comerce)</h6>
                        <ul>
                            <li>Catálogo de produtos ilimitado</li>
                            <li>Pagamento online integrado</li>
                            <li>Painel de gestão de pedidos</li>
                            <li>SEO + hospedagem incluso</li>
                        </ul>
                        <a href="#sec-lojavirtual" class="btn-saiba-mais">Saiba mais...</a>
                    </div>
                </div>
            </div>





            </section>
        </main>
    </div>

    <video class="videoplanos" autoplay loop muted>
        <source src="./img/videomodeling.mp4" type="video/mp4" autoplay loop muted controls>
        Seu navegador não suporta este vídeo.
    </video>

    <div class="boxcentral">

<!-- Botão Voltar ao Topo -->
<a href="#sec-hero" class="btn-top" aria-label="Voltar ao topo">
    <img src="./img/pra-cima.png" alt="Voltar ao topo">
</a>

        <main class="hero">
            <section class="trust-badges-container">
                <img src="./img/imgplanosreclameaq.png" width="1000"
                    style="margin-top: -40px; display: flex; align-items: center;">


            </section>





            <div class="siteinstitucional" id="sec-siteinstitucional">
                <div class="loja-conteudo">
                    <h5>◉ Agência de criação de sites</h5>
                    <h1>Criação de sites institucionais <br> que trazem resultado, <br> não só aparência.</h1>
                    <p>A BowTech é uma agência de criação de sites que atende empresas, associações e órgãos públicos
                        internacionalmente. Cada site é responsivo, rápido e otimizado para SEO desde o primeiro dia — a
                        partir de R$299/mes, com desenvolvimento e hospedagem inclusos.</p>
                   <a href="contato.php"><button>Solicitar orçamento</button></a>
                </div>

                <div class="loja-imagem">
                    <img src="./img/criacaodesites.webp" alt="Foto do site" class="imgloja">
                </div>
            </div>

              </main>
    </div>

    <video class="videoplanos" autoplay loop muted>
        <source src="./img/devvideo1.mp4" type="video/mp4" autoplay loop muted controls>
        Seu navegador não suporta este vídeo.
    </video>

    <div class="boxcentral">


        <main class="hero">



            <div class="sobmedida" id="sec-sobmedida">
                    <div class="loja-conteudo">
                        <h5>◉ Sistemas sob medida</h5>
                        <h1>Software para gestão empresarial, planejado para o seu processo.</h1>
                        <p>Desenvolvemos software sob medida de forma planejada e personalizada conforme o tipo de
                            comércio ou instituição — nunca um sistema genérico. A partir de R$3.999, com levantamento
                            de processo incluso.</p>
                       <a href="contato.php"><button>Solicitar orçamento</button></a>
                    </div>


                    <div class="loja-imagem">

                        <img src="./img/fotosdesites.jpg" alt="Foto do site" class="imgloja">
                    </div>
                </div>


                  </main>
    </div>

    <video class="videoplanos" autoplay loop muted>
        <source src="./img/devvideo2.mp4" type="video/mp4" autoplay loop muted controls>
        Seu navegador não suporta este vídeo.
    </video>

    <div class="boxcentral">


        <main class="hero">



                <div class="lojavirtual" id="sec-lojavirtual">
                    <div class="loja-conteudo">
                    <h5>◉ E-commerce sob medida</h5>
                    <h1>Sua loja virtual, <br> pronta para vender.</h1>
                    <p>Criamos lojas virtuais completas — catálogo, <br> pagamento online e gestão de pedidos em um <br>
                        painel só — a partir de R$1.299, com hospedagem <br> e SEO inclusos.</p>
                    <a href="contato.php"><button>Solicitar orçamento</button></a>
                </div>

                <div class="loja-imagem">
                    <img src="./img/lojasvituais.webp" alt="Foto do site" class="imgloja">
                </div>
            </div>



        </main>


    </div>




=


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