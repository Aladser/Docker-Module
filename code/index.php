<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Модуль 32. Контейнеры и Docker</title>
    <link rel="stylesheet" href="index.css"> 
</head>
<body>
    <div class='container'>
        <h2 class='header-2'>Критерии проверки</h2>
        <ul>
            <li>
                <h4>0 баллов</h4>
                <p>Задание не выполнено или выполнено некорректно.</p>
            </li>
            <li>
                <h4>10 баллов</h4>
                <p>Сайт отвечает на имя application.local, его можно вызвать из браузера.</p>
                <p>При вызове сайт выводит на экран приветствие на ваше усмотрение.</p>
                <p>Контейнеры должны быть сконфигурированы при помощи docker-compos и отдельных Dockerfile.</p>
                <p>Настроен проброс директорий с кодом.</p>
                <p>В качестве результата покажите compose файл для воспроизведения контейнеров и скриншот вызова phpinfo через браузер по адресу http://application.local</p>          
            </li>
            <li>
                <h4>15 баллов</h4>
                <p>Выполнены критерии на 10 баллов.</p>
                <p>Настройте проброс возможность передавать в контейнер пользовательский php.ini. Например, если потребуется включить показ ошибок. </p>
            </li>
            <li>
                <h4>20 баллов</h4>
                <p>Выполнены критерии на 15 баллов.</p>
                <p>У MySQL есть файл конфигурации /etc/my.cnf.</p>
                <p>Чтобы подключиться к БД извне вам нужно задать в нём параметр</p> 
            </li>
        </ul>
    </div>
    <div class='container'>
        <?= phpinfo() ?>
    </div>
</body>
</html>