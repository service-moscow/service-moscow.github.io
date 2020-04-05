<?php
/* Осуществляем проверку вводимых данных и их защиту от враждебных 
скриптов */
//$name = htmlspecialchars($_POST["name"]);
//$web = htmlspecialchars($_POST["web"]);
$text = htmlspecialchars($_POST["phone"]);
://$email = htmlspecialchars($_POST["email"]);
//$tema = htmlspecialchars($_POST["tema"]);
$site = "Stiralka";
$text = $text . ' ' . $site;
//$comments = htmlspecialchars($_POST["commentss"])
/* Устанавливаем e-mail адресата */

/* Проверяем заполнены ли обязательные поля ввода, используя check_in 
функцию */
//$name = check_in($_POST["name"], "Введите ваше имя!");
//$web = check_in($_POST["web"], "Введите ваше сайт!");
$phone = check_in($_POST["phone"], "Введите ваш телефон и нажмите кнопку ВЫЗОВИТЕ МАСТЕРА!");


//$tema = check_in($_POST["tema"], "Укажите тему сообщения!");
//$email = check_in($_POST["email"], "Введите ваш e-mail!");
//$comments = check_in($_POST["comments"], "Вы забыли написать сообщение!");
/* Проверяем правильно ли записан e-mail */
//if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
//{
//show_error("<br /> Е-mail адрес не существует");
//}

####################################
//echo 
	

/* 
* функция передачи сообщения 
*/
function send($host, $port, $login, $password, $phone, $text, $sender = false, $wapurl = false )
{
	$fp = fsockopen($host, $port, $errno, $errstr);
	if (!$fp) {
		return "errno: $errno \nerrstr: $errstr\n";
	}
	fwrite($fp, "GET /send/" .
		"?phone=" . rawurlencode($phone) .
		"&text=" . rawurlencode($text) .
		($sender ? "&sender=" . rawurlencode($sender) : "") .
		($wapurl ? "&wapurl=" . rawurlencode($wapurl) : "") .
		"  HTTP/1.0\n");
	fwrite($fp, "Host: " . $host . "\r\n");
	if ($login != "") {
		fwrite($fp, "Authorization: Basic " . 
			base64_encode($login. ":" . $password) . "\n");
	}
	fwrite($fp, "\n");
	$response = "";
	while(!feof($fp)) {
		$response .= fread($fp, 1);
	}
	fclose($fp);
	list($other, $responseBody) = explode("\r\n\r\n", $response, 2);
	return $responseBody;
}

include '../callback-phone-order-washer.html';

?>


<?php
/* Если при заполнении формы были допущены ошибки сработает 
следующий код: */
function check_in($data, $problem = "")
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}
function show_error($myError)
{
?>
<?php echo $myError; ?>
<?php
exit();
}
?>
