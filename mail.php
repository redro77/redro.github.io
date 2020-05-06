<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$message = 'Контактная информация:' . PHP_EOL;
	if(isset($_POST['name'])) $message .= 'Имя: ' . htmlspecialchars(trim($_POST['name'])) . PHP_EOL;
	if(isset($_POST['phone'])) $message .= 'Телефон: ' . htmlspecialchars(trim($_POST['phone'])) . PHP_EOL;
	if(isset($_POST['comment'])) $message .= 'Комментарий: ' . htmlspecialchars(trim($_POST['comment'])) . PHP_EOL;
	if(isset($_POST['message'])) $message .= 'Сообщение: ' . htmlspecialchars(trim($_POST['message'])) . PHP_EOL;
	if(isset($_POST['additional'])) $message .= 'Дополнительная информация: ' . htmlspecialchars(trim($_POST['additional'])) . PHP_EOL;
	if(isset($_POST['email'])) $message .= 'e-mail: ' . htmlspecialchars(trim($_POST['email'])) . PHP_EOL;
	$to = 'support@bizinbox.ru'; /* Сюда впишите свою эл. почту */
	$from = 'no-reply@' . $_SERVER['SERVER_NAME'];
	$header = 'Заявка с сайта';
	$subject = '=?utf-8?b?' . base64_encode($header) . '?=' . $_SERVER['SERVER_NAME'];
	$headers = 'Content-type: text/plain; charset="utf-8"' . PHP_EOL;
	$headers .= 'From: <'. $from .'>' . PHP_EOL;
	$headers .= 'MIME-Version: 1.0' . PHP_EOL;
	$headers .= 'Date: ' . date('D, d M Y h:i:s O') . PHP_EOL;
	mail($to, $subject, $message, $headers);
} else {
    http_response_code(403);
    echo 'Попробуйте еще раз';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>С вами свяжутся!</title>
<script type="text/javascript">
/*setTimeout('location.replace("index.html")', 2000); /* Изменить текущий адрес страницы через 2 секунды (2000 миллисекунд) */
</script>
<style type="text/css">
	p {
		display: block;
		background: #ffffff; /* Цвет фона текста */
		color: #000000; /* Цвет текста */
		font-size: 30px; /* Размер шрифта */
		font-family: Arial, Helvetica, sans-serif;
		text-transform: uppercase;
		text-align: center;
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body style="background:#ffffff;"> <!-- Цвет фона страницы -->
				<p style="">Спасибо, Ваша заявка была принята!</p>

</body>
</html>