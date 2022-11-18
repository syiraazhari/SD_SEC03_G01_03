<?php   
                session_start();
                include 'config.php';  

                require ('fpdf181/fpdf.php');
                

                $pdf = new FPDF();
                $pdf->AddPage();
                $pdf->Image('img/banner.png', 0, 0, -90);
                $pdf->Ln(8);
                $pdf->SetFont('Arial', '', 40);
                $pdf->Cell(55, 55, 'BOOKING PAYMENT', 0, 0);
                $pdf->Ln(42);
                $pdf->SetFont('Arial', '', 12);
                $pdf->Ln(2);
                $pdf->Cell(55, 5, 'Reference Code', 0, 0);
                $pdf->Cell(58, 5, ': 026ETY', 0, 0);
                $pdf->Cell(25, 5, 'Date', 0, 0);
                $pdf->Cell(52, 5, ': 2018-12-24 11:47:10 AM', 0, 1);
                $pdf->Cell(55, 5, 'Amount', 0, 0);
                $pdf->Cell(58, 5, ': 2674', 0, 0);
                $pdf->Cell(25, 5, 'Channel', 0, 0);
                $pdf->Cell(52, 5, ': WEB', 0, 1);
                $pdf->Cell(55, 5, 'Status', 0, 0);
                $pdf->Cell(58, 5, ': Complete', 0, 1);
                $pdf->Line(10, 80, 200, 80);
                $pdf->Ln(10);
                $pdf->Cell(55, 5, 'Product Id', 0, 0);
                $pdf->Cell(58, 5, ': 64351-84503', 0, 1);
                $pdf->Cell(55, 5, 'Tax Amount', 0, 0);
                $pdf->Cell(58, 5, ': 0', 0, 1);
                $pdf->Cell(55, 5, 'Product Service Charge', 0, 0);
                $pdf->Cell(58, 5, ': 0', 0, 1);
                $pdf->Cell(55, 5, 'Product Delivery Charge', 0, 0);
                $pdf->Cell(58, 5, ': 0', 0, 1);
                $pdf->Line(10, 60, 200, 60);
                $pdf->Ln(10);//Line break
                $pdf->Cell(55, 5, 'Paid by', 0, 0);
                $pdf->Cell(58, 5, ': Nawaraj Shah', 0, 1);
                $pdf->Line(155, 150, 195, 150);
                $pdf->Ln(5);//Line break
                $pdf->Cell(140, 5, '', 0, 0);
                $pdf->Cell(50, 5, ': Signature', 0, 1, 'C');

                $pdf->Output();
?>