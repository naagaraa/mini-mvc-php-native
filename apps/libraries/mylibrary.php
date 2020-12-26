<?php

require 'vendor/autoload.php';

use MiniMvc\Core\Controller;

// php office vendor lib
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * Documentasi Code
 */

class Mylibrary extends Controller
{
	public function examplephpspreadsheet()
	{
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'Hello World !');

		$writer = new Xlsx($spreadsheet);
		$file = "myfile.xlsx";
		header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-disposition: attachment; filename=' . $file);
		header('Content-Length: ' . filesize($file));
		ob_end_clean();
		$writer->save('php://output');
		exit();
	}
}