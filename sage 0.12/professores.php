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
</head>

<body>

	<header>
		<nav class='barra_superior'>
			<div class='imagens_menu'>
				<div class='menu_flutuante'>
						
					<button class="botao" onclick="Menu()"> <img src='img/menu.png' alt='menu_flutuante' width='50px' height="35px"> </button>
					<ul class="menu_vertical" id="menu_vert">
						<br><li><a href='professores.php'> <img src="img/professores_l.png" width='32px' class='icons'> Professores </a></li>
						<li><a href='index.html'><img src="img/alunos_b.png" width='32px' class='icons'> Alunos </a></li>
						<li><a href='turmas.php'><img src="img/turmas_b.png" width='32px' class='icons'> Turmas </a></li>
						<li><a href='trilhas.php'><img src="img/trilhas_b.png" width='32px' class='icons'> Trilhas </a></li>
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
			<h1>Professores</h1>
		</div>

		<div class='container'>
			
				<a href='cadastrar_prof.php' class="botao_cadastrar_prof"><div class='cadastro_prof'><h3 class="botao_cadastrar_prof">CADASTRAR NOVO PROFESSOR</h3></div></a>
			<br>
			<br>
			<div class='pesquisa2'>
				<!-- <img src='...' alt='lupa'> -->
				<form method='post'>
					<input type='text' name='pesquisa' placeholder='pesquisar professor' required>
					 <button type="submit"><i class="fa fa-search"></i></button>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" class='botao_pesquisar'>
 
				</form>
			</div>
			<br><br>
            			<table class='tb_resultados'>
				<tr class='tb_titulo2'>
					<th>Professores:</th>
				</tr>
				<tr class='tb_parte_laranja'>
					<td></td>
				</tr>
				
				<!-- Professor 1 -->
				<tr class='professor_row' onclick="toggleDetalhes(1)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<img src="img/sem_foto.png" alt="Foto" class="professor_foto">
								<div class="professor_texto">
									<span class="professor_nome">Marcelo Dipp</span>
									<span class="professor_curso">Curso: Técnico em Desenvolvimento de Sistemas</span>
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
									<div class="detalhe_label">CPF</div>
									<div class="detalhe_valor">123.456.789-00</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Email</div>
									<div class="detalhe_valor">maria.silva@senai.br</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Telefone</div>
									<div class="detalhe_valor">(54) 99999-1111</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Especialidade</div>
									<div class="detalhe_valor">Programação e Banco de Dados</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Formação</div>
									<div class="detalhe_valor">Mestre em Ciência da Computação</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Data de Contratação</div>
									<div class="detalhe_valor">15/03/2020</div>
								</div>
                                <div class="detalhe_item">
									<div class="detalhe_label">Horários Livres</div>
									<div class="detalhe_valor">Quarta-feira 07:30 -- 8:55</div>
                                    <div class="detalhe_valor">Quinta-feira 08:30 -- 9:20</div>
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

				<!-- Professor 2 -->
				<tr class='professor_row' onclick="toggleDetalhes(2)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<img src="img/sem_foto.png" alt="Foto" class="professor_foto">
								<div class="professor_texto">
									<span class="professor_nome">Sandramara Chiele</span>
									<span class="professor_curso">Curso: Costureiro de Roupas</span>
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
									<div class="detalhe_label">CPF</div>
									<div class="detalhe_valor">987.654.321-00</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Email</div>
									<div class="detalhe_valor">joao.oliveira@senai.br</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Telefone</div>
									<div class="detalhe_valor">(54) 99999-2222</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Especialidade</div>
									<div class="detalhe_valor">Automação Industrial</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Formação</div>
									<div class="detalhe_valor">Engenheiro Eletricista</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Data de Contratação</div>
									<div class="detalhe_valor">20/08/2019</div>
								</div>
                                <div class="detalhe_item">
									<div class="detalhe_label">Horários Livres</div>
									<div class="detalhe_valor">Quarta-feira 07:30 -- 8:55</div>
                                    <div class="detalhe_valor">Quinta-feira 08:30 -- 9:20</div>
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

				<!-- Professor 3 -->
				<tr class='professor_row' onclick="toggleDetalhes(3)">
					<td>
						<div class="professor_info">
							<div class="professor_left">
								<img src="img/sem_foto.png" alt="Foto" class="professor_foto">
								<div class="professor_texto">
									<span class="professor_nome">Ana Carolina Ferreira</span>
									<span class="professor_curso">Curso: Gestão de Projetos</span>
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
									<div class="detalhe_label">CPF</div>
									<div class="detalhe_valor">456.789.123-00</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Email</div>
									<div class="detalhe_valor">ana.ferreira@senai.br</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Telefone</div>
									<div class="detalhe_valor">(54) 99999-3333</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Especialidade</div>
									<div class="detalhe_valor">Gestão de Projetos</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Formação</div>
									<div class="detalhe_valor">MBA em Gestão Empresarial</div>
								</div>
								<div class="detalhe_item">
									<div class="detalhe_label">Data de Contratação</div>
									<div class="detalhe_valor">10/01/2021</div>
								</div>
                                <div class="detalhe_item">
									<div class="detalhe_label">Horários Livres</div>
									<div class="detalhe_valor">Quarta-feira 07:30 -- 8:55</div>
                                    <div class="detalhe_valor">Quinta-feira 08:30 -- 9:20</div>
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