<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco - BT_TECH</title>


    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="stylesheet" href="stylehome.css">
    <link rel="stylesheet" href="./css/contato.css">
    <link rel="stylesheet" href="./css/stylehome.css">
    <link rel="icon" type="image/png" href="./img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="./img/favicon/favicon.svg" />
    <link rel="shortcut icon" href="./img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="BowTech" />
    <link rel="manifest" href="./img/favicon/site.webmanifest" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        darkbg: '#222831',
                        cardbg: '#1a1f26',
                        inputbg: '#2a313c',
                        wine: '#b83b3b',
                        wineHover: '#942f2f'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-10px)'
                            },
                        }
                    }
                }
            }
        }
    </script> 
</head>




<body class="min-h-screen bg-darkbg flex items-center justify-center p-6 relative overflow-hidden">


    <header class="header-container" id="mainHeader">
        <img src="./img/logoBowtech.png" alt="Logo Bowtech" class="logo">

        <nav class="meu-menu">
            <a href="home.php">HOME</a>
            <a href="services.php">SERVICES</a>
            <a href="portfolio.php">PORTIFÓLIO</a>
            <a href="planos.php">PLANOS</a>
            <a href="sobre.php">SOBRE</a>
            <a href="contato.php"><strong style="color: #c13431;">CONTATO</strong></a>
        </nav>

     <div class="auth-links">
    <?php include 'nav.php'; ?>
</div>
        
    </header>

    <div class="absolute top-[-10%] left-[-5%] w-96 h-96 bg-wine opacity-10 rounded-full blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-[-10%] right-[-5%] w-96 h-96 bg-wine opacity-10 rounded-full blur-[100px] pointer-events-none"></div>


    <div class="max-w-6xl w-full mx-auto relative z-10">


        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">


            <div class="flex flex-col space-y-10">
                <div>
                    <h1 class="text-4xl lg:text-6xl font-bold mb-4 relative inline-block">
                        Fale Conosco
                        <span class="absolute bottom-0 left-0 w-1/2 h-1 bg-wine rounded-full"></span>
                    </h1>
                    <p class="text-gray-400 mt-4 text-lg max-w-md">
                        Tem alguma dúvida, projeto em mente ou precisa de suporte? Entre em contato pelos nossos canais abaixo.
                    </p>
                </div>


                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <a href="#" class="flex items-center space-x-4 p-4 rounded-xl bg-cardbg hover:bg-inputbg border border-transparent hover:border-wine/30 transition-all duration-300 group">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-wine/10 text-wine group-hover:bg-wine group-hover:text-white transition-colors duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">Instagram</p>
                            <p class="font-medium">@BT_TECH</p>
                        </div>
                    </a>


                    <a href="#" class="flex items-center space-x-4 p-4 rounded-xl bg-cardbg hover:bg-inputbg border border-transparent hover:border-wine/30 transition-all duration-300 group">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-wine/10 text-wine group-hover:bg-wine group-hover:text-white transition-colors duration-300">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">WhatsApp</p>
                            <p class="font-medium">+99 99999-9999</p>
                        </div>
                    </a>


                    <a href="mailto:BTTECH@gmail.com" class="flex items-center space-x-4 p-4 rounded-xl bg-cardbg hover:bg-inputbg border border-transparent hover:border-wine/30 transition-all duration-300 group">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-wine/10 text-wine group-hover:bg-wine group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gra">E-mail</p>
                            <p class="font-medium text-sm break-all">BTTECH@gmail.com</p>
                        </div>
                    </a>


                    <div class="flex items-center space-x-4 p-4 rounded-xl bg-cardbg border border-transparent hover:border-wine/30 transition-all duration-300 group">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-wine/10 text-wine group-hover:bg-wine group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">Localização</p>
                            <p class="font-medium">280748-90</p>
                        </div>
                    </div>
                </div>




            </div>


            <!-- Form Card -->
            <div class="bg-cardbg rounded-2xl p-8 lg:p-10 shadow-2xl border border-gray-800 relative w-full transform transition-all duration-500 hover:shadow-wine/20">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-wine/20 to-transparent rounded-tr-2xl pointer-events-none"></div>


                <h3 class="text-2xl font-semibold mb-8 text-white">Mande uma Mensagem</h3>


                <form id="contactForm" class="space-y-6">


                    <!-- Nome -->
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" placeholder="Nome:" name="nome" id="nome" class="block py-3 px-2 w-full text-sm text-white bg-inputbg rounded-t-lg border-0 border-b-2 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-wine focus:bg-inputbg peer transition-colors" placeholder=" " required />
                        <label for="nome" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 -z-10 origin-[0] peer-focus:left-2 peer-focus:text-wine peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-darkbg px-1 rounded">Nome Completo</label>


                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- E-mail -->
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="email" placeholder="E-mail:" name="email" id="email" class="block py-3 px-2 w-full text-sm text-white bg-inputbg rounded-t-lg border-0 border-b-2 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-wine focus:bg-inputbg peer transition-colors" placeholder=" " required />
                            <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 -z-10 origin-[0] peer-focus:left-2 peer-focus:text-wine peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-darkbg px-1 rounded">E-mail</label>
                        </div>


                        <!-- Telefone -->
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="tel" placeholder="Telefone:" name="telefone" id="telefone" class="block py-3 px-2 w-full text-sm text-white bg-inputbg rounded-t-lg border-0 border-b-2 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-wine focus:bg-inputbg peer transition-colors" placeholder=" " required />
                            <label for="telefone" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 -z-10 origin-[0] peer-focus:left-2 peer-focus:text-wine peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-darkbg px-1 rounded">Telefone</label>
                        </div>
                    </div>


                    <!-- Mensagem -->
                    <div class="relative z-0 w-full mb-6 group">
                        <textarea name="mensagem" placeholder="Sua Mensagem:" id="mensagem" rows="4" class="block py-3 px-2 w-full text-sm text-white bg-inputbg rounded-t-lg border-0 border-b-2 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-wine focus:bg-inputbg peer transition-colors resize-none" placeholder=" " required></textarea>
                        <label for="mensagem" class="peer-focus:font-medium absolute text-sm text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 left-2 -z-10 origin-[0] peer-focus:left-2 peer-focus:text-wine peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:bg-darkbg px-1 rounded">Sua Mensagem</label>
                    </div>


                    <!-- Botão de Enviar -->
                    <button type="submit" id="submitBtn" class="relative w-full overflow-hidden bg-wine text-white py-3.5 rounded-lg font-semibold tracking-wide shadow-[0_4px_14px_0_rgba(184,59,59,0.39)] hover:shadow-[0_6px_20px_rgba(184,59,59,0.23)] hover:bg-wineHover transition-all duration-300 transform hover:-translate-y-0.5 group">
                        <span class="relative z-10 flex items-center justify-center gap-2">
                            <a href="home.php">Enviar</a>
                            <i class="fas fa-paper-plane group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-300"></i>
                        </span>


                        <div class="absolute top-0 -inset-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-20 group-hover:animate-[shine_1s_ease-in-out]"></div>
                    </button>


                    <!-- Mensagem de Sucesso (Oculta por padrão) -->
                    <div id="successMessage" class="hidden mt-4 p-4 bg-green-900/30 border border-green-500/30 text-green-400 rounded-lg text-center text-sm items-center justify-center gap-2">
                        <i class="fas fa-check-circle"></i> Mensagem enviada com sucesso!
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>


</html>

