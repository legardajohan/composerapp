<?php

namespace Text; 

class Format {
    public static function upperText($value) {
        return strtoupper($value);
    }
    public static function lowerText($value) {
        return strtolower($value);
    }
    public static function mateCalc($value) {
        if ($value % 2 == 0) {
            return 'PAR';
        }else {
            return 'IMPAR';
        }
    }
}

?>