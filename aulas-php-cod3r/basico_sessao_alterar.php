<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?>
</p>

<p>
    <b>E-mail: </b> <?= $_SESSION['email'] ?>
</p>