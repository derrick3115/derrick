<?php
// Connect to database server
            
            
            $conn = mysqli_connect("127.0.0.1", "root", "");
            if (!$conn) {
                die("can not connect" . mysqli_error());
            }

            // Select database
            mysqli_select_db($conn, 'reg');
            $query = "SELECT * FROM form1";
$rs=mysqli_query($conn,$query);
 $row = mysqli_fetch_array($rs,true);
 $id=$row['id'];
 $me1=$row['me1'];
 $irangamimerere=$row['irangamimerere'];
 $id1=$row['id1'];
 $akarere=$row['akarere'];
 $umurenge=$row['umurenge'];
 $akagari=$row['akagari'];
 $umudugudu=$row['umudugudu'];
 $telefoni=$row['telefoni'];
 $email=$row['email'];
 $upi=$row['upi'];
 $intara=$row['intara'];
  $ibisobanuro=$row['ibisobanuro'];
  
 print require ("pdf/fpdf/fpdf.php");

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
 $pdf->Cell(0,10,"Welcome {$me1} ",1,1,C);
$pdf->Cell(50,10,"Name:",1,0);
$pdf->Cell(50,10,$me1,1,0);


$pdf->Cell(50,10,"Irangamimerere:",1,0);
$pdf->Cell(50,10,$irangamimerere,1,0);


$pdf->Cell(50,10,"Indangamuntu:",1,0);
$pdf->Cell(50,10,$id1,1,0);


$pdf->Cell(50,10,"Akarere:",1,0);
$pdf->Cell(50,10,$akarere,1,0);


$pdf->Cell(50,10,"Umurenge:",1,0);
$pdf->Cell(50,10,$umurenge,1,0);


$pdf->Cell(50,10,"akagari:",1,0);
$pdf->Cell(50,10,$akagari,1,0);


$pdf->Cell(50,10,"Umudugudu:",1,0);
$pdf->Cell(50,10,$umudugudu,1,0);


$pdf->Cell(50,10,"Telefoni:",1,0);
$pdf->Cell(50,10,$telefoni,1,0);


$pdf->Cell(50,10,"Email:",1,0);
$pdf->Cell(50,10,$email,1,0);


$pdf->Cell(50,10,"Upi:",1,0);
$pdf->Cell(50,10,$upi,1,0);


$pdf->Cell(50,10,"Intara:",1,0);
$pdf->Cell(50,10,$intara,1,0);


$pdf->Cell(50,10,"Ibisobanuro:",1,0);
$pdf->Cell(50,10,$ibisobanuro,1,0);
 
 $pdf->Output();



?>