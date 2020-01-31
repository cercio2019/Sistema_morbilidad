<?php 
include_once 'fpdf.php';
class Pdf extends FPDF
{
    
  function Header()
{
    global $title;
    $this->Ln(10);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Calculamos ancho y posición del título.
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    // Colores de los bordes, fondo y texto
    $this->SetDrawColor(255, 255, 255);
    $this->SetFillColor(255, 255, 255);
    $this->SetTextColor(0,0,0);
    // Ancho del borde (1 mm)
    $this->SetLineWidth(0);
    // Título
    $this->Cell($w,9,$title,1,1,'C',true);
    // Salto de línea
    $this->Ln(20);
}

function Footer()
{
    // Posición a 1,5 cm del final
    $this->SetY(-15);
    // Arial itálica 8
    $this->SetFont('Arial','I',8);
    // Color del texto en gris
    $this->SetTextColor(128);
    // Número de página
    $this->Cell(0,10,'Página '.$this->PageNo(),0,0,'C');
}

function ChapterBody($file)
{
    // Times 12
    $this->SetFont('Times','',14);
    // Imprimimos el texto justificado
    $this->MultiCell(0,5,$file);
    // Salto de línea
    $this->Ln();
    // Cita en itálica
    $this->SetFont('','I');
    $this->Cell(0,5,'(fin del extracto)');
}

function PrintChapter($file)
{
    $this->AddPage();
    $this->ChapterBody($file);
}
}

$pdf = new Pdf();
$title = 'Diagnostico del paciente';
$pdf->SetTitle($title);

$datos = [
   
   'id'=> $_POST['id'],
   'cedula'=> $_POST['cedula'],
   'nombre'=> $_POST['nombre'],
   'nombre2'=> $_POST['nombre2'],
   'apellido'=> $_POST['apellido'],
   'apellido2'=> $_POST['apellido2'],
   'edad'=> $_POST['edad'],
   'sexo'=> $_POST['sexo'],
   'telefono'=> $_POST['telefono'],
   'enfermedad'=> $_POST['enfermedad'],
   'recomendaciones'=> $_POST['recomendaciones'],
   'ci_medico'=> $_POST['cedulaM'],
   'medico'=> $_POST['nombreM'],
   'telefonoM'=> $_POST['telefonoM'],
];

$pdf->PrintChapter('Nro registro: '.$datos['id'].'. 

Cedula: '.$datos['cedula'].'                                             Nombre: '.$datos['nombre'].' 

Segundo Nombre: '.$datos['nombre2'].'                                         Apellido: '.$datos['apellido'].' 

Segundo apellido: '.$datos['apellido2'].'                                     Edad: '.$datos['edad'].'

Sexo: '.$datos['sexo'].'                                              Telefono: '.$datos['telefono'].'.

Enfermedad: '.$datos['enfermedad'].'.



Recomendaciones: '.$datos['recomendaciones'].'.


Cedula del medico: '.$datos['ci_medico'].'                             Nombre del medico: '.$datos['medico'].'.

Telefono del medico: '.$datos['telefonoM'].'. ');
          
$pdf->Output();
 ?>

