<?php
require 'componentes/fpdf/fpdf.php';

$visita = $_REQUEST['visita'];

$id = $visita->getId();
$empresa = $visita->getEmpresa();
$horaDeInicio = $visita->getHoraDeInicio();
$horaDeTermino = $visita->getHoraDeTermino();
$horaDeCadastro = $visita->getHoraLocal();
$descricao = $visita->getDescricao();
$pendencias = $visita->getPendencias();
$corretiva = $visita->getCorretiva();
$usuario = $visita->getUsuario();
$localization = $visita->getLocalization();

class ComprovanteVisita extends FPDF {

// Page header
    function Header() {
// Logo
        $this->Image('assets/logoMega.png', 10, 6, 45);
// Arial bold 15
        $this->SetFont('Arial', 'B', 15);
// Move to the right
        $this->Ln(20);
        $this->Cell(50);

// Title
        $this->Cell(90, 15, 'Comprovante de Visita Técnica', 0, 0, 'C');
// Line break
        $this->Ln(20);
    }

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
$pdf = new ComprovanteVisita();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);


//$pdf->SetX("");

//$pdf->Cell(0, 0, 'Empresa Visitada: '.$empresa.'                           '.'Técnico Responsável: '. $usuario,0,0,'C');
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 0, 'Empresa Visitada: '.$empresa,0,0,'L');
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 0, 'Técnico Responsável: '. $usuario,0,0,'L');
$pdf->Ln(8);

//$pdf->Cell(0, 0, 'Data/Hora de Entrada: '.$horaDeInicio.'                   '.'Data/Hora de Saída: '. $horaDeTermino,0,0,'C');
$pdf->Cell(0, 0, 'Data/Hora de Entrada: '. $horaDeInicio,0,0,'L');
$pdf->Ln(8);
$pdf->Cell(0, 0, 'Data/Hora de Saída: '. $horaDeTermino,0,0,'L');

$pdf->Ln(15);
//$pdf->Cell(190, 0, '',1,0,'C');
//$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 0, 'Detalhamento dos Serviços Realizados: ', 0, 0, 'C');
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 40, $descricao, 1, 0, 'C');
$pdf->Ln(50);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 0, 'Detalhamento de Pendencias Realizados: ', 0, 0, 'C');
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(190, 40, $pendencias, 1, 0, 'C');

$pdf->Ln(50);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 0, 'Dados internos do sistema: ', 0, 0, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Ln(10);
$pdf->Cell(0, 0, 'Hora de Registro: '.$horaDeCadastro,0,0);
$pdf->Ln(10);
$pdf->Cell(0, 0, 'Localização: '.$localization,0,0);
$pdf->Ln(10);
//$pdf->Cell(0, 0, 'Data de solicitação do comprovante: '.'',0,0);
$pdf->SetY(-50);
$pdf->Cell(0, 0, '',0,0,'R');














ob_clean();
$pdf->Output();
?>



















//echo  $empresa;


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$empresa);
ob_clean();
$pdf->Output();






//var_dump($visita);
?>