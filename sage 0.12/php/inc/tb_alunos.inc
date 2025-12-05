<?PHP 

	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		$nome        = $_SESSION['nome_aluno'];
		$nascimento  = $_SESSION['nascimento_aluno'];
		$sexo        = $_SESSION['sexo_aluno'];
		$estado_civil      = $_SESSION['estado_civil_aluno'];
		$raca        = $_SESSION['raca_aluno'];
		$email       = $_SESSION['email_aluno'];
		$telefone    = $_SESSION['telefone_aluno'];
		$cpf         = $_SESSION['cpf_aluno'];
		$escolha_dia         = $_SESSION['escolha_dia'];
		
		$nacionalidade = $_SESSION['nacionalidade_aluno'];
		$estado_natal  = $_SESSION['estado_natal_aluno'];
		$naturalidade  = $_SESSION['naturalidade_aluno'];
		$cep      = $_SESSION['cep_aluno'];
		$rua      = $_SESSION['rua_aluno'];
		$numero   = $_SESSION['numero_aluno'];
		$estado   = $_SESSION['estado_aluno'];
		$cidade   = $_SESSION['cidade_aluno'];
		$pais     = $_SESSION['pais_aluno'];
		
		$grau_instrucao = $_SESSION['grau_de_instrucao'];
		$serie_escolar  = $_SESSION['serie_escolar'];
		$tipo_escola    = $_SESSION['tipo_escola'];
		$nome_escola    = $_SESSION['nome_escola'];
		$situacao_ocupacional = $_SESSION['situacao_ocupacional']; //24
		
		$nome_responsavel = $_SESSION['nome_responsavel'];
		
		
		
		
		
		$smt = $conn -> prepare(
			'insert into tb_alunos(nome_aluno, cpf_aluno, telefone_aluno, email_aluno, nascimento_aluno, serie_aluno, escolha_dia, nome_responsavel, estado_natal, naturalidade, sexo, estado_civil, nacionalidade, cor_raca, grau_de_instrucao, cep, rua, numero, estado, cidade, pais, situacao_ocupacional, tipo_de_escola, nome_escola) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);' //24 nomes. menos a matricula
		);
		
		$smt -> bind_param("ssssssssssssssssssssssss", $nome, $cpf, $telefone, $email, $nascimento, $serie_escolar, $escolha_dia, $nome_responsavel, $estado_natal, $naturalidade, $sexo, $estado_civil, $nacionalidade, $raca, $grau_instrucao, $cep, $rua, $numero, $estado, $cidade, $pais, $situacao_ocupacional, $tipo_escola, $nome_escola);
		
		if($smt -> execute()) {
			header('location: cadastrar_aluno_5.php');
			exit();
		}else{
			echo "❌ Erro ao cadastrar: " . $smt->error;
		}
		
		$smt -> close();
	}
?>

