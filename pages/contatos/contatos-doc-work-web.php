<!DOCTYPE html>
<html lang="pt-BR"> <!-- Define o idioma da página como Português do Brasil -->
    <link rel="icon" href="../../assets/images/icon.png" type="image/png">
    <title>M&D - Contatos</title>
<header>
	<!-- Definição do Charset da página para UTF-8, garantindo suporte para caracteres especiais -->
	<meta charset="UTF-8">

	<!-- Configuração para compatibilidade com navegadores Internet Explorer e bordas modernas -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Definição de responsividade para a página, permitindo que se ajuste a diferentes tamanhos de tela -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Biblioteca Font Awesome para ícones de redes sociais e ícones diversos -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Biblioteca Bootstrap para estilização e componentes responsivos -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- Link para o CSS personalizado da página -->
    <link rel="stylesheet" href="../../assets/css/style-colors-contatos-page.css">

	<!-- Fonte personalizada do Google Fonts para o design do texto -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&family=Playwrite+NO:wght@100..400&family=Reddit+Sans+Condensed:wght@200..900&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    
    <!-- Estilos adicionais para o elemento de carregamento (Loader) exibido durante o carregamento da página -->
    <style>
        /* Estilo geral do loader: ocupa toda a tela e posiciona no centro */
        #loader {
            position: fixed; /* Posição fixa para cobrir toda a tela */
            left: 0;
            top: 0;
            width: 100%; /* Ocupa a largura completa */
            height: 100%; /* Ocupa a altura completa */
            z-index: 9999; /* Prioridade para que apareça sobre outros elementos */
            background: #fff; /* Fundo branco */
            display: flex; /* Centraliza com Flexbox */
            align-items: center; /* Centralização vertical */
            justify-content: center; /* Centralização horizontal */
        }
        /* Estilo do spinner com animações de rotação e arco-íris */
        .loader-spinner {
            border: 16px solid #f3f3f3; /* Borda externa cinza claro */
            border-top: 12px solid; /* Borda superior colorida */
            border-radius: 50%; /* Forma circular */
            width: 80px; /* Largura do spinner */
            height: 80px; /* Altura do spinner */
            animation: spin 2s linear infinite, rainbow 4s linear infinite; /* Animações de rotação e mudança de cor */
        }
        /* Animação de rotação contínua do spinner */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        /* Efeito arco-íris no spinner */
        @keyframes rainbow {
            0% { border-top-color: #ff0000; }    /* Vermelho */
            16% { border-top-color: #ff7f00; }   /* Laranja */
            33% { border-top-color: #ffff00; }   /* Amarelo */
            50% { border-top-color: #00ff00; }   /* Verde */
            66% { border-top-color: #0000ff; }   /* Azul */
            83% { border-top-color: #4b0082; }   /* Anil */
            100% { border-top-color: #8b00ff; }  /* Violeta */
        }
    </style>
</header>

<body>
    <!-- Loader: Elemento de carregamento exibido enquanto a página carrega completamente -->
    <div id="loader">
        <div class="loader-spinner"></div> <!-- Spinner com animação -->
    </div>

    <!-- Conteúdo principal da página -->
    <div class="container">
        <!-- Logotipo e subtítulo que redirecionam para a página inicial -->
        <h1 onclick="window.location.href='../../index.php';" id="logo-page">M&D</h1>
        <p onclick="window.location.href='../../index.php';" id="sub-logo-page">Matheus Diamantino - Desenvolvedor Web</p>

        <!-- Linhas de contato (Gmail, WhatsApp, LinkedIn e GitHub) com links -->
        <div class="row">
            <!-- Contato por Gmail -->
            <div onclick="window.location.href='https://mail.google.com/mail/?view=cm&fs=1&to=matheus.diamantino20@gmail.com';" class="col" id="box-info-page">
                <h4>Gmail</h4>
                <i id="icon-contatos-page" class="fa fa-google"></i> <!-- Ícone do Gmail -->
            </div>

            <!-- Contato por WhatsApp -->
            <div onclick="window.location.href='https://wa.me/5561999745671?text=Olá, tudo bem ? Estou entrando em contato para podermos verificar a possibilidade de realizarmos o orçamento de um projeto.%20gostaria%20de%20falar%20com%20você';" class="col" id="box-info-page">
                <h4>WhatsApp</h4>
                <i id="icon-contatos-page" class="fa fa-whatsapp"></i> <!-- Ícone do WhatsApp -->
            </div>

            <!-- Contato por LinkedIn -->
            <div onclick="window.location.href='https://www.linkedin.com/in/matheus-diamantino-952b3121a/';" class="col" id="box-info-page">
                <h4>Linkedin</h4>
                <i id="icon-contatos-page" class="fa fa-linkedin"></i> <!-- Ícone do LinkedIn -->
            </div>

            <!-- Contato por GitHub -->
            <div onclick="window.location.href='https://github.com/Henri-Di';" class="col" id="box-info-page">
                <h4>Github</h4>
                <i id="icon-contatos-page" class="fa fa-github"></i> <!-- Ícone do GitHub -->
            </div>
        </div>
    </div>

    <!-- Scripts JavaScript movidos para o final do corpo para otimizar o carregamento da página -->
    <!-- Biblioteca jQuery para manipulação de elementos e eventos JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Biblioteca Popper.js, utilizada para posicionamento de elementos pop-up em componentes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Font Awesome para ícones -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Biblioteca JavaScript do Bootstrap para funcionalidades responsivas -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- JavaScript para controlar o comportamento do Loader -->
    <script>
        // A função é executada quando o DOM está totalmente carregado
        document.addEventListener("DOMContentLoaded", function () {
            // Quando a página estiver totalmente carregada
            window.onload = function () {
                // Define um tempo para ocultar o loader
                setTimeout(function () {
                    var loader = document.getElementById("loader");
                    loader.style.display = "none"; // Esconde o loader após 1 segundo
                }, 1000); // 1000 milissegundos = 1 segundo
            }
        });
    </script>
</body>
</html>
