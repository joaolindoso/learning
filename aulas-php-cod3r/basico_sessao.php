<div><h1>Sessão</h1></div>

<?php
session_start();

print_r($_SESSION);

echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@zmail.com';
}

?>

<p>
    <a href="basico_sessao_alterar.php">
        Alterar sessão
    </a>
</p>