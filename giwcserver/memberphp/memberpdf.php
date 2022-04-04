<?php 
session_start();
if(!$_SESSION['username'])
{
    header('location:../loginphp/login.php');
}
if (isset($_POST['pdflist'])){
    require "../fpdf182/fpdf.php";
$conn = new PDO('mysql:host=127.0.0.1:3307;dbname=giwcdata','root','');

class myPDF extends FPDF{
    function header(){
        $this->Image('../maindashphp/IMG-20210113-WA0003.jpg',10,6);
        $this->SetFont('Times','B',18);
        $this->Cell(276,5,'GLORIOUS IMPACT WORSHIP CENTER',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',17);
        $this->Cell(276,10,'MEMBERSHIP REPORT',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(10,10,'No',1,0,'C');
        $this->Cell(25,10,'First Name',1,0,'C');
        $this->Cell(25,10,'Surname',1,0,'C');
        $this->Cell(20,10,'D.O.B',1,0,'C');
        $this->Cell(20,10,'Gender',1,0,'C');
        $this->Cell(20,10,'Status',1,0,'C');
        $this->Cell(20,10,'Email',1,0,'C');
        $this->Cell(20,10,'Contact',1,0,'C');
        $this->Cell(20,10,'Address',1,0,'C');
        $this->Cell(20,10,'City/Town',1,0,'C');
        $this->Cell(20,10,'Group One',1,0,'C');
        $this->Cell(20,10,'Group Two',1,0,'C');
        $this->Cell(20,10,'Chapel',1,0,'C');
       $this->Cell(25,10,'Member Since',1,0,'C');
        $this->Ln();
    }
    function viewTable($conn){
        $this->SetFont('Times','',12);
        $stmt = $conn->query('SELECT * FROM membership');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(10,10,$data->memberno,1,0,'C');
            $this->Cell(25,10,$data->firstName,1,0,'L');
            $this->Cell(25,10,$data->surname,1,0,'L');
            $this->Cell(20,10,$data->date,1,0,'L');
            $this->Cell(20,10,$data->gender,1,0,'L');
            $this->Cell(20,10,$data->status,1,0,'L');
            $this->Cell(20,10,$data->email,1,0,'L');
            $this->Cell(20,10,$data->mobile,1,0,'L');
            $this->Cell(20,10,$data->maddress,1,0,'L');
            $this->Cell(20,10,$data->city,1,0,'L');
            $this->Cell(20,10,$data->group1,1,0,'L');
            $this->Cell(20,10,$data->group2,1,0,'L');
            $this->Cell(20,10,$data->chapel,1,0,'L');
            $this->Cell(25,10,$data->since,1,0,'L');
            $this->Ln();
        }
    }

}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($conn);
$pdf->Output();

}


 




?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head> $conn = new PDO('mysql:host=127.0.0.1:3307;dbname=giwcdata','root','');
<body> while($data = $stmt->fetch(PDO::FETCH_OBJ)){
    <style>
        Image{
            width: 6%;
        }
    </style>
</body>
</html>-->