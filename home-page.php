<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="./assets/images/icon.png" type="image/png">
    <title>M&D - Inicío</title>
    <!-- Meta Tags: Informações básicas da página -->
    <!-- Define o conjunto de caracteres da página -->
    <meta charset="UTF-8">
    <!-- Define a compatibilidade para o Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Define o viewport para garantir a responsividade -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bibliotecas de Estilo e Fontes Externas -->
    <!-- Font Awesome: Ícones para embelezar a interface -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap: Framework CSS para design responsivo e componentes -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Google Fonts: Importação de fontes personalizadas para estilização dos textos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&family=Playwrite+NO:wght@100..400&family=Reddit+Sans+Condensed:wght@200..900&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">

    <!-- Estilos Personalizados -->
    <!-- Incluindo folha de estilos personalizada da página -->
    <link rel="stylesheet" href="./assets/css/style-colors-index-page.css">

    <!-- Estilo do Loader (CSS) -->
    <style>
        /* Loader CSS */
        #loader {
            position: fixed; /* Fixa o loader no centro da tela */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999; /* Coloca o loader à frente de todos os outros elementos */
            background: #fff; /* Fundo branco */
            display: flex; /* Usa Flexbox para centralizar o conteúdo */
            align-items: center; /* Centraliza verticalmente */
            justify-content: center; /* Centraliza horizontalmente */
        }
        .loader-spinner {
            border: 16px solid #f3f3f3; /* Borda cinza para dar contraste */
            border-top: 12px solid; /* Cor personalizada para a borda superior */
            border-radius: 50%; /* Faz o elemento ser circular */
            width: 80px; /* Largura do loader */
            height: 80px; /* Altura do loader */
            animation: spin 2s linear infinite, rainbow 4s linear infinite; /* Animações para o movimento e a cor */
        }

        /* Animação de rotação */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Animação de arco-íris (mudança de cor) */
        @keyframes rainbow {
            0% { border-top-color: #8c1aff; }    
            16% { border-top-color: #7300e6; }   
            33% { border-top-color: #ac00e6; }  
            50% { border-top-color: #9900cc; }  
            66% { border-top-color: #8600b3; }   
            83% { border-top-color: #4b0082; }   
            100% { border-top-color: #8b00ff; }  
        }
    </style>
</head>

<body>
    <!-- Loader: Elemento de carregamento exibido até que a página seja totalmente carregada -->
    <div id="loader">
        <div class="loader-spinner"></div>
    </div>

    <!-- Conteúdo Principal da Página -->
    <div class="container">
        <!-- Logo e Sub-logo da Página -->
        <h1 onclick="window.location.href='./index.php';" id="logo-page">M&D</h1>
        <p onclick="window.location.href='./index.php';" id="sub-logo-page">Matheus Diamantino - Desenvolvedor Web</p>

        <!-- Seção de Informações -->
        <div class="row">
            <!-- Caixa de Informação: Desenvolvedor Web -->
            <div class="col" id="box-info-page">
                <h4 id="title-box-page">Desenvolvedor Web <i class="fa fa-code"></i></h4>
                <p id="text-box-page">
                    Desenvolvedor web experiente, especializado em criar aplicações escaláveis, seguras e de alta qualidade, com foco na experiência do usuário e interfaces responsivas. Atende às necessidades dos clientes com atenção aos detalhes e desempenho.
                </p>
                <div>
                    <button onclick="window.location.href='./pages/desenvolvedor/desenvolvedor-doc-work-web.php'" id="btn-box-page">Sobre o Desenvolvedor <i class="fa fa-code"></i></button>
                </div>
            </div>

            <!-- Caixa de Informação: Tecnologias -->
            <div class="col" id="box-info-page">
                <h4 id="title-box-page">Tecnologias <i class="fa fa-gears"></i></h4>
                <p id="text-box-page">
                    Utilizo HTML, CSS, SCSS e Bootstrap para criar interfaces responsivas, PHP para lógica de negócios no back-end e JavaScript para interatividade. Gerencio dados com SQL, MySQLi e PostgreSQL, garantindo aplicações web robustas e escaláveis.
                </p>
                <div>
                    <button onclick="window.location.href='./pages/tecnologias/tecnologias-doc-work-web.php';" id="btn-box-page">Sobre Tecnologias <i class="fa fa-gears"></i></button>
                </div>
            </div>

            <!-- Caixa de Informação: Portfólio -->
            <div class="col" id="box-info-page">
                <h4 id="title-box-page">Portfólio <i class="fa fa-folder-open"></i></h4>
                <p id="text-box-page">
                    Explore meu portfólio para ver projetos criados com atenção aos detalhes e às necessidades de cada cliente, focados na resolução de problemas e fortalecimento da identidade da marca, unindo design intuitivo e desempenho elevado.
                </p>
                <div>
                    <button id="btn-box-page" onclick="window.location.href='./pages/portifolio/portifolio-doc-work-web.php';">
                        Sobre Portfólio <i class="fa fa-folder-open"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Seção Adicional de Informações -->
        <div class="row">
            <!-- Caixa de Informação: Serviços -->
            <div class="col" id="box-info-page">
                <h4 id="title-box-page">Serviços <i class="fa fa-handshake-o"></i></h4>
                <p id="text-box-page">
                    Solicite um orçamento personalizado e impulsione seu negócio com soluções web sob medida. Com design responsivo, interatividade avançada e integração sistêmica, oferecemos uma presença digital forte e impactante para valorizar sua marca.
                </p>
                <div>
                    <button onclick="window.location.href='./pages/servicos/servicos-doc-work-web.php';" id="btn-box-page">Solicitar Orçamento <i class="fa fa-handshake-o"></i></button>
                </div>
            </div>

            <!-- Caixa de Informação: Novidades -->
            <div class="col" id="box-info-page">
                <h4 id="title-box-page">Novidades <i class="fa fa-star"></i></h4>
                <p id="text-box-page">
                    Fique por dentro dos novos projetos em desenvolvimento, baseados em elicitação de requisitos e melhores práticas de software, focando em eficiência, escalabilidade e experiência do usuário, com soluções robustas e inovadoras.
                </p>
                <div>
                    <button id="btn-box-page">Sobre Novidades <i class="fa fa-star"></i></button>
                </div>
            </div>

            <!-- Caixa de Informação: Contatos -->
            <div class="col" id="box-info-page">
                <h4 id="title-box-page">Contatos <i class="fa fa-bullhorn"></i></h4>
                <p id="text-box-page">
                    Gostou do nosso trabalho? Conecte-se conosco! Utilize um de nossos canais de comunicação para enviar sua mensagem: e-mail, LinkedIn, GitHub ou telefone. Estou à disposição para qualquer dúvida ou proposta. Será um prazer explorar novas oportunidades juntos.
                </p>
                <div>
                    <button onclick="window.location.href='./pages/contatos/contatos-doc-work-web.php';" id="btn-box-page">Sobre Contatos <i class="fa fa-bullhorn"></i></button>
                </div>
            </div>
        </div>
    </div>

        <!-- JavaScript para gerenciar o loader -->
        <script>
        // Executa quando o DOM estiver carregado
        document.addEventListener("DOMContentLoaded", function() {
            // Após todos os elementos da página estarem carregados
            window.onload = function() {
                // Definir um tempo para o loader desaparecer, mesmo que a página esteja carregada
                setTimeout(function() {
                    var loader = document.getElementById("loader");
                    loader.style.display = "none"; // Esconde o loader
                }, 2000); 
            }
        });
    </script>

    <!-- Scripts JavaScript -->
    <!-- Bibliotecas Externas (jQuery, Bootstrap e Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
