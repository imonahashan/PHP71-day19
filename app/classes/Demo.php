<?php
namespace App\classes;

class Demo
{
    function wordCharacterCount($data){
        $stringLength = strlen($data['given_string']);
        $wordLength = str_word_count($data['given_string']);

        $res = [
            'stringLength' => $stringLength,
            'wordLength' => $wordLength,
        ];
       return $res;
    }
}