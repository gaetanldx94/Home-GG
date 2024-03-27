<?php
require 'vendor/autoload.php';

$recette = json_decode($_POST['recette'], true);

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('Helvetica', '', 12);
$pdf->writeHTML("Tableau nutritionnel de la recette :<br/><br/>");

foreach ($recette as $ingredient) {
	$pdf->writeHTML($ingredient['nom'] . " (" . $ingredient['quantite'] . $ingredient['unite'] . ")<br/>");
	$pdf->writeHTML("Calories: " . ($ingredient['calories'] / 100 * $ingredient['quantite']) . "<br/>");
	$pdf->writeHTML("Protéines: " . ($ingredient['proteines'] / 100 * $ingredient['quantite']) . "<br/>");
	$pdf->writeHTML("Lipides: " . ($ingredient['lipides'] / 100 * $ingredient['quantite']) . "<br/>");
	$pdf->writeHTML("Glucides: " . ($ingredient['glucides'] / 100 * $ingredient['quantite']) . "<br/>");
	$pdf->writeHTML("Fibres: " . ($ingredient['fibres'] / 100 * $ingredient['quantite']) . "<br/><br/>");
}

$pdfContent = $pdf->Output('tableau_nutritionnel.pdf', 'S');

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="tableau_nutritionnel.pdf"');
header('Content-Length: ' . strlen($pdfContent));

echo $pdfContent;
?>
