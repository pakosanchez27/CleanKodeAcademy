<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    
    protected $fpdf;
 
    public function __construct()
    {
        $this->fpdf = new Fpdf('P', 'mm', 'Letter');
    }

    public function index() 
    {
        // Encabezado
        $this->fpdf->AddPage();
        $this->fpdf->Image(public_path('img/logo.png'), 10, 10, 30);
        $this->fpdf->SetFont('Arial', 'B', 12);
        $this->fpdf->Cell(0, 6, 'CleanKode Academy', 0, 1, 'C');
        $this->fpdf->SetFont('Arial', '', 10);
        $this->fpdf->Cell(0, 6, 'Calle Pichirilo 327 Col. Benito Juarez, Nezahualcoyotl, Estado de Mexico', 0, 1, 'C');
        $this->fpdf->Cell(0, 6, 'Teléfonos: 5534073137', 0, 1, 'C');
        $this->fpdf->Cell(0, 6, 'RFC de la empresa: FA22224106HDRRF', 0, 1, 'C');
        $this->fpdf->Ln(10);
    
        // Encabezado de la tabla
        $this->fpdf->SetFont('Arial', 'B', 12);
        $this->fpdf->SetFillColor(117, 79, 254); // Fondo morado #754FFE
        $this->fpdf->SetTextColor(255); // Texto en blanco
        $this->fpdf->Cell(47.5, 10, 'Nombre', 1, 0, 'C', true);
        $this->fpdf->Cell(47.5, 10, 'Concepto', 1, 0, 'C', true);
        $this->fpdf->Cell(47.5, 10, 'Fecha', 1, 0, 'C', true);
        $this->fpdf->Cell(47.5, 10, 'Pago', 1, 1, 'C', true);
    
        // Contenido de la tabla
        $this->fpdf->SetFillColor(255); // Restaurar color de fondo predeterminado
        $this->fpdf->SetTextColor(0); // Restaurar color de texto predeterminado
        $this->fpdf->SetFont('Arial', '', 10);
        $this->fpdf->Cell(47.5, 10, 'Juan Perez', 1, 0, 'C');
        $this->fpdf->Cell(47.5, 10, 'Pago de servicios', 1, 0, 'C');
        $this->fpdf->Cell(47.5, 10, date('Y-m-d'), 1, 0, 'C');
        $this->fpdf->Cell(47.5, 10, '$100.00', 1, 1, 'C');
    
        // Términos legales
        $this->fpdf->SetFont('Arial', 'I', 10);
        $this->fpdf->MultiCell(0, 10, 'Términos Legales: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et tristique justo, ac venenatis arcu. Quisque quis tortor vel ligula aliquam congue.', 0, 'J');
    
        // Mostrar el PDF
        $this->fpdf->Output();
    
        exit;
    }
    

}
