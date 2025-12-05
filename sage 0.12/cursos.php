<script>
	function Menu(){
		let menu = document.getElementById('menu_vert');
		if(menu.style.display === 'none'){
			menu.style.display='block';
		}else {
			menu.style.display='none';
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
		document.addEventListener('click', function(event) {
			let menu = document.getElementById('menu_vert');
			let botao = document.querySelector('.botao');
			
			if (!menu.contains(event.target) && !botao.contains(event.target)) {
				menu.style.display = 'none';
			}
		});
	</script>

<script>
	function Menu(){
		let menu = document.getElementById('menu_vert');
		if(menu.style.display === 'none'){
			menu.style.display='block';
		}else {
			menu.style.display='none';
		}
	}
</script>
<!DOCTYPE HTML>
<html lang='pt-br'>

<head>
	<meta charset='utf-8'>
	<link rel='stylesheet' href='css/style.css'>
	<title> Gerenciamento de Cursos </title>
	<link rel="icon" href="img/icone.png"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

	<header>
		<nav class='barra_superior'>
			<div class='imagens_menu'>
				<div class='menu_flutuante'>
						
					<button class="botao" onclick="Menu()"> <img src='img/menu.png' alt='menu_flutuante' width='50px' height="35px"> </button>
					<ul class="menu_vertical" id="menu_vert">
						<br><li><a href='professores.php'> <img src="img/professores_b.png" width='32px' class='icons'> Professores </a></li>
						<li><a href='index.html'><img src="img/alunos_b.png" width='32px' class='icons'> Alunos </a></li>
						<li><a href='turmas.php'><img src="img/turmas_b.png" width='32px' class='icons'> Turmas </a></li>
						<li><a href='trilhas.php'><img src="img/trilhas_b.png" width='32px' class='icons'> Trilhas </a></li>
						<li><a href='cursos.php'><img src="img/cursos_l.png" width='32px' class='icons'> Cursos </a></li><br>
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
			<h1>Cursos</h1>
		</div>
		
		
		<div class='container'>
		<br><br>
			<table class='tb_resultados'>
				<tr class='tb_titulo2'>
					<th>Cursos:</th>
				</tr>
				<tr class='tb_parte_laranja'>
					<td></td>
				</tr>
				
				<!-- Professor 1 -->
				<tr class='professor_row' onclick="toggleDetalhes(1)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Desenvolvimento de Competências Profissionais, Emocionais e Tecnológicas</span>
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
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">24 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(2)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Eletrônica - Analógica e Digital</span>
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
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">30 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(3)" >
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Robótica - Lego Zoom</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta3"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes3">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">30 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(4)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Introdução a Inovação e Criatividade</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta4"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes4">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">24 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(5)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Informática Básica</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta5"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes5">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">30 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(6)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Noções de Rotinas Administrativas</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta6"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes6">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">16 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(7)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Mecânica Industrial</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta7"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes7">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">30 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(8)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Instalações Elétricas</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta8"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes8">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">30 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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

				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(9)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Princípios da Automação Industrial</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta9"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes9">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">28 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(10)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Noções em Programação de Arduino</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta10"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes10">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">28 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(11)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Relacionamento Interpessoal</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta11"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes11">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">30 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(12)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Noções de Usinagem CNC</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta12"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes12">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">30 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(13)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Comunicação e Oratória</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta13"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes13">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">24 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(14)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Noções de Usinagem</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta14"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes14">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">28 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(15)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Noções de Manutenção de Máquinas</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta15"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes15">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">24 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(16)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Impressora 3D</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta16"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes16">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">24 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(17)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Modelagem em Impressora 3D</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta17"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes17">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">24 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(18)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Noções de Lean Manufacturing</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta18"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes18">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">30 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(19)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Planejamento e Controle da Produção</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta19"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes19">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">24 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(20)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Processos Logísticos</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta20"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes20">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">24 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(21)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Fundamentos de Pneumática e Hidráulica</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta21"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes21">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">30 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(22)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Noções de Elétrica Industrial</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta22"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes22">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">28 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(23)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Empreendedorismo</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta23"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes23">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">20 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
				
				<!-- --------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(24)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Noções Em programação de Arduino</span>
								</div>
							</div>
							<i class="fas fa-chevron-down seta" id="seta24"></i>
						</div>
					</td>
				</tr>
				<tr class='detalhes_row' id="detalhes24">
					<td>
						<div class="detalhes_content">
							<div class="detalhes_grid">
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor">28 Horas</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Professor responsável</div>
									<div class="detalhe_valor">Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Trilhas onde está presente:</div>
									<div class="detalhe_valor">Informações</div>
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
            <br>
			
			
            
		
			
		</div>