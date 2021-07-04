<?php

Namespace MiniMvc\Apps\Libraries;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\IReader;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * ===============================================================================================
 * Documentasi Code
 * @author nagara 
 * ===============================================================================================
 * 
 * untuk menggunakan office libraries yang ada disini silahkan panggil mengunakan nama namespacenya
 * lalu deklarasi sebuah object baru.
 * 
 * contoh :
 * use MiniMvc\Apps\Libraries\office;
 * 
 * $office = new office;
 * $office->read_file_csv();
 * 
 * atau 
 * 
 * office::read_file_csv()
 * 
 */

class office 
{

    /**
	 * read file csv xlsx
	 * @author nagara 
     * @return object
     * @return array
	 */
    public function read_file_csv($namefiles = "")
    {
          
        // convert data to object
        $file = json_decode(json_encode($_FILES[$namefiles]));
        $old_name = explode(".", $file->name);
        $extension = end($old_name);

        // kasih permision pada filenya
        chmod($file->tmp_name, 0777);

        // Identify the type of $inputFileName  
        $inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file->tmp_name);

        // Create a new Reader of the type that has been identified  
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
  
        // config
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($file->tmp_name);

        // get info dari worksheet
        $worksheetData = $reader->listWorksheetInfo($file->tmp_name);
        $data = [
            "worksheet_name" => $file->name,
            "worksheet_type" => $file->type,
            "worksheet_size" => $file->size,
            "worksheet_error" => $file->error,
            "worksheet_tmp_name" => $file->tmp_name,
            "last_column_letter" => $worksheetData[0]["lastColumnLetter"],
            "last_column_index" => $worksheetData[0]["lastColumnIndex"],
            "total_rows" => $worksheetData[0]["totalRows"],
            "total_columns" => $worksheetData[0]["totalColumns"],
            "worksheet" => array(),
        ];

        foreach ($worksheetData  as $worksheet) {
            // $reader->setLoadSheetsOnly($sheetName);
            $spreadsheet = $reader->load($file->tmp_name);
            $worksheet = $spreadsheet->getActiveSheet();
            $sheetData = $worksheet->toArray();

            // save data ke array
            $data["worksheet"] = $sheetData;
        
        }
        // convert array to object
        $object = json_decode(json_encode($data));

        // index 0 adalah nama columnnya
        return $object;
            
    }

    public function read_file_pdf()
    {
        // under development
    }
}