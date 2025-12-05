<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nome_escola'] = $_POST['nome_escola'];  
	$_SESSION['grau_de_instrucao'] = $_POST['grau_de_instrucao'];  
	$_SESSION['serie_escolar'] = $_POST['serie_escolar'];  
	$_SESSION['situacao_ocupacional'] = $_POST['situacao_ocupacional'];  
	$_SESSION['tipo_escola'] = $_POST['tipo_de_escola'];  	
    
	
	
	header('Location: cadastrar_aluno_4.php');
    exit();
	
}
?>


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
	<form method="POST" >
	<br><br><br>

		<label> Nome da Escola: </label><br>
		<input type="text"  name="nome_escola" autocomplete="off" required>
		<br><br>

        <label> Grau de Instrução: </label><br>
		<select name='grau_de_instrucao'>
            <option value='ensino fundamental completo'> Ensino Fundamental Completo </option>
            <option value='ensino fundamental incompleto'> Ensino Fundamental incompleto </option>
            <option value='ensino médio completo'> Ensino Médio Completo </option>
            <option value='ensino médio imcompleto'> Ensino Médio Incompleto </option>
		</select>
		<br><br>
		
        <label> Série Escolar: </label><br>
		<select name='serie_escolar'>
            <option value='sexto_ano'> Sexto Ano </option>
            <option value='setimo_ano'> Sétimo Ano </option>
            <option value='oitavo_ano'> Oitavo Ano </option>
            <option value='nono_ano'> Nono Ano </option>
		</select>
		<br><br>

		<label> Situação Ocupacional: </label><br>
		<select name='situacao_ocupacional'>
			<option value='ativo'> Ativo </option>
			<option value='inativo'> Inativo </option>
		</select>
		<br><br>

        <label> Tipo de Escola: </label><br>
		<select name='tipo_de_escola'>
            <option value='estadual'> Estadual </option>
            <option value='municípal'> Municípal </option>
            <option value='particular'> Particular </option>
            <option value='evangélica'> Evangélica </option>
		</select>
		<br><br><br>

		<button type='submit' name="botao">Prosseguir</button>

	<br><br><br>
	</form>

</div>
	</div>
		<br><br><br><br>

</main>


</body>

<footer>

</footer>

</html>