<script>
	function Menu() {
		let menu = document.getElementById('menu_vert');
		if (menu.style.display === 'none') {
			menu.style.display = 'block';
		} else {
			menu.style.display = 'none';
		}
	}

	function toggleDetalhes(id) {
		let detalhes = document.getElementById('detalhes' + id);
		let seta = document.getElementById('seta' + id);

		if (detalhes.classList.contains('mostrar')) {
			detalhes.classList.remove('mostrar');
			seta.classList.remove('ativa');
		} else {
			detalhes.classList.add('mostrar');
			seta.classList.add('ativa');
		}
	}

	// Fechar menu ao clicar fora
	document.addEventListener('click', function (event) {
		let menu = document.getElementById('menu_vert');
		let botao = document.querySelector('.botao');

		if (!menu.contains(event.target) && !botao.contains(event.target)) {
			menu.style.display = 'none';
		}
	});
</script>

<script>
	function Menu() {
		let menu = document.getElementById('menu_vert');
		if (menu.style.display === 'none') {
			menu.style.display = 'block';
		} else {
			menu.style.display = 'none';
		}
	}
</script>
<!DOCTYPE HTML>
<html lang='pt-br'>

<head>
	<meta charset='utf-8'>
	<link rel='stylesheet' href='css/style.css'>
	<title>Alunos</title>
	<link rel="icon" href="img/icone.png" />
</head>

