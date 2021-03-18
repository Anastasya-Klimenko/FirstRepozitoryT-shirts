<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8" /> 
</head>
<body>
<?php
 $form = 
 '<form action="Post.php" method="POST" >
 <p><span>Логин:</span> 
 <span ><input type="text" size="20" 
name="login" /></span></p>
 <p><span>Пароль:</span>
 <span > <input type="password" 
name="password" /></span></p>
 <input type="submit" 
name="submit_form" value="Отправить" />
 </form>
 </body>
 </html>';
 
 if (isset($_POST['submit_form'])) {
 if ($_POST['login'] != 'admin' ||
$_POST['password'] != 'password') {
 echo "<h2>Неправильный ввод данных!</h2>".$form; 
 die();
 } 
 } else {
 echo $form;
 die(); 
 } 
?>
<h1> Добро пожаловать на наш сайт!</h1>
</body> 