<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Nadia Labraoui</title>
</head>
<body>
<h1>Formularios II + Sesiones</h1>
<form method="post" action="./src/destino.php">

    <label>Nombre de usuario (user)
        <input type="text" name="user" placeholder="Usuario..." required>
    </label>

    <label> Contraseña (password)
        <input type="password" name="passwd" placeholder="*********" required>
    </label>

    <input type="hidden" value="1" name="enviado">
    <input type="submit" value="Enviar">

</form>

</body>
</html>
