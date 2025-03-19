<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type'); 

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(200);
    exit;
}

require_once 'lib/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Obter o HTML recebido via POST
$html = file_get_contents('php://input');
if (empty($html)) {
    echo "Erro: HTML não fornecido!";
    exit;
}

// Adiciona um estilo CSS para garantir que não haja bordas
$css = "
    body, html {
        margin: 0;
        padding: 0;
    }
";

$html = '<style>' . $css . '</style>' . $html;

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Enviar o PDF gerado para o navegador sem fazer download automático
$dompdf->stream("documento.pdf", array("Attachment" => 0));
?>
