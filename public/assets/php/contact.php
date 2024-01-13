<?php

if (!$_POST) exit;

// Constantes
define("PHP_EOL", "\r\n");
define("TO_EMAIL", "example@example.net");
define("SUBJECT_PREFIX", "You have been contacted by");

// Função de validação de e-mail
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Função de escape de HTML
function sanitizeInput($input) {
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Dados do formulário
$name = sanitizeInput($_POST['name']);
$email = sanitizeInput($_POST['email']);
$comments = sanitizeInput($_POST['comments']);

// Validação dos campos
if (empty($name)) {
    echo '<div class="error_message">Campo não pode ser vázio.</div>';
    exit();
} elseif (empty($email) || !isEmail($email)) {
    echo '<div class="error_message">Please enter a valid email address.</div>';
    exit();
} elseif (empty($comments)) {
    echo '<div class="error_message">Please enter your message.</div>';
    exit();
}

// Construção do corpo do e-mail
$e_subject = SUBJECT_PREFIX . ' ' . $name;
$e_body = "You have been contacted by $name. Their additional message is as follows." . PHP_EOL . PHP_EOL;
$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
$e_reply = "You can contact $name via email, $email";

$msg = wordwrap($e_body . $e_content . $e_reply, 70);

// Cabeçalhos
$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

// Envio do e-mail
if (mail(TO_EMAIL, $e_subject, $msg, $headers)) {
    // E-mail enviado com sucesso
    echo "<fieldset>";
    echo "<div id='success_page'>";
    echo "<h5 class='text-success'>Email Sent Successfully.</h5>";
    echo "<p class='m-0'>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
    echo "</div>";
    echo "</fieldset>";
} else {
    // Erro no envio do e-mail
    echo 'ERROR!';
}
?>
