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
	
<!DOCTYPE HTML>
<html lang='pt-br'>

<head>
	<meta charset='utf-8'>
	<link rel='stylesheet' href='css/style.css'>
	<title>Gerenciamento de Cursos</title>
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
						<li><a href='trilhas.php'><img src="img/trilhas_l.png" width='32px' class='icons'> Trilhas </a></li>
						<li><a href='cursos.php'><img src="img/cursos_b.png" width='32px' class='icons'> Cursos </a></li><br>
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
			<h1>Trilhas</h1>
		</div>

		<div class='container'>
			
				<a href='cadastrar_trilha.php' class="botao_cadastrar_aluno"><div class='cadastro_alunos'><h3 class="botao_cadastrar_aluno">CADASTRAR NOVA TRILHA</h3></div></a>
			<br>
			<br>
			
			<br>
            			<table class='tb_resultados'>
				<tr class='tb_titulo2'>
					<th>Trilhas:</th>
				</tr>
				<tr class='tb_parte_laranja'>
					<td></td>
				</tr>
				
				<!-- -------------------------------------------------------------------------------------------- -->
				<tr class='professor_row' onclick="toggleDetalhes(1)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<div class="professor_texto">
									<span class="professor_nome">Nome da trilha</span>
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
									<div class="detalhe_label"> Dia da semana: </div>
									<div class="detalhe_valor"> Informação</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Turno:</div>
									<div class="detalhe_valor"> Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Carga Horária:</div>
									<div class="detalhe_valor"> Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Cursos:</div>
									<div class="detalhe_valor"> Informações</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label"> Turmas: </div>
									<div class="detalhe_valor"> Informações</div>
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
				<br><br><br><br>

	</main>

</body>

</html>