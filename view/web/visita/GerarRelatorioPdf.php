<?php
$listaVisitas = $_REQUEST['listaVisita'];
unlink("bloco1.txt");
$fp = fopen("bloco1.txt", "a");


//var_dump($horaAgora);
//die();
foreach ($listaVisitas as $visita) {
  
    if ($visita->getUsuario()=='Adenis Duarte') {

        $id = trim($visita->getId());
        $empresa = trim($visita->getEmpresa());
        $horaDeInicio = trim($visita->getHoraDeInicio());
        $horaDeTermino = trim($visita->getHoraDeTermino());
        $descricao = trim($visita->getDescricao());
        $pendencias = trim($visita->getPendencias());
        $corretiva = trim($visita->getCorretiva());
        $usuario = trim($visita->getUsuario());
        $localization = trim($visita->getLocalization());
        $horaLocal = trim($visita->getHoraLocal());

        $escreve = fwrite($fp, "$id" . "|" . " $empresa" . "|" . " $horaDeInicio" . "|" . " $horaDeTermino" . "|" . " $descricao" . "|" . " $pendencias" . "|" . " $corretiva" . "|" . " $usuario" . "|" . " $localization" . "|" . " $horaLocal" . "\r\n");
    }

//    echo "$id $empresa $horaDeInicio $horaDeTermino $descricao $pendenciasm $corretiva $usuario $localization $horaLocal";
}
fclose($fp);
?>


<?php
require('componentes/fpdf/fpdf.php');

class PDF extends FPDF {

// Load data
    function LoadData($file) {
// Read file lines
        $lines = file($file);
        $data = array();
        foreach ($lines as $line)
            $data[] = explode('|', trim($line));
        return $data;
    }

    function ImprovedTable($header, $data) {

        $selectData = $_POST['selectData'];
        $tratarData = explode("-", $selectData);
        $ano = $tratarData[0];
        $mes = $tratarData[1];
        $dataTratada = $mes . "-" . $ano;


// Column widths
        $w = array(8, 38, 32, 32, 80, 20, 35, 30);
        $this->Image('assets/logoMega.png', 10, 6, 30);
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 0, 'Relatório Mensal: ' . $dataTratada, 0, 0, 'C');

// Header
        $this->SetY(25);
        $this->SetFont('Arial', 'B', 10);
        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C');
        $this->Ln();

// Data
        $fill = false;
        $heighCell = 20;
        $widthCell = 80;
        $border = 1;
        $marginTopCell = 2;

        foreach ($data as $row) {
            $this->SetFont('Arial', '', 8);
            $this->Cell($w[0], $heighCell, $row[0], $border, 'LR', 'C');
            $this->Cell($w[1], $heighCell, $row[1], $border, 'LR', 'C');
            $this->Cell($w[2], $heighCell, $row[2], $border, 'LR', 'C');
            $this->Cell($w[3], $heighCell, $row[3], $border, 'LR', 'C');

            //pega X e Y
            $cordY = $this->GetY();
            $cordX = $this->GetX();
            //Desenha Linhas
            $this->Cell($w[4], $heighCell, "", $border, 'LR', 'C');

            //Volta para lugar correto de escrita
            $this->SetXY($cordX, $cordY + $marginTopCell);

            //Escreve e quebra a linha
            $this->Cell($w[4], $heighCell, $this->MultiCell($widthCell, 3.5, $row[4], 0, 'C'), '0', '2', 'C');

            //Volta para linha aterior de quebra de linha
            $this->SetXY($cordX + $widthCell, $cordY);

//            $this->Cell($w[5], $heighCell, $row[6], $border, 'LR', 'C');
            $this->Cell($w[5], $heighCell, $row[7], $border, 'LR', 'C');
            $this->Cell($w[6], $heighCell, $row[8], $border, 'LR', 'C');
            $this->Cell($w[7], $heighCell, $row[9], $border, 'LR', 'C');
//            $this->Cell($w[9], $heighCell, $row[9], $border, 'LR', 'C');
            $this->Ln();

//serve para deixar cor sim e cor não
//            $fill = !$fill;
        }

// Closing line
        $this->Cell(array_sum($w), 0, '', 'T');

