<?php
/* Осуществляем проверку вводимых данных и их защиту от враждебных 
скриптов */
$name = htmlspecialchars($_POST["name"]);
$web = htmlspecialchars($_POST["web"]);
$phone = htmlspecialchars($_POST["phone"]);
$email = htmlspecialchars($_POST["email"]);
$tema = htmlspecialchars($_POST["tema"]);
$comments = htmlspecialchars($_POST["comments"]);
/* Устанавливаем e-mail адресата */
$myemail = "";
$olegemail = "";



/* Проверяем заполнены ли обязательные поля ввода, используя check_in 
функцию */
//$name = check_in($_POST["name"], "Введите ваше имя!");
//$web = check_in($_POST["web"], "Введите ваше сайт!");
//$phone = check_in($_POST["name"], "Введите ваш телефон!");
//$tema = check_in($_POST["tema"], "Укажите тему сообщения!");
//$email = check_in($_POST["email"], "Введите ваш e-mail!");
//$comments = check_in($_POST["comments"], "Вы забыли написать сообщение!");
/* Проверяем правильно ли записан e-mail */
//if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
//{
//show_error("<br /> Е-mail адрес не существует");
//}
/* Создаем новую переменную, присвоив ей значение */
$comments_to_myemail = "Новый отзыв с bosch-service-moscow.ru! 
Имя отправителя: $name 
E-mail: $email 
Текст сообщения: $comments 
Телефон: $phone
Конец";
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $yourname <$email> \r\n Reply-To: $email \r\n"; 
mail($olegemail, $tema, $comments_to_myemail, $from);

$from  = "From: $yourname <$email> \r\n Reply-To: $email \r\n"; 
mail($myemail, $tema, $comments_to_myemail, $from);
?>
<p><span style="text-align: center;">Спасибо за Ваш отзыв!</span></p>
<p> <span style="text-align: center;"><a href="../index.html">Вернуться на Главную >>></a></span></p>
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
<html>
<body>
<p>Пожалуйста исправьте следующую ошибку:</p>
<?php echo $myError; ?>
</body>
</html>
<?php
exit();
}
?>
