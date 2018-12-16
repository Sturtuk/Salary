<?php
namespace sturt\salary\controllers;


use Exception;

use thiagoalessio\TesseractOCR\TesseractOCR;

class SAController extends Controller
{

    /**
     * SAController constructor.
     */
    public function __construct()
    {

    }

    public static function CheckOCR_installed(){
        try {

          exec(self::escape("tesseract").' --version 2>&1', $output);

          if(self::strpos_arr("command not found",$output) === TRUE){
             return true;
          } else {
              return view('SA::install');
          }

        } catch (Exception $exception){
            return $exception->getMessage();
        }
    }

    public static function getBetween($string, $start = "", $end = ""){
        if (strpos($string, $start)) {
            $startCharCount = strpos($string, $start) + strlen($start);
            $firstSubStr = substr($string, $startCharCount, strlen($string));
            $endCharCount = strpos($firstSubStr, $end);
            if ($endCharCount == 0) {
                $endCharCount = strlen($firstSubStr);
            }
            return substr($firstSubStr, 0, $endCharCount);
        } else {
            return '';
        }
    }


    public static function getTestImage($file='edwin_salary_slip_june_2018_1.jpg'){

        $img = config('sa.FILE_PATH').$file;

        if(file_exists($img)) {

            if(self::CheckOCR_installed()) {
                $data = (new TesseractOCR($img))
                    ->lang(config('sa.OCR_LANG'))
                    ->run();

                $data = strtolower($data);

                $salary_patterns = config('sa.patterns');

                foreach ($salary_patterns as $p) {
                    $res = (self::getBetween($data, $p, " "));
                    $parts = preg_split('/\s+/', $res);
                    foreach ($parts as $p) {
                        $int[] = (int)filter_var($p, FILTER_SANITIZE_NUMBER_INT);
                    }
                    $output = array_values(array_filter($int));
                    foreach ($output as $a) {
                        if (strlen($a) > 5) {
                            $salaries[] = $a;
                        }
                        if (strlen($a) <= 5) {
                            $salaries[] = $a . "00";
                        }
                    }

                    if (is_array($salaries)) {

                        return [
                            'status'    =>  200,
                            'salary'    =>  self::convert_money($salaries[0]),
                        ];
                        exit;
                    }
                }
            }

        } else {

            return [
                'status'    =>  204,
                'file_not_found'    =>  $img ." Not found",
            ];
        }

    }

    public static  function convert_money($money = 100000){
        $out = substr($money,0,-2);
        return number_format($out,2);
    }

    public static function escape($str)
    {
        return '"'.str_replace('$', '\$', addcslashes($str, '\\"')).'"';
    }


    public static function strpos_arr($haystack, $needle)
    {
        if (!is_array($needle)) $needle = array($needle);
        foreach ($needle as $what) {
            if (($pos = strpos($haystack, $what)) !== false) return $pos;
        }
        return false;
    }
}