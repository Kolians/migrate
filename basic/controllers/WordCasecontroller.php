<?php

namespace app\controllers;

use yii\web\Controller;


class WordCaseController extends Controller
{
    public $arr=['Именительный'=>'у', 
                'Именительный'=>'a', 
                'Родительный'=>'ы', 
                'Родительный'=>'a', 
                'Дательный'=>'е', 
                'Винительный'=>'у', 
                'Винительный'=>'ю', 
                'Творителльный'=>'ой', 
                'Творителльный'=>'ёй', 
                'Предложный'=>'e', 
    ]; 

    public function actionCase($word){ 

        $str = substr(trim($word),-1); 

        foreach ($this->arr as $key => $value) { 
            if ($str == $value){ 
                return $key; 
            }else return 'не определн падеж'; 
            return $this->render('case');
        }
    }
}