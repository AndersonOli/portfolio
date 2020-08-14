<!DOCTYPE html>
    <html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Anderson Oliveira</title>
        <link rel="stylesheet" href="assets/css/estilo.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://kit.fontawesome.com/a062f3a0fc.js"></script>
        <script src="assets/js/navigation.js"></script>
    </head>
    <body>
        <header class="header">
            <div class="logo">
            </div>

            <nav class="navbar-top">
                <ul>
                    <li class="active navigation" data-navigation="home">Início</li>
                    <li class="navigation" data-navigation="blog">Blog</li>
                    <li class="navigation" data-navigation="about">Sobre</li>
                </ul>
            </nav>
        </header>

        <!-- contact alert -->
        <span class="alert">
            <button id="close-alert">
                <i class="far fa-times-circle"></i>
            </button>

            <div>
                <span class="icon-alert">
                    <i class="fab fa-whatsapp"></i>
                </span>
                <h4>86 9958-0740</h4>
            </div>

            <div>
                <span class="icon-alert">
                    <i class="far fa-envelope"></i>
                </span>
                <h4 class="mobile-mail">contactandersonoliveira<span class="break-line"></span>@gmail.com</h4>
            </div>
        </span>

        <span class="overlay"></span>

        <main class="main">
            <div class="content">
                <div class="photo">
                    <span class="box-adjust">
                        <button class="open-alert">Contate-me</button>
                    </span>
                </div>

                <div class="little-about">
                    <h1><span class="greetings">Olá, eu sou </span>Anderson</h1>
                </div>
            </div>

            <div class="blog">
                <div class="content-post">
                    <div class="post">
                        <div class="post-image"></div>
                        <h2>Title of the post</h2>
                        <p>
                            Lorem ipsum ipsum ipsum ipsum ipsum ipsum ipsum
                            ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum
                        </p>
                    </div>

                    <div class="post">
                        <div class="post-image"></div>
                        <h2>Title of the post</h2>
                        <p>
                            Lorem ipsum ipsum ipsum ipsum ipsum ipsum ipsum
                            ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum
                        </p>
                    </div>
                </div>
            </div>

            <div class="about">
                <p>
                    Olá, sou Anderson Oliveira, programador e estudante de Enegenharia de Software.
                    Formado em Eletrônica pelo Instituto Federal do Piauí, autodidata em programação desde os 12/13 anos de idade,
                    sempre tive interesse em qualquer coisa que fosse diferente e muito gosto de aprender, aprender coisas novas e vivenciar tais.
                    Nas horas vagas faço 'freelas' na área WEB e estou começando a escrever artigos no <a target="_blank" href="https://medium.com/@andersonoli">Medium</a>.
                    <span class="open-alert">Contate-me</span>
                </p>
            </div>
        </main>
    </body>
</html>
