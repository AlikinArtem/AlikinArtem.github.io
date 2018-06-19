<?php
    header('Content-Type: text/html; charset=utf-8');
    if (isset($_POST['surname'])) { $surname = $_POST['surname']; if ($surname == '') { unset($surname);} }
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
    if (isset($_POST['secondn'])) { $secondn = $_POST['secondn']; if ($secondn == '') { unset($secondn);} }
    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
  
 if (empty($login) or empty($password)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    
    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
    $secondn = stripslashes($secondn);
    $secondn = htmlspecialchars($secondn);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);    
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $login = trim($login);
    $password = trim($password);

    include ("bd.php");
    $result = mysqli_query($db, "SELECT id FROM `users` WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
 
    $result2 = mysqli_query ($db, "INSERT INTO users (login,password,surname,name,secondn,email) VALUES('$login', '$password','$surname','$name','$secondn','$email')");
    
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>