        $this->SetXY(100, $cordY);
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 60, 'Declaro que realizei todas as visitas listadas acima.', 0, 0, '');

        $this->SetXY(75, $cordY);
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(0, 110, 'Adenis Duarte', 0, 0, '');
        $this->SetXY(175, $cordY);
        $this->Cell(0, 110, 'Mega Empreendimentos', 0, 0, '');
//        $this->Ln(3);

        date_default_timezone_set('America/Maceio');
        $horaAgora = date('d M Y H:i:s');


        $this->SetXY(205, $cordY + 9);
        $this->Cell(0, 110, "Maceió, " . $horaAgora, 0, 0, 'R');
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

//    function Rodape() {
//
//        $this->SetXY(100, $cordY);
//        $this->SetFont('Arial', '', 12);
//        $this->Cell(0, 60, 'Declaro que realizei todas as visitas listadas acima.', 0, 0, '');
//
//        $this->SetXY(75, $cordY);
//        $this->SetFont('Arial', 'B', 10);
//        $this->Cell(0, 110, 'Adenis Duarte', 0, 0, '');
//        $this->SetXY(175, $cordY);
//        $this->Cell(0, 110, 'Mega Empreendimentos', 0, 0, '');
//    }
}

$pdf = new PDF('L');
// Column headings
$header = array('id', 'Empresa', 'Inicio', 'Final', 'Descrição', 'usuário', 'Localização', 'Registro');
// Data loading
$data = $pdf->LoadData('bloco1.txt');
$pdf->SetFont('Arial', '', 8);
$pdf->AddPage();
$pdf->ImprovedTable($header, $data);
$pdf->AliasNbPages();
//$pdf->AddPage();
//$pdf->Rodape();
ob_clean();
$pdf->Output();
?>































//    function ImprovedTable($header, $data) {
//// Column widths
//        $w = array(5, 40, 32, 32, 80, 20, 13, 20, 35, 30);
//// Header
//        for ($i = 0; $i < count($header); $i++)
//            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C');
//        $this->Ln();
//// Data
//        $fill = false;
//        $heigh = 14;
//        $border = 1;
////        var_dump($data);
//        foreach ($data as $row) {
//            $this->Cell($w[0], $heigh, $row[0], $border, 'LR', 'C');
//            $this->Cell($w[1], $heigh, $row[1], $border, 'LR', 'C');
//            $this->Cell($w[2], $heigh, $row[2], $border, 'LR', 'C');
//            $this->Cell($w[3], $heigh, $row[3], $border, 'LR', 'C');
//            $this->Cell($w[4], $heigh, $row[4], $border, 'LR', 'C');
//            $this->Cell($w[5], $heigh, $row[5], $border, 'LR', 'C');
//            $this->Cell($w[6], $heigh, $row[6], $border, 'LR', 'C');
//            $this->Cell($w[7], $heigh, $row[7], $border, 'LR', 'C');
//            $this->Cell($w[8], $heigh, $row[8], $border, 'LR', 'C');
//            $this->Cell($w[9], $heigh, $row[9], $border, 'LR', 'C');
//            $this->Ln();
//
//            //serve para deixar cor sim e cor não
////            $fill = !$fill;
//        }
//// Closing line
//        $this->Cell(array_sum($w), 0, '', 'T');
//    }
//
//}
//
//$pdf = new PDF("L");
//// Column headings
//$header = array('id', 'Empresa', 'Inicio', 'Final', 'Descrição', 'pendencias', 'corretiva', 'usuário', 'Localização', 'Registro');
//// Data loading
//$data = $pdf->LoadData('bloco1.txt');
//$pdf->SetFont('Arial', '', 8);
//$pdf->AddPage();
//$pdf->ImprovedTable($header, $data);
//ob_clean();
//$pdf->Output();
//?>
//


