<?php 
header("Content-Type:text/html;charset=utf-8"); 
require_once 'excel_reader2.php'; 
//�������� 
$data = new Spreadsheet_Excel_Reader(); 
//�����ı�������� 
$data->setOutputEncoding('UTF-8'); 
//��ȡExcel�ļ� 
$data->read("example.xls"); 
//$data->sheets[0]['numRows']ΪExcel���� 
for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) { 
//$data->sheets[0]['numCols']ΪExcel���� 
for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) { 
//��ʾÿ����Ԫ������ 
echo $data->sheets[0]['cells'][$i][$j].' ';
} 
echo '<br>'; 
} 
?> 