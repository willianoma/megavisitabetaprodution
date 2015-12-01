<?php

if ($_POST != NULL) {
    $funcionario = $_POST['nomeUsuario'];
    $valor = $_POST['valor'];
    $descricaoLista = $_POST['descricaoLista'];
    $descricaoOutros = $_POST['descricaoOutros'];
    $data = $_POST['data'];
} else {
    echo "Dados preenchidos incorretamente";
    die();
}
require('componentes/fpdf/fpdf.php');

class PDF extends FPDF {

// Page header
    function Header() {
        // Logo
//        $this->Image('assets/logoMega.png', 10, 6, 45);
//        // Arial bold 15
//        $this->SetFont('Arial', 'B', 15);
//        // Move to the right
//        $this->Cell(80);
//        // Title
//        $this->Cell(30, 10, 'Title', 1, 0, 'C');
//        // Line break
//        $this->Ln(20);
    }

// Page footer
    function Footer() {
//        $this->SetY(-25);
//        $this->SetFont('Arial', 'I', 8);
//        $this->Cell(0, 0, 'Mega Empreendimentos e Serviços Gerais ltda. CNPJ-10458975/0001-11 ', 0, 0, 'C');
//        $this->Ln(3.5);
//        $this->Cell(0, 0, 'Matriz: Av. Governador Luiz Cavalcante, 63-A, Paripueira-AL, CEP-57935-000', 0, 0, 'C');
//        $this->Ln(3.5);
//        $this->Cell(0, 0, 'Escritório em Maceió: Av. Tomaz Espíndola Nº 326, Sala 109, Maceió-AL, CEP-57051-000', 0, 0, 'C');
//        $this->Ln(3.5);
//        $this->Cell(0, 0, 'contato@mempreendimentos.com.br / www.mempreendimentos.com.br', 0, 0, 'C');
//
//
//        $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

// Instanciation of inherited class
$pdf = new PDF();
//$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);


$pdf->Image('assets/reciboAdenis.png', 10, 20, 190);
$pdf->SetXY(165, 54.5);
$pdf->Cell(28, 0, $valor, 0, 0, 'C');
$pdf->Ln(3.5);
$pdf->SetXY(39, 63.5);
$pdf->Cell(66, 0, $descricaoLista." ".$descricaoOutros, 0, 0, 'C');
$pdf->Ln(3.5);
$pdf->SetXY(128, 63.5);
$pdf->Cell(38, 0, $data, 0, 0, 'C');
$pdf->SetXY(71, 92);
$pdf->Cell(38, 0, $funcionario, 0, 0, 'C');

$pdf->Image('assets/reciboAdenis.png', 10, 150, 190);
$pdf->SetXY(165, 184.5);
$pdf->Cell(28, 0, $valor, 0, 0, 'C');
$pdf->Ln(3.5);
$pdf->SetXY(39, 193.5);
$pdf->Cell(66, 0, $descricaoLista." ".$descricaoOutros, 0, 0, 'C');
$pdf->Ln(3.5);
$pdf->SetXY(128, 193.5);
$pdf->Cell(38, 0, $data, 0, 0, 'C');
$pdf->SetXY(71, 222);
$pdf->Cell(38, 0, $funcionario, 0, 0, 'C');

ob_clean();

$funcionarioAqruivo= str_replace(' ', '', $funcionario);
$dataArquivo = str_replace(' ', '', $data);


$pdf->Output("recibosFuncionarios/$funcionarioAqruivo$dataArquivo.pdf", "F");
$pdf->Output();
?>