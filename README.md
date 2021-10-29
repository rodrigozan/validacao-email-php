# Função de validação de email em PHP

## Simples, rápido e sem enrolação: validando email em php com expressões regulares.

Validar email é uma das funções mais básicas no dia a dia de um programador. Fazer isso em PHP é simples, utilizando o método preg_match().

Deixo o link do método na documentação oficial do PHP:

* [preg_match()](https://www.php.net/manual/pt_BR/function.preg-match.php)

O bacana é que você pode usar esta expessão regular em qualquer linguagem, basta adaptar.

```php
/* chamaremos nossa função de validaEmail, e passaremos a variáve $email por parâmetro*/
function validaEmail($email) {}
```

Vamos trabalhar nosso código de validação dentro da função validaEmail.

Você pode separar o email em três partes: uma para a conta, outra para o domínio e outra para a extensão. Apenas para deixar o código mais legível.

```php
$conta = "/^[a-zA-Z0-9\._-]+@";
$domino = "[a-zA-Z0-9\._-]+.";
$extensao = "([a-zA-Z]{2,4})$/";

// vamos concatenar as variáveis
$pattern = $conta.$domino.$extensao;
```

Por fim utilizamos o método preg_match(). Ele aceita alguns parâmetros, então passaremos a expressão regular (salva na variável $pattern), o email que será inserido (passado como parâmetro da nossa função validaEmail), e a variável de checagem.

Segundo a documentação do PHP, o método preg_match() Pesquisa em $pattern uma correspondência para a expressão regular fornecida em $email. Se a variável $check for fornecida, ela será preenchido com os resultados da pesquisa. 

```php
if (preg_match($pattern, $email, $check))
    return true;
  else
    return false;
```

Agora podemos usar a função para validar emails de um site, sistema ou aplicação. Na prática seria algo assim:

```php
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

// Faz a verificação usando a função validaEmail
if (validaEmail($input)) {
  echo "O e-mail inserido é valido!";
} else {
  echo "O e-mail inserido é invalido!";
}
```

Se preferir visualizar a imagem da função:

![Image description](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/fbszh4nkiwb2qht0sa3p.png)

Espero que tenham curtido. Dúvidas e sugestões, só chamar na Issue :D

Post original em:

* [Função de validação de email em PHP - Code & Write (blog no Medium)](https://medium.com/code-write/fun%C3%A7%C3%A3o-de-valida%C3%A7%C3%A3o-de-email-em-php-b3ed3bce2955)