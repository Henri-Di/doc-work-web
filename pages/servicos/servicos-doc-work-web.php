<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="icon" href="../../assets/images/icon.png" type="image/png">
    <title>M&D - Serviços</title>
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
    <link rel="stylesheet" href="../../assets/css/style-colors-servicos-page.css">

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
        <br>

        <!-- Seção de Solicitação de Orçamento -->
        <div class="row">
            <!-- Título da Seção -->
            <h3>Solicitar Orçamento <i class="fa fa-handshake-o"></i></h3>
            <h4>Dados da Empresa <i id="sub-icon-title" class="fa fa-institution"></i></h4>

            <!-- Formulário para Solicitação de Orçamento -->
            <form method="POST" action="../servicos/processa-orcamento-doc-work-web.php">
                <!-- Tabela de Dados da Empresa -->
                <table class="table-form-servico-page">
                    <tr class="tr-table-form-servico-page">
                        <td class="td-table-form-servico-page">
                            <label>CNPJ - CPF</label>
                            <input type="text" name="id-empresa" id="input-form-servico-page" placeholder="CNPJ - CPF" required/>
                        </td>

                        <td class="td-table-form-servico-page">
                            <label>Nome Fantasia</label>
                            <input type="text" name="nome-empresa" id="input-form-servico-page" placeholder="Nome Fantasia" required/>
                        </td>
                    </tr>

                    <tr class="tr-table-form-servico-page">
                        <td class="td-table-form-servico-page">
                            <label>Segmento</label>
                            <select name="segmento" id="input-form-servico-page" required>
                                <option value="" disabled selected>Selecione um segmento</option>
                                <option value="Agronegócio">Agronegócio</option>
                                <option value="Alimentação e Bebidas">Alimentação e Bebidas</option>
                                <option value="Automotivo">Automotivo</option>
                                <option value="Comunicação e Marketing">Comunicação e Marketing</option>
                                <option value="Construção Civil e Imobiliário">Construção Civil e Imobiliário</option>
                                <option value="Educação e Treinamento">Educação e Treinamento</option>
                                <option value="Energia e Recursos Naturais">Energia e Recursos Naturais</option>
                                <option value="Entretenimento e Cultura">Entretenimento e Cultura</option>
                                <option value="Indústria e Manufatura">Indústria e Manufatura</option>
                                <option value="Moda e Vestuário">Moda e Vestuário</option>
                                <option value="Saúde e Bem-Estar">Saúde e Bem-Estar</option>
                                <option value="Serviços Financeiros">Serviços Financeiros</option>
                                <option value="Transporte e Logística">Transporte e Logística</option>
                                <option value="Turismo e Hotelaria">Turismo e Hotelaria</option>
                                <option value="Varejo e Comércio">Varejo e Comércio</option>
                            </select>
                        </td>

                        <td class="td-table-form-servico-page">
                            <label>Endereço</label>
                            <input type="text" name="endereco" id="input-form-servico-page" placeholder="Endereço" required/>
                        </td>
                    </tr>

                    <tr class="tr-table-form-servico-page">
                        <td class="td-table-form-servico-page">
                            <label>Estado</label>
                            <input type="text" name="estado" id="input-form-servico-page" placeholder="Estado" required/>
                        </td>

                        <td class="td-table-form-servico-page">
                            <label>Cidade</label>
                            <input type="text" name="cidade" id="input-form-servico-page" placeholder="Cidade" required/>
                        </td>
                    </tr>

                    <tr class="tr-table-form-servico-page">
                        <td class="td-table-form-servico-page">
                            <label>Telefone 1</label>
                            <input type="text" name="telefone1" id="input-form-servico-page" placeholder="Telefone 1" required/>
                        </td>

                        <td class="td-table-form-servico-page">
                            <label>Telefone 2</label>
                            <input type="text" name="telefone2" id="input-form-servico-page" placeholder="Telefone 2"/>
                        </td>
                    </tr>

                    <tr class="tr-table-form-servico-page">
                        <td class="td-table-form-servico-page">
                            <label>E-mail</label>
                            <input type="email" name="email" id="input-form-servico-page" placeholder="E-mail" required/>
                        </td>

                        <td class="td-table-form-servico-page">
                            <label>Rede Social</label>
                            <input type="text" name="rede-social" id="input-form-servico-page" placeholder="Rede Social"/>
                        </td>
                    </tr>
                </table>

                <!-- Tabela de Detalhes da Aplicação Web -->
                <h4>Dados da Aplicação Web <i id="sub-icon-title" class="fa fa-desktop"></i></h4>
                <table class="table-form-servico-page">
                    <tr class="tr-table-form-servico-page">
                        <td class="td-table-form-servico-page">
                            <label>Detalhar Projeto</label>
                            <textarea name="detalhes-projeto" id="textarea-detalhes-projeto" placeholder="Descreva em detalhes a sua ideia sobre a aplicação web." required></textarea>
                        </td>
                    </tr>
                </table>

                <!-- Botões de Ação do Formulário -->
                <button type="submit" id="btn-form-servico-page">Solicitar Orçamento</button>
                <button type="reset" id="btn-form-servico-page">Cancelar</button>
            </form>
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

</body>

</html>
