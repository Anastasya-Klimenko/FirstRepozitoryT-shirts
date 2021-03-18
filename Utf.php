<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8" /> 
<style> <!--выравниваем форму по центру экрана--->
 form {
 width: 290px;
 border: 1px solid black;
 }
</style>
</head>
<body>
<?php
 if (isset($_GET['submit_form'])) {
 echo "<h2>Ответ сервера:</h2>";
 echo "Ваше имя:<strong>
".$_GET['user_name']."</strong></br>";
 echo "И вы родились в <strong>
".$_GET['user_year']."</strong> году!"; 
 }
?>
<form action="Utf.php" method="get" >
<p><span>Ваше имя:</span> 
<span ><input type="text" size="20" name="user_name" /></span>
</p>
<p><span>Год рождения:</span><span> 
<input type="number" name="user_year"/></span>
</p>
<input type="submit" name="submit_form" value="Отправить" />
</form>
</body> 
</html>