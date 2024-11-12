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
    <link rel="stylesheet" href="../../assets/scss/style-colors-servicos-page.scss">


	<!-- Google fonts library -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playwrite+IS:wght@100..400&family=Playwrite+NO:wght@100..400&family=Reddit+Sans+Condensed:wght@200..900&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
</header>
<body>
<div class="container">
	<h1 onclick="window.location.href='../../index.php';" id="logo-page">M&D</h1>
	<p onclick="window.location.href='../../index.php';" id="sub-logo-page">Matheus Diamanatino - Desenvolvedor Web</p>
        <br>
        <div class="row">
        <h3>Solicitar Orçamento <i class="fa fa-handshake-o"></i></h3>

            <h4>Dados Empresa</h4>

            <table class="table-form-servico-page">
                <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>CNPJ - CPF</label>
                        <input type="text" id="input-form-servico-page" required/>
                    </td>

                    <td class="td-table-form-servico-page">
                        <label>Nome Fantasia</label>
                        <input type="text" id="input-form-servico-page" required/>
                    </td>
                </tr>

                <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>Segmento</label>
                        <select>
                            <option>Alimentação</option>
                        </select>
                    </td>
                    
                    <td class="td-table-form-servico-page">
                        <label>Endereço</label>
                        <input type="text" id="input-form-servico-page" required/>
                    </td>
                    

                </tr>

                <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>Estado</label>
                        <select>
                            <option value="">DF</option>
                            <option value="">DF</option>
                            <option value="">DF</option>
                            <option value="">DF</option>
                            <option value="">DF</option>
                            <option value="">DF</option>
                        </select>
                    </td>

                    <td class="td-table-form-servico-page">
                        <label>Cidade</label>
                        <select>
                            <option value="">Brasília</option>
                            <option value="">Brasília</option>
                            <option value="">Brasília</option>
                            <option value="">Brasília</option>
                            <option value="">Brasília</option>
                            <option value="">Brasília</option>
                        </select>
                    </td>

                    </tr>

                <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>Telefone 1</label>
                        <input type="text" id="input-form-servico-page" required/>
                    </td>

                    <td class="td-table-form-servico-page">
                        <label>Telefone 2</label>
                        <input type="text" id="input-form-servico-page" required/>
                    </td>

                    </tr>

                <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>E-mail</label>
                        <input type="text" id="input-form-servico-page" required/>
                    </td>

                    <td class="td-table-form-servico-page">
                        <label>Rede Social</label>
                        <input type="text" id="input-form-servico-page" required/>
                    </td>
                </tr>
            </table>

            <h4>Dados Aplicação Web</h4>

            <table class="table-form-servico-page">
                <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>Detalhar Projeto</label>
                        <textarea name="" id="" placeholder="Descreva em detalhes a sua ideia sobre a aplicação web."></textarea>
                    </td>
                </tr>
            </table>

            <table class="table-form-servico-page">

            <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>Já possui alguma aplicação web ativa ?</label>
                        <select>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </selec>
                    </td>

                    <td class="td-table-form-servico-page">
                        <label>Se sim, compartilhe o link da aplicação web</label>
                        <input type="text" id="input-form-servico-page" required/>
                    </td>
                </tr>

            <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>É o primeiro projeto de aplicação web ?</label>
                        <select>
                            <option value="Sim">Sim</option>
                            <option value="Não">Não</option>
                        </selec>
                    </td>

                    <td class="td-table-form-servico-page">
                        <label>Qual nivel de prioridade para o projeto estar ativo ?</label>
                        <select>
                            <option value="">Alto</option>
                            <option value="">Médio</option>
                            <option value="">Baixo</option>
                        </selec>
                    </td>
                </tr>
            </table>
		</div>
</div>
</body>
</html>