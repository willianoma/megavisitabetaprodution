<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Maceio');

$dateLocal = date('m/d/y');
//echo $dateLocal;
//die();
$dataCompleta = strftime("%d de %B de %Y", strtotime($dateLocal));

if ($_POST != NULL) {

    $nomeEmpresa = $_POST['nomeEmpresa'];
    $valor = $_POST['valor'];
    $descricaoLista = $_POST['descricaoLista'];
    $descricaoOutros = $_POST['descricaoOutros'];
    $data = $_POST['data'];
//    $dataCompleta = date("j \d\e F \d\e Y");
} else {
    echo "Dados preenchidos incorretamente";
    die();
}
require('componentes/fpdf/fpdf.php');

class PDF extends FPDF {

// Page header
    function Header() {
//         Logo
        $this->Image('assets/logoMega.png', 10, 6, 45);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
//        $this->Cell(30, 10, 'Title', 1, 0, 'C');
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer() {
        $this->SetY(-25);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 0, 'Mega Empreendimentos e Serviços Gerais ltda. CNPJ-10458975/0001-11 ', 0, 0, 'C');
        $this->Ln(3.5);
        $this->Cell(0, 0, 'Matriz: Av. Governador Luiz Cavalcante, 63-A, Paripueira-AL, CEP-57935-000', 0, 0, 'C');
        $this->Ln(3.5);
        $this->Cell(0, 0, 'Escritório em Maceió: Av. Tomaz Espíndola Nº 326, Sala 109, Maceió-AL, CEP-57051-000', 0, 0, 'C');
        $this->Ln(3.5);
        $this->Cell(0, 0, 'contato@mempreendimentos.com.br / www.mempreendimentos.com.br', 0, 0, 'C');


        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 20);
$pdf->SetXY(0, 5);
$pdf->Cell(210, 70, "RECIBO", 0, 0, 'C');

$pdf->SetXY(5, 58.5);
$pdf->SetFont('Arial', '', 15);
$pdf->Cell(210, 50, "Recebi de $nomeEmpresa, A quantia de R$ $valor . Referente ao(s) ", 0, 0, 'C');
$pdf->SetXY(5, 67);
$pdf->Cell(100, 50, "$descricaoLista $descricaoOutros do mês de $data.", 0, 0, 'L');

//$pdf->Ln(3.5);
//$pdf->SetXY(94, 66);
//$pdf->Cell(100, 0, $descricaoLista." ".$descricaoOutros, 0, 0, 'C');
//$pdf->Ln(3.5);
//$pdf->SetXY(35, 74);
//$pdf->Cell(38, 0, $data, 0, 0, 'R');
//

//$pdf->Cell(28, 0, "Assinatura", 0, 0, 'C');
$pdf->SetXY(5, 150);
$pdf->Cell(200, 0, "Maceió, ".$dataCompleta, 0, 0, 'R');
$pdf->Image('assets/assinatura.png', 10, 190, 100);
$pdf->Ln(3.5);



ob_clean();
$empresaAqruivo= str_replace(' ', '', $nomeEmpresa);
$dataArquivo = str_replace(' ', '', $data);
$pdf->Output("recibosEmpresa/$empresaAqruivo$dataArquivo.pdf", "F");
$pdf->Output();

?>