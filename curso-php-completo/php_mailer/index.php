<?php

	require_once("vendor/autoload.php");

	// Crie uma nova instância do PHPMailer
	$mail = new PHPMailer;

	// Diga ao PHPMailer que use SMTP
	$mail->isSMTP();

	// Permite Instanciar a classe PHPMailer
	// essa parte de código não é padrão do PHPMAILER
	// tive que buscar na net porque tava dando erro
	$mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

	// Habilitar depuração de SMTP
	// 0 = desligado (para uso em produção)
	// 1 = mensagens do cliente
	// 2 = mensagens do cliente e do servidor
	$mail->SMTPDebug = 2;

	// Defina o nome do host do servidor de correio
	$mail->Host = 'smtp.gmail.com';

	// use
	// $mail->Host = gethostbyname('smtp.gmail.com');
	// se sua rede não suportar SMTP sobre IPv6

	// Defina o número da porta SMTP - 587 para TLS autenticado, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;

	// Defina o sistema de criptografia para usar - ssl (obsoleto) ou tls
	$mail->SMTPSecure = 'tsl';

	// Se usar a autenticação SMTP
	$mail->SMTPAuth = true;

	// Nome de usuário para usar para autenticação SMTP - use o endereço de e-mail completo para o gmail
	$mail->Username = "EMAIL_DO_REMETENTE";

	// Senha a ser usada para autenticação SMTP
	$mail->Password = "SENHA_DO_EMAIL_DO_REMETENTE";

	// Definir de quem a mensagem deve ser enviada
	$mail->setFrom('EMAIL_QUE_SERA_USADO_PRA_ENVIAR_A_MENSAGEM', 'First Last');

	// Definir um endereço de resposta alternativo
	//$mail->addReplyTo('vitorhugooliveira64@gmail.com', 'Vitor Hugo Oliveira');

	// Defina quem a mensagem deve ser enviada para
	$mail->addAddress('EMAIL_DO_DESTINATARIO', 'NOME_DA_PESSOA');

	// Defina a linha de assunto
	$mail->Subject = 'Teste De Envio De Email Com PHPMailer';

	// Leia um corpo de mensagem HTML de um arquivo externo, converta imagens referenciadas para incorporadas,
	// converte HTML em um corpo alternativo básico de texto simples
	$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

	// Substitua o corpo de texto simples por um criado manualmente
	$mail->AltBody = 'Erro No Corpo Do Texto!';

	// Anexe um arquivo de imagem
	//$mail->addAttachment('images/phpmailer_mini.png');

	// envie a mensagem, verifique se há erros
	if (!$mail->send()) {
	    echo "Erro De Envio: " . $mail->ErrorInfo;
	} else {
	    echo "Email Enviado!";
	    // Seção 2: IMAP
	    // Descomente estes para salvar sua mensagem na pasta 'Correio Enviado'.
	    #if (save_mail($mail)) {
	    #    echo "Message saved!";
	    #}
	}

	// Seção 2: IMAP
	// Comandos IMAP requer a extensão PHP IMAP, encontrada em: https://php.net/manual/en/imap.setup.php
	// Função de chamada que usa o PHP imap _ * () funções para salvar mensagens: https://php.net/manual/en/book.imap.php
	// Você pode usar imap_getmailboxes ($ imapStream, '/ imap / ssl') para obter uma lista de pastas ou rótulos disponíveis, isso pode
	// seja útil se você estiver tentando fazer isso funcionar em um servidor IMAP não-Gmail.
	function save_mail($mail)
	{
	    // Você pode alterar 'Correio Enviado' para qualquer outra pasta ou tag
	    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

	    // Diga ao seu servidor para abrir uma conexão IMAP usando o mesmo nome de usuário e senha que você usou para SMTP
	    $imapStream = imap_open($path, $mail->Username, $mail->Password);

	    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
	    imap_close($imapStream);

	    return $result;
	}