<?php
// Verifica se os dados foram enviados através do método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $data_nascimento = $_POST['data_nascimento'];

    // Exemplo: imprimir os dados recebidos
    echo "<h2>Dados recebidos do formulário:</h2>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Senha:</strong> $senha</p>";
    echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";

    // Aqui você pode adicionar código para salvar os dados em um banco de dados, enviar por e-mail, etc.
    // Exemplo: salvar em um arquivo de texto
    $file = 'registros.txt';
    $data = "E-mail: $email, Nome: $nome, Senha: $senha, Data de Nascimento: $data_nascimento\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
} else {
    echo "Formulário não enviado.";
}
?>
