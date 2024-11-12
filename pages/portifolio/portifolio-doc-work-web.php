<!DOCTYPE html>
<html lang="pt-BR">
<header>
	<!-- Charset page -->
	<meta charset="UTF-8">

	<!-- Compatible IE-edge -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Viewport responsive page -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Font-awesome library -->
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap library -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- CSS document page -->
    <link rel="stylesheet" href="../../assets/scss/style-colors-portifolio-page.scss">


	<!-- Google fonts library -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&family=Playwrite+NO:wght@100..400&family=Reddit+Sans+Condensed:wght@200..900&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
</header>

<body>
    <div class="container">
        <h1 onclick="window.location.href='../../index.php';" id="logo-page">M&D</h1>
        <p onclick="window.location.href='../../index.php';" id="sub-logo-page">Matheus Diamanatino - Desenvolvedor Web</p>

    <div class="box-portifolio">
        <!-- Botões que abrem os modais -->
        <div class="btn-box-portifolio" onclick="openModal('modal1')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal2')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal3')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal4')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>

        <div class="btn-box-portifolio" onclick="openModal('modal5')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal6')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal7')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal8')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>

        <div class="btn-box-portifolio" onclick="openModal('modal5')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal6')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal7')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal8')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>

        <div class="btn-box-portifolio" onclick="openModal('modal6')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal7')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal8')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <div class="btn-box-portifolio" onclick="openModal('modal8')">Projeto Inventário de Estoque <i class="fa fa-folder-open"></i></div>
        <!-- Adicione mais botões conforme necessário -->
    </div>

    <!-- Estrutura dos Modais -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <!-- <p>Conteúdo do Modal 1</p> -->
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
                <video width="360" height="260" controls>
                    <source src="../../assets/videos/project-view-1.mp4" type="video/mp4">
                    Seu navegador não suporta a reprodução de vídeos.
                </video>
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
</body>
</html>