



<?hpp


// Header
include_once "paginas/includes/header.php";
// fim Header


// Páginas

if (isset($_GET['pg'])) {
    $paginas = $_GET['pg'];

    switch ($paginas) {
        case 'inicial':
            include "paginas/inicio.php";
            break;

        case 'sobre':
            include "paginas/sobre.php";
            break;

        case 'matriculas':
            include "paginas/agendamento.php";
            break;

        case 'servicos':
            include "paginas/servico.php";
            break;

        case 'contato':
            include "paginas/contato.php";
            break;

        case 'sala virtual':
            include "paginas/unidades.php";
            break;

        case 'ensino':
            include "paginas/unidades.php";
            break;

        default:
            #code
            break;
    }
} else {
    echo "página não Definida";
    // include "paginas/inicial.php"
}

// fim páginas

// footer
include_once "paginas/includes/footer.php"
// fim footer



?>
