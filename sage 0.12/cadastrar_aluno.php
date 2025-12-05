<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nome_aluno'] = $_POST['nome_aluno']; 
	$_SESSION['nascimento_aluno'] = $_POST['nascimento']; 
	$_SESSION['sexo_aluno'] = $_POST['sexo']; 
	$_SESSION['estado_civil_aluno'] = $_POST['estado_civil']; 
	$_SESSION['raca_aluno'] = $_POST['cor_raca']; 
	$_SESSION['email_aluno'] = $_POST['email']; 
	$_SESSION['telefone_aluno'] = $_POST['telefone']; 
	$_SESSION['cpf_aluno'] = $_POST['cpf']; 
	$_SESSION['escolha_dia'] = $_POST['escolha_dia']; 	
	
	
    header('Location: cadastrar_aluno_2.php');
    exit();
}
?>

<!-- <?PHP 
	session_start();
	include('banco.php');
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$nome = $_POST['nome_aluno'];
		$nascimento = $_POST['nascimento_aluno'];
		$sexo = $_POST['sexo'];
		$estado_civil = $_POST['estado_civil'];
		$raca = $_POST['cor_raca'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$cpf = $_POST['cpf'];

		$_SESSION['cpf'] = $cpf;
		
		$smt = $con -> prepare(
			'insert into tb_alunos(nome_aluno, nascimento_aluno, sexo, estado_civil, cor_raca, email_aluno, telefone_aluno, cpf_aluno) values(?, ?, ?, ?, ?, ?, ?, ?);' 
		);
		
		$smt -> bind_param('ssssssii', $nome, $nascimento, $sexo, $estado_civil, $raca, $email, $telefone, $cpf);
		
		if($smt -> execute()) {
			header('location: cadastrar_aluno_2.php');
			exit();
		} else {
			echo '<p>Erro de envio</p>';
		}
		
		$smt -> close();
	}
?> -->

