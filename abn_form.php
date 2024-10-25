<?php
    // Get inputs from form...
    $whichform = $_POST["whichform"];
    $ptname = $_POST["ptname"];
    $ptid = $_POST["ptid"];
    $d1 = $_POST["d1"];
    $e1 = $_POST["e1"];
    $f1 = number_format((float)$_POST["f1"], 2, ".", "");

    $d2 = $_POST["d2"];
    $e2 = $_POST["e2"];
    $f2 = $_POST["f2"];
    if ($f2 != "") {
        $f2 = number_format((float)$_POST["f2"], 2, ".", "");
    }
    $d3 = $_POST["d3"];
    $e3 = $_POST["e3"];
    $f3 = $_POST["f3"];
    if ($f3 != "") {
        $f3 = number_format((float)$_POST["f3"], 2, ".", "");
    }
    $d4 = $_POST["d4"];
    $e4 = $_POST["e4"];
    $f4 = $_POST["f4"];
    if ($f4 != "" ) {
        $f4 = number_format((float)$_POST["f4"], 2, ".", "");
    }
    $d5 = $_POST["d5"];
    $e5 = $_POST["e5"];
    $f5 = $_POST["f5"];
    if ($f5 != "") {
        $f5 = number_format((float)$_POST["f5"], 2, ".", "");
    }
    $d6 = $_POST["d6"];
    $e6 = $_POST["e6"];
    $f6 = $_POST["f6"];
    if ($f6 != "") {
        $f6 = number_format((float)$_POST["f6"], 2, ".", "");
    }
    $f7 = number_format((float)$_POST["f7"], 2, ".", "");

    date_default_timezone_set('America/Chicago');
    $form_date = date('m/d/Y', time());
    $file_date = date('Ymd', time());
    $file_name = "$file_date-ABNForm-$ptname";

    use \setasign\Fpdi\Tcpdf\Fpdi;
    require_once('tcpdf/tcpdf.php');
    require_once('fpdi/src/autoload.php');
    $pdf = new Fpdi("p", "mm", "letter" );
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
    $pdf->SetAutoPageBreak(false, 0);
    $pageCount = $pdf->setSourceFile(__DIR__ . '/ABNEnglish_01312026_508-' . $whichform . '.pdf');
    for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
        $tplIdx = $pdf->importPage($pageNo);
        $size = $pdf->getTemplateSize($tplIdx);
        $width = $size['width'];
        $height = $size['height'];
        $pdf->AddPage($size['orientation'], $size);
        $pdf->useImportedPage($tplIdx);

        $pdf->AddFont("pdfacourier", "B");
        $pdf->SetFont("pdfacourier", "B", 12);
        // Info at top of form
        $pdf->setXY(50, 8.25);
        $pdf->Write(0, 'Losh Optometry LLC');
        $pdf->Ln();
        $pdf->setX(50);
        $pdf->Write(0, $ptname);
        $pdf->setX(157.5);
        $pdf->Write(0, $ptid);
        // Table data...
        $txtd = "$d1\n$d2\n$d3\n$d4\n$d5\n$d6\nTotal:";
        $txte = "$e1\n$e2\n$e3\n$e4\n$e5\n$e6\n";
        $txtf = "$f1\n$f2\n$f3\n$f4\n$f5\n$f6\n$$f7";
        $pdf->SetFont("pdfacourier", "B", 10);
        $pdf->SetFillColor(255, 255, 127);
        $pdf->MultiCell(75, 34, $txtd, 0, '', false, 1, 17.5, 66);
        $pdf->MultiCell(75, 34, $txte, 0, '', false, 1, 93, 66);
        $pdf->MultiCell(33, 34, $txtf, 0, 'R', false, 1, 168.5, 66);
        $pdf->SetFont("pdfacourier", "B", 12);
        $pdf->MultiCell(59.25, 0, $form_date, 0, '', false, 1, 130, 225);

    }
    ob_end_clean();
    $pdf->Output(__DIR__ . '/' . $file_name, 'I');
?>