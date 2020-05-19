<meta charset="utf-8"> 

<?php
$ur="Відправлення повідомлення на пошту";
error_reporting( E_ERROR );  
// створення змінних із полів форми		
if (isset($_POST['name']))			{$name	= $_POST['name'];	if ($name == '')	{unset($name);}}
if (isset($_POST['email']))		{$email	= $_POST['email'];	if ($email == '')	{unset($email);}}
if (isset($_POST['message'])) {$message = $_POST['message']; if($message == '')	{unset($message);}}
if (isset($_POST['send']))		{$send	= $_POST['send'];	if ($send == '')		{unset($send);}}

if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}
if (isset($message) ) {
$message=stripslashes($message);
$message=htmlspecialchars($message);
}
// адреса пошти на яку прийде лист
$address="m.kryshynets@gmail.com";
// текст листа 
$note_message="Ім'я : $name \r\n Email : $email \r\n Додаткова інформація : $message";

if (isset($name)  &&  isset ($send) ) {
mail($address,$ur,$note_message,"Content-type:text/plain; windows-1251"); 
// повідомлення після відправлення форми
echo "<p style='color:#009900;'>Шановний(а) <b>$name</b> Ваш лист успішно відправлено. <br> Дякуємо. <br>Найближчим часом ви отримаєте відповідь на пошті <b> $email</b>.</p>";
}

?>