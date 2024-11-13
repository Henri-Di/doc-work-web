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
	<p onclick="window.location.href='../../index.php';" id="sub-logo-page">Matheus Diamantino - Desenvolvedor Web</p>
        <br>
        <div class="row">
        <h3>Solicitar Orçamento <i class="fa fa-handshake-o"></i></h3>

            <h4>Dados Empresa <i id="sub-icon-title" class="fa fa-institution"></i></h4>

        <form>
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
                        <select>
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
                        <input type="text" id="input-form-servico-page" placeholder="Endenreço" required/>
                    </td>
                    

                </tr>

                <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>Estado</label>
                        <input type="text" id="input-form-servico-page" placeholder="Estado" required/>
                    </td>

                    <td class="td-table-form-servico-page">
                        <label>Cidade</label>
                        <input type="text" id="input-form-servico-page" placeholder="Cidade" required/>
                    </td>

                    </tr>

                <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>Telefone 1</label>
                        <input type="text" id="input-form-servico-page" placeholder="Telefone 1" required/>
                    </td>

                    <td class="td-table-form-servico-page">
                        <label>Telefone 2</label>
                        <input type="text" id="input-form-servico-page" placeholder="Telefone 2" required/>
                    </td>

                    </tr>

                <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>E-mail</label>
                        <input type="text" id="input-form-servico-page" placeholder="E-mail" required/>
                    </td>

                    <td class="td-table-form-servico-page">
                        <label>Rede Social</label>
                        <input type="text" id="input-form-servico-page" placeholder="Rede social" required/>
                    </td>
                </tr>
            </table>

            <h4>Dados Aplicação Web <i id="sub-icon-title" class="fa fa-desktop"></i></h4>

            <table class="table-form-servico-page">
                <tr class="tr-table-form-servico-page">
                    <td class="td-table-form-servico-page">
                        <label>Detalhar Projeto</label>
                        <textarea name="" id="" placeholder="Descreva em detalhes a sua ideia sobre a aplicação web."></textarea>
                    </td>
                </tr>
            </table>
            <button type="submit" id="btn-form-servico-page">Solicitar Orçamento</button>
            <button type="reset" id="btn-form-servico-page">Cancelar</button>
        </form>
		</div>
</div>
</body>
</html>