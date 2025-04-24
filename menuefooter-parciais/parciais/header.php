<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua página</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo"><a href="/menuefooter-parciais/">MinhaMarca</a></div>
            <div class="menu-toggle" id="menu-toggle">&#9776;</div>
            <ul class="nav-list" id="nav-list">
                <li><a href="/menuefooter-parciais/">Início</a></li>
                <li><a href="/menuefooter-parciais/sobre.php">Sobre</a></li>
                <li><a href="/menuefooter-parciais/servicos.php">Serviços</a></li>
                <li><a href="/menuefooter-parciais/contato.php">Contatos</a></li>
            </ul>
        </nav>
    </header>
 
    <script>
        document.addEventListener("DomContentLoaded", function () {
            const toggle = document.getElementById('menu-toggle');
            const navList = document.getElementById('nav-list');
 
            toggle.addEventListener('click', () => {
                navList.classList.toggle('active');
 
            });
 
            // Fecha o menu ao clicar em um item
            const navLinks = navList.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    navList.classList.remove('active');
                });
            });
        });
 
 
 
 
    </script>
 

 
 