<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de usuário</h1>
    <form action="/user/newuser" method="post">
        @csrf
        <input type="text" name="name" id="">
        <input type="text" name="username" id="">
        <input type="email" name="email" id="">
        <input type="password" name="password" id="">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>