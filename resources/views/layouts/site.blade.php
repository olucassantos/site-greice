<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Gelateria da Greice</title>

        <style>
            .container {
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .container h1 {
                font-size: 2em;
                color: #fff;
                text-align: center;
            }

            .container p {
                font-size: 1.5em;
                color: #fff;
                text-align: center;
            }

            nav {
                width: 100%;
                height: 50px;
                background-color: #000;
                display: flex;
                justify-content: space-around;
                align-items: center;
            }

            nav a {
                color: #fff;
                text-decoration: none;
            }

            nav a:hover {
                color: #000;
            }

            .container .content {
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            footer {
                width: 100%;
                height: 50px;
                background-color: #000;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            footer p {
                color: #fff;
                text-align: center;
            }

            .container .content .content-left {
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <nav>
            <a href="{{ route('site.index') }}">Página Inicial</a>
            <a href="{{ route('site.sobre') }}">Sobre a Greice</a>
            <a href="{{ route('site.contato') }}">Contato</a>
        </nav>

        <main class="content">
            @yield('conteudo')
        </main>

        <footer>
            <p>Todos os direitos reservados</p>
        </footer>
    </body>
</html>
