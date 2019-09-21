<?php
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $user = 'cf98197_mainbd';
    $pass = '12345';
    $db = new PDO('mysql:host=localhost;dbname=cf98197_mainbd', $user, $pass);
    $db->exec("INSERT INTO requests(`time`, name, phone, email) VALUES(NOW(), '$name', '$phone', '$email')");
    echo '1';
    $message = "Нужен Web-site?\n+79138208314\nАндрей Кузин";
    $message = wordwrap($message, 70);
    var_dump(mail($email, 'WEB', $message, "kuzin.website", "-f akkurat@akkurat.ru"));
    var_dump(mail('bentaxrus@mail.ru', 'My Subject', $message, "заголовки", "-f akkurat@akkurat.ru"));