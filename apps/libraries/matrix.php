<?php
Namespace MiniMvc\Apps\Libraries;

class matrix
{
    /**
     * function membuat single matrix / membuat array satu dimensi dari columnnya
     * @author eka jaya nagara
     * @param array
     * @return array
     */
    public static function make_field_matrix($data = [], $fieldOrColumn = "")
    {
        // membuat single matrix dari colum atau fiels
        $new_nilai = [];
        foreach ($data as $siswa) {
            $new_nilai[] = $siswa[$fieldOrColumn];
        }
        return $new_nilai;
    }


    /**
     * function membuat matrix atau array multi dimensi baru dari original datanya next langsung buat normalisasi
     * @author eka jaya nagara
     * @param array and integer
     * @return array
     */
    public static function make_new_matrix($data = [], $total_column_or_baris_matrix ,$field = [])
    {
        // check kondisi
        if ($total_column_or_baris_matrix !== count($field)) {
            echo "jumlah column yang di inputkan tidak sama dengan jumlah nama column yang masukan";
            exit;
        }

        // membuat matrix baru
        $box_matrix = array();
        for ($i = 0; $i < $total_column_or_baris_matrix ; $i++) { 
            $box_matrix[$i] = self::make_field_matrix($data, $field[$i]);
        }

        return $box_matrix;
    }

    /**
     * function membuat flip matrix atau melaukan tranfrom array baris menjadi colum atau sebaliknya
     * @author eka jaya nagara
     * @param array and integer
     * @return array
     */
    public static function flip_matrix($array = [])
    {
        $hasil = array();
        foreach ($array as $key => $subarr)
        {
            foreach ($subarr as $subkey => $subvalue)
            {
                $hasil[$subkey][$key] = $subvalue;
            }
        }
        return $hasil;
    }
}