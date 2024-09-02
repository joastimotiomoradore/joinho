<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css"
</head>
<body>
<nav>
        <input type="checkbox" id="checkbox" class="checkbox">
        <label for="checkbox" class="label-menu">Menu<span class="hamburger"></span></label>
        <ul class="menu">
            <li><a href="menu.html" onclick="window.location.reload()">Inicio</a></li>
            <li><a href="#servicos" onclick="hideMenu()">Serviços</a></li>
            <li><a href="#cases" onclick="hideMenu()">Cases</a></li>
            <li><a href="#empresa" onclick="hideMenu()">Empresas</a></li>
            <li><a href="contato.php" onclick="hideMenu()">Contato</a></li>
        </ul>
    </nav>
</body>
</html>