<script>
	function Menu(){
		let menu = document.getElementById('menu_vert');
		if(menu.style.display === 'none'){
			menu.style.display='block';
		}else {
			menu.style.display='none';
		}
	}
	
	function validarCheckboxes() {
		const checkboxes = document.queySelectorAll('input[name="escolha_dia[]"]');
		const marcadas = Array.from((checkboxes).some(cb => cb.checked);
		
		if (!marcadas) {
			alert('Selecione pelo menos um dia/turno de preferência.');
			return false;
		} 
		return true;
	}
</script>
<!DOCTYPE HTML>
<html lang='pt-br'>

<head>
	<meta charset='utf-8'>
	<link rel='stylesheet' href='css/style.css'>
	<title>cadastro de Alunos</title>
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
						<li><a href='index.html'><img src="img/alunos_l.png" width='32px' class='icons'> Alunos </a></li>
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
			<h1>Cadastro de Alunos</h1>
	</div>

	<br>
	<div class='container2'>

	<div class='cadastro_aluno'>
	<form method="POST" id='formAluno' onsubmit='return validarCheckboxes();'>
	<br><br><br>

		<label>Nome do Aluno: </label><br>
		<input type="text" id="nome" name="nome_aluno" autocomplete="off" required>
		<br><br>
		
		<label>Data de Nascimento: </label><br>
		<input type="date" id="mae" name="nascimento_aluno"  autocomplete="off" required>
		<br><br>
		
		<label> Sexo: </label><br>
		<select name='sexo'>
			<option value='f'> Feminino </option>
			<option value='m'> Masculino </option>
		</select>
		<br><br>

		<label> Estado Cívil: </label><br>
		<select name='estado_civil'>
			<option value='solteiro'> Solteiro(a) </option>
			<option value='casado'> Casado(a) </option>
			<option value='divorciado'> Divorciado(a) </option>
			<option value='viuvo'> Viúvo(a) </option>
		</select>
		<br><br>
		
		<label> Cor/Raça: </label><br>
		<select name='cor_raca'>
			<option value='branco'> Branco </option>
			<option value='preto'> Preto </option>
			<option value='pardo'> Pardo </option>
			<option value='indigena'> Indígena </option>
			<option value='amarelo'> Amarelo </option>
		</select>
		<br><br>
		
		<label> Email: </label><br>
		<input type="email" name="email" autocomplete="off" required>
		<br><br>

		<label> Telefone: </label><br>
		<input type="number" name="telefone" autocomplete="off" required>
		<br><br>

		<label> CPF: </label><br>
		<input type="number" name="cpf" autocomplete="off" required>
		<br><br>
		
		<label> Dia / Turno de preferência: </label><br><br>

<div class='grupo-checkbox' style='margin-left: 7%;'>
<input type='checkbox' name='escolha_dia[]' value='segunda_manha' style='
        border-radius: 0
        border: 0;
        width: 10%;
        height: 20px;
        margin-left: 0;
    }'> Segunda-feira de Manhã
	
	<br>
	<input type='checkbox' name='escolha_dia[]' value='segunda_tarde' style='
        border-radius: 0
        border: 0;
        width: 10%;
        height: 20px;
        margin-left: 0;
    }'> Segunda-feira de Tarde
	<br>
	
	<input type='checkbox' name='escolha_dia[]' value='terca_manha' style='
        border-radius: 0
        border: 0;
        width: 10%;
        height: 20px;
        margin-left: 0;
    }'> Terça-feira de Manhã
	<br>

	<input type='checkbox' name='escolha_dia[]' value='terca_tarde' style='
        border-radius: 0
        border: 0;
        width: 10%;
        height: 20px;
        margin-left: 0;
    }'> Terça-feira de Tarde
	<br>
	
	<input type='checkbox' name='escolha_dia[]' value='quarta_manha' style='
        border-radius: 0
        border: 0;
        width: 10%;
        height: 20px;
        margin-left: 0;
    }'> Quarta-feira de Manhã
	<br>
	
	<input type='checkbox' name='escolha_dia[]' value='quarta_tarde' style='
        border-radius: 0
        border: 0;
        width: 10%;
        height: 20px;
        margin-left: 0;
    }'> Quarta-feira de Tarde
	<br>
	
	<input type='checkbox' name='escolha_dia[]' value='quinta_manha' style='
        border-radius: 0
        border: 0;
        width: 10%;
        height: 20px;
        margin-left: 0;
    }'> Quinta-feira de Manhã
	<br>
	
	<input type='checkbox' name='escolha_dia[]' value='quinta_tarde' style='
        border-radius: 0
        border: 0;
        width: 10%;
        height: 20px;
        margin-left: 0;
    }'> Quinta-feira de Tarde
	<br>
	
	<input type='checkbox' name='escolha_dia[]' value='sexta_manha' style='
        border-radius: 0
        border: 0;
        width: 10%;
        height: 20px;
        margin-left: 0;
    }'> Sexta-feira de Manhã
	<br>
	
	<input type='checkbox' name='escolha_dia[]' value='sexta_tarde' style='
        border-radius: 0
        border: 0;
        width: 10%;
        height: 20px;
        margin-left: 0;
    }'> Sexta-feira de Tarde
	<br>
</div>


		
		<!--<select name='escolha_dia'>
			<option value='segunda_manha'> Segunda de Manhã </option>
			<option value='segunda_tarde'> Segunda de Tarde </option>
			<option value='terca_manha'> Terça de Manhã </option>
			<option value='terca_tarde'> Terça de Tarde </option>
			<option value='quarta_manha'> Quarta de Manhã </option>
			<option value='quarta_tarde'> Quarta de Tarde </option>
			<option value='quinta_manha'> Quinta de Manhã </option>
			<option value='quinta_tarde'> Quinta de Tarde </option>
			<option value='sexta_manha'> Sexta de Manhã </option>
			<option value='sexta_tarde'> Sexta de Tarde </option>
		</select> -->
<br><br><br>
		<button name="botao" type='submit'>Prosseguir</button>
	
</div>
	<br><br><br>
	</form>


	</div>
		<br><br><br><br>

</main>
	<?PHP
		include 'php/inc/db.inc'
	?>
</body>

<footer>

</footer>

</html>