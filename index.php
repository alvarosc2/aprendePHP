<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aprendiendo PHP</title>
</head>
<body>
    <header>
        <div>
            <a href="index.php">Blog de videojuegos</a>
        </div>

        <nav>
            <ul>
                <li><a href="index.php">inicio</a></li>
                <li><a href="categoria1.php">Categoria 1</a></li>
                <li><a href="categoria2.php">Categoria 2</a></li>
                <li><a href="categoria3.php">Categoria 3</a></li>
                <li><a href="categoria4.php">Categoria 4</a></li>
                <li><a href="about.php">Sobre nosotros</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <div>
        <aside>
            <div>
                <h3>Entrar a la web de usuarios</h3>
                <form action="loginform.php" method="post">
                    <label for="email">email</label>
                    <input type="email" name="email" />

                    <label for="password">contraseña</label>
                    <input type="password" name="password" />

                    <input type="submit" value="Entrar">
                    <p>¿No eres miembro todavía?</p>
                    <p><a href="registro.php">registrate</a></p>
                </form>
            </div>
        </aside>
    </div>

    <div id="principal">
        <h1>Últimas entradas</h1>
        <article>
            <h2>Lorem Ipsum</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget 
            justo porttitor arcu lobortis convallis. Quisque ut massa ut odio 
            dapibus volutpat a sit amet velit. Phasellus dui ligula, maximus vel 
            leo ut, blandit pulvinar risus. Ut quis tempus sem. Cras rutrum lectus 
            sed leo sagittis, sit amet pretium enim luctus. Vestibulum nec mauris 
            dignissim, ultricies eros non, efficitur justo. Vivamus vehicula 
            tortor non massa elementum, quis hendrerit dolor malesuada. Fusce 
            accumsan in arcu at ultricies. Maecenas eget mollis ipsum, quis 
            tristique orci. Donec blandit rhoncus efficitur. Sed turpis nisl, 
            ultrices vel ipsum id, congue varius massa. Aliquam bibendum leo sit 
            amet ex pretium blandit. Pellentesque tortor purus, interdum a 
            placerat vitae, auctor eget lectus. Nunc vulputate, urna eu porta 
            hendrerit, eros erat molestie ex, id convallis eros ex nec quam.
            </p>
        </article>
    </div>

    <footer>
        <p>Desarrollado por Alvaro Silva Caballero. 2022</p>
    </footer>
</body>
</html>