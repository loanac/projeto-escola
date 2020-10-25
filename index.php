<?php

include_once 'paginas/includes/header.php';

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

include_once 'paginas/includes/footer.php';
?>



<!-- V LIBRAS CÓDIGO -->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>






<!-- scripts jQuery e Javascript -->
<script src="public/js/jquery.js"></script>
<script src="public/css/js/bootstrap.bundle.min.js"></script>
<script src="public/css/js/bootstrap.min.js"></script>
<script src="public/js/depo.js"></script>
<script src="public/js/botao.js"></script>

</body>

</html>