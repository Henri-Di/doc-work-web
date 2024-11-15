<!DOCTYPE html>
<html lang="pt-BR">
    <!-- Início do cabeçalho do documento -->
    <header>
        <link rel="icon" href="../../assets/images/icon.png" type="image/png">
        <title>M&D - Desenvolvedor</title>
        <!-- Definindo a codificação de caracteres como UTF-8 -->
        <meta charset="UTF-8">

        <!-- Configuração para garantir compatibilidade com o Internet Explorer em sua versão mais recente -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Configuração para que o layout seja responsivo em dispositivos móveis -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Link para a biblioteca de ícones Font Awesome versão 4.7.0 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Link para o CSS do Bootstrap versão 3.4.1 para estilização e design responsivo -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- Link para o documento CSS personalizado da página -->
        <link rel="stylesheet" href="../../assets/css/style-colors-desenvolvedor-page.css">

        <!-- Conexões antecipadas com o Google Fonts para otimizar o carregamento das fontes -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Link para fontes personalizadas a serem utilizadas na página -->
        <link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&family=Playwrite+NO:wght@100..400&family=Reddit+Sans+Condensed:wght@200..900&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">

        <!-- CSS para o elemento de carregamento (Loader) -->
        <style>
            /* Estilo geral do loader */
            #loader {
                position: fixed; /* Posicionamento fixo para o loader ocupar a tela inteira */
                left: 0;
                top: 0;
                width: 100%; /* Largura completa */
                height: 100%; /* Altura completa */
                z-index: 9999; /* Garantir que o loader esteja acima de todos os outros elementos */
                background: #fff; /* Fundo branco */
                display: flex; /* Usando Flexbox para centralizar o conteúdo */
                align-items: center; /* Centralizar verticalmente */
                justify-content: center; /* Centralizar horizontalmente */
            }
            /* Estilo do spinner (animação de carregamento) */
            .loader-spinner {
                border: 16px solid #f3f3f3; /* Borda externa cinza claro */
                border-top: 12px solid; /* Borda superior colorida para efeito de arco-íris */
                border-radius: 50%; /* Forma circular */
                width: 80px; /* Largura do spinner */
                height: 80px; /* Altura do spinner */
                animation: spin 2s linear infinite, rainbow 4s linear infinite; /* Animações de rotação e mudança de cor */
            }

            /* Animação para o movimento de rotação do spinner */
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            /* Animação para o efeito arco-íris */
            @keyframes rainbow {
                0% { border-top-color: #ff0000; }    /* Cor inicial: vermelho */
                16% { border-top-color: #ff7f00; }   /* Cor: laranja */
                33% { border-top-color: #ffff00; }   /* Cor: amarelo */
                50% { border-top-color: #00ff00; }   /* Cor: verde */
                66% { border-top-color: #0000ff; }   /* Cor: azul */
                83% { border-top-color: #4b0082; }   /* Cor: anil */
                100% { border-top-color: #8b00ff; }  /* Cor final: violeta */
            }
        </style>
    </header>

    <!-- Início do corpo do documento -->
    <body>
		<!-- Loader: Elemento de carregamento exibido até que a página esteja totalmente carregada -->
		<div id="loader">
    	<div class="loader-spinner"></div>
    	</div>
		
        <!-- Contêiner principal da página -->
        <div class="container">
            <!-- Título com um link de retorno à página inicial -->
            <h1 onclick="window.location.href='../../index.php';" id="logo-page">M&D</h1>
            
            <!-- Subtítulo com link de retorno à página inicial -->
            <p onclick="window.location.href='../../index.php';" id="sub-logo-page">Matheus Diamantino - Desenvolvedor Web</p>
            <br>

            <!-- Início da linha para a seção sobre o desenvolvedor -->
            <div class="row">
                <!-- Subtítulo da seção sobre o desenvolvedor -->
                <h4>Sobre o Desenvolvedor <i id="sub-icon-title" class="fa fa-code"></i></h4>

                <!-- Parágrafo com uma breve descrição profissional -->
                <p>
                    Meu nome é Matheus Diamantino, sou desenvolvedor web especializado em criar soluções digitais robustas e eficazes 
                    para empresas que buscam fortalecer sua gestão e expandir sua presença online. Residente em Brasília, DF, tenho um perfil profissional que une dedicação e uma busca constante por inovação 
                    e conhecimento. Minha experiência é orientada pela adoção das melhores práticas em desenvolvimento, desde a arquitetura até a entrega de aplicações funcionais e escaláveis.

                    <br>
                    <br>

                    Minha missão é oferecer mais do que simples desenvolvimento: é construir ferramentas personalizadas que realmente impactem os
                    negócios. Tenho paixão por transformar ideias em soluções digitais que não só atendem às demandas operacionais, mas que também 
                    agregam valor à marca e impulsionam o crescimento. Busco sempre entender profundamente as necessidades dos meus clientes, para entregar 
                    plataformas que consolidem sua atuação no mercado digital e ampliem suas oportunidades de visibilidade e engajamento.
                </p>
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

            <!-- Importação da biblioteca jQuery versão 3.5.1 -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <!-- Importação da biblioteca jQuery versão 3.7.1 -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

            <!-- Importação do Popper JS, necessário para alguns elementos do Bootstrap -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

            <!-- Link para a biblioteca Font Awesome -->
            <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

            <!-- Link para as bibliotecas do Bootstrap, versões 4.5.2 e 3.4.1 -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>
