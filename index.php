<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="public/css/css/bootstrap.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="public/fonts/fontawesome-free-5.15.1-web/css/all.css">
    <!-- estilo css -->
    <link rel="stylesheet" href="public/css/meuEstilo.css">
    <link rel="stylesheet" href="public/css/salavirtual.css">

    <title>Colégio Lorem Ipsum</title>

</head>

<body>

    <header>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="#"><img class="icon" src="public/img/icone-home.png" alt=""></a>
            <a class="nav-item nav-link social" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="nav-item nav-link social" href="#"><i class="fab fa-instagram"></i></a>
            <a class="nav-item nav-link social" href="#"><i class="fab fa-whatsapp"></i></a>
            <a class="nav-item nav-link social" href="#"><i class="far fa-envelope"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php?pg=inicial"> Início <span class="sr-only">(Página atual)</span></a>
                    <a class="nav-item nav-link" href="index.php?pg=sobre">Sobre</a>
                    <a class="nav-item nav-link" href="index.php?pg=ensino">Ensino</a>
                    <a class="nav-item nav-link" href="index.php?pg=salavirtual">Sala Virtual</a>
                    <a class="nav-item nav-link" href="index.php?pg=matricula">Matrícula</a>
                    <a class="nav-item nav-link" href="index.php?pg=contato">Contatos</a>
                </div>
            </div>
        </nav>
        <!-- final da navbar -->
    </header>


    <?php
    $paginas = isset($_GET['pg']);
    if ($paginas) {
        switch ($_GET['pg']) {
            case 'inicial':
                include_once "paginas/inicial.php";
                break;
            case 'sobre':
                include_once "paginas/sobre.php";
                break;
            case 'ensino':
                include_once "paginas/ensino.php";
                break;
            case 'salavirtual':
                include_once "paginas/salavirtual.php";
                break;
            case 'matricula':
                include_once "paginas/matricula.php";
                break;
            case 'contato':
                include_once "paginas/contato.php";
                break;
        }
    } else {
        include_once "paginas/inicial.php";
    }
    ?>











    <!-- scripts jQuery e Javascript -->
    <script src="public/js/jquery.js"></script>
    <script src="public/css/js/bootstrap.bundle.min.js"></script>
    <script src="public/css/js/bootstrap.min.js"></script>
</body>

</html>