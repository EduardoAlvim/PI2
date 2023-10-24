<?php
session_start();

// Inicializa o histórico de textos se não estiver definido
if (!isset($_SESSION['historico'])) {
    $_SESSION['historico'] = array();
}

// Adiciona um novo texto ao histórico quando o formulário é enviado
if (isset($_POST['texto']) && !empty($_POST['texto'])) {
    $novoTexto = $_POST['texto'];
    array_push($_SESSION['historico'], $novoTexto);
}

// Remove um item do histórico se o usuário clicar em "remover"
if (isset($_GET['remove']) && is_numeric($_GET['remove'])) {
    $indice = $_GET['remove'];
    if (isset($_SESSION['historico'][$indice])) {
        unset($_SESSION['historico'][$indice]);
    }
}

// Remove todo o histórico se o usuário clicar em "apagar tudo"
if (isset($_POST['apagar_tudo'])) {
    $_SESSION['historico'] = array();
}

// Exibe o histórico de textos
echo "<h1>Histórico de Textos</h1>";
echo "<ul>";
foreach ($_SESSION['historico'] as $indice => $texto) {
    echo "<li>$texto <a href='?remove=$indice'>(remover)</a></li>";
}
echo "</ul>";

// Formulário para enviar textos
?>
<form method="post" action="">
    <label for="texto">Digite um texto:</label>
    <input type="text" name="texto" id="texto">
    <input type="submit" value="Enviar">
</form>

<!-- Botão para apagar todo o histórico -->
<form method="post" action="">
    <input type="submit" name="apagar_tudo" value="Apagar Tudo">
</form>
