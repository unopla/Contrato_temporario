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
	<title>Cadastro de Trilhas</title>
	<link rel="icon" href="img/icone.png"/>
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
			<h1>Cadastro de Alunos</h1>
	</div>

	<br>
	<div class='container2'>
		<br><br>
		<div class='cadastro_aluno'>
		<form method='post'>
		
			<label> Nome da Trilha: </label><br>
			<input type='text' name='nome_trilha' required>
			
			<br><br>
			
			<?php 
				include('php/inc/db.inc');
				
				
			?>
				
			<label for="curso">Selecione o 1° Curso:</label><br>
			<select id="curso_1" name="curso">
			<option value="" selected disabled>-- Selecione --</option>
				<?php
				$sql ='SELECT nome_curso,quant_horas from tb_curso';
				$result = $conn->query($sql); 
				
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						echo "
						<option value='{$row['id_curso']}'>
								{$row['nome_curso']}  --- Carga Horária: {$row['quant_horas']}
							  </option>";
					}
				} else {
					echo "<option disabled>Nenhum curso cadastrado</option>";
				}
			?>
			</select><br><br>

				
			<label for="curso">Selecione o 2° Curso:</label><br>
			<select id="curso_2" name="curso">
			<option value="" selected disabled>-- Selecione --</option>
				<?php
				$sql ='SELECT nome_curso,quant_horas from tb_curso';
				$result2 = $conn->query($sql); 
				if ($result2->num_rows > 0) {
					while ($row = $result2->fetch_assoc()) {
						echo "<option value='{$row['id_curso']}'>
								{$row['nome_curso']}  --- Carga Horária: {$row['quant_horas']}
							  </option>";
					}
				} else {
					echo "<option disabled>Nenhum curso cadastrado</option>";
				}
			?>
			</select><br><br>
			
			<label for="curso">Selecione o 3° Curso:</label><br>
			<select id="curso_3" name="curso">
			<option value="" selected disabled>-- Selecione --</option>
				<?php
				$sql ='SELECT nome_curso,quant_horas from tb_curso';
				$result3 = $conn->query($sql); 
				if ($result3->num_rows > 0) {
					while ($row = $result3->fetch_assoc()) {
						echo "<option value='{$row['id_curso']}'>
								{$row['nome_curso']}  --- Carga Horária: {$row['quant_horas']}
							  </option>";
					}
				} else {
					echo "<option disabled>Nenhum curso cadastrado</option>";
				}
			?>
			</select><br><br>
			
			<label for="curso">Selecione o 4° Curso:</label><br>
			<select id="curso_4" name="curso">
			<option value="" selected disabled>-- Selecione --</option>
				<?php
				$sql ='SELECT nome_curso,quant_horas from tb_curso';
				$result4 = $conn->query($sql); 
				if ($result4->num_rows > 0) {
					while ($row = $result4->fetch_assoc()) {
						echo "<option value='{$row['id_curso']}'>
								{$row['nome_curso']}  --- Carga Horária: {$row['quant_horas']}
							  </option>";
					}
				} else {
					echo "<option disabled>Nenhum curso cadastrado</option>";
				}
			?>
			</select><br><br>
			
			<label for="curso">Selecione o 5° Curso:</label><br>
			
			<select id="curso_5" name="curso">
			<option value="" selected disabled>-- Selecione --</option>
				<?php
				$sql ='SELECT nome_curso,quant_horas from tb_curso';
				$result5 = $conn->query($sql); 
				if ($result5->num_rows > 0) {
					while ($row = $result5->fetch_assoc()) {
						echo "<option value='{$row['id_curso']}'>
								{$row['nome_curso']}  --- Carga Horária: {$row['quant_horas']}
							  </option>";
					}
				} else {
					echo "<option disabled>Nenhum curso cadastrado</option>";
				}
			?>
			</select><br><br>
			
			<label for="curso">Selecione o 6° Curso:</label><br>
			<select id="curso_6" name="curso">
			<option value="" selected disabled>-- Selecione --</option>
				<?php
				$sql ='SELECT nome_curso,quant_horas from tb_curso';
				$result6 = $conn->query($sql); 
				if ($result6->num_rows > 0) {
					while ($row = $result6->fetch_assoc()) {
						echo "<option value='{$row['id_curso']}'>
								{$row['nome_curso']}  --- Carga Horária: {$row['quant_horas']}
							  </option>";
					}
				} else {
					echo "<option disabled>Nenhum curso cadastrado</option>";
				}
			?>
			</select><br><br><br>
			
			<button type='submit'> Cadastrar Trilha </button>
			<br><br><br>

			
			
		</form>
		
		<?php 
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				$nome_trilha = $_POST['nome_trilha'];
				$curso_1 = $_POST['curso_1'];
				$curso_2 = $_POST['curso_2'];
				$curso_3 = $_POST['curso_3'];
				$curso_4 = $_POST['curso_4'];
				$curso_5 = $_POST['curso_5'];
				$curso_6 = $_POST['curso_6'];
				
				if (!empty ($nome_trilha and $curso_1 and $curso_2 and $curso_3 and $curso_4 and $curso_5)) {
					
					
					
				} 
			}
		
		?>
		<?php
				$conn->close();
			?>
		</div>
	</div>

</body>