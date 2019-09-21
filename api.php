<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $user = 'cf98197_mainbd';
    $pass = '12345';
    $db = new PDO('mysql:host=localhost;dbname=cf98197_mainbd', $user, $pass);
    $db->exec("INSERT INTO requests(`time`, name, phone, email) VALUES(NOW(), '$name', '$phone', '$email')");
    echo '1';
    $message = "Нужна Web-разработка?\n+79138208314\nАндрей Кузин";
    $message = wordwrap($message, 70);
    var_dump(mail($email, 'Вы заполнили форму обратной связи на сайте', $message, "kuzin.website", "-f akkurat@akkurat.ru"));
    var_dump(mail('bentaxrus@mail.ru', 'Order', $message, "from kuzin.website", "-f akkurat@akkurat.ru"));