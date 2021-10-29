<?php

function validaEmail($email) {
  $conta = "/^[a-zA-Z0-9\._-]+@";
  $domino = "[a-zA-Z0-9\._-]+.";
  $extensao = "([a-zA-Z]{2,4})$/";
  $pattern = $conta.$domino.$extensao;
  if (preg_match($pattern, $email, $check))
    return true;
  else
    return false;
}

// Define uma variável para testar o validador
$input = "meuemail@dominio.com.br";

// Faz a verificação usando a função
if (validaEmail($input)) {
  echo "O e-mail inserido é valido!";
} else {
  echo "O e-mail inserido é invalido!";
}
