<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="icon" href="../../assets/images/icon.png" type="image/png">
    <title>M&D - Tecnologias</title>
    <!-- Meta Tags: Informações básicas da página -->
    <!-- Define o conjunto de caracteres da página para suporte a caracteres especiais -->
    <meta charset="UTF-8">
    <!-- Define a compatibilidade com navegadores mais antigos como Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Define o viewport para garantir a responsividade em diferentes dispositivos -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bibliotecas de Estilo e Fontes Externas -->
    <!-- Font Awesome: Biblioteca de ícones para melhorar a interface -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap: Framework CSS para facilitar a criação de layouts responsivos -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Google Fonts: Importa fontes personalizadas da biblioteca Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&family=Playwrite+NO:wght@100..400&family=Reddit+Sans+Condensed:wght@200..900&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">

    <!-- Estilos Personalizados -->
    <!-- Link para um arquivo CSS personalizado para estilizar a página -->
    <link rel="stylesheet" href="../../assets/css/style-colors-tecnologia-page.css">

    <!-- Estilo do Loader (CSS) -->
    <style>
        /* Loader CSS: Define o estilo do elemento de carregamento */
        #loader {
            position: fixed; /* Fixa o loader na tela */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999; /* Coloca o loader à frente dos outros elementos */
            background: #fff; /* Fundo branco */
            display: flex; /* Usa Flexbox para centralizar o conteúdo */
            align-items: center; /* Centraliza verticalmente */
            justify-content: center; /* Centraliza horizontalmente */
        }
        .loader-spinner {
            border: 16px solid #f3f3f3; /* Borda cinza para dar contraste */
            border-top: 12px solid; /* Borda superior para a animação */
            border-radius: 50%; /* Forma circular */
            width: 80px; /* Largura do loader */
            height: 80px; /* Altura do loader */
            animation: spin 2s linear infinite, rainbow 4s linear infinite; /* Animações: rotação e mudança de cor */
        }

        /* Animação de rotação do loader */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Animação para criar um efeito de arco-íris no loader */
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
</head>

<body>
    <!-- Loader: Elemento de carregamento exibido até que a página esteja totalmente carregada -->
    <div id="loader">
        <div class="loader-spinner"></div>
    </div>

    <!-- Conteúdo Principal da Página -->
    <div class="container">
        <!-- Logo e Sub-logo da Página -->
        <h1 onclick="window.location.href='../../index.php';" id="logo-page">M&D</h1>
        <p onclick="window.location.href='../../index.php';" id="sub-logo-page">Matheus Diamantino - Desenvolvedor Web</p>

        <!-- Seção de Tecnologias Utilizadas -->
        <div class="row">
            <!-- Caixa de Informação: HTML5 -->
            <div class="col" id="box-info-page">
                <h4>HTML5</h4>
                <img alt="Logo HTML5" id="image-tecnologias-page" src="../../assets/images/html-5.png" />
            </div>

            <!-- Caixa de Informação: CSS3 -->
            <div class="col" id="box-info-page">
                <h4>CSS3</h4>
                <img alt="Logo CSS3" id="image-tecnologias-page" src="../../assets/images/css-3.png" />
            </div>

            <!-- Caixa de Informação: SCSS -->
            <div class="col" id="box-info-page">
                <h4>SCSS</h4>
                <img alt="Logo SCSS" id="image-tecnologias-page" src="../../assets/images/scss.png" />
            </div>

            <!-- Caixa de Informação: Bootstrap -->
            <div class="col" id="box-info-page">
                <h4>Bootstrap</h4>
                <img alt="Logo Bootstrap" id="image-tecnologias-page" src="../../assets/images/bootstrap.png" />
            </div>

            <!-- Caixa de Informação: JavaScript -->
            <div class="col" id="box-info-page">
                <h4>JavaScript</h4>
                <img alt="Logo JavaScript" id="image-tecnologias-page" src="../../assets/images/js.png" />
            </div>
        </div>

        <!-- Seção de Tecnologias de Back-end e Banco de Dados -->
        <div class="row">
            <!-- Caixa de Informação: PHP -->
            <div class="col" id="box-info-page">
                <h4>PHP</h4>
                <img alt="Logo PHP" id="image-tecnologias-page" src="../../assets/images/php.png" />
            </div>

            <!-- Caixa de Informação: MySQL -->
            <div class="col" id="box-info-page">
                <h4>MySQL</h4>
                <img alt="Logo MySQL" id="image-tecnologias-page" src="../../assets/images/mysql.png" />
            </div>

            <!-- Caixa de Informação: PostgreSQL -->
            <div class="col" id="box-info-page">
                <h4>PostgreSQL</h4>
                <img alt="Logo PostgreSQL" id="image-tecnologias-page" src="../../assets/images/postgresql.png" />
            </div>

            <!-- Caixa de Informação: SQL Server -->
            <div class="col" id="box-info-page">
                <h4>SQL Server</h4>
                <img alt="Logo SQL Server" id="image-tecnologias-page" src="../../assets/images/servidor-sql.png" />
            </div>

            <!-- Caixa de Informação: GitHub -->
            <div class="col" id="box-info-page">
                <h4>GitHub</h4>
                <img alt="Logo GitHub" id="image-tecnologias-page" src="../../assets/images/github.png" />
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
                }, 500); 
            }
        });
    </script>

    <!-- Bibliotecas JavaScript Externas -->
    <!-- jQuery: Biblioteca JavaScript que facilita manipulações de DOM e eventos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper.js: Biblioteca necessária para funcionalidades do Bootstrap (como dropdowns) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Bootstrap JS: Biblioteca JavaScript do Bootstrap para interatividade e componentes -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
