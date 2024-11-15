<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="icon" href="../../assets/images/icon.png" type="image/png">
    <title>M&D - Portifólio</title>
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
    <!-- Link para um arquivo CSS próprio da página -->
    <link rel="stylesheet" href="../../assets/css/style-colors-portifolio-page.css">

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
            0% { border-top-color: #8c1aff; }    
            16% { border-top-color: #7300e6; }   
            33% { border-top-color: #ac00e6; }  
            50% { border-top-color: #9900cc; }  
            66% { border-top-color: #8600b3; }   
            83% { border-top-color: #4b0082; }   
            100% { border-top-color: #8b00ff; }  
        }
    </style>

</header>

<body>
    <!-- Loader: Elemento de carregamento exibido até que a página esteja totalmente carregada -->
    <div id="loader">
    <div class="loader-spinner"></div>
    </div>
    
    <div class="container">
        <h1 onclick="window.location.href='../../index.php';" id="logo-page">M&D</h1>
        <p onclick="window.location.href='../../index.php';" id="sub-logo-page">Matheus Diamantino - Desenvolvedor Web</p>

    <div class="box-portifolio">
        <!-- Botões que abrem os modais -->
        <div class="btn-box-portifolio" onclick="openModal('modal1')"> Projeto 1 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal2')"> Projeto 2 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal3')"> Projeto 3 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal3')"> Projeto 4 <i class="fa fa-folder-open"></i></div>
        
        <div class="btn-box-portifolio" onclick="openModal('modal1')"> Projeto 5 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal2')"> Projeto 6 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal3')"> Projeto 7 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal3')"> Projeto 8 <i class="fa fa-folder-open"></i></div>
        
        <div class="btn-box-portifolio" onclick="openModal('modal1')"> Projeto 9 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal2')"> Projeto 10 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal3')"> Projeto 11 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal3')"> Projeto 12 <i class="fa fa-folder-open"></i></div>

        <div class="btn-box-portifolio" onclick="openModal('modal1')"> Projeto 13 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal2')"> Projeto 14 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal3')"> Projeto 15 <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal3')"> Projeto 16 <i class="fa fa-folder-open"></i></div>

   
        <!-- Adicione mais botões conforme necessário -->
    </div>

    <!-- Estrutura dos Modais -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <!-- <p>Conteúdo do Modal 1</p> -->
            <h4>Projeto - Inventário de Material <i class="fa fa-cubes"></i></h4>
            
                <h5>Escopo</h5>
                
                <p>O sistema de gestão de estoque foi desenvolvido para atender às necessidades específicas de controle e monitoramento de inventário em dois datacenters da Caixa Econômica Federal, localizados no Distrito Federal, sob a responsabilidade do Departamento de Instalações. Esse sistema foi projetado para otimizar a operação de inventário em ambientes corporativos de grande porte, com alto nível de segurança e controle rigoroso de dados, visando garantir a integridade e disponibilidade das informações de estoque.
                <br><br>
                Entre as principais funcionalidades, o sistema oferece um controle avançado de usuários com diferentes níveis de acesso, assegurando que cada colaborador tenha permissões específicas de acordo com seu papel e responsabilidades. Esse controle hierárquico permite que apenas usuários autorizados possam realizar determinadas ações no sistema, como registrar entradas, saídas, reservas, transferências, devoluções e inutilizações de materiais. Além disso, todas as operações são auditadas e registradas em logs, proporcionando total rastreabilidade e segurança em cada etapa do processo.
                <br><br>
                Cada operação de transferência entre os datacenters é notificada em tempo real, permitindo que o Departamento de Instalações acompanhe as movimentações de forma precisa e ágil, garantindo que sempre haja estoque suficiente para atender às demandas. Esse sistema robusto foi desenvolvido com uma arquitetura escalável e de alta disponibilidade, compatível com dispositivos móveis e navegadores populares, facilitando o acesso e o gerenciamento remoto.
                <br><br>
                Com uma interface intuitiva e de fácil navegação, o sistema atende ao alto padrão de confiabilidade exigido pelo ambiente corporativo da Caixa Econômica Federal. Ele apoia o Departamento de Instalações na gestão eficiente do inventário em múltiplos locais, minimizando riscos de inconsistência e garantindo um controle efetivo de materiais críticos para a operação dos datacenters.   
                </p>
                
                <h5>Tecnologias</h5>

                <p>
                    <ul>
                        <li>HTML</li>
                        <li>SCSS</li>
                        <li>BOOTSTRAP</li>
                        <li>PHP</li>
                        <li>JAVASCRIPT</li>
                        <li>MYSQLI</li>
                    </ul>
                </p>

                <h5>Aplicação Web</h5>
                
                <div class="container-video">
                <video width="460" height="360" controls>
                    <source src="../../assets/videos/project-view-1.mp4" type="video/mp4">
                    Seu navegador não suporta a reprodução de vídeos.
                </video>

                <h5>Repositorio GitHub</h5>
                <p>Link repositorio:</p>
                </div>
        </div>
    </div>



    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <!-- <p>Conteúdo do Modal 2</p> -->
            <h4>Projeto - Inventário de Material <i class="fa fa-cubes"></i></h4>
            
            <h5>Escopo</h5>
            
            <p>O sistema de gestão de estoque foi projetado para controlar eficientemente as operações de inventário em ambientes corporativos, com funcionalidades de autenticação, autorização e auditoria para garantir segurança e rastreabilidade.
            Ele permite o registro detalhado de entradas, saídas, reservas, transferências, devoluções e inutilizações de materiais, assegurando que as quantidades disponíveis sejam rigorosamente monitoradas para evitar inconsistências no estoque.<br><br>
            Usuários têm acesso controlado por permissões, e todas as ações são registradas em logs de auditoria. Transferências entre datacenters são notificadas em tempo real, e o sistema valida cada operação para garantir que o estoque disponível
            seja suficiente. Com suporte a dispositivos móveis e navegadores populares, o sistema oferece escalabilidade, alta disponibilidade e uma interface intuitiva que facilita a navegação. 
            </p>
            
            <h5>Tecnologias</h5>

            <p>
                <ul>
                    <li>HTML</li>
                    <li>SCSS</li>
                    <li>BOOTSTRAP</li>
                    <li>PHP</li>
                    <li>JAVASCRIPT</li>
                    <li>MYSQLI</li>
                </ul>
            </p>

            <h5>Aplicação Web</h5>
            
            <div class="container-video">
            <video width="370" height="270" controls>
                <source src="../../assets/videos/project-view-1.mp4" type="video/mp4">
                Seu navegador não suporta a reprodução de vídeos.
            </video>

            <h5>Repositorio GitHub</h5>
            <p>Link repositorio:</p>
            </div>
        </div>
    </div>
    


    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3')">&times;</span>
           <!-- <p>Conteúdo do Modal 3</p> -->
            <h4>Projeto - Inventário de Material <i class="fa fa-cubes"></i></h4>
            
            <h5>Escopo</h5>
            
            <p>O sistema de gestão de estoque foi projetado para controlar eficientemente as operações de inventário em ambientes corporativos, com funcionalidades de autenticação, autorização e auditoria para garantir segurança e rastreabilidade.
            Ele permite o registro detalhado de entradas, saídas, reservas, transferências, devoluções e inutilizações de materiais, assegurando que as quantidades disponíveis sejam rigorosamente monitoradas para evitar inconsistências no estoque.<br><br>
            Usuários têm acesso controlado por permissões, e todas as ações são registradas em logs de auditoria. Transferências entre datacenters são notificadas em tempo real, e o sistema valida cada operação para garantir que o estoque disponível
            seja suficiente. Com suporte a dispositivos móveis e navegadores populares, o sistema oferece escalabilidade, alta disponibilidade e uma interface intuitiva que facilita a navegação. 
            </p>
            
            <h5>Tecnologias</h5>

            <p>
                <ul>
                    <li>HTML</li>
                    <li>SCSS</li>
                    <li>BOOTSTRAP</li>
                    <li>PHP</li>
                    <li>JAVASCRIPT</li>
                    <li>MYSQLI</li>
                </ul>
            </p>

            <h5>Aplicação Web</h5>
            
            <div class="container-video">
            <video width="370" height="270" controls>
                <source src="../../assets/videos/project-view-1.mp4" type="video/mp4">
                Seu navegador não suporta a reprodução de vídeos.
            </video>

            <h5>Repositorio GitHub</h5>
            <p>Link repositorio:</p>
            </div>
        </div>
    </div>

    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal4')">&times;</span>
            <p>Conteúdo do Modal 4</p>
        </div>
    </div>

    <div id="modal5" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal5')">&times;</span>
            <p>Conteúdo do Modal 5</p>
        </div>
    </div>

    <div id="modal6" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal6')">&times;</span>
            <p>Conteúdo do Modal 6</p>
        </div>
    </div>

    <div id="modal7" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal7')">&times;</span>
            <p>Conteúdo do Modal 7</p>
        </div>
    </div>

    <div id="modal8" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal8')">&times;</span>
            <p>Conteúdo do Modal 8</p>
        </div>
    </div>
    
    </div>

    <script>
        // Função para abrir o modal
        function openModal(modalId) {
        document.getElementById(modalId).style.display = "block";
        }

        // Função para fechar o modal
        function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
        }

        // Fecha o modal ao clicar fora dele
        window.onclick = function(event) {
        const modals = document.getElementsByClassName("modal");
        for (let modal of modals) {
        if (event.target === modal) {
            modal.style.display = "none";
                }
            }
        };
    </script>

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

    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Font-awesome library -->
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>