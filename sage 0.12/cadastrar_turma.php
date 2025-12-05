<!-- <?PHP
session_start();
include('banco.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome_aluno'];
    $nascimento = $_POST['nascimento_aluno'];
    $sexo = $_POST['sexo'];
    $estado_civil = $_POST['estado_civil'];
    $raca = $_POST['cor_raca'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];

    $_SESSION['cpf'] = $cpf;

    $smt = $con->prepare(
        'insert into tb_alunos(nome_aluno, nascimento_aluno, sexo, estado_civil, cor_raca, email_aluno, telefone_aluno, cpf_aluno) values(?, ?, ?, ?, ?, ?, ?, ?);'
    );

    $smt->bind_param('ssssssii', $nome, $nascimento, $sexo, $estado_civil, $raca, $email, $telefone, $cpf);

    if ($smt->execute()) {
        header('location: cadastrar_aluno_2.php');
        exit();
    } else {
        echo '<p>Erro de envio</p>';
    }

    $smt->close();
}
?> -->

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
    <title>cadastro de Alunos</title>
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
                        <li><a href='index.html'><img src="img/alunos_b.png" width='32px' class='icons'> Alunos </a>
                        </li>
                        <li><a href='turmas.php'><img src="img/turmas_l.png" width='32px' class='icons'> Turmas </a>
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
        <br><br><br><br><br>

        <div class='titulo_principal'>
            <h1>Cadastro de Turmas</h1>
        </div>

        <br>
        <div class='container2'>

            <div class='cadastro_aluno'>
                <form method="POST" requiered>
                    <br><br><br>

                    <label> Dia da Semana: </label><br>
                    <select name="dia_da_semana">
                        <option value="segunda_manha"> Segunda-feira - Manhã</option>
                        <option value="segunda_tarde"> Segunda-feira - Tarde</option>
                        <option value="terca_manha"> Terça-feira - Manhã</option>
                        <option value="terca_tarde"> Terça-feira - Tarde</option>
                        <option value="quarta_manha"> Quarta-feira - Manhã</option>
                        <option value="quarta_tarde"> Quarta-feira - Tarde</option>
                        <option value="quinta_manha"> Quinta-feira - Manhã</option>
                        <option value="quinta_tarde"> Quinta-feira - Tarde</option>
                        <option value="sexta_manha"> Sexta-feira - Manhã</option>
                        <option value="sexta_tarde"> Sexta-Feira - Tarde</option>
                    </select>
                    <br><br>

                    <label> Série da Turma: </label><br>
                    <select name='serie_turma'>
                        <option value='sexto'> 6° Ano </option>
                        <option value='setimo'> 7° Ano </option>
                        <option value="oitavo">8° Ano </option>
                        <option value="nono">9° Ano </option>
                    </select>
                    <br><br>
                    


                    <button type='submit'> Prosseguir </button>

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