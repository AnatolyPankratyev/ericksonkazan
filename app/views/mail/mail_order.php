<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <li>Имя: <?=$_POST['name']; ?></li>
    <li>Телефон: <?=$_POST['tel']; ?></li>
    <li>Email: <?=$_POST['email']; ?></li>
    <li>Сообщение: <?=$_POST['message']; ?></li>
    <li>Книга: <?=$_POST['bonus1']; ?></li>
    <li>10 областе применения коучинга: <?=$_POST['bonus2']; ?></li>
    <li>Встреча с коучем: <?=$_POST['bonus3']; ?></li>
</ul>

</body>
</html>