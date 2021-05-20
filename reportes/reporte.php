<?php
	include 'plantilla.php';
	require '../conexion.php';
	
	$sql = "SELECT MATID,MATNOMBRE,CARNOMBRE,MMATESTADO FROM materias m, carreras c WHERE m.CARID=c.CARID";
	$registros=mysqli_query($con,$sql);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'Código',1,0,'C',1);
	$pdf->Cell(20,6,'Materia',1,0,'C',1);
	$pdf->Cell(70,6,'Carrera',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($registro=mysqli_fetch_assoc($registros) )
	{
		$pdf->Cell(70,6,utf8_decode($registro['MATID']),1,0,'C');
		$pdf->Cell(20,6,$registro['MATNOMBRE'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($registro['CARNOMBRE']),1,1,'C');
	}
    $pdf->Output("nombre_archivo.pdf","F");
	//$pdf->Output();
?>