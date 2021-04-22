<?php
Namespace MiniMvc\Apps\Libraries;

// php office vendor lib
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * untuk menggunakan office yang ada disini silahkan panggil mengunakan nama namespacenya
 * lalu deklarasi sebuah object baru.
 * 
 * contoh :
 * use MiniMvc\Apps\Libraries\office;
 * 
 * $office = new office;
 * 
 * 
 */

class Office 
{
	/**
	 * membuat function example print to exel
	 * @author nagara
	 */
	public function example_phpspreadsheet()
	{
		// on development
		/**
		 * untuk melakukan print atau preview kepada php spreadsheet menggunakan HTML harus 
		 * melakukan technik web scrapping yang pasti pake metode
		 * algoritma yang lumayan lah jadi belum bisa gue buat.
		 */

		// $spreadsheet = new Spreadsheet();
		// $sheet = $spreadsheet->getActiveSheet();
		// $sheet->setCellValue('A1', 'Hello World !');

		// $writer = new Xlsx($spreadsheet);
		// $file = "myfile.xlsx";
		// header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		// header('Content-disposition: attachment; filename=' . $file);
		// header('Content-Length: ' . filesize($file));
		// ob_end_clean();
		// $writer->save('php://output');
		// exit();
	}


	/**
	 * membuat function example print to pdf
	 * @author nagara
	 */
	public function example_mpdf()
	{
		// on development
		/**
		 * untuk melakukan print atau preview kepada mpdf menggunakan HTML harus 
		 * melakukan technik web scrapping yang pasti pake metode
		 * algoritma yang lumayan lah jadi belum bisa gue buat.
		 */
	}
}