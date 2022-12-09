<?php
    include_once 'connect_sqlserver.php';
    include_once('Classes/PHPExcel.php');

if(isset($_POST['btnExport'])){
    $objExcel = new PHPExcel;
    $objExcel->setActiveSheetIndex(0);
    $sheet = $objExcel ->getActiveSheet()->setTitle('2011');
    $rowCount = 1;
    $sheet->setCellValue('A'.$rowCount, 'STT');
    $sheet->setCellValue('B'.$rowCount, 'Tên người dùng');
    $sheet->setCellValue('C'.$rowCount, 'Tên đăng nhập');
    $sheet->setCellValue('D'.$rowCount, 'Email');
    $sheet->setCellValue('E'.$rowCount, 'Số điện thoại');
    $sheet->setCellValue('F'.$rowCount, 'Vai trò');

    $sql = "SELECT * FROM dbo.Users";
    $query = $conn->query( $sql );
    while($row = $query->fetch( PDO::FETCH_ASSOC)){
        $rowCount++;
        $sheet->setCellValue('A'.$rowCount, $row['id']);
        $sheet->setCellValue('B'.$rowCount, $row['nameUser']);
        $sheet->setCellValue('C'.$rowCount, $row['username']);
        $sheet->setCellValue('D'.$rowCount, $row['email']);
        $sheet->setCellValue('E'.$rowCount, $row['phone']);
        $sheet->setCellValue('F'.$rowCount, $row['role']);
    }

    /*$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
    
    $filename = 'export.pdf';
    $objWriter->save($filename);*/
    
    $objWriter = PHPExcel_IOFactory::createWriter($objExcel, 'Excel5');

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="DanhSachUser.xls"');
    header('Cache-Control: max-age=0');
    if (isset($objWriter)) {
        $objWriter->save('php://output');
    }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
    <form method="POST">
        <button type="submit" name="btnExport">Export file</button>
    </form>

</body>
</html>