<body>

	<header>
		<nav class='barra_superior'>
			<div class='imagens_menu'>
				<div class='menu_flutuante'>

					<button class="botao" onclick="Menu()"> <img src='img/menu.png' alt='menu_flutuante' width='50px'
							height="35px"> </button>
					<ul class="menu_vertical" id="menu_vert">
						<br>
						<li><a href='professores.php'> <img src="img/professores_b.png" width='32px' class='icons'>
								Professores </a></li>
						<li><a href='index.html'><img src="img/alunos_l.png" width='32px' class='icons'> Alunos </a>
						</li>
						<li><a href='turmas.php'><img src="img/turmas_b.png" width='32px' class='icons'> Turmas </a>
						</li>
						<li><a href='trilhas.php'><img src="img/trilhas_b.png" width='32px' class='icons'> Trilhas </a>
						</li>
						<li><a href='cursos.php'><img src="img/cursos_b.png" width='32px' class='icons'> Cursos </a>
						</li><br>
					</ul>
				</div>
				<div class='logo_senai'>
					<img src='img/SENAI.png' alt='logo_senai' width='200px'>
				</div>
				<div class='nome_projeto'>
					<h2>Gerenciamento de Cursos SENAI Garibaldi</h2>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<br><br><br><br>

		<div class='titulo_principal'>
			<h1>Alunos 8° Ano</h1>
		</div>

		<div class='container'>
			<br><br>
			<div class='pesquisa'>
				<!-- <img src='...' alt='lupa'> -->
				<form method='post'>
					<input type='text' name='pesquisa' placeholder='pesquisar aluno' required>
					<button type="submit"><i class="fa fa-search"></i></button>
					<link rel="stylesheet"
						href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
						class='botao_pesquisar'>

				</form>
			</div>
			<br><br>
			<table class='tb_resultados'>
				<tr class='tb_titulo'>
					<th>Resultados:</th>
				</tr>
				<tr class='tb_parte_laranja' style='height: 15px;'>
					<td></td>
				</tr>
				<tr class='professor_row' onclick="toggleDetalhes(1)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Nome do Aluno</span>
									<span class="professor_curso">Série Escolar</span>

								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta1"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes1">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Informações Pessoais:</div>
									<div class="detalhe_valor">
										<b>Nome:</b> <br>
										<b>Data de Nascimento:</b> <br>
										<b>Sexo:</b> <br>
										<b>Estado Civil:</b> <br>
										<b>Cor/Raça:</b> <br>
										<b>CPF:</b> <br>
										<b>Nacionalidade:</b> <br>
										<b>Estado Natal: </b><br>
										<b>Naturalidade:</b> <br>
										<b>E-mail: </b><br>
										<b>Telefone: </b><br>
									</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Endereço:</div>
									<div class="detalhe_valor">
										<b>CEP:</b> <br>
										<b>País: </b><br>
										<b>Estado:</b> <br>
										<b>Cidade:</b> <br>
										<b>Rua:</b> <br>
										<b>Número:</b> <br>
									</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Informações Escolares: </div>
									<div class="detalhe_valor">
										<b>Nome da Escola:</b> <br>
										<b>Grau de Instrução: </b><br>
										<b>Série Escolar:</b> <br>
										<b>Situação Ocupacional:</b> <br>
										<b>Tipo de Escola:</b> <br>
									</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Informações do Responsável:</div>
									<div class="detalhe_valor">
										<b>Nome:</b> <br>
										<b>Data de Nascimento:</b> <br>
										<b>Sexo:</b> <br>
										<b>E-mail:</b> <br>
										<b>Telefone:</b> <br>
										<b>CPF: </b><br>
										<b>Estado Civil </b><br>
									</div>
								</div>

							</div>
							<div class="acoes">
								<button class="btn_acao btn_editar">
									<i class="fas fa-edit"></i> Editar
								</button>
								<button class="btn_acao btn_excluir">
									<i class="fas fa-trash"></i> Excluir
								</button>
							</div>
						</div>
					</td>
				</tr>

			</table>


			<table class='dados_alunos'>

				<th>
					<div class='titulo_aluno'>
						<h2> Alunos: </h2>
					</div>
				</th>
				<tr class='tb_parte_laranja' style='height: 15px;'>
					<td></td>
				</tr>
				<tr class='professor_row' onclick="toggleDetalhes(2)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Nome do Aluno</span>
									<span class="professor_curso">Série Escolar</span>

								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta2"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes2">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Informações Pessoais:</div>
									<div class="detalhe_valor">
										<b>Nome:</b> <br>
										<b>Data de Nascimento:</b> <br>
										<b>Sexo:</b> <br>
										<b>Estado Civil:</b> <br>
										<b>Cor/Raça:</b> <br>
										<b>CPF:</b> <br>
										<b>Nacionalidade:</b> <br>
										<b>Estado Natal: </b><br>
										<b>Naturalidade:</b> <br>
										<b>E-mail: </b><br>
										<b>Telefone: </b><br>
									</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Endereço:</div>
									<div class="detalhe_valor">
										<b>CEP:</b> <br>
										<b>País: </b><br>
										<b>Estado:</b> <br>
										<b>Cidade:</b> <br>
										<b>Rua:</b> <br>
										<b>Número:</b> <br>
									</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Informações Escolares: </div>
									<div class="detalhe_valor">
										<b>Nome da Escola:</b> <br>
										<b>Grau de Instrução: </b><br>
										<b>Série Escolar:</b> <br>
										<b>Situação Ocupacional:</b> <br>
										<b>Tipo de Escola:</b> <br>
									</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Informações do Responsável:</div>
									<div class="detalhe_valor">
										<b>Nome:</b> <br>
										<b>Data de Nascimento:</b> <br>
										<b>Sexo:</b> <br>
										<b>E-mail:</b> <br>
										<b>Telefone:</b> <br>
										<b>CPF: </b><br>
										<b>Estado Civil </b><br>
									</div>
								</div>

							</div>
							<div class="acoes">
								<button class="btn_acao btn_editar">
									<i class="fas fa-edit"></i> Editar
								</button>
								<button class="btn_acao btn_excluir">
									<i class="fas fa-trash"></i> Excluir
								</button>
							</div>
						</div>
					</td>
				</tr>


			</table>


		</div>
		<br><br><br><br><br><br>

	</main>

</body>

</html>