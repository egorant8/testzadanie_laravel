<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Тестовая страница</title>
</head>
<body>
    <center>
            <label>GET</label>
            <form action="json" method="GET">
                <label> Введите json в окно ниже.</label><br>
                <input type="text" name="texJSON"><br>
                <label> Введите depth в окно ниже.</label><br>
                <input type="text" name="depth"><br>
                <label> Введите background в окно ниже.</label><br>
                <input type="text" name="background"><br>
                <button type="submit">Отправить</button>
            </form>
            <label>POST</label>
            <form action="json" method="POST">
                @csrf
                <label> Введите json в окно ниже.</label><br>
                <input type="text" name="texJSON"><br>
                <label> Введите depth в окно ниже.</label><br>
                <input type="text" name="depth"><br>
                <label> Введите background в окно ниже.</label><br>
                <input type="text" name="background"><br>
                <button type="submit">Отправить</button>
            </form>
    </center>
</body>
</html>